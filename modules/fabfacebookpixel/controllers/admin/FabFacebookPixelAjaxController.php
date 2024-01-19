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

class FabFacebookPixelAjaxController extends ModuleAdminController
{
    public $ssl = true;

    protected function ajaxProcessFetchFacebookCategories()
    {
        $facebookCategoryFileBaseUrl = "https://www.facebook.com/products/categories/";
        $result = true;
        $activeLangs = Language::getLanguages(false);

        foreach ($activeLangs as $activeLang) {
            $ISOCode = FFPUtils::getUniversalISOCode($activeLang);
            $ISOCodeFile = FFPUtils::getUnderscoredISOCode($ISOCode);
            $idLang = $activeLang['id_lang'];

            $facebookCategoryFile = $ISOCodeFile.".txt";

            $checkResponse = $this->getData($facebookCategoryFileBaseUrl.$facebookCategoryFile, 500, true);

            if (strpos($checkResponse['status'], '200') == false) {
                $facebookCategoryFile = "en_US.txt";
            }

            $facebookCategoryData = $this->getData($facebookCategoryFileBaseUrl.$facebookCategoryFile, 500, false);

            foreach ($facebookCategoryData as $i => $item) {
                if ($i < 1) {
                    continue;
                }
                $splittedElement = explode(",", $item, 2);

                if (sizeof($splittedElement) > 1) {
                    $splittedElement[1] = str_replace('"', '', $splittedElement[1]);
                    $this->insertFacebookCategories($splittedElement[0], $ISOCode, $splittedElement[1], $idLang);
                }
            }
        }
        Configuration::updateValue('FAB_FACEBOOK_CATEGORIES_FETCH_DATE', date("D M d, Y G:i"));
        Configuration::updateValue('FAB_FACEBOOK_CATEGORIES_FETCH', 1);
        header('Content-Type: application/json');
        die(json_encode(array(
            'result' => $result
        )));
    }

    protected function ajaxProcessGetSocialCategories()
    {

        $tableName = 'fabfacebookpixel_gc_lang';
        $prefix = 'google';
        $idLang = Tools::getValue('id_lang');
        $type = (int)Tools::getValue('type');
        if ($type > 0) {
            $tableName = 'fabfacebookpixel_fc_lang';
            $prefix = 'facebook';
        }
        $searchString = Tools::getValue('search');
        $isoCode = FFPUtils::getUniversalISOCodeFromLang($idLang);
        $sql = "SELECT * FROM "._DB_PREFIX_.$tableName." WHERE iso_code = '".$isoCode."' AND ".$prefix."_category_description LIKE '%".$searchString."%'";
        $res = Db::getInstance()->executeS($sql);
        $results = array();
        foreach ($res as $item) {
            $results[] = ['id' => $item['id_'.$prefix.'_category'], 'text' => $item[$prefix.'_category_description']];
        }
        header('Content-Type: application/json');
        die(json_encode(array(
            'results' => $results
        )));
    }

    protected function ajaxProcessGetPsCategories()
    {

        $idLang = Tools::getValue('id_lang');
        $searchString = Tools::getValue('search');
        $sqlFilter = empty($searchString)?'':"AND name LIKE '%".$searchString."%'";
        $active = true;
        $orderBy = 'ORDER BY name';
        $idRootCategory = null;
        $active = true;
        $groups = null;
        $useShopRestriction = true;
        $limit = '';

        $sql = 'SELECT c.`id_category`, cl.`name`
				FROM `' . _DB_PREFIX_ . 'category` c
				' . ($useShopRestriction ? Shop::addSqlAssociation('category', 'c') : '') . '
				LEFT JOIN `' . _DB_PREFIX_ . 'category_lang` cl ON c.`id_category` = cl.`id_category`' . Shop::addSqlRestrictionOnLang('cl') . '
				' . (isset($groups) && Group::isFeatureActive() ? 'LEFT JOIN `' . _DB_PREFIX_ . 'category_group` cg ON c.`id_category` = cg.`id_category`' : '') . '
				' . (isset($idRootCategory) ? 'RIGHT JOIN `' . _DB_PREFIX_ . 'category` c2 ON c2.`id_category` = ' . (int) $idRootCategory . ' AND c.`nleft` >= c2.`nleft` AND c.`nright` <= c2.`nright`' : '') . '
				WHERE 1 ' . $sqlFilter . ' ' . ($idLang ? 'AND `id_lang` = ' . (int) $idLang : '') . '
				' . ($active ? ' AND c.`active` = 1' : '') . '
				' . (isset($groups) && Group::isFeatureActive() ? ' AND cg.`id_group` IN (' . implode(',', array_map('intval', $groups)) . ')' : '') . '
				' . (!$idLang || (isset($groups) && Group::isFeatureActive()) ? ' GROUP BY c.`id_category`' : '') . '
				' . ($orderBy != '' ? $orderBy : ' ORDER BY c.`level_depth` ASC') . '
				' . ($orderBy == '' && $useShopRestriction ? ', category_shop.`position` ASC' : '');

        $res = Db::getInstance()->executeS($sql);

        $results = array();
        foreach ($res as $item) {
            $results[] = ['id' => $item['id_category'], 'text' => $item['name'].' ('.$item['id_category'].')'];
        }
        header('Content-Type: application/json');
        die(json_encode(array(
            'results' => $results
        )));
    }
    
