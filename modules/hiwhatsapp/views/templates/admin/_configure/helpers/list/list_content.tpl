{**
* 2012 - 2020 HiPresta
*
* MODULE Blog
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2020
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*}

{extends file="helpers/list/list_content.tpl"}
{block name="td_content"}
    {if $key == 'active'}
        <a
            data-id="{$tr.id_hiwhatsapp|intval}"
            data-status="{$tr.active|escape:'htmlall':'UTF-8'}"
            class="hi-module-status btn {if !$tr.active}btn-danger{else}btn-success{/if}"
            href="#"
            title="{if !$tr.active}{l s='Disabled' mod='hiwhatsapp'}{else}{l s='Enabled' mod='hiwhatsapp'}{/if}">
                <i class="{if !$tr.active}icon-remove{else}icon-check{/if}"></i>
        </a>
    {elseif $key == 'custom_hook'}
        {literal}{{/literal}hook h="displayWhatsAppWidget" id="{$tr.id_hiwhatsapp|intval}"{literal}}{/literal}
    {elseif $key == 'sort'}
        <a href="#">
            <i class="icon-move"></i>
        </a>
    {elseif $key == 'avatar'}
        {if $tr.avatar}
            <img src="{$image_dir|escape:'html':'UTF-8'}avatars/{$tr.avatar|escape:'html':'UTF-8'}" class="thumbnail" style="max-width: 100px;margin-bottom: 0;">
        {else}
            <img src="{$image_dir|escape:'html':'UTF-8'}avatar.jpg" class="thumbnail" style="max-width: 100px;margin-bottom: 0;">
        {/if}
    {elseif $key == 'positions'}
        {foreach $tr.positions as $position}
            {$position.name|escape:'html':'UTF-8'}
            <br>
        {/foreach}
    {elseif $key == 'shops'}
        {foreach $tr.shops as $shop}
            {$shop.name|escape:'html':'UTF-8'}
            <br>
        {/foreach}
    {elseif $key == 'related_products'}
        <a data-id-account="{$tr.id_hiwhatsapp|intval}" class="btn btn-default add-account-related-products" href="#" title="{l s='Manage products' mod='hiwhatsapp'}">
            <i class="icon-list"></i>
        </a>
    {elseif $key == 'related_categories'}
        <a data-id-account="{$tr.id_hiwhatsapp|intval}" class="btn btn-default add-account-related-category" href="#" title="{l s='Manage categories' mod='hiwhatsapp'}">
            <i class="icon-folder-open"></i>
        </a>
    {else}
        {$smarty.block.parent}
    {/if}
{/block}




