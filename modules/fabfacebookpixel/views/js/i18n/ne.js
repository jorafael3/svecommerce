/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/ne",[],function(){return{errorLoading:function(){return"नतिजाहरु देखाउन सकिएन।"},inputTooLong:function(n){var e=n.input.length-n.maximum,u="कृपया "+e+" अक्षर मेटाउनुहोस्।";return 1!=e&&(u+="कृपया "+e+" अक्षरहरु मेटाउनुहोस्।"),u},inputTooShort:function(n){return"कृपया बाँकी रहेका "+(n.minimum-n.input.length)+" वा अरु धेरै अक्षरहरु भर्नुहोस्।"},loadingMore:function(){return"अरु नतिजाहरु भरिँदैछन् …"},maximumSelected:function(n){var e="तँपाई "+n.maximum+" वस्तु मात्र छान्न पाउँनुहुन्छ।";return 1!=n.maximum&&(e="तँपाई "+n.maximum+" वस्तुहरु मात्र छान्न पाउँनुहुन्छ।"),e},noResults:function(){return"कुनै पनि नतिजा भेटिएन।"},searching:function(){return"खोजि हुँदैछ…"}}}),n.define,n.require}();