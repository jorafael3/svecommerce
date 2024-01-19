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

// Update method for version 2.1.8 of Module
function upgrade_module_2_1_8($module)
{
    $res = true;
    
    // Register new hook
    if (!$module->registerHook('actionValidateOrder')
        || !$module->registerHook('actionCartSave')) {
        $res &= false;
    }
    
    // Execute module update MySQL commands
    $sql_file = dirname(__FILE__).'/install-2.1.8.sql';
    $res &= $module->loadSQLFile($sql_file);
    
    if (!$res) {
        return false;
    }
    return true;
}
