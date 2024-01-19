<?php

/**
 * 2007-2023 PrestaShop
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
 *  @copyright 2007-2023 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once dirname(__FILE__) . '/classes/SalvaceroCustomer.php';


class Salvacero_functions extends PaymentModule
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'salvacero_functions';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Velox';
        $this->need_instance = 1;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Salvacero modulo de credito');
        $this->description = $this->l('modulo para agregar funciones de credito.');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (extension_loaded('curl') == false) {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }

        $this->callInstallTab();

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('paymentOptions') &&
            $this->registerHook('actionControllerInitBefore') &&
            $this->registerHook('displayAdminCustomers');
    }

    public function uninstall()
    {
        Configuration::deleteByName('SALVACERO_FUNCTIONS_LIVE_MODE');

        // include(dirname(__FILE__) . '/sql/uninstall.php');
        $this->uninstallTab();

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        $this->registerHook('actionControllerInitBefore');
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitSalvacero_functionsModule')) == true) {
            $this->postProcess();
        }


        $this->context->smarty->assign('module_dir', $this->_path);

        // $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $this->renderForm();
    }

    /**
     * Create admin tabs
     */
    public function callInstallTab()
    {
        // Parent hidden class
        $this->installTab('AdminSalvaceroFuncs', 'Creditos');
        // Main Tab
        $this->installTab('AdminSalvaceroModule', 'Modulo', 'AdminSalvaceroFuncs');
        // Manage Subscribed Products Tab
        $this->installTab('AdminSalvaceroConfig', 'Configuración', 'AdminSalvaceroModule');
        // Create sub tabs under configuration
        $this->installTab('AdminSalvaceroCustomers', 'Clientes', 'AdminSalvaceroModule');

        return true;
    }

    /**
     * Uninstall admin tabs
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

    public function installTab($className, $tabName, $tabParentName = false)
    {
        // Create instance of Tab class
        $tab = new Tab;
        $tab->name = array();
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

        if ($className == 'AdminMba3Module') {
            $tab->icon = 'today';
        }

        // Assing module name
        $tab->module = $this->name;
        return $tab->add();
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
        $helper->submit_action = 'submitSalvacero_functionsModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'SALVACERO_FUNCTIONS_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),

                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'SALVACERO_FUNCTIONS_LIVE_MODE' => Configuration::get('SALVACERO_FUNCTIONS_LIVE_MODE', true),
        );
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

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookDisplayBackOfficeHeader($params)
    {
        Media::addJsDef(
            array(
                'ps_customer_ajax' => $this->context->link->getAdminLink('AdminSalvaceroCustomers', true)
            )
        );

        $this->context->controller->addJS($this->_path . 'views/js/back.js');
        $this->context->controller->addCSS($this->_path . 'views/css/back.css');
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        Media::addJsDef(
            array(
                'name_salvacero' => $this->name
            )
        );
        $this->context->controller->addJS($this->_path . '/views/js/jquery.sweet-modal.min.js');
        $this->context->controller->addCSS($this->_path . '/views/css/jquery.sweet-modal.min.css');
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }

    /**
     * Return payment options available for PS 1.7+
     *
     * @param array Hook parameters
     *
     * @return array|null
     */
    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }


        $option = new \PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $option->setCallToActionText($this->l('Paga con tu crédito directo'))
            ->setAction($this->context->link->getModuleLink($this->name, 'redirect', array(), true))
            ->setModuleName($this->name);

        return [
            $option
        ];
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);
        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    public function hookDisplayAdminCustomers($params)
    {
        $id_customer = $params['id_customer'];
        $amount = SalvaceroCustomer::getAmountForIdPs($id_customer);


        $this->context->smarty->assign([
            "id_customer" => $id_customer,
            "amount" => $amount,
        ]);

        return $this->context->smarty->fetch('module:' . $this->name . '/views/templates/hook/amount.tpl');
    }

    public function hookActionControllerInitBefore($params)
    {
        // var_dump($params['controller']);
        // exit;

    }
}
