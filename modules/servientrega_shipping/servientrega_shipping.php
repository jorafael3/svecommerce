<?php

/**
 * 2007-2020 PrestaShop.
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
 *  @copyright 2007-2020 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

require_once dirname(__FILE__) . '/classes/Functions.php';

class Servientrega_shipping extends CarrierModule
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'servientrega_shipping';
        $this->tab = 'shipping_logistics';
        $this->version = '1.0.0';
        $this->author = 'lrobles';
        $this->need_instance = 1;

        /*
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Vex Servientrega Shipping');
        $this->description = $this->l('modulo para envíos con servientrega');

        $this->confirmUninstall = $this->l('Deseas Desinstalar este modulo?');

        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update.
     */
    public function install()
    {
        if (extension_loaded('curl') == false) {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }
        $this->callInstallTab();

        $carrier = $this->addCarrier();
        $this->addZones($carrier);
        $this->addGroups($carrier);
        $this->addRanges($carrier);

        Configuration::updateValue('SERVI_TESTMODE', '1');
        Configuration::updateValue('SERVI_ENABLE', '1');
        Configuration::updateValue('SERVI_ID_REMITENTE', time("now"));

        include dirname(__FILE__) . '/sql/install.php';

        return parent::install() &&
            $this->registerHook('displayCarrierExtraContent') &&
            $this->registerHook('displayAdminOrder') &&
            $this->registerHook('header') &&
            $this->registerHook('displayOrderDetail') &&
            $this->registerHook('actionOrderStatusPostUpdate') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('updateCarrier');
    }

    public function uninstall()
    {
        $this->deleteCarriers();
        Configuration::deleteByName('VEX_SERVIENTREGA_ACTIVATED');
        $this->uninstallTab();
        include dirname(__FILE__) . '/sql/uninstall.php';

        return parent::uninstall();
    }

    protected function deleteCarriers()
    {
        $tmp_carrier_id = Configuration::get('VEX_SERVIENTREGA_CARRIER_ID');
        $carrier = new Carrier($tmp_carrier_id);
        $carrier->deleted = 1;
        try {
            $carrier->save();
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Load the configuration form.
     */
    public function getContent()
    {
        /*
         * If values have been submitted in the form, process.
         */
        $this->registerHook('displayAdminOrder') ;

        if (((bool) Tools::isSubmit('submitServientrega_shippingModule')) == true) {
            $this->postProcess();
        }

        return $this->renderForm();
    }

    public function getHookController($hook_name)
    {
        // Include the controller file
        require_once dirname(__FILE__) . '/controllers/hook/' . $hook_name . '.php';

        // Build dynamically the controller name
        $controller_name = $this->name . $hook_name . 'Controller';

        // Instantiate controller
        $controller = new $controller_name($this, __FILE__, $this->_path);
        // Return the controller
        return $controller;
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitServientrega_shippingModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFormValues(), // Add values for your inputs
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        ];

        return $helper->generateForm($this->getConfigForm());
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        $link = $this->context->link->getAdminLink('AdminCarrierWizard', true, [], ['id_carrier' => Configuration::get('VEX_SERVIENTREGA_CARRIER_ID')]);
        $testmode_form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('General'),
                    'icon' => 'icon-wrench',
                ],
                'input' => [
                    [
                        'type' => 'switch',
                        'label' => $this->l('Activar'),
                        'name' => 'SERVI_ENABLE',
                        'is_bool' => true,
                        'desc' => $this->l('Activar y desactivar Servientrega plugin.'),
                        'values' => [
                            [
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Si'),
                            ],
                            [
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No'),
                            ],
                        ],
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Modo Pruebas'),
                        'name' => 'SERVI_TESTMODE',
                        'is_bool' => true,
                        'desc' => $this->l('Activar modo de pruebas'),
                        'values' => [
                            [
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Si'),
                            ],
                            [
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No'),
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Razon social'),
                        'name' => 'SERVI_RAZON_SOCIAL',
                        'desc' => $this->l('Nombre de la empresa del remitente.'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Nombre del remitente'),
                        'name' => 'SERVI_NAME',
                        'desc' => $this->l('Persona de contacto.'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Apellido del remitente'),
                        'name' => 'SERVI_LASTNAME',
                        'desc' => $this->l('Apellido de contacto.'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Dirección del remitente'),
                        'name' => 'SERVI_ADDRESS',
                        'desc' => $this->l('Dirección principal del remitente'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Telefono.'),
                        'name' => 'SERVI_PHONE',
                        'desc' => $this->l('Telefono del remitente'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    
                ],
                'submit' => [
                    'title' => $this->l('Guardar'),
                ],
            ],
        ];

        

        $picking_history = [
            ['id' => 'free', 'value' => '1', 'label' => 'Gratis'],
            // ['id' => 'cost', 'value' => '2', 'label' => 'Presio calculado por Servientrega'],
            ['id' => 'fijo', 'value' => '3', 'label' => 'Precio Fijo'],
            ['id' => 'fijo', 'value' => '4', 'label' => 'Precio segun las reglas de PrestaShop'],
        ];

        $testmode_form_s = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Api servientrega'),
                    'icon' => 'icon-wrench',
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('Usuario'),
                        'name' => 'SERVI_USER',
                        'desc' => $this->l('Usuario de acceso proporcionado por servientrega'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Contraseña'),
                        'name' => 'SERVI_PASS',
                        'desc' => $this->l('Contraseña de acceso proporcionado por servientrega'),
                        'col' => 3,
                        'class' => 'col-lg-6',
                    ],
                    [
                        'type' => 'select',
                        'label' => $this->l('Tipo de envio'),
                        'name' => 'SERVI_TYPE',
                        'desc' => $this->l('Selecciona el tipo de producto a enviar.'),
                        'options' => [
                            'query' => [
                                [
                                    "id" => 1,
                                    "name" => "DOCUMENTO UNITARIO"
                                ],
                                [
                                    "id" => 2,
                                    "name" => "MERCANCIA PREMIER"
                                ],
                                [
                                    "id" => 3,
                                    "name" => "DOCUMENTO MASIVO"
                                ],
                                [
                                    "id" => 6,
                                    "name" => "MERCANCIA INDUSTRIAL"
                                ],
                                [
                                    "id" => 8,
                                    "name" => "VALIJA EMPRESARIAL"
                                ],
                            ],
                            'id' => 'id',
                            'name' => 'name',
                        ],
                    ],
                     [
                        'type' => 'select',
                        'label' => $this->l('Estado de la orden'),
                        'name' => 'SERVI_STATUS',
                        'desc' => $this->l('Elige que estado deben tener las ordenes para crear la guia de servientrega.'),
                        'options' => [
                            'query' => $this->getStatuses(),
                            'id' => 'id',
                            'name' => 'name',
                        ],
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Guardar'),
                ],
            ],
        ];

        $price_form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Configuración de Precios'),
                    'icon' => 'icon-wrench',
                ],
                'input' => [
                    [
                        'type' => 'radio',
                        'label' => $this->l('Elija la opcion que prefiera.'),
                        'name' => 'SERVI_PRICE',
                        'desc' => 'Puede modificar las reglas de este metodo de envio ' . "<a href='" . $link . "'>aqui</a>",
                        'values' => $picking_history,
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Monto Fijo'),
                        'name' => 'SERVI_PRICE_FIJO',
                        'col' => 5,
                        'class' => 'col-lg-5',
                    ],
                ],

                'submit' => ['title' => $this->l('Guardar')],
            ],
        ];

        if (Configuration::get("SERVI_PASS") && Configuration::get("SERVI_USER")) {

            $citys = Functions::getDataCitysEc(Configuration::get("SERVI_USER"), Configuration::get("SERVI_PASS"));
            if (count($citys) > 1) {
                $testmode_form_s['form']['input'][] = [
                    'type' => 'select',
                    'label' => $this->l('Ciudad de origen'),
                    'class' => 'col-lg-8',
                    'col' => 8,
                    'name' => 'SERVI_CITY',
                    'desc' => $this->l('Eligue de origen de servientrega.'),
                    'options' => [
                        'query' => $citys,
                        'id' => 'id',
                        'name' => 'nombre',
                    ],
                ];
            }else{
                $this->context->controller->errors[] = $citys[0]['nombre'];

            }

            Configuration::updateValue("CITYS_SERVIENTREGA", json_encode($citys));
        }
        return [$testmode_form, $testmode_form_s, $price_form];
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return [
            'SERVI_ENABLE' => Configuration::get('SERVI_ENABLE', true),
            'SERVI_TESTMODE' => Configuration::get('SERVI_TESTMODE', null),
            'SERVI_PRICE' => Configuration::get('SERVI_PRICE', null),
            'SERVI_PRICE_FIJO' => Configuration::get('SERVI_PRICE_FIJO', null),
            'SERVI_PASS' => Configuration::get('SERVI_PASS', null),
            'SERVI_TYPE' => Configuration::get('SERVI_TYPE', null),
            'SERVI_USER' => Configuration::get('SERVI_USER', null),
            'SERVI_CITY' => Configuration::get('SERVI_CITY', null),
            'SERVI_STATUS' => Configuration::get('SERVI_STATUS', null),
            'SERVI_RAZON_SOCIAL' => Configuration::get('SERVI_RAZON_SOCIAL', null),
            'SERVI_NAME' => Configuration::get('SERVI_NAME', null),
            'SERVI_LASTNAME' => Configuration::get('SERVI_LASTNAME', null),
            'SERVI_NAME' => Configuration::get('SERVI_NAME', null),
            'SERVI_ADDRESS' => Configuration::get('SERVI_ADDRESS', null),
            'SERVI_PHONE' => Configuration::get('SERVI_PHONE', null),
        ];
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    private function getStatuses()
    {
        $statuses = OrderState::getOrderStates((int) $this->context->language->id);
        $list_status = [];
        foreach ($statuses as $status) {
            $list_ = [
                'id' => $status['id_order_state'],
                'name' => $status['name'],
            ];
            array_push($list_status, $list_);
        }

        return $list_status;
    }

    public function getOrderShippingCost($params, $shipping_cost)
    {
        $id = $this->context->cart->id;
        $city = Configuration::get("serviEntregaCity_{$id}", null);

        $id_address_delivery = Context::getContext()->cart->id_address_delivery;
        $address = new Address($id_address_delivery);
        $costoC = Configuration::get('SERVI_PRICE');
        if ($costoC == 1) {
            return 0;
        } elseif ($costoC == 2) {
            return $shipping_cost;
        } elseif ($costoC == 4) {
            return $shipping_cost;
        } elseif ($costoC == 3) {
            return Configuration::get('SERVI_PRICE_FIJO');
        }
        /*
         * Send the details through the API
         * Return the price sent by the API
         */

        return $shipping_cost;
    }

    public function getOrderShippingCostExternal($params)
    {
        return true;
    }

    protected function addCarrier()
    {
        $carrier = new Carrier();

        $carrier->name = $this->l('Servientrega');
        $carrier->is_module = true;
        $carrier->active = 1;
        $carrier->range_behavior = 1;
        $carrier->need_range = 1;
        $carrier->shipping_external = true;
        $carrier->range_behavior = 0;
        $carrier->external_module_name = $this->name;
        $carrier->shipping_method = 2;

        foreach (Language::getLanguages() as $lang) {
            $carrier->delay[$lang['id_lang']] = $this->l('Centro de Soluciones Logísticas');
        }

        if ($carrier->add() == true) {
            @copy(dirname(__FILE__) . '/views/img/logo.jpg', _PS_SHIP_IMG_DIR_ . '/' . (int) $carrier->id . '.jpg');
            Configuration::updateValue('VEX_SERVIENTREGA_CARRIER_ID', (int) $carrier->id);

            return $carrier;
        }

        return false;
    }

    protected function addGroups($carrier)
    {
        $groups_ids = [];
        $groups = Group::getGroups(Context::getContext()->language->id);
        foreach ($groups as $group) {
            $groups_ids[] = $group['id_group'];
        }

        $carrier->setGroups($groups_ids);
    }

    protected function addRanges($carrier)
    {
        $range_price = new RangePrice();
        $range_price->id_carrier = $carrier->id;
        $range_price->delimiter1 = '0';
        $range_price->delimiter2 = '10000';
        $range_price->add();

        $range_weight = new RangeWeight();
        $range_weight->id_carrier = $carrier->id;
        $range_weight->delimiter1 = '0';
        $range_weight->delimiter2 = '10000';
        $range_weight->add();
    }

    protected function addZones($carrier)
    {
        $zones = Zone::getZones();

        foreach ($zones as $zone) {
            $carrier->addZone($zone['id_zone']);
        }
    }

    public function installTab($className, $tabName, $tabParentName = false)
    {
        // Create instance of Tab class
        $tab = new Tab();
        $tab->name = [];
        $tab->class_name = $className;
        $tab->active = 1;
        // Set tab name for all installed languages
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $tabName;
        }

        // Set parent tab ID
        if ($tabParentName) {
            $tab->id_parent = (int) Tab::getIdFromClassName($tabParentName);
        } else {
            $tab->id_parent = 0;
        }

        if ($className == 'AdminServientregaList') {
            $tab->icon = 'local_shipping';
        }

        if ($className == 'AdminServientregaConfigModule') {
            $tab->icon = 'settings';
        }

        // Assing module name
        $tab->module = $this->name;

        return $tab->add();
    }

    /**
     * Create admin tabs.
     */
    public function callInstallTab()
    {
        // Parent hidden class
        $this->installTab('AdminVexServientregaShipping', 'Servientrega');
        // Main Tab
        $this->installTab('AdminServientregaConfigModule', 'Configuración', 'AdminVexServientregaShipping');
        // Manage Subscribed Products Tab
        $this->installTab('AdminServientregaList', 'Envíos', 'AdminVexServientregaShipping');

        return true;
    }

    /**
     * Uninstall admin tabs.
     *
     * @return bool
     */
    public function uninstallTab()
    {
        $moduleTabs = Tab::getCollectionFromModule($this->name);
        if (!empty($moduleTabs)) {
            foreach ($moduleTabs as $moduleTab) {
                $moduleTab->delete();
            }
        }

        return true;
    }

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookBackOfficeHeader()
    {
        $this->context->controller->addJS($this->_path . 'views/js/back.js');
        $this->context->controller->addCSS($this->_path . 'views/css/back.css');

        $this->context->controller->addCSS($this->_path . 'views/js/admin/jquery.timepicker.min.css');
        $this->context->controller->addJS($this->_path . 'views/js/admin/jquery.timepicker.min.js');
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . 'views/js/front.js');

        $this->context->controller->addCSS($this->_path . 'views/css/front.css');
        // $this->context->controller->addJquery();
        $this->context->controller->registerJavascript(
            'jQuery',
            'https://code.jquery.com/jquery-3.5.1.min.js',
            [
                'priority' => 10,
                'position' => 'head',
                'server' => 'remote',
            ]
        );

        $this->context->controller->registerStylesheet(
            'select2_css',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
            [
                'priority' => 11,
                'position' => 'head',
                'server' => 'remote',
            ]
        );

        $this->context->controller->registerJavascript(
            'select2-js',
            'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
            [
                'priority' => 12,
                'position' => 'bottom',
                'server' => 'remote',
            ]
        );
    }

    public function hookUpdateCarrier($params)
    {
        /*
         * Not needed since 1.5
         * You can identify the carrier by the id_reference
        */
    }

    public function hookDisplayOrderDetail($params)
    {
        $controller = $this->getHookController('hookDisplayOrderDetail');

        return $controller->run($params);
    }

    public function hookDisplayCarrierExtraContent($params)
    {
        $controller = $this->getHookController('hookDisplayCarrierExtraContent');
        return $controller->run($params);
    }

    public function hookDisplayAdminOrder($params)
    {
        $order_id = $params['id_order'];
        $order = new Order($order_id);
        $id_carrier = Configuration::get('VEX_SERVIENTREGA_CARRIER_ID');
        $carrier = new Carrier($id_carrier);
        if ($carrier->name == "Servientrega") {
            $id = $order->id_cart;
            $erros = Configuration::get("serviEntrega_erros_{$id}", false);
            $status = true;
            
            if($erros || $erros == ''){
                $this->context->controller->errors[] = $erros;
                $status = false;    
            }

            Media::addJsDef(array(
                "status_servientrega" => $status,
                "adminajax_link_servientrega" => $this->context->link->getAdminLink('AdminServientregaData')
            ));
        }
    }

    public function hookActionOrderStatusPostUpdate($params)
    {
        $controller = $this->getHookController('hookActionOrderStatusPostUpdate');
        return $controller->run($params);
    }

    public function getFile()
    {
        return dirname(__FILE__);
    }

}