    protected function ajaxProcessFetchGoogleCategories()
    {
        $googleCategoryFileBaseUrl = "https://www.google.com/basepages/producttype/";
        $result = true;
        $activeLangs = Language::getLanguages(false);

        foreach ($activeLangs as $activeLang) {
            $ISOCode = FFPUtils::getUniversalISOCode($activeLang);
            $idLang = $activeLang['id_lang'];
            
            $googleCategoryFile = "taxonomy-with-ids.".$ISOCode.".txt";
            
            $checkResponse = $this->getData($googleCategoryFileBaseUrl.$googleCategoryFile, 500, true);
            
            if (strpos($checkResponse['status'], '200') == false) {
                $googleCategoryFile = "taxonomy-with-ids.en-US.txt";
            }


            $googleCategoryData = $this->getData($googleCategoryFileBaseUrl.$googleCategoryFile, 500, false);
            /*
            $googleCategoryData = Tools::file_get_contents(
                $googleCategoryFileBaseUrl.$googleCategoryFile,
                false,
                @stream_context_create(array('https' => array('method' => 'GET', 'timeout' => 5000)))
            );*/
                
            //$googleCategoryArray = explode(PHP_EOL, $googleCategoryData);
            
            foreach ($googleCategoryData as $i => $item) {
                if ($i < 1) {
                    continue;
                }
                $splittedElement = explode(" - ", $item, 2);
                if (sizeof($splittedElement) > 1) {
                    $this->insertGoogleCategories($splittedElement[0], $ISOCode, $splittedElement[1], $idLang);
                }
            }
        }
        Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH_DATE', date("D M d, Y G:i"));
        Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 1);
        header('Content-Type: application/json');
        die(json_encode(array(
            'result' => $result
        )));
    }
    
    
    protected function ajaxProcessAssociateCategory()
    {
        $type = Tools::getValue('type');
        $id_category = Tools::getValue('id_category');
        $id_ext_category = Tools::getValue('id_ext_category');
        $result = $this->insertCategories($id_category, $id_ext_category, $type);
        
        header('Content-Type: application/json');
        die(json_encode(array(
            'result' => $result
        )));
    }
    
    protected function ajaxProcessDiscardReferenceWarning()
    {
        $id_shop_group = Shop::getContextShopGroupID();
        $id_shop = Shop::getContextShopID();
        Configuration::updateGlobalValue('FAB_PIXEL_USE_REFERENCE', 0);
        Configuration::updateValue('FAB_PIXEL_USE_REFERENCE', 0, false, $id_shop_group, $id_shop);
        $result = true;
        
        header('Content-Type: application/json');
        die(json_encode(array(
            'result' => $result
        )));
    }

    protected function insertCategories($id_category, $id_ext_category, $type)
    {
        $table_name = 'fabfacebookpixel';
        $table_index = 'id_google_category';

        if ($type == 'fb') {
            $table_name = 'fabfacebookpixel_f';
            $table_index = 'id_facebook_category';
        }

        $shop_groups_list = array();
        $shops = Shop::getContextListShopID();
    
        foreach ($shops as $shop_id) {
            $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

            if (!in_array($shop_group_id, $shop_groups_list)) {
                $shop_groups_list[] = $shop_group_id;
            }
        
            $sql = "INSERT INTO "._DB_PREFIX_.$table_name."
                    (id_category, ".$table_index.", id_shop)
	                VALUES
	                (".(int)$id_category.", '".(int)$id_ext_category."', ".(int)$shop_id.")
	               ON DUPLICATE KEY UPDATE ".$table_index." = VALUES(".$table_index.")";
            if (!Db::getInstance()->execute($sql)) {
                return false;
            }
        }
        return true;
    }
   
    protected function insertGoogleCategories($id_google_category, $iso_code, $google_category_description, $active_lang)
    {
        $sql = "INSERT INTO "._DB_PREFIX_."fabfacebookpixel_gc_lang 
	            (`id_google_category`, `iso_code`, `google_category_description`, `id_lang`)
	            VALUES
	                (".(int)$id_google_category.", '".pSQL($iso_code)."', '".pSQL(addslashes($google_category_description))."', ".(int)$active_lang.")
	            ON DUPLICATE KEY UPDATE `google_category_description` = VALUES(`google_category_description`)";

        if (!Db::getInstance()->execute($sql)) {
            return false;
        }
        
        return true;
    }

    protected function insertFacebookCategories($id_facebook_category, $iso_code, $facebook_category_description, $active_lang)
    {
        $sql = "INSERT INTO "._DB_PREFIX_."fabfacebookpixel_fc_lang 
	            (`id_facebook_category`, `iso_code`, `facebook_category_description`, `id_lang`)
	            VALUES
	                (".(int)$id_facebook_category.", '".pSQL($iso_code)."', '".pSQL(addslashes($facebook_category_description))."', ".(int)$active_lang.")
	            ON DUPLICATE KEY UPDATE `facebook_category_description` = VALUES(`facebook_category_description`)";

        if (!Db::getInstance()->execute($sql)) {
            return false;
        }

        return true;
    }
   
   
    protected function getData($url, $timeout, $checkstatusonly)
    {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();
        $ch = curl_init();
        $shopDomain = _PS_BASE_URL_.__PS_BASE_URI__;
        if (Configuration::get('PS_SSL_ENABLED', null, $idShopGroup, $idShop)) {
            $shopDomain = _PS_BASE_URL_SSL_.__PS_BASE_URI__;
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0');
        curl_setopt($ch, CURLOPT_REFERER, $shopDomain);
        if ($checkstatusonly) {
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_NOBODY, 1);
        }
        $output = curl_exec($ch);

        curl_close($ch);

        $data=explode("\n", $output);

        if ($checkstatusonly) {
            $headers=array();
            $headers['status']=$data[0];
            return $headers;
        }
        
        return $data;
    }
}
