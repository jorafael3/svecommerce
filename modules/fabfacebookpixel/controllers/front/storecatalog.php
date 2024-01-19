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

$class_folder = dirname(__FILE__).'/../../libs/';
require_once($class_folder.'CatalogManager.php');


class FabFacebookPixelStoreCatalogModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    private $catalogManager = null;

    public function initContent()
    {

        $id_shop_group = 1;
        $id_shop = 1;
        $id_category = null;

        if (Tools::getValue('token') != Configuration::get('FAB_FACEBOOK_PIXEL_TOKEN', null, $id_shop_group, $id_shop)) {
            exit;
        }
        
        if (false != Tools::getValue('shopId')) {
            $id_shop = Tools::getValue('shopId');
            $id_shop_group = Shop::getGroupFromShop($id_shop);
        }
        
        $id_currency = Configuration::get('PS_CURRENCY_DEFAULT', null, $id_shop_group, $id_shop);
        $id_country =  Configuration::get('PS_COUNTRY_DEFAULT', null, $id_shop_group, $id_shop);
        $id_lang   = Configuration::get('PS_LANG_DEFAULT', null, $id_shop_group, $id_shop);
        $exportEmptyDesc = Configuration::get('FAB_GOOGLE_EXPORT_EMPTY_DESC', null, $id_shop_group, $id_shop);
        $descriptionFieldId = Configuration::get('FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD', null, $id_shop_group, $id_shop);
        $no_store_catalog = false;
        $catalogInfo = 0;
        
        if (Shop::isFeatureActive()) {
            $id_currency = Configuration::get('PS_CURRENCY_DEFAULT', null, $id_shop_group, $id_shop);
            $id_country = Configuration::get('PS_COUNTRY_DEFAULT', null, $id_shop_group, $id_shop);
            $id_lang = Configuration::get('PS_LANG_DEFAULT', null, $id_shop_group, $id_shop);
            $exportEmptyDesc = Configuration::get('FAB_GOOGLE_EXPORT_EMPTY_DESC', null, $id_shop_group, $id_shop);
            $descriptionFieldId = Configuration::get(
                'FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD',
                null,
                $id_shop_group,
                $id_shop
            );
        }
        
        $currency = new Currency($id_currency);
        $currency_iso = $currency->iso_code;


        if (false !== Tools::getValue('noStoreCatalog')) {
            $no_store_catalog = true;
        }

        if (false !== Tools::getValue('langId')) {
            $langId = Tools::getValue('langId');
            $langForCheck = new Language($langId);
            if ((bool)$langForCheck->active) {
                $id_lang = $langId;
            }
        }
        
        if (false !== Tools::getValue('catalogInfo')) {
            $catalogInfo = (int)Tools::getValue('catalogInfo');
        }

        if (false !== Tools::getValue('countryId')) {
            $countryId = Tools::getValue('countryId');
            $countryForCheck = new Country($countryId);
            if ((bool)$countryForCheck->active) {
                $id_country = $countryId;
            }
        }
        
        
        if (false !== Tools::getValue('currencyId')) {
            $currencyId = Tools::getValue('currencyId');
            $currencyObj = new Currency($currencyId);
            $currency_iso_tmp = $currencyObj->iso_code;
            if (Currency::exists($currency_iso_tmp, $id_shop)) {
                $currency_iso = $currency_iso_tmp;
            }
        }
        
        if (false !== Tools::getValue('categoryId')) {
            $id_category = Tools::getValue('categoryId');
        }
        
        $this->catalogManager = new CatalogManager(
            $id_shop,
            $id_shop_group,
            $id_lang,
            $id_country,
            $currency_iso,
            $id_category,
            $exportEmptyDesc,
            $descriptionFieldId,
            $catalogInfo
        );
        
        if ($no_store_catalog) {
            $this->catalogManager->generateProductCSV();
        } else {
            $this->catalogManager->generateProductCSV('"', true);
        }
    }
}
