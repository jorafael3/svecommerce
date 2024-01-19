/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/lt",[],function(){function n(n,e,i,t){return n%10==1&&(n%100<11||n%100>19)?e:n%10>=2&&n%10<=9&&(n%100<11||n%100>19)?i:t}return{inputTooLong:function(e){var i=e.input.length-e.maximum,t="Pašalinkite "+i+" simbol";return t+=n(i,"į","ius","ių")},inputTooShort:function(e){var i=e.minimum-e.input.length,t="Įrašykite dar "+i+" simbol";return t+=n(i,"į","ius","ių")},loadingMore:function(){return"Kraunama daugiau rezultatų…"},maximumSelected:function(e){var i="Jūs galite pasirinkti tik "+e.maximum+" element";return i+=n(e.maximum,"ą","us","ų")},noResults:function(){return"Atitikmenų nerasta"},searching:function(){return"Ieškoma…"},removeAllItems:function(){return"Pašalinti visus elementus"}}}),n.define,n.require}();