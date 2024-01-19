{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if $blocks}
  <div class="block-reassurance">
    <ul>
      {foreach from=$blocks item=block}
        <li {if $block['type_link'] !== $LINK_TYPE_NONE && !empty($block['link'])} style="cursor:pointer;" onclick="window.open('{$block['link']}')"{/if}>
          <div class="block-reassurance-item">
			{if $block['icon'] != 'undefined'}
				{if $block['icon']}
            		<img src="{$block['icon']}" alt="{$block['title']}" loading="lazy">
				{elseif $block['custom_icon']}
            		<img src="{$block['custom_icon']}" alt="{$block['title']}" loading="lazy">
				{/if}
			{/if}
			<div> 
				<span style="color:{$textColor};">{$block['title'] nofilter}</span>
				{if !empty($block['description'])}
					<span style="color:{$textColor};">{$block['description'] nofilter}</span>
				{/if} 
		    </div>
          </div>
        </li>
      {/foreach}
    </ul>
  </div>
{/if}
