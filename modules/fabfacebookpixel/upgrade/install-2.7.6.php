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

// Update method for version 2.7.4 of Module
function upgrade_module_2_7_6($module)
{
    $res = true;

    // Register new hook
    if (!$module->registerHook('displayAdminProductsExtra') || !$module->registerHook('actionProductUpdate')) {
        $res &= false;
    }

    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-2.7.6.sql';
    $res &= $module->loadSQLFile($sql_file);

    if (!$res) {
        return false;
    }
    return true;
}
