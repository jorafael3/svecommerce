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

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once 'classes/PaymentFeeDetail.php';
include_once 'classes/WkPaymentFeeVoucher.php';

class WkPaymentFee extends Module
{
    public function __construct()
    {
        $this->name = 'wkpaymentfee';
        $this->tab = 'administration';
        $this->version = '6.0.0';
        $this->author = 'Webkul';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        $this->ps_versions_compliancy = array(
            'min' => '1.7',
            'max' => _PS_VERSION_,
        );
        $this->displayName = $this->l('Payment Extra Fee or Discount');
        $this->description = $this->l('Extra fee or discount based on payment method');
    }

    public function getContent()
    {
        return Tools::redirectAdmin($this->context->link->getAdminLink('AdminPaymentFee'));
    }

    public function hookActionFrontControllerSetMedia()
    {
        if ('order' === $this->context->controller->php_self) {
            Media::addJsDef(array(
                'getformattedcurrency' => $this->context->link->getModuleLink('wkpaymentfee', 'getformattedcurrency'),
                'static_token' => Tools::getToken(false),
            ));
            $this->context->controller->registerJavascript(
                'paymentfee-js',
                'modules/'.$this->name.'/views/js/paymentfee.js',
                array(
                  'position' => 'bottom',
                  'priority' => 900,
                )
            );
        }
    }

    public function checkCondition($feeDetail)
    {
        $customerId = $this->context->customer->id;
        $customerGroup = Customer::getGroupsStatic($customerId);
        $countryId = $this->context->country->id;
        $cartProduct = $this->context->cart->getProducts();
        $mscDetail = array(
            'manufacturer' => array(),
            'supplier' => array(),
            'category' => array(),
        );

        foreach ($cartProduct as $product) {
            if (!in_array($product['id_manufacturer'], $mscDetail['manufacturer'])) {
                array_push($mscDetail['manufacturer'], $product['id_manufacturer']);
            }

            if (!in_array($product['id_supplier'], $mscDetail['supplier'])) {
                array_push($mscDetail['supplier'], $product['id_supplier']);
            }

            if (!in_array($product['id_category_default'], $mscDetail['category'])) {
                $productCategory = Product::getProductCategories($product['id_product']);
                $mscDetail['category'] = array_merge($mscDetail['category'], $productCategory);
            }
        }

        $condition = array();
        $condition['feeExist'] = true;
        $condition['checkMSC'] = false;
        $customerGroups = $feeDetail['customer_group'] == '' ? '' : explode(';', $feeDetail['customer_group']);
        if ($customerGroups) {
            if (!array_intersect($customerGroups, $customerGroup)) {
                $condition['feeExist'] = false;
            }
        }

        $countries = $feeDetail['countries'] == '' ? '' : explode(';', $feeDetail['countries']);
        if ($countries) {
            if (!in_array($countryId, $countries)) {
                $condition['feeExist'] = false;
            }
        }

        $category = $feeDetail['category'] == '' ? '' : explode(';', $feeDetail['category']);
        if ($category) {
            if (!array_intersect($mscDetail['category'], $category)) {
                $condition['feeExist'] = false;
            }

            $condition['checkMSC'] = true;
        }

        $manufacturer = $feeDetail['manufacturer'] == '' ? '' : explode(';', $feeDetail['manufacturer']);
        if ($manufacturer) {
            if (!array_intersect($mscDetail['manufacturer'], $manufacturer)) {
                $condition['feeExist'] = false;
            }

            $condition['checkMSC'] = true;
        }

        $supplier = $feeDetail['supplier'] == '' ? '' : explode(';', $feeDetail['supplier']);
        if ($supplier) {
            if (!array_intersect($mscDetail['supplier'], $supplier)) {
                $condition['feeExist'] = false;
            }

            $condition['checkMSC'] = true;
        }

        return $condition;
    }

    public function getFeesByCart($moduleName)
    {
        $objPaymentFee = new PaymentFeeDetail();
        $paymentFeeDetail = $objPaymentFee->getFeeByPaymentModule($moduleName);
        if ($paymentFeeDetail) {
            foreach ($paymentFeeDetail as $feeDetail) {
                if ($feeDetail['active']) {
                    $condition = $this->checkCondition($feeDetail);
                    if ($condition['feeExist'] && $feeDetail['active']) {
                        return $this->calculateFee($feeDetail, $condition['checkMSC']);
                    }
                }
            }
        }
    }

