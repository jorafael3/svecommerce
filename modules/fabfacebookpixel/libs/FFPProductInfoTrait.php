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

class FFPProductInfoTrait
{
    public static function getProductDescription($product)
    {
        $_DESCRIPTION = 1;
        $_SHORT_DESCRIPTION = 2;
        $_NAME = 3;

        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $description = "";
        $descriptionFieldId = Configuration::get('FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD', null, $idShopGroup, $idShop);

        if (!empty($product)) {
            if (!empty($descriptionFieldId)) {
                if ($descriptionFieldId == $_DESCRIPTION) {
                    $description = $product->description;
                    if (empty($description)) {
                        $description = $product->description_short;
                        if (empty($description)) {
                            $description = $product->name;
                        }
                    }
                } else if ($descriptionFieldId == $_SHORT_DESCRIPTION) {
                    $description = $product->description_short;
                    if (empty($description)) {
                        $description = $product->name;
                    }
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
        $idShop = Shop::getContextShopID();
        $idLang = $context->language->id;

        $category = new Category($product->id_category_default, $idLang, $idShop);
        $categoryName = $category->name;
        return $categoryName;

    }

    public static function fillAndReturnData($product, $cart)
    {

        $data = array();

        FFPUtils::initUtils();

        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $context = Context::getContext();
        $data['lang_id'] = $context->language->id;
        $data["googleDefinition"] = "";

        $link = $context->link;
        $data["fb_pixel_id"] = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $id_country = Configuration::get('PS_COUNTRY_DEFAULT', null, $idShopGroup, $idShop);
        $is_tax_included =Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);

        if (!empty($context->country)) {
            $id_country = $context->country->id;
        }

        $data["product_attribute_id"] = 0;


        $currencyId = $cart->id_currency;
        $data["id_product"] = $product["id_product"];
        $data["product_attribute_id"] = (int)$product["id_attribute"];


        $currency = Currency::getCurrencyInstance($currencyId);
        //$currency = new Currency($currencyId, $data["lang_id"], $idShop);
        $data["currency_code"] = $currency->iso_code;

        $productObj = new Product($data["id_product"], false, $data["lang_id"], $idShop);
        $data["product_name"] = htmlspecialchars(str_replace (array("\t", "\r\n", "\n", "\r"), ' ', $productObj->name));
        $data["description"] = htmlspecialchars(strip_tags(str_replace (array("\t", "\r\n", "\n", "\r"), ' ', self::getProductDescription($productObj))));

        if (FFPUtils::isPsLowerThan('1.6.1.0')) {
            $image = Image::getCover($product["id_product"]);
        } else {
            $image = Image::getBestImageAttribute($idShop, $context->language->id, $product["id_product"], $data["product_attribute_id"]);
        }
        $imageTypeId = Configuration::get('FAB_FACEBOOK_PIXEL_IMAGE_TYPE', null, $idShopGroup, $idShop);

        if ($imageTypeId == 0) {
            $imageTypeString = null;
        } else {
            $imageTypeObject = new ImageType($imageTypeId);
            $imageTypeString = $imageTypeObject->name;
        }

        $data["brand"] = htmlspecialchars(Manufacturer::getNameById($productObj->id_manufacturer));
        $data["condition"] = $productObj->condition;
        $data["availability"] = $productObj->available_for_order;
        $productCategoryRewrite = Category::getLinkRewrite($productObj->id_category_default, $data["lang_id"]);

        if (is_array($productObj->link_rewrite)) {
            $alias = $productObj->link_rewrite[(int)$data['lang_id']];
        } else {
            $alias = $productObj->link_rewrite;
        }

        $data["canonical_url"] = $link->getProductLink($productObj, $alias, $productCategoryRewrite, null, $data["lang_id"], $idShop, $data["product_attribute_id"]);
        $data["image_url"] = $link->getImageLink(
            $productObj->link_rewrite,
            $product["id_product"].'-'.$image['id_image'],
            $imageTypeString
        );

        $data["product_price"] = FFPUtils::getProductPrice($product["id_product"], $idShop, $id_country, $currencyId, $data["product_attribute_id"], $is_tax_included);

        $data["default_category_id"] = $productObj->id_category_default;
        $data["product_category"] = htmlspecialchars(self::getProductCategory($productObj));

        $gtin = (!empty($productObj->ean13))?$productObj->ean13:$productObj->upc;
        $data['gtin'] = $gtin;

        if (!FFPUtils::isPsLowerThan('1.7.7')) {
            $data['mpn'] = $productObj->mpn;
        } else {
            $data['mpn'] = '';
        }

        if ((int)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $idShopGroup, $idShop) && $data["product_attribute_id"]>0) {
            $data["id_product"] = $data["id_product"].'-'.$data["product_attribute_id"];
            $combination = new Combination($data["product_attribute_id"]);
            $data['gtin'] = (!empty($combination->ean13))?$combination->ean13:$combination->upc;
            if (empty($data['gtin'])) {
                $data['gtin'] = $gtin;
            }

            if (!FFPUtils::isPsLowerThan('1.7.7')) {
                $data['mpn'] = (!empty($combination->mpn))?$combination->mpn:$productObj->mpn;
            }
        }


        return $data;
    }
}
