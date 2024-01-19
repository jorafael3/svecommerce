/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/eu",[],function(){return{inputTooLong:function(e){var t=e.input.length-e.maximum,n="Idatzi ";return n+=1==t?"karaktere bat":t+" karaktere",n+=" gutxiago"},inputTooShort:function(e){var t=e.minimum-e.input.length,n="Idatzi ";return n+=1==t?"karaktere bat":t+" karaktere",n+=" gehiago"},loadingMore:function(){return"Emaitza gehiago kargatzen…"},maximumSelected:function(e){return 1===e.maximum?"Elementu bakarra hauta dezakezu":e.maximum+" elementu hauta ditzakezu soilik"},noResults:function(){return"Ez da bat datorrenik aurkitu"},searching:function(){return"Bilatzen…"},removeAllItems:function(){return"Kendu elementu guztiak"}}}),e.define,e.require}();