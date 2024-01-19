<?php

/**
 * 2007-2015 PrestaShop
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
 *  @author    Snegurka <site@web-esse.ru>
 *  @copyright 2007-2018 Snegurka WS
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class AdminDeleteOrderDatafastController extends ModuleAdminController
{
    private $_name_controller = 'datafast';
    public $debug_mode = false;
    public $log_file = "";

    public function __construct()
    {
        parent::__construct();
        // require_once dirname($this->module->path) . '/classes/class-curl.php';

        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->debug_mode = Configuration::get('VEX_DATAFAST_DEBUG');
        $this->log_file = $this->module->getLocalPath() . "log.txt";
        $this->red_url = 'index.php?controller=AdminModules&configure=' . $this->_name_controller . '&token=' . Tools::getAdminTokenLite('AdminModules');
        $id_lang = Configuration::get('PS_LANG_DEFAULT'); // buscamos el l idioma
        $shops = Shop::getShops($active = true, $id_shop_group = null, $get_as_list_id = false); // vemos las tiendas que tiene el prestashop
    }

    public function initContent()
    {
        parent::initContent();

        if(Tools::isSubmit("submitDatafastDelete")){
            if(Tools::getValue("orderNumber") && Tools::getValue("orderAmount")){
                $data = $this->deleteOrder(Tools::getValue("orderNumber"), Tools::getValue("orderAmount"));
                $this->log("RESPONSE REQUEST REFUND" . json_encode($data));
                $description = $data['result']['description'];
                $this->context->smarty->assign('description', $description);
            }
        }
        $this->setTemplate($this->module->template_dir.'/views/templates/admin/delete.tpl');
    }

    private function deleteOrder($id, $amount)
    {
        $entityId = Configuration::get('VEX_DATAFAST_ENTITYID');
        // @todo: update production endpoint
        $bearer = Configuration::get('VEX_DATAFAST_BEARER');
        $data = "entityId={$entityId}";
        $data .= "&paymentType=RF" . 
                    "&amount={$amount}" . 
                    "&currency=USD" ;

        if (Configuration::get('VEX_DATAFAST_ENVIRONMENT') == '1')
            $base_url = "https://eu-prod.oppwa.com";
        else{
            $data .= "&testMode=EXTERNAL";
            $base_url = "https://eu-test.oppwa.com";

        }


        $url = $base_url . "/v1/payments/{$id}";
       
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization:Bearer ' . $bearer));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, Configuration::get('VEX_DATAFAST_ENVIRONMENT') == '1' ? true : false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        }

        curl_close($ch);

        return json_decode($responseData, true);
    }

    private function log($string)
    {
        if ($this->debug_mode) {
            file_put_contents($this->log_file, date('Y-m-d H:i:s') . " - " . $string . "\n", FILE_APPEND | LOCK_EX);
        }
    }
}