    public function calculateFee($feeDetail, $checkMSC = false)
    {
        $currencyId = $this->context->currency->id;
        $_POST['PaymentFee'] = true;
        $feeType = array();

        $cartProducts = $this->context->cart->getProducts();
        $taxCalType = Configuration::get('Wk_TAXCALTYPE');
        $feeCalBasedOn = Configuration::get('Wk_FEECALBASE');
        if ($checkMSC) {
            $manufacturer = $feeDetail['manufacturer'] == '' ? '' : explode(';', $feeDetail['manufacturer']);
            $category = $feeDetail['category'] == '' ? '' : explode(';', $feeDetail['category']);
            $supplier = $feeDetail['supplier'] == '' ? '' : explode(';', $feeDetail['supplier']);
            $product = array();
            foreach ($cartProducts as $cartProduct) {
                $isExists = true;
                if ($manufacturer) {
                    $isExists = in_array($cartProduct['id_manufacturer'], $manufacturer);
                }

                if ($supplier && $isExists) {
                    $isExists = in_array($cartProduct['id_supplier'], $supplier);
                }

                if ($category && $isExists) {
                    $productCategory = Product::getProductCategories($cartProduct['id_product']);
                    if (!array_intersect($productCategory, $category)) {
                        $isExists = false;
                    }
                }

                if ($cartProduct['id_product'] == Configuration::get('Wk_PF_PRODUCT_ID')) {
                    $isExists = false;
                }

                if ($isExists) {
                    array_push($product, $cartProduct);
                }
            }

            if ($feeCalBasedOn == 3) {
                $totalAmount = $this->context->cart->getOrderTotal($taxCalType, Cart::ONLY_PRODUCTS, $product);
                $shippingAmount = $this->context->cart->getOrderTotal($taxCalType, Cart::ONLY_SHIPPING, $product);
                if ($shippingAmount > 0) {
                    $totalAmount += $shippingAmount;
                }
            } else {
                $totalAmount = $this->context->cart->getOrderTotal($taxCalType, $feeCalBasedOn, $product);
            }
        } else {
            foreach ($cartProducts as $key => $cartProduct) {
                if ($cartProduct['id_product'] == Configuration::get('Wk_PF_PRODUCT_ID')) {
                    unset($cartProducts[$key]);
                    break;
                }
            }
            if ($feeCalBasedOn == 3) {
                $totalAmount = $this->context->cart->getOrderTotal($taxCalType, Cart::ONLY_PRODUCTS, $cartProducts);
                $shippingAmount = $this->context->cart->getOrderTotal($taxCalType, Cart::ONLY_SHIPPING, $cartProducts);
                if ($shippingAmount > 0) {
                    $totalAmount += $shippingAmount;
                }
            } else {
                $totalAmount = $this->context->cart->getOrderTotal($taxCalType, $feeCalBasedOn, $cartProducts);
            }
        }
        if (method_exists('Cart', 'clearCacheProductsPackage')) {
            $this->context->cart->clearCacheProductsPackage();
        }
        $objPaymentFee = new PaymentFeeDetail($feeDetail['id']);
        $currency = $objPaymentFee->getCurrencyById($feeDetail['id']);

        $feeType['discount'] = $feeDetail['discount'];
        $feeType['fee'] = 0;
        $orderAmount = Tools::convertPriceFull(
            $feeDetail['orderamount'],
            new Currency($currency['orderamount_currency']),
            new Currency($currencyId)
        );

        if ($feeDetail['orderamount'] > 0) {
            if ($orderAmount >= $totalAmount && !$feeDetail['discount']) {
                $feeType['fee'] = $this->feeAmount($feeDetail, $currency, $totalAmount);
            } elseif ($orderAmount <= $totalAmount && $feeDetail['discount']) {
                $fee = $this->feeAmount($feeDetail, $currency, $totalAmount);
                if ($totalAmount < $fee) {
                    $feeType['fee'] = $totalAmount;
                } else {
                    $feeType['fee'] = $fee;
                }
            } else {
                $feeType['fee'] = 0;
            }
        } else {
            $fee = $this->feeAmount($feeDetail, $currency, $totalAmount);
            if ($totalAmount < $fee) {
                $feeType['fee'] = $totalAmount;
            } else {
                $feeType['fee'] = $fee;
            }
        }
        
        return $feeType;
    }

