/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/et",[],function(){return{inputTooLong:function(e){var n=e.input.length-e.maximum,t="Sisesta "+n+" täht";return 1!=n&&(t+="e"),t+=" vähem"},inputTooShort:function(e){var n=e.minimum-e.input.length,t="Sisesta "+n+" täht";return 1!=n&&(t+="e"),t+=" rohkem"},loadingMore:function(){return"Laen tulemusi…"},maximumSelected:function(e){var n="Saad vaid "+e.maximum+" tulemus";return 1==e.maximum?n+="e":n+="t",n+=" valida"},noResults:function(){return"Tulemused puuduvad"},searching:function(){return"Otsin…"},removeAllItems:function(){return"Eemalda kõik esemed"}}}),e.define,e.require}();