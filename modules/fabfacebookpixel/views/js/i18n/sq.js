/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/sq",[],function(){return{errorLoading:function(){return"Rezultatet nuk mund të ngarkoheshin."},inputTooLong:function(e){var n=e.input.length-e.maximum,t="Të lutem fshi "+n+" karakter";return 1!=n&&(t+="e"),t},inputTooShort:function(e){return"Të lutem shkruaj "+(e.minimum-e.input.length)+" ose më shumë karaktere"},loadingMore:function(){return"Duke ngarkuar më shumë rezultate…"},maximumSelected:function(e){var n="Mund të zgjedhësh vetëm "+e.maximum+" element";return 1!=e.maximum&&(n+="e"),n},noResults:function(){return"Nuk u gjet asnjë rezultat"},searching:function(){return"Duke kërkuar…"},removeAllItems:function(){return"Hiq të gjitha sendet"}}}),e.define,e.require}();