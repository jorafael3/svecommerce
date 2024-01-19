/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/hr",[],function(){function n(n){var e=" "+n+" znak";return n%10<5&&n%10>0&&(n%100<5||n%100>19)?n%10>1&&(e+="a"):e+="ova",e}return{errorLoading:function(){return"Preuzimanje nije uspjelo."},inputTooLong:function(e){return"Unesite "+n(e.input.length-e.maximum)},inputTooShort:function(e){return"Unesite još "+n(e.minimum-e.input.length)},loadingMore:function(){return"Učitavanje rezultata…"},maximumSelected:function(n){return"Maksimalan broj odabranih stavki je "+n.maximum},noResults:function(){return"Nema rezultata"},searching:function(){return"Pretraga…"},removeAllItems:function(){return"Ukloni sve stavke"}}}),n.define,n.require}();