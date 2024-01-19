/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/hi",[],function(){return{errorLoading:function(){return"परिणामों को लोड नहीं किया जा सका।"},inputTooLong:function(n){var e=n.input.length-n.maximum,r=e+" अक्षर को हटा दें";return e>1&&(r=e+" अक्षरों को हटा दें "),r},inputTooShort:function(n){return"कृपया "+(n.minimum-n.input.length)+" या अधिक अक्षर दर्ज करें"},loadingMore:function(){return"अधिक परिणाम लोड हो रहे है..."},maximumSelected:function(n){return"आप केवल "+n.maximum+" आइटम का चयन कर सकते हैं"},noResults:function(){return"कोई परिणाम नहीं मिला"},searching:function(){return"खोज रहा है..."},removeAllItems:function(){return"सभी वस्तुओं को हटा दें"}}}),n.define,n.require}();