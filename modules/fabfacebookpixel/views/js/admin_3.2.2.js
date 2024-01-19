var FFBPLibrary=function(e){var t={};function a(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,a),r.l=!0,r.exports}return a.m=e,a.c=t,a.d=function(e,t,o){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(a.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)a.d(o,r,function(t){return e[t]}.bind(null,r));return o},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=3)}([,,,function(e,t,a){a(4),a(5),a(6),a(7),a(10),a(11),e.exports=a(12)},function(e,t,a){"use strict";
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/function o(){$(".js-select2.psattr").select2({data:psAttrGroups,placeholder:"Select an attribute"}),$(".js-select2.facebookattr").select2({data:fbAttributeGroups,placeholder:"Select an attribute"}),r(),$(window).resize((function(){r()}))}function r(){var e=$(window).width()/5;$("#ffp-attribute-mapping-card .select2").width(e)}$(document).ready((function(){if($("#ffp-attribute-mapping-card").length){var e='<td><select name="ffbattrgr[row0][ps]"  id="ffbattrgr-row0-ps"  class="js-select2 form-control psattr"></select></td><td>'+mappedToString+'</td><td><select name="ffbattrgr[row0][facebook]" id="ffbattrgr-row0-facebook" class="js-select2 form-control facebookattr"></select></td><td style="text-align:right"><button type="button" class="btn btn-primary delete" aria-label="Iceberg"><i class="material-icons">delete</i> Delete</button></td>';$("#ffp-attribute-mapping-card .delete").first().hide(),$("#ffp-attribute-mapping-card .addnew").click((function(t){var a=$("#ffp-attribute-mapping-card .clonable-row").size(),r='<tr class="clonable-row">'+e.replace(/row0/gi,"row"+a)+"</tr>";$("#ffp-attribute-mapping-card  .clonable-row").last().after(r),$($("#ffp-attribute-mapping-card .clonable-row").last().find(".delete")[0]).show(),$(".delete").click((function(e){$(e.currentTarget).closest(".clonable-row").remove()})),o()})),$(".delete").click((function(e){$(e.currentTarget).closest(".clonable-row").remove()})),o()}}))},function(e,t,a){"use strict";
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/$(document).ready((function(){$(".external_category_definition").change((function(e){var t=$(this),a=t.attr("data-type"),o=this.value,r=t.attr("data-category");$.ajax({success:function(){$.growl.notice({message:"Category Linked."})},error:function(){$.growl.error({message:"An error occurred importing definitions."})},timeout:2e4,type:"POST",dataType:"json",url:"ajax-tab.php",data:{ajax:!0,controller:"FabFacebookPixelAjax",action:"associateCategory",token:t.attr("data-token"),type:a,id_ext_category:o,id_category:r}})}))}))},function(e,t,a){"use strict";
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/function o(){$(".js-select2.ps").select2({ajax:{type:"POST",dataType:"json",url:"ajax-tab.php",data:function(e){return{search:e.term,id_lang:idLang,ajax:!0,controller:"FabFacebookPixelAjax",action:"getPsCategories",token:psToken}}}}),$(".js-select2.google").select2({ajax:{type:"POST",dataType:"json",url:"ajax-tab.php",data:function(e){return{search:e.term,id_lang:idLang,ajax:!0,controller:"FabFacebookPixelAjax",action:"getSocialCategories",token:psToken,type:0}}}}),$(".js-select2.facebook").select2({ajax:{type:"POST",dataType:"json",url:"ajax-tab.php",data:function(e){return{search:e.term,id_lang:idLang,ajax:!0,controller:"FabFacebookPixelAjax",action:"getSocialCategories",token:psToken,type:1}}}}),r(),$(window).resize((function(){r()}))}function r(){var e=$(window).width()/5;$("#ffp-category-mapping-card .select2").width(e)}$(document).ready((function(){var e='<td><select name="ffpcat[row0][ps]" id="ffpcat-row0-ps" class="js-select2 form-control ps"></select></td><td><select name="ffpcat[row0][google]" id="ffpcat-row0-google" class="js-select2 form-control google"></select></td><td><select name="ffpcat[row0][facebook]" id="ffpcat-row0-facebook" class="js-select2 form-control facebook"></select></td><td style="text-align:right"><button type="button" class="btn btn-primary delete" aria-label="Iceberg"><i class="material-icons">delete</i> Delete</button></td>';$("#definitions-directlink").click((function(e){$("#ffb_download_definitions-tab").click()})),$("#ffp-category-mapping-card .delete").first().hide(),$("#ffp-category-mapping-card .reset").first().show(),$("#ffp-category-mapping-card .addnew").click((function(t){var a=$("#ffp-category-mapping-card .clonable-row").size(),r='<tr class="clonable-row">'+e.replace(/row0/gi,"row"+a)+"</tr>";$("#ffp-category-mapping-card  .clonable-row").last().after(r),$($("#ffp-category-mapping-card .clonable-row").last().find(".delete")[0]).show(),$(".delete").click((function(e){$(e.currentTarget).closest(".clonable-row").remove()})),o()})),$(".delete").click((function(e){$(e.currentTarget).closest(".clonable-row").remove()})),o()}))},function(e,t,a){"use strict";var o,r=a(8),n=(o=r)&&o.__esModule?o:{default:o};function c(e){var t=$("#generator").data("token"),a=$("#generator").data("url"),o=$("#shopId").val()?"&shopId="+$("#shopId").val():"",r=$("#langId").val()?"&langId="+$("#langId").val():"",n=$("#currencyId").val()?"&currencyId="+$("#currencyId").val():"",c=$("#countryId").val()?"&countryId="+$("#countryId").val():"",i=new Array,l="";$('input[name="categoryBox[]"]:checked').each((function(){i.push(this.value)}));for(var s=0;s<i.length;s++)l+="&categoryId[]="+i[s];var d=$("#catalogInfo").val()?"&catalogInfo="+$("#catalogInfo").val():"",f=a.indexOf("?")>-1?"&":"?",u=a+f+"token="+t+o+r+n+c+l+d;return e&&(u+="&noStoreCatalog=true"),u}
/**
  * 2017 Manfredi Petruso
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Open Software License (OSL 3.0)
  * that is bundled with this package in the file LICENSE.txt.
  * It is also available through the world-wide-web at this URL:
  * http://opensource.org/licenses/osl-3.0.php
  * If you did not receive a copy of the license and are unable to
  * obtain it through the world-wide-web, please send an email
  * to manfredi.petruso@fabvla.com so we can send you a copy immediately.
  *
  *
  *  @author    Manfredi Petruso <manfredi@fabvla.com>
  *  @copyright  2017 Manfredi Petruso
  *  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
  */function i(){var e=$("#generator").data("csv-prefix"),t=$("#shopId").val(),a=$("#langId").find(":selected").data("iso")?"_"+$("#langId").find(":selected").data("iso"):"",o=$("#currencyId").find(":selected").data("iso")?"_"+$("#currencyId").find(":selected").data("iso"):"",r=$("#countryId").find(":selected").data("iso")?"_"+$("#countryId").find(":selected").data("iso"):"",n=$("input[name='categoryBox']:checked").val()?"_"+$("input[name='categoryBox']:checked").val():"";n=new Array;$('input[name="categoryBox[]"]:checked').each((function(){n.push(this.value)}));for(var c="",i=0;i<n.length;i++)c+="_"+n[i];return e+t+a+o+r+c+(0!=$("#catalogInfo").val()?"_"+$("#catalogInfo").val():"")+".csv"}function l(){if($("#storeurl").text(c()),$("#catalogcsv").text(i()),$("#storeurlanchor").attr("href",c()),$("#catalogcsvanchor").attr("href",i()),$("#exportUrl").attr("href",c(!0)),$("#catalogInfo"),1==$("#catalogInfo").val()){var e=$("#dyncatalog").data("message-country");$("#dyncatalog").text(e),$("#dyncatalog").show()}else if(2==$("#catalogInfo").val()){var t=$("#dyncatalog").data("message-language");$("#dyncatalog").text(t),$("#dyncatalog").show()}else $("#dyncatalog").hide()}$(document).ready((function(){$("#uncheck-all-categories-treeview, #check-all-categories-treeview").click((function(e){l()})),$(".copy-to-clipboard").click((function(){var e=$(this).data("elem"),t=$("#"+e).text();(0,n.default)(t),$.growl.notice({message:"Copied to cliboard."})})),$("#langId, #currencyId, #countryId, #catalogInfo, input[name='categoryBox[]']").change((function(e){l()})),$("#generator").length&&($("#storeurl").text(c()),$("#catalogcsv").text(i()),$("#storeurlanchor").attr("href",c()),$("#catalogcsvanchor").attr("href",i()),$("#exportUrl").attr("href",c(!0)))}))},function(e,t,a){"use strict";var o=a(9),r={"text/plain":"Text","text/html":"Url",default:"Text"};e.exports=function(e,t){var a,n,c,i,l,s,d=!1;t||(t={}),a=t.debug||!1;try{if(c=o(),i=document.createRange(),l=document.getSelection(),(s=document.createElement("span")).textContent=e,s.style.all="unset",s.style.position="fixed",s.style.top=0,s.style.clip="rect(0, 0, 0, 0)",s.style.whiteSpace="pre",s.style.webkitUserSelect="text",s.style.MozUserSelect="text",s.style.msUserSelect="text",s.style.userSelect="text",s.addEventListener("copy",(function(o){if(o.stopPropagation(),t.format)if(o.preventDefault(),void 0===o.clipboardData){a&&console.warn("unable to use e.clipboardData"),a&&console.warn("trying IE specific stuff"),window.clipboardData.clearData();var n=r[t.format]||r.default;window.clipboardData.setData(n,e)}else o.clipboardData.clearData(),o.clipboardData.setData(t.format,e);t.onCopy&&(o.preventDefault(),t.onCopy(o.clipboardData))})),document.body.appendChild(s),i.selectNodeContents(s),l.addRange(i),!document.execCommand("copy"))throw new Error("copy command was unsuccessful");d=!0}catch(o){a&&console.error("unable to copy using execCommand: ",o),a&&console.warn("trying IE specific stuff");try{window.clipboardData.setData(t.format||"text",e),t.onCopy&&t.onCopy(window.clipboardData),d=!0}catch(o){a&&console.error("unable to copy using clipboardData: ",o),a&&console.error("falling back to prompt"),n=function(e){var t=(/mac os x/i.test(navigator.userAgent)?"⌘":"Ctrl")+"+C";return e.replace(/#{\s*key\s*}/g,t)}("message"in t?t.message:"Copy to clipboard: #{key}, Enter"),window.prompt(n,e)}}finally{l&&("function"==typeof l.removeRange?l.removeRange(i):l.removeAllRanges()),s&&document.body.removeChild(s),c()}return d}},function(e,t){e.exports=function(){var e=document.getSelection();if(!e.rangeCount)return function(){};for(var t=document.activeElement,a=[],o=0;o<e.rangeCount;o++)a.push(e.getRangeAt(o));switch(t.tagName.toUpperCase()){case"INPUT":case"TEXTAREA":t.blur();break;default:t=null}return e.removeAllRanges(),function(){"Caret"===e.type&&e.removeAllRanges(),e.rangeCount||a.forEach((function(t){e.addRange(t)})),t&&t.focus()}}},function(e,t,a){"use strict";
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
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2018 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/$(document).ready((function(){$("#get_google_definitions, #get_facebook_definitions").click((function(e){var t="",a=$(this);a.attr("disabled","disabled"),t="get_google_definitions"==a.attr("id")?"fetchGoogleCategories":"fetchFacebookCategories",$.ajax({success:function(){$.growl.notice({message:"Definitions imported."}),a.removeAttr("disabled"),a.text(a.attr("data-updatemsg"));var e=window.location.href;e.indexOf("?")>-1?e+="&tab=ffb_download_definitions":e+="?tab=ffb_download_definitions",window.location.href=e},error:function(){$.growl.error({message:"An error occurred importing definitions."}),a.removeAttr("disabled")},timeout:25e4,type:"POST",dataType:"json",url:"ajax-tab.php",data:{ajax:!0,controller:"FabFacebookPixelAjax",action:t,token:a.attr("data-token")}})}))}))},function(e,t,a){"use strict";
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/$(document).ready((function(){1==$("input[name='FAB_FACEBOOK_PIXEL_ACTIVE']:checked").val()?$(".block-fb-pixel-id").show():$(".block-fb-pixel-id").hide(),$("input[name='FAB_FACEBOOK_PIXEL_ACTIVE']").change((function(e){e.currentTarget;1==$("input[name='FAB_FACEBOOK_PIXEL_ACTIVE']:checked").val()?$(".block-fb-pixel-id").slideDown("slow",(function(){$("#FAB_FACEBOOK_PIXEL_ID").prop("required",!0)})):$(".block-fb-pixel-id").slideUp("slow",(function(){$("#FAB_FACEBOOK_PIXEL_ID").prop("required",!1)}))})),$("#reference_warning").click((function(e){var t=$(this);$.ajax({success:function(){$("#reference_warning_alert").hide()},error:function(){$.growl.error({message:"An error occurred dismissing this alert."})},timeout:25e4,type:"POST",dataType:"json",url:"ajax-tab.php",data:{ajax:!0,controller:"FabFacebookPixelAjax",action:"discardReferenceWarning",token:t.attr("data-token")}})}))}))},function(e,t,a){"use strict";
/**
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/$(document).ready((function(){var e="",t=new URLSearchParams(window.location.search);t.has("tab")&&(e=t.get("tab")),$("#"+e+"-tab").click(),$(".nav-link").click((function(e){var t=$(e.currentTarget),a=window.location.href,o=new URL(a),r=o.searchParams,n=t.attr("aria-controls");r.set("tab",n),window.history.replaceState("Object","Title",o.toString())}))}))}]);