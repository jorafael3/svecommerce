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
function upgrade_module_2_8_5($module)
{
    $res = true;

    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-2.8.5.sql';
    $res &= $module->loadSQLFile($sql_file);

    // Data transfer
    $tablename = "configuration";
    $sql = "SELECT * FROM "._DB_PREFIX_.$tablename
        ." WHERE `name` in ('FAB_PIXEL_COLOR_MAPPING', 
        'FAB_PIXEL_GENDER_MAPPING', 'FAB_PIXEL_MATERIAL_MAPPING', 
        'FAB_PIXEL_PATTERN_MAPPING', 'FAB_PIXEL_SIZE_MAPPING') ORDER BY `name` ASC";
    $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

    $tablename = "fabfacebookpixel_attributes";
    foreach ($results as $result) {
        if ($result['value'] != 0) {
            $currentName = $result['name'];
            $sql = "INSERT INTO " . _DB_PREFIX_ . $tablename . "
                    (`id_attribute_group`, `id_facebook_attribute_group`, `id_shop`)
	                VALUES
	                (" . (int)$result['value'] . ", " . (int)constant("FFPUtils::$currentName") . ", " . (int)$result['id_shop'] . ") 
	                ON DUPLICATE KEY UPDATE id_facebook_attribute_group = VALUES(id_facebook_attribute_group)";
            Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
        }
    }

    if (!$res) {
        return false;
    }
    return true;
}
