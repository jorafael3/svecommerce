<?php
/**
 * 2021 M-Code Artisan
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
 * @copyright  2021 M-Code Artisan
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once('FFPUtils.php');

class FFPCartInfoTrait
{
    public static function getProductDescription($product)
    {
        $_DESCRIPTION = 1;
        $_SHORT_DESCRIPTION = 2;
        $_NAME = 3;

        $id_shop_group = Shop::getContextShopGroupID();
        $id_shop = Shop::getContextShopID();

        $description = "";
        $descriptionFieldId = Configuration::get('FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD', null, $id_shop_group, $id_shop);

        if (!empty($product)) {
            if (!empty($descriptionFieldId)) {
                if ($descriptionFieldId == $_DESCRIPTION) {
                    $description = $product->description;
                } else if ($descriptionFieldId == $_SHORT_DESCRIPTION) {
                    $description = $product->description_short;
                } else if ($descriptionFieldId == $_NAME) {
                    $description = $product->name;
                }
            } else {
                $description = $product->description;
            }
        }

        return $description;
    }

    public static function getProductCategory($product)
    {
        $context = Context::getContext();
        $id_shop = Shop::getContextShopID();
        $idLang = $context->language->id;

        $category = new Category($product->id_category_default, $idLang, $id_shop);
        $categoryName = $category->name;
        return $categoryName;

    }

    public static function fillAndReturnData($product, $cart)
    {

        $data = array();

        FFPUtils::initUtils();

        $context = Context::getContext();
        $data['lang_id'] = $context->language->id;

        $id_shop_group = Shop::getContextShopGroupID();
        $id_shop = Shop::getContextShopID();
        $data["fb_pixel_id"] = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $id_shop_group, $id_shop);

        $data["product_attribute_id"] = 0;

        $data["product_id"] = (int)$product['id_product'];
        $currencyId = $cart->id_currency;

        $data["product_attribute_id"] = (int)$product["id_product_attribute"];
        $data['canonical_url'] = $context->shop->getBaseURL(true)."?controller=".$context->controller->php_self;

        if ((int)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $id_shop_group, $id_shop) && $data["product_attribute_id"]>0) {
            $data["product_id"] = $data["product_id"].'-'.$data["product_attribute_id"];
        }

        $currency = Currency::getCurrencyInstance($currencyId);
        //$currency = new Currency($currencyId, $data["lang_id"], $id_shop);
        $data["currency_code"] = $currency->iso_code;

        // should be real quantity and total, though this is not clarified by facebook documentation
        $data["product_price"] = $product['price'];
        $data['quantity'] = 1;
        $data['total_price'] = $product['price'];

        return $data;
    }
}