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

{if $wap_accounts}
    <div class="hi-wap-widgets-container">
        <div class="hi-wap-widget">
            <div class="hi-wap-widget-body">
                {foreach $wap_accounts as $wap_account}
                    <div class="hi-wap-widget-account">
                        <a target="_blank" class="clearfix" href=" https://wa.me/{$wap_account.account_number}">
                            <div class="hi-wap-widget-account-avatar">
                                {if $wap_account.avatar}
                                    <img src="{$module_dir}/views/img/avatars/{$wap_account.avatar}">
                                {else}
                                    <img src="{$module_dir}/views/img/avatar.jpg">
                                {/if}
                            </div>
                            <div class="hi-wap-widget-account-details">
                                <div class="hi-wap-widget-account-name">{$wap_account.name}</div>
                                <div class="hi-wap-widget-account-title">{$wap_account.title}</div>
                                <div class="hi-wap-widget-button-text">{$wap_account.button_label}</div>
                                {if !$wap_account.availability_status}
                                    <div class="hi-wap-widget-account-offline-text">{$wap_account.offline_text}</div>
                                {/if}
                            </div>
                            <div class="hi-wap-widget-account-status {if !$wap_account.availability_status}hi-wap-widget-account-offline{/if}">
                                {if $wap_account.availability_status}
                                    {l s='online' mod='hiwhatsapp'}
                                {else}
                                    {l s='offline' mod='hiwhatsapp'}
                                {/if}
                            </div>
                        </a>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
{/if}