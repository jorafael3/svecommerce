{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{function name="search_categories" nodes=[] depth=0}
  {strip}
    {if $nodes|count}
        {foreach from=$nodes item=node}
            <li class="cat-item" data-depth="{$depth}">
				<a class="cat-value" href="#" data-value="{$node.id}">
					{$node.name nofilter}
				</a>
            </li>
            {if $node.children}
              {search_categories nodes=$node.children depth=$depth+1}
            {/if}
        {/foreach}
    {/if}
  {/strip}
{/function}
<div class="category-dropdown">
	<div class="category-dropdown-inner">
		<input name="c" value="0" type="hidden">
		<a href="#">{l s='Select category' mod='nrtsearchbar'}</a>
		<div class="list-wrapper wrapper-scroll">
			<ul class="wrapper-scroll-content">
				<li class="cat-item" data-depth="0" style="display: none;">
					<a class="cat-value" href="#" data-value="0"><span></span>{l s='Select category' mod='nrtsearchbar'}</a>
				</li>
				<li class="cat-item" data-depth="0">
					<a class="cat-value" href="#" data-value="{$search_categories.id}"><span></span>{$search_categories.name nofilter}</a>
				</li>
				{search_categories nodes=$search_categories.children}
			</ul>
		</div>
	</div>
</div>
