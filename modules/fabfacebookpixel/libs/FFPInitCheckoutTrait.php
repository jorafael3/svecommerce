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


class FFPInitCheckoutTrait
{
    public static function fillAndReturnData($cart)
    {
        $data = array();
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();
        $context = Context::getContext();
        $currencyId = $cart->id_currency;
        $currency = Currency::getCurrencyInstance($currencyId);
        $is_tax_included = Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);
        $amount = $cart->getOrderTotal($is_tax_included, Cart::ONLY_PRODUCTS);
        $data["currency_code"] = $currency->iso_code;
        $data["value"] = $amount;
        $data['canonical_url'] = $context->shop->getBaseURL(true)."?controller=".$context->controller->php_self;
        $products = $cart->getProducts();
        $data['content_type'] = 'product';
        $data['content_ids'] = array();

        foreach ($products as $product) {
            if ((int)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $idShopGroup, $idShop) && $product['id_product_attribute'] > 0) {
                $data['content_ids'][] = $product['id_product'].'-'.$product['id_product_attribute'];
            } else {
                $data['content_ids'][] = $product['id_product'];
            }
        }

        return $data;
    }
}
