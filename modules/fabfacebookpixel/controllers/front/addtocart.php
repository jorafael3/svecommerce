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

$libs_folder = dirname(__FILE__).'/../../libs/';
require_once($libs_folder . 'FFPUtils.php');
require_once($libs_folder . 'conversionapi/FFPConversionAPIUtils.php');

if (!defined('_PS_VERSION_')) {
    exit;
}


class FabFacebookPixelAddToCartModuleFrontController extends ModuleFrontController
{

    protected $result;
    public $ssl = true;

    public function __construct()
    {
        $this->className = 'FabFacebookPixelAddToCartModuleFrontController';
        parent::__construct();
        $this->result = '';
    }


    public function displayAjax()
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $eventId = FFPConversionAPIUtils::generateEventId();
        $createAndRemoveAddToCartResult = FFPUtils::createAndRemoveAddToCartEvent($eventId, 'add-to-cart', false);
        $eventId = $createAndRemoveAddToCartResult['event_id'];


        $is_export_combinations = (int)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $idShopGroup, $idShop);
        $is_tax_included = Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);

        if (Tools::getValue('action') === 'add-to-cart') {
            $langId = $this->context->language->id;
            $cart = $this->context->cart;
            $productId = Tools::getValue('id_product');
            $productIdAttribute = Tools::getValue('id_product_attribute');
            if ($is_export_combinations && $productIdAttribute>0) {
                $productId = $productId.'-'.$productIdAttribute;
            }
            $currencyId = $cart->id_currency;
            $currency = new Currency($currencyId, false, $langId, $idShop);
            $currencyCode = $currency->iso_code;
            $countryId = Configuration::get('PS_COUNTRY_DEFAULT', $idShopGroup, $idShop);
            $productPrice = FFPUtils::getProductPrice($productId, $idShop, $countryId, $currencyId, $productIdAttribute, $is_tax_included);

            ob_end_clean();
            header('Content-Type: application/json');
            die(json_encode(array(
                'cart' => $cart,
                'productId'   => $productId,
                'productPrice' => $productPrice,
                'currencyCode' => $currencyCode,
                'eventId' => $eventId
            )));
        }
    }

    protected function getData($url)
    {
        $ch = curl_init();
        $timeout = -1;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
