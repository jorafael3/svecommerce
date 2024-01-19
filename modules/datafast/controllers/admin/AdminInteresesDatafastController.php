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

class AdminInteresesDatafastController extends ModuleAdminController
{
    private $_name_controller = 'datafast';
    public function __construct()
    {
        parent::__construct();
        // require_once dirname($this->module->path) . '/classes/class-curl.php';

        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->red_url = 'index.php?controller=AdminModules&configure=' . $this->_name_controller . '&token=' . Tools::getAdminTokenLite('AdminModules');
        $id_lang = Configuration::get('PS_LANG_DEFAULT'); // buscamos el l idioma
        $shops = Shop::getShops($active = true, $id_shop_group = null, $get_as_list_id = false); // vemos las tiendas que tiene el prestashop
    }

    public function initContent()
    {
        parent::initContent();
        $tasas = json_decode(Configuration::get('DATAFAST_INTERES', null, null, null, "[]"), true);
        $bancks = json_decode(Configuration::get('DATAFAST_BANCOS_BASE', null, null, null, "[]"));
        $this->context->smarty->assign(array(
            "tasas" => $tasas,
            "bancks" => $bancks,
        ));

        $this->setTemplate($this->module->template_dir . '/views/templates/admin/interesConfig.tpl');
    }

    /**
     * Save form data.
     */
    public function postProcess()
    {
        if (Tools::isSubmit("submitDatafastInteres")) {
            $bancos = [];
            if ($data = Tools::getValue("bancos")) {
                foreach ($data as $key => $back) {
                    if (array_key_exists('DATAFAST_SINTERES', $back)) {
                        $bancos[$key]['sin_interes'] = 'on';
                    }

                    foreach ($back as $k => $tasas) {
                        if (array_key_exists($k, $back['tasas'])) {
                            $bancos[$key][$k] = array_filter($back['tasas'][$k]);
                        }
                    }
                }
                Configuration::updateValue('DATAFAST_INTERES', json_encode($bancos));
            }
        }
    }
}
