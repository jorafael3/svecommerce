<?php
/**
 * 2017 Manfredi Petruso
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to manfredi.petruso@fabvla.com so we can send you a copy immediately.
 *
 *
 *  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
 *  @copyright  2017 Manfredi Petruso
 *  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

$libs_folder = dirname(__FILE__).'/libs/';
require_once($libs_folder . 'FFPUtils.php');
require_once($libs_folder . 'FFPProductInfoTrait.php');
require_once($libs_folder . 'FFPOrderInfoTrait.php');
require_once($libs_folder . 'FFPInitCheckoutTrait.php');
require_once($libs_folder . 'FFPCategoryInfoTrait.php');
require_once($libs_folder . 'FFPEventInitCheckoutContent.php');
require_once($libs_folder . 'FFPEventCompleteRegistrationContent.php');
require_once($libs_folder . 'FFPEventSearchContent.php');
require_once($libs_folder . 'FFPEventViewCategoryContent.php');
require_once($libs_folder . 'FFPEventViewContent.php');
require_once($libs_folder . 'FFPEventPurchaseContent.php');
require_once($libs_folder . 'FFPCartInfoTrait.php');
require_once($libs_folder . 'FFPEventAddToCart.php');


class FabFacebookPixel extends Module
{
    protected $html = '';


    public function __construct()
    {
        $this->name = 'fabfacebookpixel';
        $this->author = 'MANFIELD';
        $this->tab = 'advertising_marketing';
        $this->need_instance = 0;
        $this->version = '3.2.3';
        $this->bootstrap = true;
        $this->_directory = dirname(__FILE__);
        $this->controllers = array('addtocart','executor','catalogexport','storecatalog');
        $this->module_key = '9dd2adbfc106755eabff7f6bdd4ad9ca';
        $this->author_address = '0xf17628948116213714612917b0352F1d9f352f2D';

        parent::__construct();

        $this->displayName = $this->l('Facebook Pixel + Catalog Export');
        $this->description = $this->l('Installs the Facebook pixel, collects e-commerce events. 
            Exports FB catalog or stores the catalog in a file, downloadable from a specific URL. 
            Multi store / currency / country / language supported. Export may be scheduled via external Cronjob.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.7.99.99');
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('actionCustomerAccountAdd')
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('actionValidateOrder')
            || !$this->registerHook('actionCartSave')
            || !$this->registerHook('actionProductUpdate')
            || !$this->registerHook('displayAdminProductsExtra')
            || !Configuration::updateValue('FAB_FACEBOOK_PIXEL', 'installed')
            || !Configuration::updateValue('FAB_FACEBOOK_MICRODATA', 0)
            || !Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1)
            || !Configuration::updateValue('FAB_PIXEL_TAX_INCLUDED', '')
            || !Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0)
            || !Configuration::updateValue('FAB_PIXEL_BRAND_OVERRIDE', '')
            || !Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1)
            || !Configuration::updateValue('FAB_FACEBOOK_PIXEL_IMAGE_TYPE', 0)
            || !Configuration::updateValue('FAB_FACEBOOK_CHUNK_ACTIVE', 0)
            || !Configuration::updateValue('FAB_FACEBOOK_CHUNK_QTY', 0)
            || !Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH_DATE', date("D M d, Y G:i"))
            || !Configuration::updateValue('FAB_FACEBOOK_PIXEL_ID', '')
            || !Configuration::updateValue('FAB_FACEBOOK_DEBUG', '')) {
            return false;
        }

        // Update Configuration values for all shops
        $shops = Shop::getContextListShopID();
        $shop_groups_list = array();

        /* Setup each shop */
        foreach ($shops as $shop_id) {
            $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

            if (!in_array($shop_group_id, $shop_groups_list)) {
                $shop_groups_list[] = $shop_group_id;
            }

            /* Sets up configuration */
            $res = Configuration::updateValue('FAB_FACEBOOK_PIXEL', true, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_MICRODATA', 0, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_PIXEL_TAX_INCLUDED', 1, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_PIXEL_BRAND_OVERRIDE', 1, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_CHUNK_ACTIVE', 0, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_CHUNK_QTY', 0, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_IMAGE_TYPE', 0, false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue(
                'FAB_GOOGLE_CATEGORIES_FETCH_DATE',
                date("D M d, Y G:i"),
                false,
                $shop_group_id,
                $shop_id
            );
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ID', '', false, $shop_group_id, $shop_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_DEBUG', 0, false, $shop_group_id, $shop_id);
        }

        /* Sets up Shop Group configuration */
        if (count($shop_groups_list)) {
            foreach ($shop_groups_list as $shop_group_id) {
                $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL', true, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_MICRODATA', 0, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_PIXEL_TAX_INCLUDED', 1, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_PIXEL_BRAND_OVERRIDE', 1, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_CHUNK_ACTIVE', 0, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_CHUNK_QTY', 0, false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_IMAGE_TYPE', 0, false, $shop_group_id);
                $res &= Configuration::updateValue(
                    'FAB_GOOGLE_CATEGORIES_FETCH_DATE',
                    date("D M d, Y G:i"),
                    false,
                    $shop_group_id
                );
                $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ID', '', false, $shop_group_id);
                $res &= Configuration::updateValue('FAB_FACEBOOK_DEBUG', 0, false, $shop_group_id);
            }
        }


        if (FFPUtils::isPs6()) {
            if (!$this->registerHook('displayShoppingCart')) {
                return false;
            }
        } else {
            if (!$this->registerHook('displayCheckoutSummaryTop')) {
                return false;
            }
        }

        $sql_file = dirname(__FILE__).'/install/install.sql';
        if (!$this->loadSQLFile($sql_file)) {
            return false;
        }

        // Install admin tab
        if (!$this->installTab('AdminCatalog', 'FabFacebookPixelAjax', 'Fabvla Facebook Pixel')) {
            return false;
        }

        $this->removeClassIndex();

        if (!$res) {
            return false;
        }

        return true;
    }


    public function installTab($parent, $class_name, $name)
    {
        $tab = new Tab();
        $tab->module = $this->name;
        $tab->active = 0;
        $tab->class_name = $class_name;
        $tab->id_parent = (int)Tab::getIdFromClassName($parent);
        $id_shop = Context::getContext()->shop->id;

        foreach (Language::getLanguages(true, $id_shop) as $lang) {
            $tab->name[$lang['id_lang']] = $name;
        }

        return $tab->add();
    }

    public function uninstall()
    {
        $sql_file = dirname(__FILE__).'/uninstall/uninstall.sql';
        if (!$this->loadSQLFile($sql_file)) {
            return true;
        }

        if (!parent::uninstall()
            || !Configuration::deleteByName('FAB_FACEBOOK_PIXEL')
        ) {
            return true;
        }

        if (!$this->uninstallTab('FabFacebookPixelAjax')) {
            return true;
        }

        $this->removeClassIndex();

        $this->_clearCache('init_page_view.tpl');
        $this->_clearCache('order_confirmation.tpl');

        return true;
    }


    public function uninstallTab($class_name)
    {
        // Retrieve Tab ID
        $id_tab = (int)Tab::getIdFromClassName($class_name);

        // Load tab
        $tab = new Tab((int)$id_tab);

        // Delete it
        return $tab->delete();
    }


    protected function performActionCartSave()
    {
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $tableName = 'fabfacebookpixel_purchase';
        $token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $idShopGroup, $idShop);
        $test = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $idShopGroup, $idShop);
        $fbPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $cart = Context::getContext()->cart;
        $isAjaxCartEnabled = (int)(Configuration::get('PS_BLOCK_CART_AJAX'));
        $data = array();
        $eventId = null;

        $page = $this->context->controller->php_self;
        if (empty($page)) {
            $page = Tools::getValue('controller');
        }
        $page = pSQL($page);


        if (isset($cart) && $page !== 'order') {
            $addedProduct = FFPUtils::getProductAddedInCart();

            if (!empty($addedProduct)) {
                if ($addedProduct['id_product'] != 0) {
                    $data = FFPCartInfoTrait::fillAndReturnData($addedProduct, $cart);

                    if (!empty($token)) {
                        $ffpEventAddToCart = new FFPEventAddToCart($token, $fbPixelId, $test);
                        $eventId = $ffpEventAddToCart->getEventId();
                        $createAndRemoveAddToCartResult = FFPUtils::createAndRemoveAddToCartEvent($eventId, 'add-to-cart', true);
                        $eventId = $createAndRemoveAddToCartResult['event_id'];
                        $ffpEventAddToCart->setEventId($eventId);
                        if ($createAndRemoveAddToCartResult['conversion_api'] == 0) {
                            $ffpEventAddToCart->sendAddToCartContent($data);
                        }
                    }
                }
            }

            if (!($isAjaxCartEnabled) && FFPUtils::isPs6()) {
                $this->context->cookie->addedProduct = json_encode($data);
                $this->context->cookie->addToCartEventId = $eventId;
            }

            if (isset($_COOKIE['_fbp'])) {
                $id_cart = $cart->id;
                $fbp = $_COOKIE['_fbp'];

                $sql = "SELECT * FROM " . _DB_PREFIX_ . $tableName . " WHERE id_cart = " . (int)$id_cart;
                $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);

                if (empty($res) && $id_cart > 0) {
                    $sql = "INSERT INTO " . _DB_PREFIX_ . $tableName . " (id_cart, id_order, sent, id_customer) 
                        VALUES (" . (int)$id_cart . ",0,0,'" . pSQL($fbp) . "')";
                    Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);

                    Context::getContext()->cookie->fab_check_purchase = '0';
                }
            }
        }

        $returnArray = array('eventId' => $eventId, 'data' => $data);
        return $returnArray;
    }


    public function hookActionCartSave()
    {
        $this->performActionCartSave();
    }

    public function hookActionValidateOrder($params)
    {
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $tableName = 'fabfacebookpixel_purchase';

        $order = $params['order'];

        $token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $idShopGroup, $idShop);
        $test = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $idShopGroup, $idShop);
        $fbPixelId =  (string)Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $eventId = null;

        if (!empty($order)) {
            $data = FFPOrderInfoTrait::fillAndReturnData($order);
            $idOrder = (int)$order->id;

            if (!empty($token)) {
                $ffpEventPurchaseContent = new FFPEventPurchaseContent($token, $fbPixelId, $test);
                $ffpEventPurchaseContent->sendPurchaseContent($data);
                $eventId = $ffpEventPurchaseContent->getEventId();
            }

            $idCart = (int)$order->id_cart;
            $sql = "UPDATE "._DB_PREFIX_.$tableName." SET id_order = ".$idOrder.", event_id = '".pSQL($eventId)."' WHERE id_cart = ".$idCart;
            Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);

            FFPUtils::cleanCartEvents('add-to-cart');
        }
    }


    protected function pendingOrders()
    {
        $res = array();

        if (isset($_COOKIE['_fbp'])) {
            $fbp = $_COOKIE['_fbp'];

            $tableName = 'fabfacebookpixel_purchase';
            // Check if pending orders
            $sql = "SELECT * FROM "._DB_PREFIX_.$tableName." WHERE sent = 0 
                AND id_order <> 0 AND id_customer = '".pSQL($fbp)."'";
            $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        }

        return $res;
    }

    protected function resetPendingOrders()
    {
        if (isset($_COOKIE['_fbp'])) {
            $fbp = $_COOKIE['_fbp'];

            $tableName = 'fabfacebookpixel_purchase';
            // Check if pending orders
            $sql = "UPDATE "._DB_PREFIX_.$tableName." SET sent = 1 WHERE sent = 0 AND id_customer = '".pSQL($fbp)."'";
            Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
        }
    }


    public function hookActionCustomerAccountAdd($params)
    {
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $context = Context::getContext();
        $token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $idShopGroup, $idShop);
        $test = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $idShopGroup, $idShop);
        $enabled = (int)Configuration::get('FAB_FACEBOOK_PIXEL_ACTIVE', null, $idShopGroup, $idShop);
        $fbPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        if ($context->cookie->fab_customer_add == null) {
            $context->cookie->fab_customer_add = '1';
        }


        if ($enabled && $fbPixelId != '') {
            if (!empty($token)) {
                $ffpEventCompleteRegistrationContent = new FFPEventCompleteRegistrationContent($token, $fbPixelId, $test);
                $ffpEventCompleteRegistrationContent->sendCompleteRegistrationContent();
                $eventId = $ffpEventCompleteRegistrationContent->getEventId();
                $context->cookie->event_id = $eventId;
            }
        }
    }


    public function getSpecificEventData()
    {
        $data = array();
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $enabled = (int)Configuration::get('FAB_FACEBOOK_PIXEL_ACTIVE', null, $idShopGroup, $idShop);
        $fbPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $specificEventData = array();
        $controller_type = pSQL($this->context->controller->controller_type);
        $isAjaxCartEnabled = (int)(Configuration::get('PS_BLOCK_CART_AJAX'));
        $cart = $this->context->cart;

        $page = $this->context->controller->php_self;
        if (empty($page)) {
            $page = Tools::getValue('controller');
        }
        $page = pSQL($page);

        if ($page == "order" || $page == "order-opc") {
            if (FFPUtils::isPs6()) {
                $ipa = Tools::getValue("ipa");
                if ($this->context->controller->step === 0 && !empty($ipa)) {
                    if (!($isAjaxCartEnabled)) {
                        if (!empty(Context::getContext()->cookie->addedProduct)) {
                            $addedProduct = json_decode($this->context->cookie->addedProduct, true);
                            $addToCartEventId = $this->context->cookie->addToCartEventId;

                            if (is_array($addedProduct)) {
                                $data['content_ids'] = $addedProduct['product_id'];
                                $data['content_type'] = 'product';
                                $data['currency'] = $addedProduct['currency_code'];
                                $data['value'] = $addedProduct['product_price'];
                                $data['type'] = 'AddToCart';
                                $data['eventID'] = $addToCartEventId;
                                $specificEventData = array(
                                    'data' => $data,
                                    'type' => 'AddToCart'
                                );
                            }
                        }
                    }
                } elseif ($this->context->controller->step === 1 || $page = "order-opc") {

                    if ($enabled && $fbPixelId != '') {

                        $data = FFPInitCheckoutTrait::fillAndReturnData($cart);

                        $specificEventData = array(
                            'data' => $data,
                            'type' => 'InitiateCheckout'
                        );
                    }
                }
            }
            else {

                if ($enabled && $fbPixelId != '') {

                    $data = FFPInitCheckoutTrait::fillAndReturnData($cart);

                    $specificEventData = array(
                        'data' => $data,
                        'type' => 'InitiateCheckout'
                    );

                    return $specificEventData;
                }
            }
        }

        if ($page === 'search') {
            if (FFPUtils::isPs6()) {
                $searchString = pSQL(Tools::getValue('search_query'));
            } else {
                $searchString = pSQL(Tools::getValue('s'));
            }
            $data['search_string'] = $searchString;

            $specificEventData = array(
                'data' => $data,
                'type' => 'Search'
            );
        }
        if ($page === 'category' && $controller_type === 'front') {
            $data = FFPCategoryInfoTrait::fillAndReturnData($this->context);
            $specificEventData = array(
                'data' => $data,
                'type' => 'ViewCategory'
            );
        }

        if ($page === 'product') {

            $cart = $this->context->cart;
            $googleDefinition = "";
            FFPUtils::initUtils();
            $productArray = [];

            $productArray['id_product'] = (int)Tools::getValue('id_product');
            $productArray['id_attribute'] = (int)Tools::getValue('id_product_attribute');
            
            $data = FFPProductInfoTrait::fillAndReturnData($productArray, $cart);

            $has_microdata = 0;
            if ((int)Configuration::get('FAB_FACEBOOK_MICRODATA', null, $idShopGroup, $idShop)) {
                $has_microdata = 1;
            }
            // Do this if necessary, in order not to waste resources
            if ($has_microdata) {
                $googleDefinition = FFPUtils::getExternalCategoryDefinition($data["default_category_id"], $data["lang_id"], "go");
            }

            $specificEventData = array(
                'data' => $data,
                'has_microdata' => $has_microdata,
                'google_category' => $googleDefinition,
                'type' => 'ViewContent'
            );

        }

        return $specificEventData;
    }

    public function hookDisplayHeader($params)
    {
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $specificEventData = $this->getSpecificEventData();

        $currency = Context::getContext()->currency->iso_code;
        $customerAdded = "false";
        $eventId = Context::getContext()->cookie->event_id;

        if (Context::getContext()->cookie->fab_customer_add != null) {
            $customerAdded = "true";
            Context::getContext()->cookie->fab_customer_add = (string)((int)Context::getContext()->cookie->fab_customer_add + 1);
        }
        if ((int)Context::getContext()->cookie->fab_customer_add > 2) {
            Context::getContext()->cookie->fab_customer_add = null;
        }
        $facebookPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $enabled = (int)Configuration::get('FAB_FACEBOOK_PIXEL_ACTIVE', null, $idShopGroup, $idShop);

        // Check for pending purchases
        $ordersData = array();


        if (Context::getContext()->cookie->fab_check_purchase == '0') {
            $pendingOrders =  $this->pendingOrders();
            if (sizeof($pendingOrders) > 0) {
                foreach ($pendingOrders as $pendingOrder) {
                    $id_order = $pendingOrder['id_order'];
                    $order = new Order($id_order);
                    $ordersData[] = array('content' => FFPOrderInfoTrait::fillAndReturnData($order), 'event_id' => $pendingOrder['event_id']);
                }
                $this->resetPendingOrders();
                Context::getContext()->cookie->fab_check_purchase = '1';
            }
        }

        if ($enabled && $facebookPixelId != '') {
            $this->context->controller->addJS($this->_path . 'views/js/fabfacebookpixel_'.$this->version.'.js');
            $default_customer_group = FFPUtils::getDefaultCustomerGroup();
            $customer_groups_string = FFPUtils::getCustomerGroupsString();
            $protocol = 'http:';
            if (Configuration::get('PS_SSL_ENABLED', null, $idShopGroup, $idShop)) {
                $protocol = 'https:';
            }
            $this->smarty->assign(
                array(
                    'facebookPixelId' => $facebookPixelId,
                    'addToCartUrl' => $protocol.$this->context->link->getModuleLink(
                        'fabfacebookpixel',
                        'addtocart',
                        array('ajax'=>true),
                        null,
                        null,
                        null,
                        true
                    ),
                    'executorUrl' => $protocol.$this->context->link->getModuleLink(
                        'fabfacebookpixel',
                        'executor',
                        array('ajax'=>true),
                        null,
                        null,
                        null,
                        true
                    ),
                    'customerAdded' => $customerAdded,
                    'ordersData' => $ordersData,
                    'currency' => $currency,
                    'customer_groups' => $customer_groups_string,
                    'default_customer_group' => $default_customer_group,
                    'event_id' => $eventId,
                    'is_pixel_enabled' => $enabled,
                    'specific_event_data' => $specificEventData
                )
            );
            return $this->display(__FILE__, 'init_page_view.tpl');
        }
    }



    public function getConfigurationLayout()
    {
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $activeLangs = Language::getLanguages(true);
        $catalogExport = $this->getCatalogStorageInfoMsg().$this->displayCatalogStorageInfo().$this->displayCatalogStorageForm();
        $categoryMapping = $this->displayCategoryMappingForm();
        $attributeMapping = $this->displayAttributeMappingForm();

        $isExportCombinations = Configuration::get(
            'FAB_PIXEL_COMBINATIONS', null, $idShopGroup, $idShop
        );


        if (Shop::isFeatureActive()) {
            if (Shop::getContext() != Shop::CONTEXT_SHOP) {
                $catalogExport = $this->getCatalogExportInfoMsg();
                $categoryMapping = $this->getCatalogExportInfoMsg();
                $attributeMapping = $this->getCatalogExportInfoMsg();
            }
        }
        $params = array(
            'info_current_shop' => $this->getCurrentShopInfoMsg(),
            'reference_warning' => $this->displayReferenceWarning(),
            'main_settings' => $this->displayForm(),
            'display_export' => $this->displayExport($activeLangs),
            'catalog_export' => $catalogExport,
            'category_mapping' => $categoryMapping,
            'attribute_mapping' => $attributeMapping,
            'is_export_combinations' => $isExportCombinations
        );

        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/configuration_layout.tpl',
            $params
        );
        return $tpl->fetch();
    }

    public function processCategoryMapping()
    {
        if (Tools::isSubmit('submit_category_mapping')) {
            $res = false;
            $errors = array();
            $tablename = "fabfacebookpixel";
            $ffpcatArray = Tools::getValue("ffpcat");
            $idShop = $this->context->shop->id;

            // Check if template is old in cache
            $ffpOldCheck = Tools::getValue("ffpcath");
            if (!empty($ffpOldCheck)) {
                $this->_clearCache('category_mapping.tpl');
                $errors[] = $this->l(
                    'Be sure to clear smarty template cache before using this module version'
                );
                return $this->displayError($errors);
            }

            // Check if repetitions
            $repetitionCheckArray = array();
            foreach ($ffpcatArray as $ffpcat) {
                if (array_key_exists('ps', $ffpcat)) {
                    $repetitionCheckArray[] = $ffpcat['ps'];
                }
            }

            if (array_unique($repetitionCheckArray) == $repetitionCheckArray) {
                // Truncate table and empty all values
                $sql = "DELETE FROM  " . _DB_PREFIX_ . $tablename . " WHERE id_shop = " . (int)$idShop;
                $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);

                // Filling new values
                $sql = "";
                foreach ($ffpcatArray as $ffpcat) {
                    $ffpcatGoogle = empty($ffpcat['google']) ? "NULL" : $ffpcat['google'];
                    $ffpcatFacebook = empty($ffpcat['facebook']) ? "NULL" : $ffpcat['facebook'];
                    $ffpcatPS = empty($ffpcat['ps']) ? "NULL" : $ffpcat['ps'];
                    $sql = "INSERT INTO " . _DB_PREFIX_ . $tablename
                        . " (`id_category`, `id_shop`, `id_google_category`, `id_facebook_category`) VALUES "
                        . "(" . $ffpcatPS . "," . $idShop . "," . $ffpcatGoogle . "," . $ffpcatFacebook . ");";
                    if ((!empty($ffpcat['google']) || !empty($ffpcat['facebook'])) && !empty($ffpcat['ps'])) {
                        $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
                    }
                }
                $res = true;
            } else {
                $errors[] = $this->l(
                    'You cannot map the same Prestashop Category multiple times.'
                );
            }

            if (!$res) {
                $errors[] = $this->l(
                    'The configuration could not be updated.'
                );
                return $this->displayError($errors);
            }

            return $this->displayConfirmation($this->l('Settings updated'));
        }
    }

    public function processAttributeMapping()
    {
        if (Tools::isSubmit('submit_attribute_mapping')) {
            $res = false;
            $errors = array();
            $tablename = "fabfacebookpixel_attributes";
            $ffbattrgrArray = Tools::getValue("ffbattrgr");
            $idShop = $this->context->shop->id;

            // Check if template is old in cache
            $ffpOldCheck = Tools::getValue("ffbattrgrh");
            if (!empty($ffpOldCheck)) {
                $this->_clearCache('attribute_mapping.tpl');
                $errors[] = $this->l(
                    'Be sure to clear smarty template cache before using this module version'
                );
                return $this->displayError($errors);
            }

            // Check if repetitions
            $repetitionCheckArray = array();
            foreach ($ffbattrgrArray as $ffbattrgr) {
                $repetitionCheckArray[] = $ffbattrgr['ps'];
            }

            if (array_unique($repetitionCheckArray) == $repetitionCheckArray) {
                // Truncate table and empty all values
                $sql = "DELETE FROM  " . _DB_PREFIX_ . $tablename . " WHERE id_shop = " . (int)$idShop;
                $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);

                // Filling new values
                $sql = "";
                foreach ($ffbattrgrArray as $ffbattrgr) {
                    $ffbattrgrFacebook = empty($ffbattrgr['facebook']) ? "NULL" : $ffbattrgr['facebook'];
                    $ffbattrgrPS = empty($ffbattrgr['ps']) ? "NULL" : $ffbattrgr['ps'];
                    $sql = "INSERT INTO " . _DB_PREFIX_ . $tablename
                        . " (`id_attribute_group`, `id_facebook_attribute_group`, `id_shop`) VALUES "
                        . "(" . $ffbattrgrPS . "," . $ffbattrgrFacebook . "," . $idShop . ");";
                    if (!empty($ffbattrgr['facebook']) && !empty($ffbattrgr['ps'])) {
                        $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
                    }
                }
                $res = true;
            } else {
                $errors[] = $this->l(
                    'You cannot map the same Prestashop Attribute multiple times.'
                );
            }

            if (!$res) {
                $errors[] = $this->l(
                    'The configuration could not be updated.'
                );
                return $this->displayError($errors);
            }

            return $this->displayConfirmation($this->l('Settings updated'));
        }
    }

    public function processMainSettings()
    {
        $errors = array();

        if (Tools::isSubmit('submit_main_settings')) {
            $facebookPixelId = (string)Tools::getValue('FAB_FACEBOOK_PIXEL_ID');
            $conversionAPIToken = (string)Tools::getValue('FAB_FACEBOOK_CONVERSIONAPI_TOKEN');
            $conversionAPITest = (string)Tools::getValue('FAB_FACEBOOK_CONVERSIONAPI_TEST');
            $enabled = (int)Tools::getValue('FAB_FACEBOOK_PIXEL_ACTIVE');
            $hasMicrodata = (int)Tools::getValue('FAB_FACEBOOK_MICRODATA');
            $exportEmptyDesc = (int)Tools::getValue('FAB_GOOGLE_EXPORT_EMPTY_DESC');
            $brandOverride = (string)Tools::getValue('FAB_PIXEL_BRAND_OVERRIDE');
            $imageType = (string)Tools::getValue('FAB_FACEBOOK_PIXEL_IMAGE_TYPE');
            $taxIncluded = (string)Tools::getValue('FAB_PIXEL_TAX_INCLUDED');
            $descriptionFieldId = (int)Tools::getValue('FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD');
            $is_export_combinations = (int)Tools::getValue('FAB_PIXEL_COMBINATIONS');
            $is_debug = (int)Tools::getValue('FAB_PIXEL_DEBUG');

            if (empty($facebookPixelId) && $enabled) {
                $this->html .= $this->displayError($this->l('Invalid Configuration value'));
            } else {
                $res = FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_PIXEL_ID',
                    $facebookPixelId
                );

                $res = FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_DEBUG',
                    $is_debug
                );

                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_CONVERSIONAPI_TOKEN',
                    $conversionAPIToken
                );

                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_CONVERSIONAPI_TEST',
                    $conversionAPITest
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_PIXEL_BRAND_OVERRIDE',
                    $brandOverride
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_PIXEL_ACTIVE',
                    $enabled
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_MICRODATA',
                    $hasMicrodata
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_GOOGLE_EXPORT_EMPTY_DESC',
                    $exportEmptyDesc
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_PIXEL_IMAGE_TYPE',
                    $imageType
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD',
                    $descriptionFieldId
                );
                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_PIXEL_TAX_INCLUDED',
                    $taxIncluded
                );

                $res &= FFPUtils::removeOrUpdateConfig(
                    'FAB_PIXEL_COMBINATIONS',
                    $is_export_combinations
                );

                if (!$res) {
                    $errors[] = $this->l('The configuration could not be updated.');
                    return $this->displayError($errors);
                }

                $this->_clearCache('init_page_view.tpl');
                $this->_clearCache('order_confirmation.tpl');

                return $this->displayConfirmation($this->l('Settings updated'));
            }
        }
    }

    public function processIncrementalStorage()
    {

        $res = true;
        $errors = array();

        if (Tools::isSubmit('submit_incremental_storage')) {
            $chunkActive = (int)Tools::getValue('FAB_FACEBOOK_CHUNK_ACTIVE');
            $chunkQty = (int)Tools::getValue('FAB_FACEBOOK_CHUNK_QTY');

            if ($chunkQty <= 0) {
                $chunkQty = 1;
                $chunkActive = false;
            }

            $res &= FFPUtils::removeOrUpdateConfig(
                'FAB_FACEBOOK_CHUNK_ACTIVE',
                $chunkActive
            );
            $res &= FFPUtils::removeOrUpdateConfig(
                'FAB_FACEBOOK_CHUNK_QTY',
                $chunkQty
            );

            if (!$res) {
                $errors[] = $this->l('The configuration could not be updated.');
                return $this->displayError($errors);
            }

            return $this->displayConfirmation($this->l('Settings updated'));
        }
    }

    public function getContent()
    {

        $this->context->controller->addJS($this->_path .'views/js/admin_'.$this->version.'.js');
        $this->context->controller->addCSS($this->_path.'views/css/admin.css', 'all');

        $this->context->controller->addJS($this->_path.'views/js/select2.min.js');
        $this->context->controller->addCSS($this->_path.'views/css/select2.min.css', 'all');
        $this->context->controller->addCSS($this->_path.'views/css/select2bootstrap.min.css', 'all');

        $this->html = $this->processMainSettings();
        $this->html .= $this->processIncrementalStorage();
        $this->html .= $this->processCategoryMapping();
        $this->html .= $this->processAttributeMapping();
        $this->html .= $this->getConfigurationLayout();

        return $this->html;
    }


    public function displayExport($activeLangs)
    {
        $params = array(
            'activeLangs' => $activeLangs,
            'noGoogleDefinitions' => $this->isTableEmpty('fabfacebookpixel_gc_lang'),
            'noFacebookDefinitions' => $this->isTableEmpty('fabfacebookpixel_fc_lang'),
            'token' => Tools::getAdminTokenLite('FabFacebookPixelAjax'),
            'exportControllerUrl' => $this->context->link->getModuleLink(
                'fabfacebookpixel',
                'catalogexport',
                array(),
                null,
                null,
                null,
                true
            )
        );

        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/section_export.tpl',
            $params
        );
        return $tpl->fetch();
    }

    public function displayReferenceWarning()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();
        $use_reference = (int)Configuration::get('FAB_PIXEL_USE_REFERENCE', null, $idShopGroup, $idShop);
        $token = Tools::getAdminTokenLite('FabFacebookPixelAjax');
        $params = array(
            'useReference' => $use_reference,
            'token' => $token
        );
        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/reference_warning.tpl',
            $params
        );
        return $tpl->fetch();
    }

    public function displayForm()
    {
        $id_shop_group = Shop::getContextShopGroupID();
        $id_shop = Shop::getContextShopID();
        $id_language = $this->context->language->id;

        $image_types = $this->getImageTypes();
        $description_fields = $this->getDescriptionField();
        $attribute_groups_list = AttributeGroup::getAttributesGroups($id_language);
        $show_export_combinations = true;

        if (FFPUtils::isPs6()) {
            $show_export_combinations = false;
        }

        // Load current value
        $is_pixel_active = Configuration::get(
            'FAB_FACEBOOK_PIXEL_ACTIVE', null, $id_shop_group, $id_shop
        );

        $pixel_id = Configuration::get(
            'FAB_FACEBOOK_PIXEL_ID', null, $id_shop_group, $id_shop
        );

        $is_debug = Configuration::get(
            'FAB_FACEBOOK_DEBUG', null, $id_shop_group, $id_shop
        );

        $conversionAPIToken = Configuration::get(
            'FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $id_shop_group, $id_shop
        );

        $conversionAPITest = Configuration::get(
            'FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $id_shop_group, $id_shop
        );

        $has_microdata = Configuration::get(
            'FAB_FACEBOOK_MICRODATA', null, $id_shop_group, $id_shop
        );

        $brand_override = Configuration::get(
            'FAB_PIXEL_BRAND_OVERRIDE', null, $id_shop_group, $id_shop
        );

        $is_empty_description = Configuration::get(
            'FAB_GOOGLE_EXPORT_EMPTY_DESC', null, $id_shop_group, $id_shop
        );


        $image_type = Configuration::get(
            'FAB_FACEBOOK_PIXEL_IMAGE_TYPE', null, $id_shop_group, $id_shop
        );

        $description_field = Configuration::get(
            'FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD', null, $id_shop_group, $id_shop
        );

        $is_tax_included = Configuration::get(
            'FAB_PIXEL_TAX_INCLUDED', null, $id_shop_group, $id_shop
        );

        $is_export_combinations = Configuration::get(
            'FAB_PIXEL_COMBINATIONS', null, $id_shop_group, $id_shop
        );

        $current_index = AdminController::$currentIndex.'&configure='.$this->name;
        $token = Tools::getAdminTokenLite('AdminModules');
        $submit_action = 'submit_main_settings';

        // Reintroduced for PS < 1.6.1
        $showMicrodata = true;

        $params = array(
            'current_index' => $current_index,
            'token' => $token,
            'submit_action' => $submit_action,
            'is_pixel_active' => (int)$is_pixel_active,
            'pixel_id' => $pixel_id,
            'api_token' => $conversionAPIToken,
            'api_test' => $conversionAPITest,
            'brand_override' => $brand_override,
            'is_empty_description' => (int)$is_empty_description,
            'image_type' => $image_type,
            'description_field' => $description_field,
            'is_tax_included' => (int)$is_tax_included,
            'image_types' => $image_types,
            'description_fields' => $description_fields,
            'is_export_combinations' => $is_export_combinations,
            'attribute_groups_list' => $attribute_groups_list,
            'show_export_combinations' =>  $show_export_combinations,
            'has_microdata' => $has_microdata,
            'show_microdata' => $showMicrodata,
            'is_debug' => $is_debug
        );


        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/main_settings.tpl',
            $params
        );
        return $tpl->fetch();
    }


    public function displayCategoryMappingForm()
    {
        $idLang = $this->context->language->id;
        $currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $token = Tools::getAdminTokenLite('AdminModules');
        $submitAction = 'submit_category_mapping';
        $psCategories = Category::getAllCategoriesName(null, $idLang, true, null, true, "", "ORDER BY cl.`name` ASC");
        $googleDefinitions = $this->getExternalCategoryDefinitions("go");
        $facebookDefinitions = $this->getExternalCategoryDefinitions("fb");
        $mappedRows = $this->getCategoryMappings();
        $mappedRowsWithName = array();

        foreach ($mappedRows as $key => $row) {
            $mappedRowsWithName['row'.$key]['id_category'] = $row['id_category'];
            $mappedRowsWithName['row'.$key]['id_google_category'] = $row['id_google_category'];
            $mappedRowsWithName['row'.$key]['id_facebook_category'] = $row['id_facebook_category'];
            $mappedRowsWithName['row'.$key]['category_name'] = FFPUtils::getCategoryName($row['id_category'], $psCategories, 'ps');
            $mappedRowsWithName['row'.$key]['google_category_name'] =  FFPUtils::getCategoryName($row['id_google_category'], $googleDefinitions, 'go');
            $mappedRowsWithName['row'.$key]['facebook_category_name'] = FFPUtils::getCategoryName($row['id_facebook_category'], $facebookDefinitions, 'fb');
        }


        $params = array(
            'current_index' => $currentIndex,
            'token' => $token,
            'admin_token' => Tools::getAdminTokenLite('FabFacebookPixelAjax'),
            'submit_action' => $submitAction,
            'ps_categories' => $psCategories,
            'go_categories' => $googleDefinitions,
            'fb_categories' => $facebookDefinitions,
            'mapped_rows' =>  $mappedRowsWithName,
            'id_lang' => $idLang
        );

        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/category_mapping.tpl',
            $params
        );
        return $tpl->fetch();
    }

    public function displayAttributeMappingForm()
    {
        $idLang = $this->context->language->id;
        $currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $token = Tools::getAdminTokenLite('AdminModules');
        $submitAction = 'submit_attribute_mapping';

        $facebookAttributeGroups = array();
        $facebookAttributeGroups[] = array('label' => "Size", 'value' => FFPUtils::FAB_PIXEL_SIZE_MAPPING);
        $facebookAttributeGroups[] = array('label' => "Color", 'value' => FFPUtils::FAB_PIXEL_COLOR_MAPPING);
        $facebookAttributeGroups[] = array('label' => "Gender", 'value' => FFPUtils::FAB_PIXEL_GENDER_MAPPING);
        $facebookAttributeGroups[] = array('label' => "Material", 'value' => FFPUtils::FAB_PIXEL_MATERIAL_MAPPING);
        $facebookAttributeGroups[] = array('label' => "Pattern", 'value' => FFPUtils::FAB_PIXEL_PATTERN_MAPPING);

        $psAttributeGroups = AttributeGroup::getAttributesGroups($idLang);

        $mappedRows = $this->getAttributeMappings();
        $mappedRowsWithName = array();

        foreach ($mappedRows as $key => $row) {
            $mappedRowsWithName['row'.$key]['id_attribute_group'] = $row['id_attribute_group'];
            $mappedRowsWithName['row'.$key]['id_facebook_attribute_group'] = $row['id_facebook_attribute_group'];
            $mappedRowsWithName['row'.$key]['name_attribute_group'] = FFPUtils::getAttributeGroupName($row['id_attribute_group'], 'ps', $psAttributeGroups);
            $mappedRowsWithName['row'.$key]['name_facebook_attribute_group'] = FFPUtils::getAttributeGroupName($row['id_facebook_attribute_group'], 'facebook', $facebookAttributeGroups);
        }


        $params = array(
            'current_index' => $currentIndex,
            'token' => $token,
            'submit_action' => $submitAction,
            'facebook_attribute_groups' => $facebookAttributeGroups,
            'ps_attribute_groups' => $psAttributeGroups,
            'mapped_rows' =>  $mappedRowsWithName,
            'admin_token' => Tools::getAdminTokenLite('FabFacebookPixelAjax'),
        );

        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/attribute_mapping.tpl',
            $params
        );
        return $tpl->fetch();
    }


    public function displayCatalogStorageForm()
    {

        $id_shop_group = Shop::getContextShopGroupID();
        $id_shop = Shop::getContextShopID();
        $current_index = AdminController::$currentIndex.'&configure='.$this->name;
        $token = Tools::getAdminTokenLite('AdminModules');
        $submit_action = 'submit_incremental_storage';


        // Load current value
        $is_chunk_active = Configuration::get(
            'FAB_FACEBOOK_CHUNK_ACTIVE', null, $id_shop_group, $id_shop
        );

        $chunk_quantity = Configuration::get(
            'FAB_FACEBOOK_CHUNK_QTY', null, $id_shop_group, $id_shop
        );

        $params = array(
            'current_index' => $current_index,
            'token' => $token,
            'is_chunk_active' => (int)$is_chunk_active,
            'chunk_quantity' => (int)$chunk_quantity,
            'submit_action' => $submit_action
        );

        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/incremental_storage.tpl',
            $params
        );
        return $tpl->fetch();
    }

    /**
     * Get Image Types
     * @return array
     */
    protected function getImageTypes()
    {
        $imageTypes = ImageType::getImagesTypes();
        $imageTypeEmpty = array();
        $imageTypeEmpty['name'] = $this->l('Original Format');
        $imageTypeEmpty['id_image_type'] = 0;
        array_unshift($imageTypes, $imageTypeEmpty);
        return $imageTypes;
    }


    /**
     * Get Description Field
     * @return array
     */
    protected function getDescriptionField()
    {
        $descriptionFields = array();
        $descriptionFields[] =  array('id' => 1, 'label' => $this->l('Product\'s Description'));
        $descriptionFields[] =  array('id' => 2, 'label' => $this->l('Product\'s Short Description'));
        $descriptionFields[] =  array('id' => 3, 'label' => $this->l('Product Name'));
        return $descriptionFields;
    }

    public function getAttributeMappings()
    {
        $idShop = $this->context->shop->id;
        $tablename = 'fabfacebookpixel_attributes';
        $sql = "SELECT * FROM "._DB_PREFIX_.$tablename." WHERE id_shop = ".(int)$idShop;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if (empty($result)) {
            $result = array();
            $result[0]['id_attribute_group'] = null;
            $result[0]['id_facebook_attribute_group'] = null;
            $result[0]['name_attribute_group'] = null;
            $result[0]['name_facebook_attribute_group'] = null;
            return $result;
        }
        return $result;
    }

    public function getCategoryMappings()
    {
        $idShop = $this->context->shop->id;
        $tablename = 'fabfacebookpixel';
        $sql = "SELECT * FROM "._DB_PREFIX_.$tablename." WHERE id_shop = ".(int)$idShop;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if (empty($result)) {
            $result = array();
            $result[0]['id_category'] = null;
            $result[0]['id_google_category'] = null;
            $result[0]['id_facebook_category'] = null;
            $result[0]['category_name'] = null;
            $result[0]['google_category_name'] = null;
            $result[0]['facebook_category_name'] = null;
            return $result;
        }
        return $result;
    }

    public function loadSQLFile($sql_file)
    {
        $sql_content = Tools::file_get_contents($sql_file);

        $sql_content = str_replace('PREFIX_', _DB_PREFIX_, $sql_content);
        $sql_requests = preg_split("/;\s*[\r\n]+/", $sql_content);

        $result = true;
        foreach ($sql_requests as $request) {
            if (!empty($request)) {
                $result &= Db::getInstance()->execute(trim($request));
            }
        }

        return $result;
    }

    protected function isTableEmpty($tableName)
    {
        $sql = "SELECT 1 FROM "._DB_PREFIX_.$tableName." LIMIT 1;";
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if (!empty($result)) {
            return false;
        }
        return true;
    }

    protected function getExternalCategoryDefinitions($sourceType)
    {
        $tablename = "fabfacebookpixel_gc_lang";
        $prefix = "google";
        if ($sourceType == "fb") {
            $tablename = "fabfacebookpixel_fc_lang";
            $prefix = "facebook";
        }
        $langId = $this->context->language->id;

        $locale = FFPUtils::getUniversalISOCodeFromLang($langId);

        $sql = "SELECT id_".$prefix."_category,iso_code,".$prefix."_category_description 
            FROM "._DB_PREFIX_.$tablename." WHERE iso_code = '".pSQL($locale)."'";
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        return $result;
    }

    protected function getExternalCategoryDefinitionSelected($sourceType, $idCategory)
    {
        $tablename = "fabfacebookpixel";
        $prefix = "google";
        if ($sourceType == "fb") {
            $tablename = "fabfacebookpixel_f";
            $prefix = "facebook";
        }
        $idExternalCategoryId = '';
        $sql = "SELECT id_".$prefix."_category FROM "._DB_PREFIX_.$tablename."  
        WHERE id_category = '".(int)$idCategory."' LIMIT 1";
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($result as $item) {
            $idExternalCategoryId = $item['id_'.$prefix.'_category'];
            break;
        }
        return $idExternalCategoryId;
    }

    protected function removeClassIndex()
    {
        if (FFPUtils::isPs6()) {
            if (file_exists(_PS_ROOT_DIR_.'/cache/class_index.php')) {
                unlink(_PS_ROOT_DIR_.'/cache/class_index.php');
            }
        }
    }

    protected function getCatalogExportInfoMsg()
    {
        return '<div class="alert alert-warning">'.
            $this->l('This section is available only in a single shop context. Please select one shop.').
            '</div>';
    }


    protected function getCurrentShopInfoMsg()
    {
        $shop_info = null;

        if (Shop::isFeatureActive()) {
            if (Shop::getContext() == Shop::CONTEXT_SHOP) {
                $shop_info = sprintf(
                    $this->l('The modifications will be applied to shop: %s'),
                    $this->context->shop->name
                );
            } elseif (Shop::getContext() == Shop::CONTEXT_GROUP) {
                $shop_info = sprintf(
                    $this->l('The modifications will be applied to this group: %s'),
                    Shop::getContextShopGroup()->name
                );
            } else {
                $shop_info = $this->l('The modifications will be applied to all shops and shop groups');
            }

            return '<div class="alert alert-info">'.
                $shop_info.
                '</div>';
        } else {
            return '';
        }
    }

    public function hookDisplayAdminProductsExtra($params)
    {
        $this->output .= $this->displayProductsExtra($params);
        return $this->output;
    }

    public function hookActionProductUpdate($params)
    {

        $tablename = "fabfacebookpixel_prodconf";
        $isMyTab = Tools::getValue('fabfacebookpixel_product_tab');

        if (!isset($isMyTab)) {
            return;
        }
        $fab_product_exclusion = (int)Tools::getValue('fab_product_exclusion');
        $id_lang = $this->context->language->id;
        $id_shop = (int)$this->context->shop->id;
        $id_product = $params['id_product'];
        $shops = array();
        $shops[] = Shop::getShop($id_shop);
        $allshop = array();
        $allshop['id_shop'] = 0;

        if (Shop::isFeatureActive()) {
            if (Shop::getContext() == Shop::CONTEXT_ALL) {
                $shops = Shop::getShops();
                $shops[] = $allshop;
            }
        }

        if (Validate::isLoadedObject($product = new Product($id_product, true, $id_lang))) {
            if ($fab_product_exclusion == 1) {
                foreach ($shops as $shop) {
                    $sql = "INSERT INTO " . _DB_PREFIX_ . $tablename . "
                    (`id_product`, `id_shop`)
	                VALUES
	                (" . (int)$id_product . ", " . (int)$shop['id_shop'] . ")
	               ON DUPLICATE KEY UPDATE id_product = VALUES(id_product),
	               id_shop = VALUES(id_shop)";

                    if (!Db::getInstance()->execute($sql)) {
                        return false;
                    }
                }
            } else {
                foreach ($shops as $shop) {
                    $sql = "DELETE FROM " . _DB_PREFIX_ . $tablename . " WHERE id_product = " . (int)$id_product . " AND id_shop = " . (int)$shop['id_shop'];
                    if (!Db::getInstance()->execute($sql)) {
                        return false;
                    }
                }
            }
        }
    }

    public function displayProductsExtra($params)
    {
        $idShop = $this->context->shop->id;
        $idProduct = (isset($params['id_product']))? (int)$params['id_product'] : Tools::getValue('id_product');
        $saveButton = 1;
        $token = Tools::getAdminTokenLite('AdminProducts');
        if (FFPUtils::isPs6()) {
            $saveButton = 0;
        }
        // Back Link
        $backLink = $this->context->link->getAdminLink('AdminProducts', false, array('id_product' => $idProduct));

        $productStatus = FFPUtils::getProductStatus($idProduct, $idShop);

        $this->context->smarty->assign([
            "id_product" => $idProduct,
            "status" => $productStatus,
            "back_link" => $backLink,
            "save_button" => $saveButton,
            "token" => $token
        ]);

        return $this->display(__FILE__, 'views/templates/admin/product_tab.tpl');
    }


    protected function displayCatalogStorageInfo()
    {
        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/chunk_info.tpl',
            array()
        );
        return $tpl->fetch();
    }

    protected function getCatalogStorageInfoMsg()
    {

        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        // Get secure token (Configuration::get pulled out from empty argument, because of an issue on PHP < 5.5)
        $configSecureToken = Configuration::get('FAB_FACEBOOK_PIXEL_TOKEN', null, $idShopGroup, $idShop);

        if (empty($configSecureToken)) {
            Configuration::updateGlobalValue('FAB_FACEBOOK_PIXEL_TOKEN', md5(uniqid(rand(), true)));
        }

        //Build the Shop Domain, useful to display the catalog url for cron
        $shopProtocol = 'http:';
        $langId = $this->context->language->id;
        $currencyId = $this->context->currency->id;
        $currency = new Currency($currencyId);
        $currencyIso = $currency->iso_code;
        $langIso = Language::getIsoById($langId);
        $countryId = Configuration::get('PS_COUNTRY_DEFAULT', null, $idShopGroup, $idShop);
        $countryIso = Country::getIsoById($countryId);

        $shops = Shop::getShops(true, null);
        $currencies = Currency::getCurrencies(true, true, true);
        $languages = Language::getLanguages(true, $idShop);
        $countries = Country::getCountries($langId, true);
        $categories = Category::getCategories($langId);

        $tree_categories_helper = new HelperTreeCategories('categories-treeview');
        $tree_categories_helper->setRootCategory(
            (Shop::getContext() == Shop::CONTEXT_SHOP ? Category::getRootCategory()->id_category : 0)
        );
        $tree_categories_helper->setUseCheckBox(true);
        $tree_categories_helper->setInputName('categoryBox');

        if (Tools::usingSecureMode()) {
            $shopProtocol = 'https:';
        }

        $shopUrl = _PS_BASE_URL_.__PS_BASE_URI__;

        if (Configuration::get('PS_SSL_ENABLED', null, $idShopGroup, $idShop)) {
            $shopUrl = _PS_BASE_URL_SSL_.__PS_BASE_URI__;
        }

        $storeCatalogUrl = $this->context->link->getModuleLink(
            'fabfacebookpixel',
            'storecatalog',
            array(),
            null,
            $langId,
            null,
            true
        );

        // This is a workaround for some PS version having a trouble with getModuleLink Relative Protocol
        if (strpos($storeCatalogUrl, 'http') !== false) {
            $shopProtocol = "";
        }

        $params = array(
            'shopProtocol' => $shopProtocol,
            'shopUrl' => $shopUrl,
            'shopId' => $idShop,
            'currencyIso' => $currencyIso,
            'currencyId' => $currencyId,
            'countryIso' => $countryIso,
            'countryId' => $countryId,
            'shops' => $shops,
            'currencies' => $currencies,
            'languages' => $languages,
            'countries' => $countries,
            'categories' => $categories,
            'storeCatalogUrl' => $storeCatalogUrl,
            'langIso' => $langIso,
            'langId' => $langId,
            'token' => Configuration::get('FAB_FACEBOOK_PIXEL_TOKEN', null, $idShopGroup, $idShop),
            'exportControllerUrl' => $this->context->link->getModuleLink(
                'fabfacebookpixel',
                'catalogexport',
                array(),
                null,
                null,
                null,
                true
            ),
            'categoryBox'  => $tree_categories_helper->render()
        );


        $tpl = $this->context->smarty->createTemplate(
            dirname(__FILE__).'/views/templates/admin/catalog_storage_info.tpl',
            $params
        );
        return $tpl->fetch();
    }
}
