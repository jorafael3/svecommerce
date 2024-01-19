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

// Update method for version 3.1.0 of Module
function upgrade_module_3_1_0($module)
{
    $res = true;

    // Register new hook
    $module->unregisterHook('displayFooterProduct');
    $module->unregisterHook('displayCheckoutSummaryTop');
    $module->unregisterHook('displayShoppingCart');

    if (!$res) {
        return false;
    }
    return true;
}
