/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/te",[],function(){return{errorLoading:function(){return"ఫలితాలు చూపించలేకపోతున్నాము"},inputTooLong:function(n){var e=n.input.length-n.maximum,r=e;return r+=1!=e?" అక్షరాలు తొలిగించండి":" అక్షరం తొలిగించండి"},inputTooShort:function(n){return n.minimum-n.input.length+" లేక మరిన్ని అక్షరాలను జోడించండి"},loadingMore:function(){return"మరిన్ని ఫలితాలు…"},maximumSelected:function(n){var e="మీరు "+n.maximum;return 1!=n.maximum?e+=" అంశాల్ని మాత్రమే ఎంచుకోగలరు":e+=" అంశాన్ని మాత్రమే ఎంచుకోగలరు",e},noResults:function(){return"ఫలితాలు లేవు"},searching:function(){return"శోధిస్తున్నాము…"},removeAllItems:function(){return"అన్ని అంశాల్ని తొలిగించండి"},removeItem:function(){return"తొలిగించు"}}}),n.define,n.require}();