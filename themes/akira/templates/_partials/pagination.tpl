{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='pagination_page_list'}
	{if $pagination.should_be_displayed}
	 	<div class="archive-bottom">
			<nav class="pagination">
				{foreach from=$pagination.pages item="page"}
					{if $page.type === 'spacer'}
						<span class="spacer">&hellip;</span>
					{else}
						{if $page.current} 
							<span class="page-numbers current">
						{else}
							<a rel="{if $page.type === 'previous'}prev{elseif $page.type === 'next'}next{else}nofollow{/if}" href="{$page.url}" class="page-numbers {if $page.type === 'previous'}prev {elseif $page.type === 'next'}next {/if}{['js-search-link' => true]|classnames}">
						{/if}
								{if $page.type === 'previous'}
									« {l s='Previous' d='Shop.Theme.Actions'}
								{elseif $page.type === 'next'}
									{l s='Next' d='Shop.Theme.Actions'} »
								{else}
									{$page.page}
								{/if}
						{if $page.current} 
							</span>
						{else}
							</a>
						{/if}
					{/if}
				{/foreach}
			</nav>
		</div>
	{/if}
{/block}
