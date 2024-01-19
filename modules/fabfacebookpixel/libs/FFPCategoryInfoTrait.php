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

class FFPCategoryInfoTrait
{
    public static function fillAndReturnData($context)
    {
        $data = array();
        $category = $context->controller->getCategory();
        $id_lang = (int)$context->language->id;

        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $is_export_combinations = (int)Configuration::get('FAB_PIXEL_COMBINATIONS', $idShopGroup, $idShop);

        $data['locale'] = pSQL(Tools::strtoupper($context->language->iso_code));

        $data['canonical_url'] = $context->shop->getBaseURL(true)."?controller=".$context->controller->php_self;
        $data['content_type'] = 'product';

        $data['fb_pixel_id']= Configuration::get('FAB_FACEBOOK_PIXEL_ID', $idShopGroup, $idShop);

        $data['content_name'] = htmlspecialchars($category->name);

        if (FFPUtils::isPs6()) {
            $data['breadcrumb'] = $data['content_name'];
        } else {
            $breadcrumbs = $context->controller->getBreadcrumbLinks();
            $data['breadcrumb'] = implode(' > ', array_column($breadcrumbs['links'], 'title'));
        }


        $data['content_category'] = htmlspecialchars($data['breadcrumb']);

        $data['product_list'] = array();
        $products = $category->getProducts($id_lang, 1, 10);

        $data['content_ids'] = array_column($products, 'id_product');

        return $data;
    }
}
