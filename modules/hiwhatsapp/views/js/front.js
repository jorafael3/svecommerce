/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

$(function(){
    $('#hi-wap-chatbox-opener').click(function() {
        hiWapToggleChatbox();
    });
});

function hiWapToggleChatbox() {
    $('#hi-wap-chatbox-opener i').toggleClass('hi-wap-chatbox-icon-close');
    $('#hi-wap-chatbox-opener i').toggleClass('hi-wap-chatbox-is-active');
    $('#hi-wap-chatbox-opener i').toggleClass('hi-wap-chatbox-is-visible');
    $('#hi-wap-chatbox-opener').toggleClass('hi-wap-chatbox-is-float');
    $('.hi-wap-chatbox').toggleClass('hi-wap-chatbox-is-visible');
}