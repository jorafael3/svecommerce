/*
* The MIT License (MIT)
* Copyright (c) 2012-2021 Kevin Brown, Igor Vaynberg, and Select2 contributors
* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*
* */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/zh-CN",[],function(){return{errorLoading:function(){return"无法载入结果。"},inputTooLong:function(n){return"请删除"+(n.input.length-n.maximum)+"个字符"},inputTooShort:function(n){return"请再输入至少"+(n.minimum-n.input.length)+"个字符"},loadingMore:function(){return"载入更多结果…"},maximumSelected:function(n){return"最多只能选择"+n.maximum+"个项目"},noResults:function(){return"未找到结果"},searching:function(){return"搜索中…"},removeAllItems:function(){return"删除所有项目"}}}),n.define,n.require}();