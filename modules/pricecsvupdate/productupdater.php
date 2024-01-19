<?php
/**
 *  This module was created by Anastasia Bu and is protected by the laws of Copyright.
 *  This source file is subject to a commercial license from Anastasia Bu
 *  Use, copy, modification or distribution of this source file without written
 *  license agreement from Anastasia Bu <site@web-esse.ru> is strictly forbidden.
 *
 *
 *  @author Snegurka <site@web-esse.ru>
 *  @copyright 2007-2021 Snegurka WS
 *  @license Commercial license
 */

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/pricecsvupdate.php');
include(dirname(__FILE__).'/classes/WsUpdater.php');

if (Tools::substr(Tools::encrypt('pricecsvupdate/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('pricecsvupdate')) {
    die('Bad token');
}

// $pricecsvupdater = new WsUpdater();
// echo $pricecsvupdater->productUpdater();

$pricecsvupdater = new Pricecsvupdate();
echo $pricecsvupdater->productUpdater();
