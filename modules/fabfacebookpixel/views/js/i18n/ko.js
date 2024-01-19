/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/ko",[],function(){return{errorLoading:function(){return"결과를 불러올 수 없습니다."},inputTooLong:function(n){return"너무 깁니다. "+(n.input.length-n.maximum)+" 글자 지워주세요."},inputTooShort:function(n){return"너무 짧습니다. "+(n.minimum-n.input.length)+" 글자 더 입력해주세요."},loadingMore:function(){return"불러오는 중…"},maximumSelected:function(n){return"최대 "+n.maximum+"개까지만 선택 가능합니다."},noResults:function(){return"결과가 없습니다."},searching:function(){return"검색 중…"},removeAllItems:function(){return"모든 항목 삭제"}}}),n.define,n.require}();