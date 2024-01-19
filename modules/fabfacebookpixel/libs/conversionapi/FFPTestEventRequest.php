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

require_once('FFPEventRequest.php');
require_once('FFPUserData.php');
require_once('FFPEvent.php');
require_once('FFPCustomData.php');
require_once('FFPContent.php');
require_once('FFPConversionAPIUtils.php');

class FFPTestEventRequest
{
    protected $pixelId = null;
    protected $token = null;

    public function __construct() {
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $this->pixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $idShopGroup, $idShop);
        $this->token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $idShopGroup, $idShop);
    }

    public function testViewContentEvent() {
        $eventData = array();
        $eventData['event_name'] = 'ViewContent';
        $eventData['event_time'] = time();
        $eventData['event_source_url'] = 'https://localhost';
        $eventData['opt_out'] = false;
        $eventData['event_id'] = uniqid("test", true);
        $eventData['user_data'] = $this->getUserData();
        $eventData['custom_data'] = $this->getCustomData();;
        $eventData['action_source'] = 'website';

        $viewContentEvent = new FFPEvent($eventData);

        $data = array();
        $data['events'] =  array($viewContentEvent);
        $data['test_event_code'] = 'TEST92802';
        $eventRequestTest = new FFPEventRequest($this->pixelId, $this->token, $data);
        $response = $eventRequestTest->httpClientExecute();

        return $response;
    }

    private function getUserData() {
        $userData = array();
        $userData['email'] = 'mpetruso@fabvla.com';
        $userData['phone'] = '3455677227';
        $userData['gender'] = 'm';
        $userData['date_of_birth'] = '06/01/1975';
        $userData['last_name'] = 'Petruso';
        $userData['first_name'] = 'Manfredi';
        $userData['ct'] = 'Italy';
        $userData['state'] = 'Treviso';
        $userData['country_code'] = 'IT';
        $userData['zip_code'] = 31199;
        $userData['external_id'] = 'aa834jdd23';
        $userData['client_ip_address'] = FFPConversionAPIUtils::getIpAddress();
        $userData['client_user_agent'] = FFPConversionAPIUtils::getHttpUserAgent();
        $userData['fbc'] = FFPConversionAPIUtils::getFbc();
        $userData['fbp'] = FFPConversionAPIUtils::getFbp();
        $userData['subscription_id'] = 'string';
        $userData['fb_login_id'] = 'mpetruso@fabvla.com';
        $userData['lead_id'] = 123455;
        $userData['f5first'] = null;
        $userData['f5last'] = null;
        $userData['fi'] = null;
        $userData['dobd'] = null;
        $userData['dobm'] = null;
        $userData['doby'] = null;

        $data = new FFPUserData($userData);
        return $data;

    }

    private function getCustomData() {
        $customData = array();
        $customData['value'] =  10.22;
        $customData['currency'] =  'EUR';
        $customData['content_name'] =  'Ammazzazanzare Pioneer';
        $customData['content_category'] =  'Ammazzazanzare';
        $customData['content_ids'] =  array('ABC123');
        $customData['contents'] =  array($this->getContent());
        $customData['content_type'] =  'product';
        $customData['order_id'] =  'Adsdf232423';
        $customData['predicted_ltv'] =  0.233;
        $customData['num_items'] =  1;
        $customData['status'] =  '';
        $customData['search_string'] =  '';
        $customData['item_number'] =  '1';
        $customData['delivery_category'] =  '';
        $customData['custom_properties'] =  array("colore" => "rosso");

        $data = new FFPCustomData($customData);
        return $data;

    }

    private function getContent() {
        $contentData = array();
        $contentData['product_id'] =' ABC123';
        $contentData['quantity'] = 1;
        $contentData['item_price'] = 10.22;
        $contentData['title'] = 'Ammazzazanzare Pioneer';
        $contentData['description'] = "niente DI che";

        $data = new FFPContent($contentData);
        return $data;
    }

}