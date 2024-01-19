{**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*}

<div class="col-lg-2">
    <div class="list-group">
        {foreach from=$tabs key=tab_key item=tab}
            <a 
                {if $tab_key == 'version'} style="margin-top:30px;" {/if}
                class="list-group-item {if $tab_key == $active_tab || ($active_tab == '' && $tab_key == 'whatsapp_accounts')}active{/if}"
                href="{$module_url|escape:'htmlall':'UTF-8'}&{$module_tab_key|escape:'html':'UTF-8'}={$tab_key|escape:'htmlall':'UTF-8'}">
                {if isset($tab.icon)}
                    <i class="{$tab.icon|escape:'htmlall':'UTF-8'}"></i>
                {/if}
                {if $tab_key != 'version'}
                    {$tab.title|escape:'htmlall':'UTF-8'}
                {else}
                    {$tab.title|escape:'htmlall':'UTF-8'} - {$module_version|escape:'html':'UTF-8'}
                {/if}
            </a>
        {/foreach}
    </div>
</div>
