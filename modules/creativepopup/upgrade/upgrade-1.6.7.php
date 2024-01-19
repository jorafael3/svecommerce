<?php
/**
 * Creative Popup - https://creativepopup.webshopworks.com
 *
 * @author    WebshopWorks <info@webshopworks.com>
 * @copyright 2018-2020 WebshopWorks
 * @license   One Domain Licence
 *
 * Not allowed to resell or redistribute this software
 */

defined('_PS_VERSION_') or exit;

function upgrade_module_1_6_7($module)
{
    $db = DB::getInstance();
    $table = _DB_PREFIX_.$module->name;

    try {
        $fixCpIndex = !$db->getValue("SELECT 1 FROM {$table}_revisions WHERE id = -1");
    } catch (Exception $ex) {
        $fixCpIndex = false;
    }

    if ($fixCpIndex) {
        $popups = $db->executeS("SELECT id FROM $table WHERE flag_hidden = 0 AND flag_deleted = 0 ORDER BY id DESC");

        if (!empty($popups)) {
            require_once _PS_MODULE_DIR_.'creativepopup/helper.php';
            require_once _PS_MODULE_DIR_.'creativepopup/base/core.php';

            $ids = array();
            foreach ($popups as &$popup) {
                $ids[] = $popup['id'];
            }

            CpPopups::init();
            CpPopups::addIndex($ids);
        }

        Configuration::deleteByName('CP_POPUP_INDEX');
    }

    return true;
}
