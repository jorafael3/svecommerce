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

// Update method for version 2.5.1 of Module
function upgrade_module_2_5_7($module)
{
    $res = true;

    if (version_compare(Tools::substr(_PS_VERSION_, 0, 5), '1.7.0', '<')) {
        // Update Configuration values for all shops
        $shops = Shop::getContextListShopID();
        $shop_groups_list = array();

        /* Setup each shop */
        foreach ($shops as $shop_id) {
            $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

            if (!in_array($shop_group_id, $shop_groups_list)) {
                $shop_groups_list[] = $shop_group_id;
            }
            $res &= Configuration::updateValue('FAB_PIXEL_COMBINATIONS', false, false, $shop_group_id, $shop_id);
        }

        if (count($shop_groups_list)) {
            foreach ($shop_groups_list as $shop_group_id) {
                $res &= Configuration::updateValue('FAB_PIXEL_COMBINATIONS', false, false, $shop_group_id);
            }
        }
    }
    return $res;
}
