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

require_once('FFPConversionAPIUtils.php');
require_once('FFPApiConfig.php');
require_once(__DIR__.'/../FFPUtils.php');

class FFPEventRequest implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $param_types = array(
        'events' => 'FFPEvent',
        'test_event_code' => 'string',
        'partner_agent' => 'string',
        'namespace_id' => 'string',
        'upload_id' => 'string',
        'upload_tag' => 'string',
        'upload_source' => 'string'
    );
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'events' => 'events',
        'test_event_code' => 'test_event_code',
        'partner_agent' => 'partner_agent',
        'namespace_id' => 'namespace_id',
        'upload_id' => 'upload_id',
        'upload_tag' => 'upload_tag',
        'upload_source' => 'upload_source'
    );
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'events' => 'setEvents',
        'test_event_code' => 'setTestEventCode',
        'partner_agent' => 'setPartnerAgent',
        'namespace_id' => 'setNamespaceId',
        'upload_id' => 'setUploadId',
        'upload_tag' => 'setUploadTag',
        'upload_source' => 'setUploadSource'
    );
    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'events' => 'getEvents',
        'test_event_code' => 'getTestEventCode',
        'partner_agent' => 'getPartnerAgent',
        'namespace_id' => 'getNamespaceId',
        'upload_id' => 'getUploadId',
        'upload_tag' => 'getUploadTag',
        'upload_source' => 'getUploadSource'
    );
    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();
    protected $token = null;

    /**
     * Constructor
     * @param string $pixel_id pixel id
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct($pixel_id, $token, array $data = null) {
        $this->container['pixel_id'] = $pixel_id;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['test_event_code'] = isset($data['test_event_code']) ? $data['test_event_code'] : null;
        $this->container['partner_agent'] = isset($data['partner_agent']) ? $data['partner_agent'] : null;
        $this->container['namespace_id'] = isset($data['namespace_id']) ? $data['namespace_id'] : null;
        $this->container['upload_id'] = isset($data['upload_id']) ? $data['upload_id'] : null;
        $this->container['upload_tag'] = isset($data['upload_tag']) ? $data['upload_tag'] : null;
        $this->container['upload_source'] = isset($data['upload_source']) ? $data['upload_source'] : null;
        $this->token = $token;
    }

    private function getToken() {
        return $this->token;
    }

    public function httpClientExecute() {

        $ch = curl_init();

        $base_url = 'https://graph.facebook.com/v'. FFPApiConfig::APIVersion;
        $url = $base_url . '/' . $this->container['pixel_id'] . '/events';

        $params = $this->normalize();
        $params['access_token'] = $this->getToken();

        $printableParams = json_encode($params, JSON_PRETTY_PRINT);

        FFPUtils::log("****** REQUEST EVENT PAYLOAD ******\n".$printableParams);

        if (!empty($params['access_token'])) {

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_CAINFO, FFPConversionAPIUtils::getCaBundlePath());
            curl_setopt($ch, CURLOPT_USERAGENT, 'fbbizsdk-php-v'. FFPApiConfig::SDKVersion);
            curl_setopt($ch, CURLOPT_ENCODING, '*');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen(json_encode($params)))
            );


            $output = curl_exec($ch);

            curl_close($ch);

            $responseData = explode("\n", $output);

            FFPUtils::log("****** RESPONSE FROM FACEBOOK ******\n".$output);

            return $responseData;

        }


    }

    /**
     * Normalize
     * @return array
     */
    public function normalize() {
        $normalized_events = array();
        $events = $this->getEvents();
        if (!is_null($events)) {
            foreach ($events as $event) {
                $normalized_event = $event->normalize();
                array_push($normalized_events, $normalized_event);
            }
        }

        $normalized_payload = array(
            'data' => $normalized_events,
            'test_event_code' => $this->container['test_event_code'],
            'partner_agent' => $this->container['partner_agent'],
            'namespace_id' => $this->container['namespace_id'],
            'upload_id' => $this->container['upload_id'],
            'upload_tag' => $this->container['upload_tag'],
            'upload_source' => $this->container['upload_source'],
        );
        $normalized_payload = array_filter($normalized_payload);

        return $normalized_payload;
    }
    /**
     * Gets an array of Server Event objects
     * @return FacebookAds\Object\ServerSide\Event[]
     */
    public function getEvents() {
        return $this->container['events'];
    }

    /**
     * Gets Partner Agent, which specifies who is sending the event.
     * @return string
     */
    public function getPartnerAgent() {
        return $this->container['partner_agent'];
    }

    /**
     * Gets namespace_id, a scope used to resolve extern_id or Third-party ID.
     * Can be another data set or data partner ID.
     * @return string
     */
    public function getNamespaceId() {
        return $this->container['namespace_id'];
    }

    /**
     * Sets namespace_id, a scope used to resolve extern_id or Third-party ID.
     * Can be another data set or data partner ID.
     * @return $this
     */
    public function setNamespaceId($namespace_id) {
        $this->container['namespace_id'] = $namespace_id;
        return $this;
    }

    /**
     * Gets upload_id, a unique id used to denote the current set being uploaded.
     * @return string
     */
    public function getUploadId() {
        return $this->container['upload_id'];
    }

    /**
     * Sets upload_id, a unique id used to denote the current set being uploaded.
     * @return $this
     */
    public function setUploadId($upload_id) {
        $this->container['upload_id'] = $upload_id;
        return $this;
    }

    /**
     * Gets upload_tag, a tag string added to track your Offline event uploads.
     * @return string
     */
    public function getUploadTag() {
        return $this->container['upload_tag'];
    }

    /**
     * Sets upload_tag, a tag string added to track your Offline event uploads.
     * @return $this
     */
    public function setUploadTag($upload_tag) {
        $this->container['upload_tag'] = $upload_tag;
        return $this;
    }

    /**
     * Gets upload_source, the origin/source of data for the dataset to be uploaded.
     * @return string
     */
    public function getUploadSource() {
        return $this->container['upload_source'];
    }

    /**
     * Sets upload_source, the origin/source of data for the dataset to be uploaded.
     * @return $this
     */
    public function setUploadSource($upload_source) {
        $this->container['upload_source'] = $upload_source;
        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     * @return void
     */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public static function paramTypes() {
        return self::$param_types;
    }

    public static function attributeMap() {
        return self::$attributeMap;
    }

    public static function setters() {
        return self::$setters;
    }

    public static function getters() {
        return self::$getters;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() {
        $invalid_properties = array();
        if ($this->container['events'] === null) {
            $invalid_properties[] = "'events' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid() {
        if ($this->container['events'] === null) {
            return false;
        }
        return true;
    }

    /**
     * Sets an array of Server Event objects
     * @param FacebookAds\Object\ServerSide\Event[] $events An array of Server Event objects
     * @return $this
     */
    public function setEvents($events) {
        $this->container['events'] = $events;
        return $this;
    }

    /**
     * Gets code used to verify that your server events are received correctly by Facebook. Use this
     * code to test your server events in the Test Events feature in Events Manager.
     * See Test Events Tool
     * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
     * for an example.
     * @return string
     */
    public function getTestEventCode() {
        return $this->container['test_event_code'];
    }

    /**
     * Sets code used to verify that your server events are received correctly by Facebook. Use this
     * code to test your server events in the Test Events feature in Events Manager.
     * See Test Events Tool
     * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
     * for an example.
     * @param string $test_event_code Code used to verify that your server events are received correctly by Facebook.
     * Use this code to test your server events in the Test Events feature in Events Manager. See Test Events Tool
     * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api#testEvents)
     * for an example.
     * @return $this
     */
    public function setTestEventCode($test_event_code) {
        $this->container['test_event_code'] = $test_event_code;
        return $this;
    }

    /**
     * Sets Partner Agent, which specifies who is sending the event.
     * @param string $partner_agent The partner agent who is sending the event
     * @return $this
     */
    public function setPartnerAgent($partner_agent) {
        $this->container['partner_agent'] = $partner_agent;

        return $this;
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode($this, JSON_PRETTY_PRINT);
        }

        return json_encode($this);
    }

}