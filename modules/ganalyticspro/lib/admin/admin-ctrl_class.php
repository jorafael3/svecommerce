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

class BT_AdminCtrl extends BT_GapBaseCtrl
{
    /**
     * Magic Method __construct
     *
     * @param array $aParams
     */
    public function __construct(array $aParams = null)
    {
        // defines type to execute
        // use case : no key sAction sent in POST mode (no form has been posted => first page is displayed with admin-display.class.php)
        // use case : key sAction sent in POST mode (form or ajax query posted ).
        $sAction = (!Tools::getIsset('sAction') || (Tools::getIsset('sAction') && 'display' == Tools::getValue('sAction'))) ? (Tools::getIsset('sAction') ? Tools::getValue('sAction') : 'display') : Tools::getValue('sAction');

        // set action
        $this->setAction($sAction);

        // set type
        $this->setType();
    }

    /**
     * Magic Method __destruct
     */
    public function __destruct()
    {

    }


    /**
     * run() method execute abstract derived admin object
     *
     * @param array $aRequest : request
     * @return array $aDisplay : empty => false / not empty => true
     */
    public function run($aRequest)
    {
        // set
        $aDisplay = array();
        $aParams = array();

        // include interface
        require_once(_GAP_PATH_LIB_ADMIN . 'i-admin.php');

        switch (self::$sAction) {
            case 'display' :
                // include admin display object
                require_once(_GAP_PATH_LIB_ADMIN . 'admin-display_class.php');

                $oAdminType = BT_AdminDisplay::create();

                // update new module keys
                BT_GapModuleTools::updateConfiguration();

                // get configuration options
                BT_GapModuleTools::getConfiguration();

                // set js msg translation
                BT_GapModuleTools::translateJsMsg();

                // set params
                $aParams['oJsTranslatedMsg'] = BT_GapModuleTools::jsonEncode($GLOBALS[_GAP_MODULE_NAME . '_JS_MSG']);

                // use case - type not define => first page requested
                if (empty(self::$sType)) {
                    // update module version
                    $GLOBALS[_GAP_MODULE_NAME . '_CONFIGURATION'][_GAP_MODULE_NAME . '_MODULE_VERSION'] = GAnalyticsPro::$oModule->version;

                    // update module if necessary
                    $aParams['aUpdateErrors'] = GAnalyticsPro::$oModule->updateModule();
                }
                break;
            case 'update'   :
                // include admin update object
                require_once(_GAP_PATH_LIB_ADMIN . 'admin-update_class.php');

                $oAdminType = BT_AdminUpdate::create();
                break;
            case 'delete'   :
                // include admin delete object
                require_once(_GAP_PATH_LIB_ADMIN . 'admin-delete_class.php');

                $oAdminType = BT_AdminDelete::create();
                break;
            case 'send'   :
                // include admin send object
                require_once(_GAP_PATH_LIB_ADMIN . 'admin-send_class.php');

                $oAdminType = BT_AdminSend::create();
                break;
            default :
                $oAdminType = false;
                break;
        }

        // process data to use in view (tpl)
        if (!empty($oAdminType)) {
            // execute good action in admin
            // only displayed with key : tpl and assign in order to display good smarty template
            $aDisplay = $oAdminType->run(parent::$sType, $aRequest);

            if (!empty($aDisplay)) {
                $aDisplay['assign'] = array_merge($aDisplay['assign'], $aParams, array('bAddJsCss' => true));
            }

            // destruct
            unset($oAdminType);
        }

        return $aDisplay;
    }
}