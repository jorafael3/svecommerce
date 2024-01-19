/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var e=jQuery.fn.select2.amd;e.define("select2/i18n/cs",[],function(){function e(e,n){switch(e){case 2:return n?"dva":"dvě";case 3:return"tři";case 4:return"čtyři"}return""}return{errorLoading:function(){return"Výsledky nemohly být načteny."},inputTooLong:function(n){var t=n.input.length-n.maximum;return 1==t?"Prosím, zadejte o jeden znak méně.":t<=4?"Prosím, zadejte o "+e(t,!0)+" znaky méně.":"Prosím, zadejte o "+t+" znaků méně."},inputTooShort:function(n){var t=n.minimum-n.input.length;return 1==t?"Prosím, zadejte ještě jeden znak.":t<=4?"Prosím, zadejte ještě další "+e(t,!0)+" znaky.":"Prosím, zadejte ještě dalších "+t+" znaků."},loadingMore:function(){return"Načítají se další výsledky…"},maximumSelected:function(n){var t=n.maximum;return 1==t?"Můžete zvolit jen jednu položku.":t<=4?"Můžete zvolit maximálně "+e(t,!1)+" položky.":"Můžete zvolit maximálně "+t+" položek."},noResults:function(){return"Nenalezeny žádné položky."},searching:function(){return"Vyhledávání…"},removeAllItems:function(){return"Odstraňte všechny položky"}}}),e.define,e.require}();