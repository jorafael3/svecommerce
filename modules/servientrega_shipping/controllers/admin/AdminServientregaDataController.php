<?php

/**
 * 2010-2020 Webkul.
 *
 * NOTICE OF LICENSE
 *
 * All right is reserved,
 * Please go through this link for complete license : https://store.webkul.com/license.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
 *
 *  @author    Webkul IN <support@webkul.com>
 *  @copyright 2010-2020 Webkul IN
 *  @license   https://store.webkul.com/license.html
 */

require_once dirname(__FILE__) . '/../../classes/Functions.php';

class AdminServientregaDataController extends ModuleAdminController
{
    public function __construct()
    {
        $this->context = Context::getContext();
        $this->ajax = true;
        parent::__construct();
    }


    public function postProcess()
    {
        parent::postProcess();
        if (Tools::getValue("action") == "getGuiaServi") {
            $order_id = Tools::getValue("order_id");
            $order = new Order($order_id);
            $cart = new Cart($order->id_cart);

            $order_servi = Db::getInstance()->getRow(
                'SELECT * FROM ' . _DB_PREFIX_ . 'order_servientrega  WHERE id_order =' . $order_id
            );

            if (isset($order_servi['estado'])) {
                if($order_servi['estado'] == 1){
                    die(json_encode($order_servi));
                }
            }

            $address = new Address($order->id_address_delivery);
            $id = $order->id_cart;
            $city = Configuration::get("serviEntregaCity_{$id}");
            $customer = new Customer($order->id_customer);
            $totals = $cart->getOrderTotal(true);

            $width = 0;
            $height = 0;
            $depth = 0;
            $content = '';

            foreach ($order->getProducts() as $product) {
                $content .= $product['product_name'] . " ";
                $width += $product['width'];
                $height += $product['height'];
                $depth += $product['depth'];
            }

            $data = [
                "id_tipo_logistica" => 1,
                "detalle_envio_1" => "",
                "detalle_envio_2" => "",
                "detalle_envio_3" => "",
                "id_ciudad_origen" => Configuration::get("SERVI_CITY", "false"),
                "id_ciudad_destino" => $city,
                "id_destinatario_ne_cl" => $customer->id,
                "razon_social_desti_ne" =>  $customer->company != null ? $customer->company : Configuration::get('SERVI_RAZON_SOCIAL'),
                "nombre_destinatario_ne" => $customer->firstname,
                "apellido_destinatar_ne" => $customer->lastname,
                "direccion1_destinat_ne" => $address->address1,
                "sector_destinat_ne" => "",
                "telefono1_destinat_ne" => $address->phone,
                "telefono2_destinat_ne" => $address->phone_mobile,
                "codigo_postal_dest_ne" => $address->postcode,
                "id_remitente_cl" => Configuration::get('SERVI_ID_REMITENTE'),
                "razon_social_remite" => Configuration::get('SERVI_RAZON_SOCIAL'),
                "nombre_remitente" => Configuration::get('SERVI_NAME'),
                "apellido_remite" => Configuration::get('SERVI_LASTNAME'),
                "direccion1_remite" => Configuration::get('SERVI_ADDRESS'),
                "sector_remite" => "",
                "telefono1_remite" => Configuration::get('SERVI_PHONE'),
                "telefono2_remite" => "",
                "codigo_postal_remi" => "",
                "id_producto" => Configuration::get('SERVI_TYPE', 2),
                "contenido" => $content,
                "numero_piezas" => count($order->getProducts()),
                "valor_mercancia" => $totals,
                "valor_asegurado" => 0,
                "largo" => $height,
                "ancho" => $width,
                "alto" => $depth,
                "peso_fisico" => $order->getTotalWeight() >= 1 ? $order->getTotalWeight() : 1,
                "login_creacion" => Configuration::get("SERVI_USER"),
                "password" => Configuration::get("SERVI_PASS")
            ];

            $serviOrder = Functions::post_generate_guia_pe($data);

            $update = [];


            if ($serviOrder['msj'] == 'GUÍA REGISTRADA CORRECTAMENTE') {
                $pdf = Functions::get_generate_guia_ec(Configuration::get("SERVI_USER"), Configuration::get("SERVI_PASS"), $serviOrder['id']);
                $guide_number = 'servientrega_guia_' . $serviOrder['id'];

                if ($pdf['mensaje'] == 'LA GUÍA FUE GENERADA CORRECTAMENTE') {
                    $dir =  $this->module->getFile() . '/views/stickers/';
                    if (!is_dir($dir)) {
                        mkdir($dir, 0755);
                    }

                    if ($id_order_carrier = $order->getIdOrderCarrier()) {
                        $order_carrier = new OrderCarrier($id_order_carrier);
                        $order_carrier->tracking_number = $serviOrder['id'];
                        $order_carrier->update();
                    }

                    $sticker_file = file_put_contents("{$dir}$guide_number.pdf", base64_decode($pdf['archivoEncriptado']));
                    if ($sticker_file) {
                        $update = [
                            'id_order_servientrega' => (int) $serviOrder['id'],
                            'estado' => 1,
                            'razon' => $pdf['mensaje'],
                            'rastreoEnvio' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . $this->module->name . '/views/stickers/' . $guide_number . '.pdf',
                        ];
                        Configuration::deleteByName("serviEntrega_erros_{$id}");
                        Configuration::deleteByName("serviEntregaCity_{$id}");
                    } else {
                        $update = [
                            'id_order_servientrega' => (int) $serviOrder['id'],
                            'estado' => 0,
                            'razon' => "Error al guardar la Guia"
                        ];
                    }
                } else {
                    $update = [
                        'id_order_servientrega' => (int)$serviOrder['id'],
                        'estado' => 0,
                        'razon' => $pdf['mensaje']
                    ];
                }
            } else {
                $update = [
                    'id_order_servientrega' => 0,
                    'estado' => 0,
                    'razon' => isset($serviOrder['msj']) ?  $serviOrder['msj'] : json_encode($serviOrder),
                ];
            }
            Db::getInstance()->update('order_servientrega', $update, "id_order = $order_id");
            die(json_encode($update));
        }
    }
}
