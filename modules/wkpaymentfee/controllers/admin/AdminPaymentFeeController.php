<?php
/**
* 2010-2022 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2022 Webkul IN
* @license LICENSE.txt
 */

class AdminPaymentFeeController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'wk_paymentfee';
        $this->identifier = 'id';
        $this->className = 'PaymentFeeDetail';
        parent::__construct();

        $this->lang = true;
        Shop::addTableAssociation('wk_paymentfee', array('type' => 'shop'));
        $this->_where .= Shop::addSqlRestrictionOnLang('b');
        $this->_join .= 'INNER JOIN `'._DB_PREFIX_.'wk_paymentfee_shop` pfs ON 
        (pfs.`id` = a.`id` AND pfs.`id_shop` = '.(int) $this->context->shop->id.')';
        $this->_select = 'pfs.module as p_module,
        pfs.feetype as p_feetype,
        pfs.feeamount as p_feeamount,
        pfs.feepercent as p_feepercent,
        pfs.min_amount as p_min_amount,
        pfs.max_amount as p_max_amount,
        pfs.orderamount as p_orderamount,
        pfs.discount as p_discount,
        pfs.active as p_active,
        pfs.priority as p_priority';

        Media::addJsDef(
            array(
                'controller' => $this->context->link->getAdminLink('AdminPaymentFee'),
                'success_mess' => $this->l('Data saved'),
            )
        );

        $taxCalType = array(
            array(
                'id' => '1',
                'name' => $this->l('Calculate Fee Including Taxes')
            ),
            array(
                'id' => '0',
                'name' => $this->l('Calculate Fee Excluding Taxes')
            ),
        );
        $feeCalBasedOn = array(
            array(
                'id' => '1',
                'name' => $this->l('Only products')
            ),
            array(
                'id' => '3',
                'name' => $this->l('Products + Shipping')
            ),
            array(
                'id' => '5',
                'name' => $this->l('Only shipping')
            ),
        );
        $this->fields_options = array(
            'global' => array(
                'title' => $this->l('Text configuration'),
                'icon' => 'icon-cogs',
                'fields' => array(
                    'Wk_FONT_SIZE' => array(
                        'title' => $this->l('Font size'),
                        'hint' => $this->l('It is use to set heading font size.'),
                        'validation' => 'isUnsignedInt',
                        'required' => true,
                        'type' => 'text',
                        'suffix' => $this->l('px'),
                    ),
                    'Wk_COLOR' => array(
                        'title' => $this->l('Text color'),
                        'validation' => 'isColor',
                        'type' => 'color',
                        'name' => 'Wk_COLOR',
                        'size' => 20,
                        'required' => true,
                    ),
                    'Wk_TAXCALTYPE' => array(
                        'title' => $this->l('Tax Calculation Method'),
                        'cast' => 'pSQL',
                        'name' => 'Wk_TAXCALTYPE',
                        'type' => 'select',
                        'list' => $taxCalType,
                        'identifier' => 'id'
                    ),
                    'Wk_FEECALBASE' => array(
                        'title' => $this->l('Fee is Calculated Based On'),
                        'cast' => 'pSQL',
                        'name' => 'Wk_FEECALBASE',
                        'type' => 'select',
                        'list' => $feeCalBasedOn,
                        'identifier' => 'id'
                    ),
                ),
                'submit' => array('title' => $this->l('Save')),
            ),
        );

        $this->fields_list = array(
            'id' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'havingFilter' => true,
                'search' => true,
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'align' => 'center',
            ),
            'p_module' => array(
                'title' => $this->l('Payment method'),
                'align' => 'center',
                'callback' => 'moduleDisplayName',
                'having_filter' => true,
                'filter_key' => 'pfs!module'
            ),
            'p_feetype' => array(
                'title' => $this->l('Type'),
                'align' => 'center',
                'callback' => 'displayType',
                'having_filter' => true,
                'filter_key' => 'pfs!feetype'
            ),
            'p_feeamount' => array(
                'title' => $this->l('Fixed amount'),
                'align' => 'center',
                'callback' => 'amountCurrency',
                'having_filter' => true,
                'filter_key' => 'pfs!feeamount'
            ),
            'p_feepercent' => array(
                'title' => $this->l('Percentage'),
                'type' => 'percent',
                'align' => 'center',
                'having_filter' => true,
                'filter_key' => 'pfs!feepercent'
            ),
            'p_min_amount' => array(
                'title' => $this->l('Mimimum amount'),
                'align' => 'center',
                'callback' => 'minCurrency',
                'having_filter' => true,
                'filter_key' => 'pfs!min_amount'
            ),
            'p_max_amount' => array(
                'title' => $this->l('Maximum amount'),
                'align' => 'center',
                'callback' => 'maxCurrency',
                'having_filter' => true,
                'filter_key' => 'pfs!max_amount'
            ),
            'p_orderamount' => array(
                'title' => $this->l('Order amount'),
                'align' => 'center',
                'callback' => 'orderCurrency',
                'having_filter' => true,
                'filter_key' => 'pfs!orderamount'
            ),
            'p_discount' => array(
                'title' => $this->l('Discount'),
                'align' => 'center',
                'remove_onclick' => true,
                'type' => 'bool',
                'orderby' => false,
                'callback' => 'printIcon',
                'having_filter' => true,
                'filter_key' => 'pfs!discount'
            ),
            'p_active' => array(
                'title' => $this->l('Status'),
                'active' => 'status',
                'align' => 'center',
                'type' => 'bool',
                'class' => 'dks',
                'orderby' => false,
                'having_filter' => true,
                'filter_key' => 'pfs!active'
            ),
            'p_priority' => array(
                'title' => $this->l('Priority'),
                'type' => 'editable',
                'remove_onclick' => true,
                'id' => 'priority',
                'align' => 'center',
                'having_filter' => true,
                'filter_key' => 'pfs!priority'
            ),
        );


        $this->bulk_actions = array('delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
            ),
        );
    }

    public function printIcon($value)
    {
        $this->context->smarty->assign(
            array(
                'printIcon' => true,
                'value' => $value
            )
        );
        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_ . $this->module->name .
                '/views/templates/hook/feehelpers.tpl'
        );
    }

    public function initToolbar()
    {
        parent::initToolbar();
        $this->page_header_toolbar_btn['new'] = array(
            'href' => self::$currentIndex.'&add'.$this->table.'&token='.$this->token,
            'desc' => $this->l('Add payment fee'),
        );
    }

    public function amountCurrency($value, $feeDetail)
    {
        $objPaymentFee = new PaymentFeeDetail($feeDetail['id']);
        $currency = $objPaymentFee->getCurrencyById($feeDetail['id']);
        
        return Tools::displayPrice($value, (int) $currency['fee_currency']);
    }

    public function minCurrency($value, $feeDetail)
    {
        $objPaymentFee = new PaymentFeeDetail($feeDetail['id']);
        $currency = $objPaymentFee->getCurrencyById($feeDetail['id']);

        return Tools::displayPrice($value, (int) $currency['min_currency']);
    }

    public function maxCurrency($value, $feeDetail)
    {
        $objPaymentFee = new PaymentFeeDetail($feeDetail['id']);
        $currency = $objPaymentFee->getCurrencyById($feeDetail['id']);

        return Tools::displayPrice($value, (int) $currency['max_currency']);
    }

    public function orderCurrency($value, $feeDetail)
    {
        $objPaymentFee = new PaymentFeeDetail($feeDetail['id']);
        $currency = $objPaymentFee->getCurrencyById($feeDetail['id']);

        return Tools::displayPrice($value, (int) $currency['orderamount_currency']);
    }

    public function renderList()
    {
        $this->addRowAction('edit');
        $this->addRowAction('delete');

        $this->page_header_toolbar_btn['new'] = array(
            'href' => self::$currentIndex.'&add'.$this->table.'&token='.$this->token,
            'desc' => $this->l('Add new'),
        );

        return parent::renderList();
    }

    public function afterAdd($objPaymentFee)
    {
        if (empty(Tools::getValue('country_restriction'))) {
            $objPaymentFee->countries = pSQL('');
        } elseif (Tools::getValue('country_select')) {
            $objPaymentFee->countries = pSQL(implode(';', Tools::getValue('country_select')));
        }
        if (empty(Tools::getValue('category_restriction'))) {
            $objPaymentFee->category = pSQL('');
        } elseif (Tools::getValue('category_select')) {
            $objPaymentFee->category = pSQL(implode(';', Tools::getValue('category_select')));
        }
        if (empty(Tools::getValue('manufacturer_restriction'))) {
            $objPaymentFee->manufacturer = pSQL('');
        } elseif (Tools::getValue('manufacturer_select')) {
            $objPaymentFee->manufacturer = pSQL(implode(';', Tools::getValue('manufacturer_select')));
        }
        if (empty(Tools::getValue('supplier_restriction'))) {
            $objPaymentFee->supplier = pSQL('');
        } elseif (Tools::getValue('supplier_select')) {
            $objPaymentFee->supplier = pSQL(implode(';', Tools::getValue('supplier_select')));
        }

        if (empty(Tools::getValue('group_restriction'))) {
            $objPaymentFee->customer_group = pSQL('');
        } elseif (Tools::getValue('group_select')) {
            $objPaymentFee->customer_group = pSQL(implode(';', Tools::getValue('group_select')));
        }

        $minIdCurrency = (int)Tools::getValue('min_amount_currency');
        $maxIdCurrency = (int)Tools::getValue('max_amount_currency');
        $feeIdCurrency = (int)Tools::getValue('feecurrency');
        $orderIdCurrency = (int)Tools::getValue('ordercurrency');
        $shopIDs = Shop::getContextListShopID();
        foreach ($shopIDs as $id_shop) {
            $objPaymentFee->insertCurrency($minIdCurrency, $maxIdCurrency, $feeIdCurrency, $orderIdCurrency, $id_shop);
        }

        $objPaymentFee->save();
    }

    public function afterUpdate($objPaymentFee)
    {
        if (empty(Tools::getValue('country_restriction'))) {
            $objPaymentFee->countries = pSQL('');
        } elseif (Tools::getValue('country_select')) {
            $objPaymentFee->countries = pSQL(implode(';', Tools::getValue('country_select')));
        } else {
            $objPaymentFee->countries = pSQL('');
        }

        if (empty(Tools::getValue('category_restriction'))) {
            $objPaymentFee->category = pSQL('');
        } elseif (Tools::getValue('category_select')) {
            $objPaymentFee->category = pSQL(implode(';', Tools::getValue('category_select')));
        } else {
            $objPaymentFee->category = pSQL('');
        }

        if (empty(Tools::getValue('manufacturer_restriction'))) {
            $objPaymentFee->manufacturer = pSQL('');
        } elseif (Tools::getValue('manufacturer_select')) {
            $objPaymentFee->manufacturer = pSQL(implode(';', Tools::getValue('manufacturer_select')));
        } else {
            $objPaymentFee->manufacturer = pSQL('');
        }

        if (empty(Tools::getValue('supplier_restriction'))) {
            $objPaymentFee->supplier = pSQL('');
        } elseif (Tools::getValue('supplier_select')) {
            $objPaymentFee->supplier = pSQL(implode(';', Tools::getValue('supplier_select')));
        } else {
            $objPaymentFee->supplier = pSQL('');
        }

        if (empty(Tools::getValue('group_restriction'))) {
            $objPaymentFee->customer_group = pSQL('');
        } elseif (Tools::getValue('group_select')) {
            $objPaymentFee->customer_group = pSQL(implode(';', Tools::getValue('group_select')));
        } else {
            $objPaymentFee->customer_group = pSQL('');
        }

        $minIdCurrency = (int)Tools::getValue('min_amount_currency');
        $maxIdCurrency = (int)Tools::getValue('max_amount_currency');
        $feeIdCurrency = (int)Tools::getValue('feecurrency');
        $orderIdCurrency = (int)Tools::getValue('ordercurrency');
        $shopIDs = Shop::getContextListShopID();
        foreach ($shopIDs as $id_shop) {
            $objPaymentFee->updateCurrency($minIdCurrency, $maxIdCurrency, $feeIdCurrency, $orderIdCurrency, $id_shop);
        }
        
        $objPaymentFee->save();
    }

    public function renderForm()
    {
        if (!($obj = $this->loadObject(true))) {
            return;
        }

        if ($this->display == 'edit') {
            if (Validate::isLoadedObject($obj)) {
                $selectedCountry = $this->getFieldValue($obj, 'countries') == ''
                    ? '' : explode(';', $this->getFieldValue($obj, 'countries'));
                $selectedCategory = $this->getFieldValue($obj, 'category') == ''
                    ? '' : explode(';', $this->getFieldValue($obj, 'category'));
                $selectedManufacturer = $this->getFieldValue($obj, 'manufacturer') == ''
                    ? '' : explode(';', $this->getFieldValue($obj, 'manufacturer'));
                $selectedSupplier = $this->getFieldValue($obj, 'supplier') == ''
                    ? '' : explode(';', $this->getFieldValue($obj, 'supplier'));
                $selectedCustomerGroup = $this->getFieldValue($obj, 'customer_group') == ''
                    ? '' : explode(';', $this->getFieldValue($obj, 'customer_group'));

                $idCurrency = $obj->getCurrencyById($obj->id);
                $this->context->smarty->assign(
                    array(
                        'objPaymentFee' => $obj,
                        'selectedCountry' => $selectedCountry,
                        'selectedCategory' => $selectedCategory,
                        'selectedManufacturer' => $selectedManufacturer,
                        'selectedSupplier' => $selectedSupplier,
                        'selectedCustomerGroup' => $selectedCustomerGroup,
                        'idCurrency' => $idCurrency,
                    )
                );
            }
        }

        $paymentDetails = $this->getPaymentModuleDetail();
        $currencyId = $this->context->currency->id;
        $langId = $this->context->language->id;
        $this->context->smarty->assign(
            array(
                'languages' => Language::getLanguages(),
                'total_languages' => count(Language::getLanguages()),
                'current_lang' => Language::getLanguage((int) $langId),
                'current_currency' => $currencyId,
            )
        );
        $currencies = Currency::getCurrencies(false, true, true);
        $iso = $this->context->language->iso_code;
        $this->context->smarty->assign(
            array(
                'paymentDetails' => $paymentDetails,
                'currencies' => $currencies,
                'groups' => Group::getGroups($this->default_form_language, true),
                'countries' => Country::getCountries($this->context->language->id),
                'categories' => Category::getAllCategoriesName(null, $this->context->language->id),
                'manufacturer' => Manufacturer::getManufacturers(false, $this->context->language->id),
                'suppliers' => Supplier::getSuppliers(false, $this->context->language->id),
                'tinymce' => true,
                'iso' => file_exists(_PS_CORE_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en',
                'path_css' => _THEME_CSS_DIR_,
                'ad' => __PS_BASE_URI__.basename(_PS_ADMIN_DIR_),
            )
        );

        $this->fields_form = array(
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'button',
            ),
        );

        return parent::renderForm();
    }

    public function processSave()
    {
        
        if (Tools::isSubmit('submitAddwk_paymentfee') || Tools::isSubmit('submitAddwk_paymentfeeAndStay')) {
            if (Tools::getValue('feetype') == 'amount') {
                $_POST['feepercent'] = 0;
            } elseif (Tools::getValue('feetype') == 'percent') {
                $_POST['feeamount'] = 0;
            }

            if (Tools::getValue('feeamount') && !Validate::isPrice(Tools::getValue('feeamount'))) {
                $this->errors[] = $this->l('Invalid Amount value');
            }

            if (Tools::getValue('feepercent') && !Validate::isPercentage(Tools::getValue('feepercent'))) {
                $this->errors[] = $this->l('Invalid percent value');
            }

            if (Tools::getValue('min_amount') && !Validate::isPrice(Tools::getValue('min_amount'))) {
                $this->errors[] = $this->l('Invalid minimum amount value');
            }

            if (Tools::getValue('max_amount') && !Validate::isPrice(Tools::getValue('max_amount'))) {
                $this->errors[] = $this->l('Invalid maximum amount vlaue');
            }

            if (Tools::getValue('orderamount') && !Validate::isPrice(Tools::getValue('orderamount'))) {
                $this->errors[] = $this->l('Invalid order amount value');
            }

            if (Tools::getValue('priority') < 0 || !Validate::isPhoneNumber(Tools::getValue('priority'))) {
                $this->errors[] = $this->l('Invalid priority');
            }

            if (Tools::getValue('id')) {
                $id = Tools::getValue('id');
                $objPaymentFee = new PaymentFeeDetail($id);
                if (!Validate::isLoadedObject($objPaymentFee)) {
                    $this->errors[] = $this->l('Invalid payment fee id');
                }
            }

            $languages = Language::getLanguages();
            $langId = $this->context->language->id;
            $name = Tools::getValue('name_'.$langId);
            $name_error = $emptyCheck = 0;
            foreach ($languages as $language) {
                if (!$emptyCheck && (trim(Tools::getValue('name_'.$language['id_lang'])) == '')) {
                    $name_error = 1;
                }
                $emptyCheck = 1;
                if (!Validate::isCatalogName(Tools::getValue('name_'.$language['id_lang']))) {
                    $name_error = 1;
                }
            }
            $description_error = 0;
            foreach ($languages as $language) {
                if (Tools::getValue('description_'.$language['id_lang'])) {
                    $description = Tools::getValue('description_'.$language['id_lang']);
                    if (!Validate::isCleanHtml($description)) {
                        $description_error = 1;
                    }
                }
            }

            if ($name == '') {
                if (1 < count($languages)) {
                    $this->errors[] = $this->l('Name field is required in ').$this->context->language->name;
                } else {
                    $this->errors[] = $this->l('Name field is required');
                }
            } elseif ($name_error == 1) {
                $this->errors[] = $this->l('Invalid Name');
            }

            if ($description_error) {
                $this->errors[] = $this->l('Description have not valid data');
            }
        }
        
        if (empty($this->errors)) {
            $id = Tools::getValue('id');
            if ($id) {
                $paymentFeeDetail = new PaymentFeeDetail($id);
            } else {
                $paymentFeeDetail = new PaymentFeeDetail();
            }
            $paymentFeeDetail->module = pSQL(Tools::getValue('module'));
            $paymentFeeDetail->feetype = pSQL(Tools::getValue('feetype'));
            $paymentFeeDetail->feeamount = (float)Tools::getValue('feeamount');
            $paymentFeeDetail->feepercent = (float)Tools::getValue('feepercent');
            $paymentFeeDetail->min_amount = (float)Tools::getValue('min_amount');
            $paymentFeeDetail->max_amount = (float)Tools::getValue('max_amount');
            $paymentFeeDetail->orderamount = (float)Tools::getValue('orderamount');
            $paymentFeeDetail->discount = (int)Tools::getValue('discount');
            $paymentFeeDetail->active = (int)Tools::getValue('active');
            $paymentFeeDetail->customer_group = pSQL(Tools::getValue('customer_group'));
            $paymentFeeDetail->countries = pSQL(Tools::getValue('countries'));
            $paymentFeeDetail->category = pSQL(Tools::getValue('category'));
            $paymentFeeDetail->manufacturer = pSQL(Tools::getValue('manufacturer'));
            $paymentFeeDetail->supplier = pSQL(Tools::getValue('supplier'));
            $paymentFeeDetail->priority = (int)Tools::getValue('priority');

            foreach ($languages as $language) {
                $idLang = $language['id_lang'];
                $paymentFeeDetail->name[$idLang] = pSQL(trim(Tools::getValue('name_'.$idLang)));
                $paymentFeeDetail->description[$idLang] = pSQL(Tools::getValue('description_'.$idLang));
            }
            $paymentFeeDetail->save();
            if ($id) {
                $this->afterUpdate($paymentFeeDetail);
            } else {
                $this->afterAdd($paymentFeeDetail);
            }
            if (Tools::isSubmit('submitAddwk_paymentfeeAndStay')) {
                $wkUrl = self::$currentIndex . '&conf=4&token=' . $this->token . '&id=';
                $wkUrl = $wkUrl . $paymentFeeDetail->id . '&updatewk_paymentfee';
                Tools::redirectAdmin($wkUrl);
            }
        }
    }

    private function getPaymentModuleDetail()
    {
        $paymentModule = PaymentModule::getInstalledPaymentModules();

        foreach ($paymentModule as &$payemntMethod) {
            $objPaymentModule = Module::getInstanceById($payemntMethod['id_module']);
            $payemntMethod['displayName'] = $objPaymentModule->displayName;
        }

        return $paymentModule;
    }

    public function displayType($type)
    {
        if ('amount' == $type) {
            return $this->l('Fixed amount');
        } elseif ('percent' == $type) {
            return $this->l('Percent');
        } else {
            return $this->l('Fix + Percent');
        }
    }

    public static function moduleDisplayName($module)
    {
        $moduleDetail = Module::getInstanceByName($module);
        if ($moduleDetail) {
            return $moduleDetail->displayName;
        } else {
            return '--';
        }
    }

    public function ajaxProcessPrioritySet()
    {
        $objPaymentFee = new PaymentFeeDetail((int) Tools::getValue('id'));
        if (Tools::getValue('value') === false || (!is_numeric(trim(Tools::getValue('value'))))) {
            die(Tools::jsonEncode(array('error' => $this->l('Undefined value'))));
        }

        $objPaymentFee->priority = (int)Tools::getValue('value');
        $objPaymentFee->save();

        die(Tools::jsonEncode(array('error' => false)));
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);
        $this->addJS(_MODULE_DIR_.'wkpaymentfee/views/js/admin.js');

        $this->addJS(_PS_JS_DIR_.'tiny_mce/tiny_mce.js');
        if (version_compare(_PS_VERSION_, '1.6.0.11', '>')) {
            $this->addJS(_PS_JS_DIR_.'admin/tinymce.inc.js');
        } else {
            $this->addJS(_PS_JS_DIR_.'tinymce.inc.js');
        }
    }
}
