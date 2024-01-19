<?php
/**
 * 2020 M-Code Artisan
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *
 * @author    M-Code Artisan <manfredi.petruso@gmail.com>
 * @copyright  2020 M-Code Artisan
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once(__DIR__ . '/conversionapi/FFPConversionAPIUtils.php');


class FFPUtils
{
    private static $recursionSecurityCounter;

    const FAB_PIXEL_SIZE_MAPPING = 1;
    const FAB_PIXEL_COLOR_MAPPING = 2;
    const FAB_PIXEL_GENDER_MAPPING = 3;
    const FAB_PIXEL_MATERIAL_MAPPING = 4;
    const FAB_PIXEL_PATTERN_MAPPING = 5;

    public static function initUtils() {
        self::$recursionSecurityCounter = 0;
    }

    public static function getUniversalISOCode($lang)
    {
        if (self::isPs6()) {
            $ISOCodeArray  = explode("-", $lang["language_code"]);
            $ISOCode = $ISOCodeArray[0].'-'.Tools::strtoupper($ISOCodeArray[1]);
        } else {
            $ISOCode = $lang["locale"];
        }
        return $ISOCode;
    }

    public static function getUnderscoredISOCode($ISOCode)
    {
        $ISOCode = str_replace('-', '_', $ISOCode);
        return $ISOCode;
    }

    public static function isPs6()
    {
        if (version_compare(Tools::substr(_PS_VERSION_, 0, 5), '1.7.0', '<')) {
            return true;
        }
        return false;
    }

    public static function isPsLowerThan($version)
    {
        return version_compare(Tools::substr(_PS_VERSION_, 0, 5), $version, '<');
    }

    public static function getUniversalISOCodeFromLang($id_lang)
    {
        $iso_code = Language::getIsoById($id_lang);
        $locale = Language::getLanguageCodeByIso($iso_code);

        if (self::isPs6()) {
            $localeArray  = explode("-", $locale);
            $locale = $localeArray[0]."-".Tools::strtoupper($localeArray[1]);
        } else {
            $locale = Language::getLocaleByIso($iso_code);
        }

        return $locale;
    }

    public static function log($message)
    {
        if (self::isDebug()) {
            $moduleName = 'fabfacebookpixel';
            $logFile = _PS_MODULE_DIR_ . $moduleName . '/fabfacebookpixel.log';
            $logRow = date("Y-m-d H:i:s") . ' - ' . $message . PHP_EOL;
            file_put_contents($logFile, $logRow, FILE_APPEND);
        }
    }

    public static function isDebug()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $isDebug = (int) Configuration::get(
            'FAB_FACEBOOK_DEBUG', null, $idShopGroup, $idShop
        );

        return $isDebug;
    }

    public static function getExternalCategoryDefinition($id_category, $id_lang, $sourceType)
    {
        // Table and field definitions
        $tablename_lang = "fabfacebookpixel_gc_lang";
        $tablename = "fabfacebookpixel";
        $prefix = "google";

        if ($sourceType == "fb") {
            $tablename_lang = "fabfacebookpixel_fc_lang";
            $prefix = "facebook";
        }

        self::$recursionSecurityCounter++;

        if (empty($id_category) || !Category::categoryExists($id_category)) {
            return '';
        }

        if (self::$recursionSecurityCounter > 1000) {
            return '';
        }

        $id_shop = Shop::getContextShopID();

        $external_category_description = '';
        $id_external_category = 0;

        $locale = self::getUniversalISOCodeFromLang($id_lang);

        $sql = 'SELECT fgl.'.$prefix.'_category_description as '.$prefix.'_category_description, 
                fgl.id_'.$prefix.'_category as id_'.$prefix.'_category 
                FROM '._DB_PREFIX_.$tablename_lang.' as fgl, '._DB_PREFIX_.$tablename.' as fp 
                WHERE fgl.id_'.$prefix.'_category = fp.id_'.$prefix.'_category AND fp.id_category = '.$id_category.' 
                AND fgl.iso_code = "'.$locale.'"
                AND fp.id_shop = '.$id_shop.' LIMIT 1';
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if (!empty($result)) {
            foreach ($result as $item) {
                $external_category_description = stripslashes($item[$prefix.'_category_description']);
                $id_external_category = $item['id_'.$prefix.'_category'];
                break;
            }
        }

        if ($id_external_category == 0 || empty($result)) {
            $categoryObj = new Category($id_category, $id_lang, $id_shop);
            $isParentCategorAvailable = false;
            if (self::isPs6()) {
                if (isset(Context::getContext()->shop)) {
                    $id_shop = Context::getContext()->shop->id;
                    $isParentCategorAvailable = $categoryObj->isParentCategoryAvailable($id_shop);
                }
            } else {
                $isParentCategorAvailable = $categoryObj->isParentCategoryAvailable();
            }
            if ($isParentCategorAvailable and !$categoryObj->isRootCategoryForAShop()) {
                $id_parent_category = $categoryObj->getParentsCategories($id_lang)[1]['id_category'];
                $external_category_description = self::getExternalCategoryDefinition($id_parent_category, $id_lang, $sourceType);
            }
        }
        return $external_category_description;
    }

    public static function getCategoryName($idCategory, $categoryArray , $sourceType) {
        if ($sourceType == "go") {
            foreach ($categoryArray as $category) {
                if ($idCategory == $category['id_google_category']) {
                    return $category['google_category_description'];
                }
            }
        }
        if ($sourceType == "fb") {
            foreach ($categoryArray as $category) {
                if ($idCategory == $category['id_facebook_category']) {
                    return $category['facebook_category_description'];
                }
            }
        }
        if ($sourceType == "ps") {
            foreach ($categoryArray as $category) {
                if ($idCategory == $category['id_category']) {
                    return $category['name'];
                }
            }

        }
        return "";

    }

    public static function getProductStatus($idProduct, $idShop)
    {
        $status = 0;
        $tablename = "fabfacebookpixel_prodconf";

        if (Shop::isFeatureActive()) {
            if (Shop::getContext() == Shop::CONTEXT_ALL) {
                $idShop = 0;
            }
        }
        $sql = "SELECT `id_product`  FROM "._DB_PREFIX_.$tablename."  
        WHERE id_product = ".(int)$idProduct." AND (id_shop = ".(int)$idShop.") LIMIT 1";
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if (!empty($result)) {
            $status = 1;
        }
        return $status;
    }

    public static function getProductPrice($id_product, $id_shop, $id_country, $id_currency, $productIdAttribute, $is_tax_included)
    {
        $specific_price_output = null;

        $product_price = number_format((float)Product::priceCalculation(
            (int)$id_shop,
            (int)$id_product,
            (int)$productIdAttribute,
            (int)$id_country,
            0,
            0,
            (int)$id_currency,
            1,
            1,
            $is_tax_included,
            6,
            false,
            true,
            true,
            $specific_price_output,
            true,
            0,
            true,
            null,
            1,
            null
        ), 2, '.', '');

        return $product_price;
    }

    public static function resolveGender($id_gender)
    {
        if (!empty($id_gender)) {
            if ($id_gender == 1) {
                return "m";
            } else {
                return "f";
            }
        } else {
            return null;
        }
    }

    /**
     * Get Customer Groups
     */

    protected static function getCustomerGroups()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $context = Context::getContext();
        $id_default_lang = intval(Configuration::get('PS_LANG_DEFAULT', null, $idShopGroup, $idShop));
        $group_names = array();
        if (!empty($context)) {
            $id_customer = $context->customer->id;
            $id_groups = Customer::getGroupsStatic($id_customer);
            foreach ($id_groups as $id_group) {
                $group = new Group($id_group, $id_default_lang, $idShop);
                $group_names[] = $group->name;
            }
        }
        return $group_names;
    }

    public static function getCustomerGroupsString()
    {
        $customer_groups = self::getCustomerGroups();
        $customer_groups_string = implode(",", $customer_groups);
        return $customer_groups_string;
    }

    public static function getDefaultCustomerGroup()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();
        $context = Context::getContext();
        $id_default_lang = intval(Configuration::get('PS_LANG_DEFAULT', null, $idShopGroup, $idShop));

        $group_name = "";
        if (!empty($context)) {
            $id_customer = $context->customer->id;
            $id_default_group = Customer::getDefaultGroupId($id_customer);
            $group = new Group($id_default_group, $id_default_lang, $idShop);
            $group_name = $group->name;
        }
        return $group_name;
    }


    public static function getProductAddedInCart()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $context = Context::getContext();

        $idProduct = (int)Tools::getValue('id_product');
        $idProductAttribute = null;

        $groupArray = array();

        if (self::isPs6()) {
            $allParameters = $_POST + $_GET;
            foreach($allParameters as $key=>$param) {
                if (strpos($key,"group" ) !== false) {
                    $groupKey = explode("_", $key);
                    $groupArray[$groupKey[1]] = $param;
                }
            }
        } else {
            if (Tools::getIsset('group')) {
                $groupArray  = Tools::getValue('group');
            }
        }

        if (!empty($groupArray)) {
            $idProductAttribute = (int) self::getIdProductAttributeByIdAttributes(
                $idProduct,
                $groupArray,
                false
            );
        }


        $productPriceWt = FFPUtils::getProductPrice($idProduct, $context->shop->id, $context->country->id, $context->currency->id, $idProductAttribute,true);
        $productPrice = FFPUtils::getProductPrice($idProduct, $context->shop->id, $context->country->id, $context->currency->id, $idProductAttribute,false);

        $is_tax_included = Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);

        $price = null;
        if ($is_tax_included) {
            $price = $productPriceWt;
        } else {
            $price = $productPrice;
        }

        $productsAdded = array('id_product' =>$idProduct, 'id_product_attribute' => $idProductAttribute, 'price' => $price, 'total' => $price, 'quantity' => 1);

        return $productsAdded;
    }

    public static function getCombinationReduced($combination, $idShop)
    {
        $tablename = 'fabfacebookpixel_attributes';
        $sql = "SELECT * FROM "._DB_PREFIX_.$tablename." WHERE id_shop = ". (int)$idShop;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        foreach ($result as $attributeMapping) {
            if (!empty($combination[$attributeMapping['id_attribute_group']])) {
                unset($combination[$attributeMapping['id_attribute_group']]);
            }
            if (!empty($combination['id_product_attribute'])) {
                unset($combination['id_product_attribute']);
            }

        }

        return $combination;

    }

    public static function getAttributeGroupName($idAttributeGroup, $sourceType, $attributeGroupDefinitions)
    {
        if ($sourceType == "facebook") {
            foreach ($attributeGroupDefinitions as $attributeGroupDefinition) {
                if ($attributeGroupDefinition['value'] == $idAttributeGroup) {
                    return $attributeGroupDefinition['label'];
                }
            }
        } else {
            foreach ($attributeGroupDefinitions as $attributeGroupDefinition) {
                if ($attributeGroupDefinition['id_attribute_group'] == $idAttributeGroup) {
                    return $attributeGroupDefinition['name'];
                }
            }
        }
        return "";
    }

    public static function getMappedAttribute($combination, $idProduct, $idFacebookAttribute, $idShop)
    {
        $tablename = 'fabfacebookpixel_attributes';
        $sql = "SELECT * FROM "._DB_PREFIX_.$tablename." WHERE id_shop = ".(int)$idShop;
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $attributeMapped = "";

        if (empty($result)) {
            return $attributeMapped;
        }

        foreach ($result as $attributeMapping) {

            if (!empty($combination[$attributeMapping['id_attribute_group']]) && $attributeMapping['id_facebook_attribute_group'] == $idFacebookAttribute) {
                if ($idProduct == $attributeMapping['id_product']) {
                    $attributeMapped = $combination[$attributeMapping['id_attribute_group']]['value'];
                    return $attributeMapped;
                } else {
                    $attributeMapped = $combination[$attributeMapping['id_attribute_group']]['value'];
                }
            }
        }

        return $attributeMapped;
    }

    public static function removeOrUpdateConfig($key, $value)
    {

        $res = true;
        $id_shop = intval(Shop::getContextShopID());
        $id_shop_group = intval(Shop::getContextShopGroupID());

        if ($id_shop_group == 0 && $id_shop == 0) {
            Configuration::deleteByName($key);
        } elseif ($id_shop_group != 0 && $id_shop == 0) {
            $allContextValue = Configuration::getGlobalValue($key);
            Configuration::deleteByName($key);
            Configuration::updateGlobalValue($key, $allContextValue);
        }

        if (is_null($value)) {
            Configuration::deleteFromContext($key);
        } else {
            $res = Configuration::updateValue(
                $key,
                $value,
                false,
                $id_shop_group,
                $id_shop
            );
        }

        return $res;
    }

    public static function createAndRemoveAddToCartEvent($eventId, $eventType, $isConversionApi)
    {
        $isAjaxCartEnabled = (int)(Configuration::get('PS_BLOCK_CART_AJAX'));
        $tablename = 'fabfacebookpixel_events';
        $fbp = FFPConversionAPIUtils::getFbp();
        $currentDateTime=date("Y-m-d H:i:s");

        if (!($isAjaxCartEnabled) && FFPUtils::isPs6()) {
            return 0;
        }

        $checkSQL = "SELECT * FROM "._DB_PREFIX_.$tablename." WHERE fbp = '".pSQL($fbp)."' AND event_type = '".$eventType . "'";
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($checkSQL);
        if (empty($result)) {
            $insertSQL = "INSERT INTO " . _DB_PREFIX_ . $tablename . "
                    (`event_id`, `event_type` , `fbp`, `last_update`, `pixel` , `conversion_api`)
	                VALUES
	                ('" . pSQL($eventId) . "', '" . pSQL($eventType) . "', '" . pSQL($fbp) . "', '" . $currentDateTime . "', '" . (int)!$isConversionApi . "', '" . (int)$isConversionApi ."')";
            Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($insertSQL);
            return array('event_id' => $eventId, 'conversion_api' => (int)!$isConversionApi, 'pixel' => (int)$isConversionApi);
        } else {
            if ($result['pixel'] == 1 && $result['conversion_api'] == 1) {
                $deleteSQL = "DELETE FROM " . _DB_PREFIX_ . $tablename . " WHERE event_type = '" . pSQL($eventType) . "' AND fbp = '" . pSQL($fbp) . "'";
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($deleteSQL);
                $insertSQL = "INSERT INTO " . _DB_PREFIX_ . $tablename . "
                    (`event_id`, `event_type` , `fbp`, `last_update`, `pixel` , `conversion_api`)
	                VALUES
	                ('" . pSQL($eventId) . "', '" . pSQL($eventType) . "', '" . pSQL($fbp) . "', '" . $currentDateTime . "', '" . (int)!$isConversionApi . "', '" . (int)$isConversionApi ."')";
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($insertSQL);
                return array('event_id' => $eventId, 'conversion_api' => (int)!$isConversionApi, 'pixel' => (int)$isConversionApi);
            }
            if (empty($isConversionApi)) {
                $updateSQL = "UPDATE ". _DB_PREFIX_ . $tablename . " SET pixel = 1";
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($updateSQL);
            }
            if (!empty($isConversionApi)) {
                $updateSQL = "UPDATE ". _DB_PREFIX_ . $tablename . " SET conversion_api = 1";
                Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($updateSQL);
            }
            return array('event_id' => $result['event_id'], 'pixel' => $result['pixel'], 'conversion_api' => $result['conversion_api']);
        }
    }

    public static function cleanCartEvents($eventType)
    {
        $tablename = 'fabfacebookpixel_events';
        $fbp = FFPConversionAPIUtils::getFbp();
        $deleteSQL = "DELETE FROM " . _DB_PREFIX_ . $tablename . " WHERE event_type = '" . pSQL($eventType) . "' AND fbp = '" . pSQL($fbp) . "'";
        Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($deleteSQL);
    }

    public static function getIdProductAttributeByIdAttributes($idProduct, $idAttributes, $findBest = false)
    {
        $idProduct = (int) $idProduct;

        if (!is_array($idAttributes) && is_numeric($idAttributes)) {
            $idAttributes = array((int) $idAttributes);
        }

        if (!is_array($idAttributes) || empty($idAttributes)) {
            throw new PrestaShopException(
                sprintf(
                    'Invalid parameter $idAttributes with value: "%s"',
                    print_r($idAttributes, true)
                )
            );
        }

        $idAttributesImploded = implode(',', array_map('intval', $idAttributes));
        $idProductAttribute = Db::getInstance()->getValue(
            '
            SELECT
                pac.`id_product_attribute`
            FROM
                `' . _DB_PREFIX_ . 'product_attribute_combination` pac
                INNER JOIN `' . _DB_PREFIX_ . 'product_attribute` pa ON pa.id_product_attribute = pac.id_product_attribute
            WHERE
                pa.id_product = ' . $idProduct . '
                AND pac.id_attribute IN (' . $idAttributesImploded . ')
            GROUP BY
                pac.`id_product_attribute`
            HAVING
                COUNT(pa.id_product) = ' . count($idAttributes)
        );

        if ($idProductAttribute === false && $findBest) {
            //find the best possible combination
            //first we order $idAttributes by the group position
            $orderred = array();
            $result = Db::getInstance()->executeS(
                '
                SELECT
                    a.`id_attribute`
                FROM
                    `' . _DB_PREFIX_ . 'attribute` a
                    INNER JOIN `' . _DB_PREFIX_ . 'attribute_group` g ON a.`id_attribute_group` = g.`id_attribute_group`
                WHERE
                    a.`id_attribute` IN (' . $idAttributesImploded . ')
                ORDER BY
                    g.`position` ASC'
            );

            foreach ($result as $row) {
                $orderred[] = $row['id_attribute'];
            }

            while ($idProductAttribute === false && count($orderred) > 0) {
                array_pop($orderred);
                $idProductAttribute = Db::getInstance()->getValue(
                    '
                    SELECT
                        pac.`id_product_attribute`
                    FROM
                        `' . _DB_PREFIX_ . 'product_attribute_combination` pac
                        INNER JOIN `' . _DB_PREFIX_ . 'product_attribute` pa ON pa.id_product_attribute = pac.id_product_attribute
                    WHERE
                        pa.id_product = ' . (int) $idProduct . '
                        AND pac.id_attribute IN (' . implode(',', array_map('intval', $orderred)) . ')
                    GROUP BY
                        pac.id_product_attribute
                    HAVING
                        COUNT(pa.id_product) = ' . count($orderred)
                );
            }
        }

        if (empty($idProductAttribute)) {
            throw new PrestaShopObjectNotFoundException('Can not retrieve the id_product_attribute');
        }

        return $idProductAttribute;
    }
}
