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

// Update method for version 3.1.1 of Module
function upgrade_module_3_1_2($module)
{
    $res = true;
    $tableName = 'fabfacebookpixel_fc_lang';
    $tableNameG = 'fabfacebookpixel_gc_lang';

    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-3.1.2.sql';
    $res &= $module->loadSQLFile($sql_file);

    $activeLangs = Language::getLanguages(false);

    foreach ($activeLangs as $activeLang) {

        $ISOCode = FFPUtils::getUniversalISOCode($activeLang);
        $idLang = $activeLang['id_lang'];
        $sql = "UPDATE "._DB_PREFIX_.$tableName." SET id_lang = ".(int)$idLang." WHERE iso_code = '".pSQL($ISOCode)."'";
        $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
        $sql = "UPDATE "._DB_PREFIX_.$tableNameG." SET id_lang = ".(int)$idLang." WHERE iso_code = '".pSQL($ISOCode)."'";
        $res &= Db::getInstance(_PS_USE_SQL_SLAVE_)->execute($sql);
    }

    if (!$res) {
        return false;
    }
    return true;
}