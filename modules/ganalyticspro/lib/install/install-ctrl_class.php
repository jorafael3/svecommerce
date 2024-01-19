<?php
/**
 * Google Analytics : GA4 and Universal-Analytics
 *
 * @author    businesstech.fr <modules@businesstech.fr> - https://www.businesstech.fr/
 * @copyright Business Tech - https://www.businesstech.fr/
 * @license   see file: LICENSE.txt
 *
 *           ____    _______
 *          |  _ \  |__   __|
 *          | |_) |    | |
 *          |  _ <     | |
 *          | |_) |    | |
 *          |____/     |_|
 */
class BT_InstallCtrl
{
    /**
     * @var static $_aDefaultAction : defines default action
     */
    private static $_aDefaultAction = array('install', 'uninstall');

    /**
     * run() method execute matched install object
     *
     * @param string $sAction : action type
     * @param string $sInstallType : install/uninstall object type
     * @param mixed $mParam : param needed (optional)
     * @return bool $bReturn : true => validate install / uninstall, false => invalidate install / uninstall
     */
    public static function run($sAction, $sInstallType, $mParam = null)
    {
        // declare return
        $bReturn = false;

        // check action
        if (in_array($sAction, self::$_aDefaultAction)) {
            // include interface of install
            require_once(_GAP_PATH_LIB_INSTALL . 'i-install.php');

            switch ($sInstallType) {
                case 'sql' :
                    // include matched installation object
                    require_once(_GAP_PATH_LIB_INSTALL . 'install-sql_class.php');

                    if (method_exists('BT_InstallSql', $sAction)) {
                        $bReturn = call_user_func_array(array('BT_InstallSql', $sAction), array($mParam));
                    }

                    break;
                case 'config' :
                    // include matched installation object
                    require_once(_GAP_PATH_LIB_INSTALL . 'install-config_class.php');

                    if (method_exists('BT_InstallConfig', $sAction)) {
                        $bReturn = call_user_func_array(array('BT_InstallConfig', $sAction), array($mParam));
                    }

                    break;
                case 'tab' :
                    // include matched installation object
                    require_once(_GAP_PATH_LIB_INSTALL . 'install-tab_class.php');

                    if (method_exists('BT_InstallTab', $sAction)) {
                        $bReturn = call_user_func_array(array('BT_InstallTab', $sAction), array($mParam));
                    }

                    break;
                default :
                    break;
            }
        }

        return $bReturn;
    }
}