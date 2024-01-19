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

class FFPEventViewContent
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

    public function sendViewContent($productInfo)
    {
        $context = Context::GetContext();

        $eventData = array();
        $eventData['event_name'] = 'ViewContent';
        $eventData['event_time'] = time();
        $eventData['event_source_url'] = $productInfo['canonical_url'];
        $eventData['opt_out'] = false;
        $eventData['event_id'] = $this->eventId;
        $eventData['user_data'] = FFPConversionAPIUtils::getUserData($context->customer);
        $eventData['custom_data'] = $this->getCustomData($productInfo);
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

    private function getCustomData($productInfo)
    {
        $customData = array();
        $customData['value'] =  $productInfo["product_price"];
        $customData['currency'] =  $productInfo["currency"];
        $customData['content_name'] =  $productInfo["content_name"];
        $customData['content_category'] =  $productInfo["content_category"];
        $customData['content_ids'] =  array($productInfo["id_product"]);
        $customData['contents'] =  array($this->getContent($productInfo));
        $customData['content_type'] =  'product';

        $ffpCustomData = new FFPCustomData($customData);
        $ffpCustomData->addCustomProperty('customer_groups', FFPUtils::getCustomerGroupsString());
        $ffpCustomData->addCustomProperty('default_customer_group', FFPUtils::getDefaultCustomerGroup());
        return $ffpCustomData;

    }

    private function getContent($productInfo)
    {
        $contentData = array();
        $contentData['product_id'] = $productInfo["id_product"];
        $contentData['item_price'] = $productInfo["product_price"];
        $contentData['title'] = $productInfo["content_name"];
        $contentData['description'] = $productInfo["description"];

        $data = new FFPContent($contentData);
        return $data;
    }

}
