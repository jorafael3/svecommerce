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

require_once(__DIR__ . '/FFPCategoryInfoTrait.php');

class FFPEventService
{
    private $token;
    private $idShop;
    private $idShopGroup;
    private $fbPixelId;
    private $test;

    public function __construct()
    {
        $this->idShop = Shop::getContextShopID();
        $this->idShopGroup = Shop::getContextShopGroupID();
        $this->fbPixelId = Configuration::get('FAB_FACEBOOK_PIXEL_ID', null, $this->idShopGroup, $this->idShop);
        $this->token = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TOKEN', null, $this->idShopGroup, $this->idShop);
        $this->test = (string)Configuration::get('FAB_FACEBOOK_CONVERSIONAPI_TEST', null, $this->idShopGroup, $this->idShop);
    }

    public function viewCategory($data)
    {
        $eventId = null;
        $ffpEventViewCategoryContent = new FFPEventViewCategoryContent($this->token, $this->fbPixelId, $this->test);
        if (!empty($this->token)) {
            $ffpEventViewCategoryContent->sendViewCategoryContent($data);
            $eventId = $ffpEventViewCategoryContent->getEventId();
        }
        return $eventId;
    }

}