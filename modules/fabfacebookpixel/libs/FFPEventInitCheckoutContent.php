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

require_once('conversionapi/FFPEventRequest.php');
require_once('conversionapi/FFPUserData.php');
require_once('conversionapi/FFPEvent.php');
require_once('conversionapi/FFPCustomData.php');
require_once('conversionapi/FFPContent.php');
require_once('conversionapi/FFPConversionAPIUtils.php');

class FFPEventInitCheckoutContent
{
    protected $pixelId = null;
    protected $token = null;
    protected $eventId = null;
    protected $test = null;

    public function __construct($token, $pixelId, $test)
    {
        $this->pixelId = $pixelId;
        $this->token = $token;
        $this->eventId = FFPConversionAPIUtils::generateEventId();
        $this->test = $test;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function sendInitCheckoutContent($initCheckout)
    {
        $context = Context::GetContext();

        $eventData = array();
        $eventData['event_name'] = 'InitiateCheckout';
        $eventData['event_time'] = time();
        $eventData['event_source_url'] = $initCheckout['canonical_url'];
        $eventData['opt_out'] = false;
        $eventData['event_id'] = $this->eventId;
        $eventData['user_data'] = FFPConversionAPIUtils::getUserData($context->customer);
        $eventData['custom_data'] = $this->getCustomData($initCheckout);
        $eventData['action_source'] = 'website';

        $event = new FFPEvent($eventData);

        $data = array();
        $data['events'] =  array($event);
        if (!empty($this->test)) {
            $data['test_event_code'] = $this->test;
        }
        $eventRequest = new FFPEventRequest($this->pixelId, $this->token, $data);
        $response = $eventRequest->httpClientExecute();

        return $response;
    }

    private function getCustomData($initCheckout)
    {
        $customData = array();
        $customData['value'] = $initCheckout['value'];
        $customData['currency'] =  $initCheckout['currency'];
        $customData['content_ids'] =  $initCheckout['content_ids'];
        $customData['content_type'] =  $initCheckout['content_type'];
        $ffpCustomData = new FFPCustomData($customData);
        $ffpCustomData->addCustomProperty('customer_groups', FFPUtils::getCustomerGroupsString());
        $ffpCustomData->addCustomProperty('default_customer_group', FFPUtils::getDefaultCustomerGroup());
        return $ffpCustomData;

    }

    private function getContent($productInfo)
    {
        $contentData = array();
        $contentData['product_id'] = $productInfo["product_id"];
        $contentData['item_price'] = $productInfo["product_price"];
        $contentData['title'] = $productInfo["product_name"];
        $contentData['description'] = $productInfo["product_description"];

        $data = new FFPContent($contentData);
        return $data;
    }
}