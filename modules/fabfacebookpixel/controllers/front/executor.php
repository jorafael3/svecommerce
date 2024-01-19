<?php
/**
 * 2021 M-Code Artisan
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
 * @copyright  2021 M-Code Artisan
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$libs_folder = dirname(__FILE__).'/../../libs/';
require_once($libs_folder . 'FFPEventViewCategoryContent.php');
require_once($libs_folder . 'FFPEventSearchContent.php');
require_once($libs_folder . 'FFPEventPageViewContent.php');
require_once($libs_folder . 'FFPEventViewContent.php');
require_once($libs_folder . 'FFPEventPurchaseContent.php');
require_once($libs_folder . 'FFPEventInitCheckoutContent.php');
require_once($libs_folder . 'FFPEventCompleteRegistrationContent.php');

class FabFacebookPixelExecutorModuleFrontController extends ModuleFrontController
{

    public function __construct()
    {
        $this->className = 'FabFacebookPixelExecutorModuleFrontController';
        parent::__construct();
        $this->result = '';
    }


    public function displayAjax()
    {
        $eventId = '';
        $idShop = Shop::getContextShopID();
        $idShopGroup = Shop::getContextShopGroupID();
        $token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $idShopGroup, $idShop);
        $test = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $idShopGroup, $idShop);
        $fbPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $eventType = Tools::getValue('type');
        $eventParams = Tools::getValue('params');
        if (!empty($token)) {
            switch ($eventType) {
                case "PageView":
                    $ffpEventPageViewContent = new FFPEventPageViewContent($token, $fbPixelId, $test);
                    $ffpEventPageViewContent->sentPageView();
                    $eventId = $ffpEventPageViewContent->getEventId();
                    break;
                case "ViewCategory":
                    $ffpEventViewCategoryContent = new FFPEventViewCategoryContent($token, $fbPixelId, $test);
                    $ffpEventViewCategoryContent->sendViewCategoryContent($eventParams);
                    $eventId = $ffpEventViewCategoryContent->getEventId();
                    break;
                case "Search":
                    $ffpEventSearchContent = new FFPEventSearchContent($token, $fbPixelId, $test);
                    $ffpEventSearchContent->setSearchString($eventParams['search_string']);
                    $ffpEventSearchContent->sendSearchContent();
                    $eventId = $ffpEventSearchContent->getEventId();
                    break;
                case "InitiateCheckout":
                    $ffpEventInitCheckoutContent = new FFPEventInitCheckoutContent($token, $fbPixelId, $test);
                    $ffpEventInitCheckoutContent->sendInitCheckoutContent($eventParams);
                    $eventId = $ffpEventInitCheckoutContent->getEventId();
                    break;
                case "ViewContent":
                    $ffpEventViewContent = new FFPEventViewContent($token, $fbPixelId, $test);
                    $ffpEventViewContent->sendViewContent($eventParams);
                    $eventId = $ffpEventViewContent->getEventId();
                    break;
            }
        }
        ob_end_clean();
        header('Content-Type: application/json');
        die(json_encode(array(
            'eventId' => $eventId
        )));

    }


}