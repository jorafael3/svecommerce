/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/fi",[],function(){return{errorLoading:function(){return"Tuloksia ei saatu ladattua."},inputTooLong:function(n){return"Ole hyvä ja anna "+(n.input.length-n.maximum)+" merkkiä vähemmän"},inputTooShort:function(n){return"Ole hyvä ja anna "+(n.minimum-n.input.length)+" merkkiä lisää"},loadingMore:function(){return"Ladataan lisää tuloksia…"},maximumSelected:function(n){return"Voit valita ainoastaan "+n.maximum+" kpl"},noResults:function(){return"Ei tuloksia"},searching:function(){return"Haetaan…"},removeAllItems:function(){return"Poista kaikki kohteet"}}}),n.define,n.require}();