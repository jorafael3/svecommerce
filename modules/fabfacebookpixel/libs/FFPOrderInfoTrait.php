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

class FFPOrderInfoTrait
{
    public static function fillAndReturnData($order)
    {
        $data = array();

        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $context = Context::getContext();
        $is_export_combinations = (int)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $idShopGroup, $idShop);
        $is_tax_included = Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);

        $cart = null;
        $data['currency_code'] = "";
        $data['order_id'] = $order->id;
        $data['canonical_url'] = $context->shop->getBaseURL(true)."?controller=".$context->controller->php_self;

        if ($is_tax_included) {
            $data['total_paid'] = number_format((float)$order->total_paid_tax_incl, 2, '.', '');
        } else {
            $data['total_paid'] = number_format((float)$order->total_paid_tax_excl, 2, '.', '');
        }
        $data['total_products'] = number_format((float)$order->total_products, 2, '.', '');
        $data['total_products_tax_incl'] = number_format((float)$order->total_products_wt, 2, '.', '');

        $data['lang_id'] = $context->language->id;
        $data['fb_pixel_id']= Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);

        $data['product_list'] = array();

        if (version_compare(Tools::substr(_PS_VERSION_, 0, 5), '1.7.0', '<')) {
            $currency = Currency::getCurrencyInstance($order->id_currency);
            //$currency = new Currency($order->id_currency, false, $data['lang_id'], $idShop);
            $data['currency_code'] = $currency->iso_code;

        } else {
            $data['currency_code'] = Currency::getCurrency($order->id_currency)["iso_code"];
        }

        $data['products'] = $order->getOrderDetailList();

        foreach ($data['products'] as $k => $orderDetail) {
            $productId = $orderDetail['product_id'];
            $productIdAttribute = $orderDetail['product_attribute_id'];
            if ($is_export_combinations && $productIdAttribute>0) {
                $productId = $productId.'-'.$productIdAttribute;
                $data['products'][$k]['product_id'] = $productId;
            }
            array_push($data['product_list'], $productId);
        }
        return $data;
    }
}
