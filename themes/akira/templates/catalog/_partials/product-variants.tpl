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
<div class="product-variants js-product-variants">
  {foreach from=$groups key=id_attribute_group item=group}
  	{if !empty($group.attributes)}
        <div class="product-variants-item type_{$group.group_type}">
          <span class="control-label">{$group.name}</span>
          {if $group.group_type == 'select'}
            <div class="select-container">
                <select
                  id="group_{$id_attribute_group}"
                  aria-label="{$group.name}"
				  class="form-control"		
                  data-product-attribute="{$id_attribute_group}"
                  name="group[{$id_attribute_group}]">
                  {foreach from=$group.attributes key=id_attribute item=group_attribute}
                    <option value="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name}</option>
                  {/foreach}
                </select>
            </div>
          {elseif $group.group_type == 'color'}
            <ul id="group_{$id_attribute_group}">
              {foreach from=$group.attributes key=id_attribute item=group_attribute}
                <li class="input-container">
                  <label aria-label="{$group_attribute.name}">
                  <input class="input-color" type="radio" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} checked="checked"{/if}>
                  <span {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture})"{elseif $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code}"{/if}>				  
                   <span class="corlor-tooltip">
                        <span class="bg-tooltip" {if $group_attribute.texture} style="background-image: url({$group_attribute.texture})"{elseif $group_attribute.html_color_code} style="background-color: {$group_attribute.html_color_code}"{/if}></span>
                        <span class="name-tooltip">{$group_attribute.name}</span>
                   </span>
                  </span>
                  </label>
                </li>
              {/foreach}
            </ul>
          {elseif $group.group_type == 'radio'}
            <ul id="group_{$id_attribute_group}">
              {foreach from=$group.attributes key=id_attribute item=group_attribute}
                <li class="input-container">
                  <input class="input-radio" type="radio" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} checked="checked"{/if}>
                  <span class="radio-label">{$group_attribute.name}</span>
                </li>
              {/foreach}
            </ul>
          {/if}
        </div>
    {/if}
  {/foreach}
</div>
