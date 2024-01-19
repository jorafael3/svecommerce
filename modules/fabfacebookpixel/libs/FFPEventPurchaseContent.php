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

class FFPEventPurchaseContent
{
    protected $pixelId = null;
    protected $token = null;
    protected $eventId = null;
    protected $test = null;

    public function __construct($token, $pixelId, $test)
    {
        $this->pixelId = $pixelId;
        $this->token = $token;
        $this->test = $test;
        $this->eventId = FFPConversionAPIUtils::generateEventId();
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function sendPurchaseContent($orderInfo)
    {
        $context = Context::GetContext();

        $eventData = array();
        $eventData['event_name'] = 'Purchase';
        $eventData['event_time'] = time();
        $eventData['event_source_url'] = $orderInfo['canonical_url'];
        $eventData['opt_out'] = false;
        $eventData['event_id'] = $this->eventId;
        $eventData['user_data'] = FFPConversionAPIUtils::getUserData($context->customer);
        $eventData['custom_data'] = $this->getCustomData($orderInfo);
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

    private function getCustomData($orderInfo)
    {
        $customData = array();
        $customData['value'] =  $orderInfo["total_paid"];
        $customData['currency'] =  $orderInfo["currency_code"];
        $customData['content_name'] =  "order_".$orderInfo["order_id"];
        $customData['content_ids'] =  $orderInfo["product_list"];
        $customData['contents'] =  $this->getContent($orderInfo['products']);
        $customData['content_type'] =  'product';

        $ffpCustomData = new FFPCustomData($customData);
        $ffpCustomData->addCustomProperty('customer_groups', FFPUtils::getCustomerGroupsString());
        $ffpCustomData->addCustomProperty('default_customer_group', FFPUtils::getDefaultCustomerGroup());
        return $ffpCustomData;

    }

    private function getContent($products)
    {
        $data = array();
        $context = Context::getContext();
        $idLang = $context->language->id;
        $idShopGroup = Shop::getContextShopGroupID();
        $idShop = Shop::getContextShopID();

        $is_tax_included = Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $idShopGroup, $idShop);

        foreach($products as  $product) {
            $contentData = array();
            $productDetails = new Product($product['product_id'], false, $idLang, $idShop);
            $contentData['product_id'] = $product['product_id'];
            $contentData['quantity'] = $product['product_quantity'];;
            if ($is_tax_included) {
                $contentData['item_price'] = $product['unit_price_tax_incl'];
            } else {
                $contentData['item_price'] = $product['unit_price_tax_excl'];
            }
            $contentData['title'] = $productDetails->name;
            $contentData['description'] = FFPProductInfoTrait::getProductDescription($productDetails);
            $contentData['category'] = FFPProductInfoTrait::getProductCategory($productDetails);
            $data[] = new FFPContent($contentData);
        }
        return $data;
    }
}