    private function feeAmount($feeDetail, $currency, $totalAmount)
    {
        $currencyId = $this->context->currency->id;
        $feeAmount = Tools::convertPriceFull(
            $feeDetail['feeamount'],
            new Currency($currency['fee_currency']),
            new Currency($currencyId)
        );

        $minAmount = Tools::convertPriceFull(
            $feeDetail['min_amount'],
            new Currency($currency['min_currency']),
            new Currency($currencyId)
        );

        $maxAmount = Tools::convertPriceFull(
            $feeDetail['max_amount'],
            new Currency($currency['max_currency']),
            new Currency($currencyId)
        );

        switch ($feeDetail['feetype']) {
            case 'amount':
                if (0 < $minAmount) {
                    $feeAmount = $feeAmount > $minAmount ? $feeAmount : $minAmount;
                }

                if (0 < $maxAmount) {
                    $feeAmount = $feeAmount > $maxAmount ? $maxAmount : $feeAmount;
                }

                return $feeAmount;
            case 'percent':
                $fee = ($totalAmount * $feeDetail['feepercent']) / 100;

                if (0 < $minAmount) {
                    $fee = $fee > $minAmount ? $fee : $minAmount;
                }

                if (0 < $maxAmount) {
                    $fee = $fee > $maxAmount ? $maxAmount : $fee;
                }

                return $fee;
            case 'both':
                $fee = ($totalAmount * $feeDetail['feepercent']) / 100;

                $fee = $fee + $feeAmount;
                if (0 < $minAmount) {
                    $fee = $fee > $minAmount ? $fee : $minAmount;
                }

                if (0 < $maxAmount) {
                    $fee = $fee > $maxAmount ? $maxAmount : $fee;
                }

                return $fee;
            default:
                break;
        }

        return 0;
    }

    public function hookActionValidateOrder($params)
    {
        if (!$this->active) {
            return false;
        }

        $order = $params['order'];
        $objPaymentFee = new PaymentFeeDetail();
        $paymentFeeDetail = $objPaymentFee->getFeeByPaymentModule($order->module);
        if ($paymentFeeDetail) {
            $objPaymentFeeVoucher = new WkPaymentFeeVoucher();
            $isExistCartRule = $objPaymentFeeVoucher->getIdCartRuleByIdCart(
                $order->id_cart,
                $order->id_customer
            );

            if ($isExistCartRule) {
                $objCartRule = new CartRule($isExistCartRule['id_cart_rule']);
                $objPaymentFeeVoucher = new WkPaymentFeeVoucher($isExistCartRule['id']);
                $objPaymentFeeVoucher->is_used = (int)1;
                $objPaymentFeeVoucher->save();
                $insertFee = $objPaymentFee->insertExtraFeeByOrderId(
                    $order->id,
                    $objCartRule->reduction_amount,
                    $order->module,
                    1
                );
                if (!$insertFee) {
                    error_log(
                        date('[Y-m-d H:i e] ').'Payment Fee error: Some error occurred while save payment fee.'.PHP_EOL,
                        3,
                        _PS_MODULE_DIR_.'wkpaymentfee/error.log'
                    );
                }
            } else {
                $orderProduct = $order->getProducts();
                foreach ($orderProduct as $product) {
                    if ($product['product_id'] == Configuration::get('Wk_PF_PRODUCT_ID')) {
                        $insertFee = $objPaymentFee->insertExtraFeeByOrderId(
                            $order->id,
                            $product['total_price_tax_incl'],
                            $order->module,
                            0
                        );
                        break;
                    }
                }
            }
        }
    }

    public function hookDisplayHeader()
    {
        $controller = $this->context->controller->php_self;
        $controller = Tools::getValue('controller');
        if ('order' === $controller
        || 'orderopc' === $controller
        || 'cart' === $controller
        ) {
            $this->context->cart->deleteProduct(Configuration::get('Wk_PF_PRODUCT_ID'), 0);
            $objPaymentFeeVoucher = new WkPaymentFeeVoucher();
            $isExistCartRule = $objPaymentFeeVoucher->getIdCartRuleByIdCart(
                $this->context->cart->id,
                $this->context->customer->id
            );
            $isExist = false;
            if ($isExistCartRule) {
                $objCartRule = new CartRule($isExistCartRule['id_cart_rule']);
                if (Validate::isLoadedObject($objCartRule)) {
                    $isExist = true;
                }
            } else {
                $isExistUsedCartRule = $objPaymentFeeVoucher->getUsedVoucherByIdCustomer($this->context->customer->id);
                if ($isExistUsedCartRule) {
                    $objCartRule = new CartRule($isExistUsedCartRule['id_cart_rule']);
                    if (Validate::isLoadedObject($objCartRule)) {
                        $isExist = true;
                    }
                }
            }

            if ($isExist) {
                $objCartRule->quantity_per_user = (int)0;
                $objCartRule->save();
                $this->context->cart->removeCartRule($objCartRule->id);
            }
        }
    }

