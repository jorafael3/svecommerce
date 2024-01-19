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

// Update method for version 1.1.0 of Module
function upgrade_module_1_2_0($module)
{
    // Update Configuration values for all shops
    $shops = Shop::getContextListShopID();
    $shop_groups_list = array();
    $res = true;

    /* Setup each shop */
    foreach ($shops as $shop_id) {
        $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

        if (!in_array($shop_group_id, $shop_groups_list)) {
            $shop_groups_list[] = $shop_group_id;
        }

        /* Sets up configuration */
        $res = Configuration::updateValue('FAB_FACEBOOK_PIXEL', true, false, $shop_group_id, $shop_id);
        $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1, false, $shop_group_id, $shop_id);
        $res &= Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0, false, $shop_group_id, $shop_id);
        $res &= Configuration::updateValue('FAB_PIXEL_USE_REFERENCE', 0, false, $shop_group_id, $shop_id);
        $res &= Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1, false, $shop_group_id, $shop_id);
        $res &= Configuration::updateValue(
            'FAB_GOOGLE_CATEGORIES_FETCH_DATE',
            date("D M d, Y G:i"),
            false,
            $shop_group_id,
            $shop_id
        );
        $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ID', '', false, $shop_group_id, $shop_id);
    }

    /* Sets up Shop Group configuration */
    if (count($shop_groups_list)) {
        foreach ($shop_groups_list as $shop_group_id) {
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL', true, false, $shop_group_id);
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1, false, $shop_group_id);
            $res &= Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0, false, $shop_group_id);
            $res &= Configuration::updateValue('FAB_PIXEL_USE_REFERENCE', 0, false, $shop_group_id);
            $res &= Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1, false, $shop_group_id);
            $res &= Configuration::updateValue(
                'FAB_GOOGLE_CATEGORIES_FETCH_DATE',
                date("D M d, Y G:i"),
                false,
                $shop_group_id
            );
            $res &= Configuration::updateValue('FAB_FACEBOOK_PIXEL_ID', '', false, $shop_group_id);
        }
    }

    
    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-1.2.0.sql';
    $res &= $module->loadSQLFile($sql_file);
    
    if (!$res) {
        return false;
    }
    return true;
}
