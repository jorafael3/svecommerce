<?php

/**
 * 2010-2020 Webkul.
 *
 * NOTICE OF LICENSE
 *
 * All right is reserved,
 * Please go through this link for complete license : https://store.webkul.com/license.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
 *
 *  @author    Webkul IN <support@webkul.com>
 *  @copyright 2010-2020 Webkul IN
 *  @license   https://store.webkul.com/license.html
 */

class AdminSalvaceroConfigController extends ModuleAdminController
{


    private $_name_controller = 'salvacero_functions';
    public function __construct()
    {
        $red_url = 'index.php?controller=AdminModules&configure=' . $this->_name_controller . '&token=' . Tools::getAdminTokenLite('AdminModules');
        Tools::redirectAdmin($red_url);
    }
}
