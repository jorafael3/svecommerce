<?php
/**
 * 2020 M-Code Artisan
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
 * @copyright  2020 M-Code Artisan
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

// Update method for version 2.8.1 of Module
function upgrade_module_2_8_4($module)
{
    $res = true;

    $res &= $module->unregisterHook('displayAdminForm');
    $res &= $module->unregisterHook('displayAdminEndContent');

    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-2.8.4.sql';
    $res &= $module->loadSQLFile($sql_file);

    // Migrate data to other Table
    $tablename = 'fabfacebookpixel_f';
    // Check if pending orders
    $sql = "SELECT * FROM "._DB_PREFIX_.$tablename;
    $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

    $tablename = 'fabfacebookpixel';
    foreach ($results as $result) {
        $sql = "INSERT INTO " . _DB_PREFIX_ . $tablename . "
                    (`id_category`, `id_shop`, `id_facebook_category`)
	                VALUES
	                (" . (int)$result['id_category'] . ", " . (int)$result['id_shop']. ", " . (int)$result['id_facebook_category'] . ") 
	                ON DUPLICATE KEY UPDATE id_facebook_category = VALUES(id_facebook_category)";
        Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
    }

    $sql_file = dirname(__FILE__).'/install-2.8.4-truncate.sql';
    $res &= $module->loadSQLFile($sql_file);
    if (!$res) {
        return false;
    }
    return true;
}