    public function hookDisplayProductButtons($params)
    {
        if ($params['product']['id_product'] == Configuration::get('Wk_PF_PRODUCT_ID')) {
            Tools::redirect($this->context->link->getPageLink('index', true));
        }
    }

    public function callInstallTab()
    {
        $this->installTab('AdminPaymentFee', 'Manage payment fee');

        return true;
    }

    public function installTab($class_name, $tab_name, $tab_parent_name = false)
    {
        $tab = new Tab();
        $tab->active = 0;
        $tab->class_name = $class_name;
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $tab_name;
        }

        if ($tab_parent_name) {
            $tab->id_parent = (int) Tab::getIdFromClassName($tab_parent_name);
        } else {
            $tab->id_parent = 0;
        }
        $tab->module = $this->name;

        return $tab->add();
    }

    public function callRegisterHook()
    {
        if (!$this->registerHook('displayTop')
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('actionValidateOrder')
            || !$this->registerHook('actionFrontControllerSetMedia')
            || !$this->registerHook('displayProductButtons')
        ) {
            return false;
        }

        return true;
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
        
        if (!parent::install()
            || !$this->installDb()
            || !$this->callInstallTab()
            || !$this->callRegisterHook()
            || !$this->createExtraFeeProduct()
            ) {
            return false;
        }

        Configuration::updateValue('Wk_FONT_SIZE', 15);
        Configuration::updateValue('Wk_COLOR', '#000000');
        Configuration::updateValue('Wk_TAXCALTYPE', '1');
        Configuration::updateValue('Wk_FEECALBASE', '1');

        return true;
    }

    public function createExtraFeeProduct()
    {
        $objectProduct = new Product();
        $objectProduct->name = array();
        $objectProduct->description_short = array();
        $objectProduct->link_rewrite = array();
        // quantity define 500 becaouse we are define product as virtual so quantity don't matter
        $objectProduct->quantity = (int)5000;
        $objectProduct->active = (int)true;

        foreach (Language::getLanguages(true) as $language) {
            $objectProduct->name[$language['id_lang']] = pSQL($this->l('Payment Extra Fee'));
            $objectProduct->link_rewrite[$language['id_lang']] =
            pSQL(Tools::link_rewrite($this->l('Payment Extra Fee')));
            $objectProduct->description_short[$language['id_lang']] = pSQL($this->l('Extra Fee on payment method'));
        }

        // $objectProduct->id_category_default = $defaultCategoryId;
        $objectProduct->indexed = (int)1;
        $objectProduct->condition = pSQL('new');
        $objectProduct->visibility = pSQL('none');
        $objectProduct->is_virtual = (int)1;
        $objectProduct->id_tax_rules_group = (int)0;
        $objectProduct->out_of_stock = (int)2;
        $objectProduct->save();

        if (0 < $objectProduct->id) {
            Configuration::updateValue('Wk_PF_PRODUCT_ID', (int)$objectProduct->id);
            StockAvailable::updateQuantity($objectProduct->id, null, 500);

            $objectImage = new Image();
            $objectImage->id_product = (int)$objectProduct->id;
            $objectImage->position = (int)0;
            $objectImage->cover = (int)1;
            $objectImage->save();
            $imagePath = $objectImage->getPathForCreation();
            $imagesTypes = ImageType::getImagesTypes('products');
            foreach ($imagesTypes as $imageType) {
                ImageManager::resize(
                    _PS_MODULE_DIR_.'wkpaymentfee/logo.png',
                    $imagePath.'-'.$imageType['name'].'.jpg',
                    $imageType['width'],
                    $imageType['height']
                );
            }

            ImageManager::resize(_PS_MODULE_DIR_.'wkpaymentfee/logo.png', $imagePath.'.'.$objectImage->image_format);
        }

        return true;
    }

    public function installDb()
    {
        $queries = $this->getDbTableQueries();
        $success = true;
        $db = Db::getInstance();
        foreach ($queries as $query) {
            $success &= $db->execute($query);
        }
        return $success;
    }

    private function getDbTableQueries()
    {
        return array(
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee` (
                `id` int(10) unsigned NOT NULL auto_increment,
                `module` varchar(255) NOT NULL,
                `feetype` ENUM('amount', 'percent', 'both') NOT NULL DEFAULT  'amount',
                `feepercent` decimal(5,2) NOT NULL DEFAULT '0.00',
                `feeamount` decimal(17,2) NOT NULL DEFAULT '0.00',
                `min_amount` decimal(17,2) NOT NULL DEFAULT '0.00',
                `max_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
                `orderamount` decimal(20,2) NOT NULL DEFAULT '0.00',
                `calculate_fee` int(3) unsigned NOT NULL,
                `customer_group` text,
                `countries` text,
                `category` text,
                `manufacturer` text,
                `supplier` text,
                `priority` int(10) NOT NULL DEFAULT '1',
                `discount` tinyint(1) unsigned NOT NULL DEFAULT '0',
                `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
                PRIMARY KEY  (`id`),
                INDEX (`module`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_currency` (
                `id` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `fee_currency` int(10) unsigned NOT NULL,
                `min_currency` int(10) unsigned NOT NULL,
                `max_currency` int(10) unsigned NOT NULL,
                `orderamount_currency` int(10) unsigned NOT NULL,
                PRIMARY KEY (`id`, `id_shop`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_lang` (
                `id` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `id_lang` int(10) unsigned NOT NULL,
                `name` varchar(255) character set utf8 NOT NULL,
                `description` text,
                PRIMARY KEY (`id`,`id_shop`, `id_lang`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_shop` (
                `id` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `module` varchar(255) NOT NULL,
                `feetype` ENUM('amount', 'percent', 'both') NOT NULL DEFAULT  'amount',
                `feepercent` decimal(5,2) NOT NULL DEFAULT '0.00',
                `feeamount` decimal(17,2) NOT NULL DEFAULT '0.00',
                `min_amount` decimal(17,2) NOT NULL DEFAULT '0.00',
                `max_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
                `orderamount` decimal(20,2) NOT NULL DEFAULT '0.00',
                `calculate_fee` int(3) unsigned NOT NULL,
                `customer_group` text,
                `countries` text,
                `category` text,
                `manufacturer` text,
                `supplier` text,
                `priority` int(10) NOT NULL DEFAULT '1',
                `discount` tinyint(1) unsigned NOT NULL DEFAULT '0',
                `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
                PRIMARY KEY  (`id`,`id_shop`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_order` (
                `id_order` int(10) UNSIGNED NOT NULL,
                `extra_fee` decimal(17,2) NOT NULL default '0.00',
                `module` varchar(255) NOT NULL,
                `type` int(1) unsigned NOT NULL,
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
                PRIMARY KEY (`id_order`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_voucher` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `id_cart_rule` int(11) NOT NULL,
                `id_cart` int(11) NOT NULL,
                `id_customer` int(11) NOT NULL,
                `is_used` tinyint(1) unsigned NOT NULL DEFAULT '0',
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
                PRIMARY KEY  (`id`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8"
        );
    }

    public function deleteConfigKeys()
    {
        $var = array('Wk_FONT_SIZE','Wk_COLOR', 'Wk_PF_PRODUCT_ID');

        foreach ($var as $key) {
            if (!Configuration::deleteByName($key)) {
                return false;
            }
        }

        return true;
    }

    public function uninstallDb()
    {
        // Delete Extra Fee product
        $objProduct = new Product(Configuration::get('Wk_PF_PRODUCT_ID'));
        $objProduct->delete();

        return Db::getInstance()->execute(
            'DROP TABLE IF EXISTS
        	`'._DB_PREFIX_.'wk_paymentfee`,
        	`'._DB_PREFIX_.'wk_paymentfee_shop`,
        	`'._DB_PREFIX_.'wk_paymentfee_lang`,
            `'._DB_PREFIX_.'wk_paymentfee_order`,
        	`'._DB_PREFIX_.'wk_paymentfee_currency`,
        	`'._DB_PREFIX_.'wk_paymentfee_voucher`'
        );
    }

    public function callUninstallTab()
    {
        $this->uninstallTab('AdminPaymentFee');

        return true;
    }

    public function uninstallTab($class_name)
    {
        $id_tab = (int) Tab::getIdFromClassName($class_name);
        if ($id_tab) {
            $tab = new Tab($id_tab);

            return $tab->delete();
        } else {
            return false;
        }
    }

    public function uninstall()
    {
        if (!parent::uninstall()
            || !$this->uninstallDb()
            || !$this->callUninstallTab()
            || !$this->deleteConfigKeys()
            ) {
            return false;
        }

        return true;
    }
}
