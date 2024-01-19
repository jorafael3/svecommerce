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
function upgrade_module_1_1_0($module)
{
    if (!$module->registerHook('displayAdminForm')
        || !Configuration::updateValue('FAB_FACEBOOK_PIXEL', 'installed')
        || !Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH', 0)
        || !Configuration::updateValue('FAB_FACEBOOK_PIXEL_ACTIVE', 1)
        || !Configuration::updateValue('FAB_GOOGLE_EXPORT_EMPTY_DESC', 1)
        || !Configuration::updateValue('FAB_PIXEL_USE_REFERENCE', 0)
        || !Configuration::updateValue('FAB_GOOGLE_CATEGORIES_FETCH_DATE', date("D M d, Y G:i"))) {
        return false;
    }
    
    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-1.1.0.sql';
    if (!$module->loadSQLFile($sql_file)) {
        return false;
    }
    
    // Install admin tab
    if (!$module->installTab('AdminCatalog', 'FabFacebookPixelAjax', 'Fabvla Facebook Pixel')) {
        return false;
    }

    // All went well!
    return true;
}
