<?php

/**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable tohookDisplayOrderDetail
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


class servientrega_shippinghookDisplayOrderDetailController
{
    public function __construct($module, $file, $path)
    {
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
        $id_carrier = Configuration::get('VEX_SERVIENTREGA_CARRIER_ID');
        $order = $params['order'];
        // if($id_carrier == $order->id_carrier){
        //     $order_servi = Db::getInstance()->getRow(
        //         'SELECT * FROM '._DB_PREFIX_.'order_servientrega  WHERE id_order ='. $order->id);
        //     if($order_servi){
        //         if($order_servi['rastreoEnvio'] != '' && $order_servi['rastreoEnvio'] != '0'){
        //             $data = Cotizar::get_traking_data_pe($order_servi['rastreoEnvio']);
        //             // var_dump($data);
        //             if($data['status']){
        //                 $data->response->InfoMovGuia;
        //                 $this->context->smarty->assign(
        //                     array(
        //                         'data'          => $data['response']
        //                     )
        //                 );
        //             }
                   
                    
        //         }
        //     }
        //     return $this->module->display($this->file, 'views/templates/hook/order_datail.tpl');
        // }

    }
}
