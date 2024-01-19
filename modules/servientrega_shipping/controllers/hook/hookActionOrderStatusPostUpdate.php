<?php

/**
 * 2007-2019 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2019 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
class servientrega_shippinghookActionOrderStatusPostUpdateController
{
    public function __construct($module, $file, $path)
    {
        require_once dirname($file) . '/classes/Functions.php';

        $this->file = $file;
        $this->module = $module;
        $this->context = Context::getContext();
        $this->_path = $path;
    }

    /**
     * Set values for the inputs.
     */
    public function run($params)
    {
        $status = Configuration::get('SERVI_STATUS');
        $newStatus = $params['newOrderStatus'];
        $id_carrier = Configuration::get('VEX_SERVIENTREGA_CARRIER_ID');
        $order_id = $params['id_order'];
        $order = new Order($order_id);
        $cart = new Cart($order->id_cart);

        $carrier = new Carrier($id_carrier);
        if ($carrier->name == "Servientrega") {
            $order_servi = Db::getInstance()->getRow(
                'SELECT * FROM ' . _DB_PREFIX_ . 'order_servientrega  WHERE id_order =' . $order_id
            );


            $content = "";

            $width = 0;
            $height = 0;
            $depth = 0;

            foreach ($order->getProducts() as $product) {
                $content .= $product['product_name'] . " ";
                $width += $product['width'];
                $height += $product['height'];
                $depth += $product['depth'];
            }

            $address = new Address($order->id_address_delivery);
            $id = $order->id_cart;
            $city = Configuration::get("serviEntregaCity_{$id}");
            $name = $address->firstname . ' ' . $address->lastname;
            $customer = new Customer($order->id_customer);
            $totals = $cart->getOrderTotal(true);

            if (!$order_servi) {
                $order_servi = [
                    'id_order' => $order_id,
                    'pedido' => $name,
                    'fecha' => date('Y-m-d'),
                    'estado' => 0,
                    'city' => $city,
                    'total' => $order->total_shipping,
                    'id_order_servientrega' => '',
                ];
                Db::getInstance()->insert('order_servientrega', $order_servi);
            }

            if ($order_servi['estado'] == '' || $order_servi['estado'] == '0') {
                if ((int) $status == $newStatus->id) {
                    $data = [
                        "id_tipo_logistica" => 1,
                        "detalle_envio_1" => "",
                        "detalle_envio_2" => "",
                        "detalle_envio_3" => "",
                        "id_ciudad_origen" => Configuration::get("SERVI_CITY", "false"),
                        "id_ciudad_destino" => $city,
                        "id_destinatario_ne_cl" => $customer->id,
                        "razon_social_desti_ne" => $customer->company != null ? $customer->company : Configuration::get('SERVI_RAZON_SOCIAL'),
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
                        $dir =  $this->module->getFile() . '/views/stickers/';
                        if ($pdf['mensaje'] == 'LA GUÍA FUE GENERADA CORRECTAMENTE') {
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
                                $status = true;
                                Configuration::deleteByName("serviEntrega_erros_{$id}");
                                Configuration::deleteByName("serviEntregaCity_{$id}");

                            } else {
                                $update = [
                                    'id_order_servientrega' => (int) $serviOrder['id'],
                                    'estado' => 0,
                                    'razon' => "Error de permisos al guardar la guia",
                                ];
                                Configuration::updateValue("serviEntrega_erros_{$id}", 'Error de permisos al guardar la guia');
                            }

                        }else{
                            $update = [
                                'id_order_servientrega' => (int) $serviOrder['id'],
                                'estado' => 0,
                                'razon' => $pdf['mensaje']
                            ];
                            Configuration::updateValue("serviEntrega_erros_{$id}", $pdf['mensaje']);
                        }
                    } else {
                        $update = [
                            'id_order_servientrega' => 0,
                            'estado' => 0,
                            'razon' => $serviOrder['msj'],
                        ];
                        Configuration::updateValue("serviEntrega_erros_{$id}",  $serviOrder['msj']);
                    }



                    Db::getInstance()->update('order_servientrega', $update, "id_order = $order_id");
                }
            }
        }
    }
}
