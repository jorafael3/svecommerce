var FFBPLibrary=function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=1)}([function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,r,n){return r&&e(t.prototype,r),n&&e(t,n),t}}();var o=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.jsonEvents=JSON.parse($("#fabfacebookpixel_script").text()),this.facebookPixelId=this.jsonEvents.facebookPixelId,this.isPixelEnabled=this.jsonEvents.isPixelEnabled,this.executorUrl=this.jsonEvents.fabFacebookPixelExecutorUrl,this.addToCartUrl=this.jsonEvents.fabFacebookPixelAddToCartUrl,this.customerGroups=this.jsonEvents.customerGroups,this.defaultCustomerGroup=this.jsonEvents.defaultCustomerGroup,this.token=""}return n(e,[{key:"submitEvent",value:function(e){var t=this;$.post(this.executorUrl,e).then((function(r){var n=r.eventId,o=t.decodeEvents(e.params);switch(delete o.description,delete o.canonical_url,delete o.product_price,delete o.id_product,e.type){case"ViewCategory":null!=n?fbq("trackCustom","ViewCategory",o,{eventID:n}):fbq("trackCustom","ViewCategory",o);break;case"PageView":null!=n?fbq("track","PageView",o,{eventID:n}):fbq("track","PageView",o);break;case"Search":null!=n?fbq("track","Search",o,{eventID:n}):fbq("track","Search",o);break;case"AddToCart":null!=o.eventID?fbq("track","AddToCart",o,{eventID:o.eventID}):fbq("track","AddToCart",o);break;case"InitiateCheckout":null!=n?fbq("track","InitiateCheckout",o,{eventID:n}):fbq("track","InitiateCheckout",o);break;case"ViewContent":null!=n?fbq("track","ViewContent",o,{eventID:n}):fbq("track","ViewContent",o);break;case"Purchase":null!=o.eventID?fbq("track","Purchase",o,{eventID:o.eventID}):fbq("track","Purchase",o);break;case"CompleteRegistration":null!=o.eventID?fbq("track","CompleteRegistration",o,{eventID:o.eventID}):fbq("track","CompleteRegistration",o)}}))}},{key:"decodeEvents",value:function(e){for(var t in e)if(!Array.isArray(e[t])&&!Number.isInteger(e[t])){var r=document.createElement("textarea");r.innerHTML=e[t],e[t]=r.value}return e}},{key:"collectEventsFromPage",value:function(e){var t=this.jsonEvents.events;for(var r in t){var n=t[r];n.params=this.filterAndSubstituteParams(n.params,e),this.submitEvent(n)}}},{key:"filterAndSubstituteParams",value:function(e,t){for(var r in t)for(var n in e)r==n&&(e[n]=t[r]);return e}},{key:"callFBQInitialization",value:function(){var e,t,r,n,o,a;e=window,t=document,r="script",e.fbq||(n=e.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)},e._fbq||(e._fbq=n),n.push=n,n.loaded=!0,n.version="2.0",n.queue=[],(o=t.createElement(r)).async=!0,o.src="https://connect.facebook.net/en_US/fbevents.js",(a=t.getElementsByTagName(r)[0]).parentNode.insertBefore(o,a)),fbq("init",this.facebookPixelId)}}]),e}();t.default=o,$(document).ready((function(){var e=new o;e.isPixelEnabled&&null!=e.facebookPixelId&&(e.callFBQInitialization(),e.collectEventsFromPage())}))},function(e,t,r){r(0),e.exports=r(2)},function(e,t,r){"use strict";var n,o=r(0),a=(n=o)&&n.__esModule?n:{default:n};$(document).ready((function(){var e=new a.default;e.isPixelEnabled&&"undefined"!=typeof prestashop&&void 0!==prestashop._events&&prestashop.on("updateCart",(function(t){var r={};t&&t.reason&&(r={id_product_attribute:t.reason.idProductAttribute,id_product:t.reason.idProduct,action:t.reason.linkAction}),"add-to-cart"==t.reason.linkAction&&$.post(e.addToCartUrl,r).then((function(t){if(void 0!==prestashop.cart){prestashop.cart.products.find((function(e){return e.id_product==t.productId}));e.isPixelEnabled&&(null!=t.eventId?fbq("track","AddToCart",{content_ids:[t.productId],content_type:"product",value:t.productPrice,currency:t.currencyCode,customer_groups:e.customerGroups,default_customer_group:e.defaultCustomerGroup},{eventID:t.eventId}):fbq("track","AddToCart",{content_ids:[t.productId],content_type:"product",value:t.productPrice,currency:t.currencyCode,customer_groups:e.customerGroups,default_customer_group:e.defaultCustomerGroup}))}})).fail((function(e){prestashop.emit("handleError",{eventType:"updateFabFacebookPixel",resp:e})}))}))}));
/**
     * 2018 Manfredi Petruso
     *
     * NOTICE OF LICENSE
     *
     * This source file is subject to the Open Software License (OSL 3.0)
     * that is bundled with this package in the file LICENSE.txt.
     * It is also available through the world-wide-web at this URL:
     * http://opensource.org/licenses/osl-3.0.php
     * If you did not receive a copy of the license and are unable to
     * obtain it through the world-wide-web, please send an email
     * to manfredi@fabvla.com so we can send you a copy immediately.
     *
     *
     *  @author    Manfredi Petruso <manfredi@fabvla.com>
     *  @copyright  2017 Manfredi Petruso
     *  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
     */
var u=/([^&=]+)=?([^&]*)/g,c=/\+/g,i=function(e){return decodeURIComponent(e.replace(c," "))};$.parseParams=function(e){for(var t,r={};t=u.exec(e);){var n=i(t[1]),o=i(t[2]);"[]"===n.substring(n.length-2)?(r[n=n.substring(0,n.length-2)]||(r[n]=[])).push(o):r[n]=o}return r},$(document).ajaxComplete((function(e,t,r){var n=r.url,o=$.parseParams(n.split("?")[1]||"");if(o.controller&&"product"===o.controller&&$.parseJSON(t.responseText).id_product_attribute){var u=$("#product-details").data("product");if(u){var c=u.id_product+"-"+u.id_product_attribute,i=new Array;i.content_ids=[c],i.id_product=c,i.value=u.price_amount,i.product_price=u.price_amount;var s=new a.default;s.isPixelEnabled&&null!=s.facebookPixelId&&s.collectEventsFromPage(i)}}})),$(document).ready((function(){var e=new a.default;e.isPixelEnabled&&$(document).ajaxSend((function(t,r,n){var o={};if("string"==typeof n.data&&null!=n.data){for(var a=n.data.split("&"),u=0;u<a.length;u++)o[a[u].split("=")[0]]=a[u].split("=")[1];if("cart"==o.controller&&"1"==o.add){var c={action:"add-to-cart",id_product:o.id_product};$.post(e.addToCartUrl,c).then((function(t){null!=t.eventId?fbq("track","AddToCart",{content_ids:[t.productId],content_type:"product",value:t.productPrice,currency:t.currencyCode,customer_groups:e.customerGroups,default_customer_group:e.defaultCustomerGroup},{eventID:t.eventId}):fbq("track","AddToCart",{content_ids:[t.productId],content_type:"product",value:t.productPrice,currency:t.currencyCode,customer_groups:e.customerGroups,default_customer_group:e.defaultCustomerGroup})})).fail((function(e){}))}}}))}))}]);