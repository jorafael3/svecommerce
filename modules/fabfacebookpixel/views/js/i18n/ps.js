/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/ps",[],function(){return{errorLoading:function(){return"پايلي نه سي ترلاسه کېدای"},inputTooLong:function(n){var e=n.input.length-n.maximum,r="د مهربانۍ لمخي "+e+" توری ړنګ کړئ";return 1!=e&&(r=r.replace("توری","توري")),r},inputTooShort:function(n){return"لږ تر لږه "+(n.minimum-n.input.length)+" يا ډېر توري وليکئ"},loadingMore:function(){return"نوري پايلي ترلاسه کيږي..."},maximumSelected:function(n){var e="تاسو يوازي "+n.maximum+" قلم په نښه کولای سی";return 1!=n.maximum&&(e=e.replace("قلم","قلمونه")),e},noResults:function(){return"پايلي و نه موندل سوې"},searching:function(){return"لټول کيږي..."},removeAllItems:function(){return"ټول توکي لرې کړئ"}}}),n.define,n.require}();