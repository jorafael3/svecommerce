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
    <div class="hi-wap-chatbox-container hi-wap-chatbox-position-{$chatbox_position}">
        <div class="hi-wap-chatbox">
            <div class="hi-wap-chatbox-header">
                <img src="{$module_dir}/views/img/whatsapp-logo-white.png">
                <div class="hi-wap-chatbox-header-title">{l s='Hello!' mod='hiwhatsapp'}</div>
                <div class="hi-wap-chatbox-header-subtitle">{l s='Any questions? Feel free to chat with our support team.' mod='hiwhatsapp'}</div>
            </div>
            <div class="hi-wap-chatbox-body">
                {foreach $wap_accounts as $wap_account}
                    <div class="hi-wap-chatbox-account">
                        <a target="_blank" class="clearfix" href=" https://wa.me/{$wap_account.account_number}">
                            <div class="hi-wap-account-avatar">
                                {if $wap_account.avatar}
                                    <img src="{$module_dir}/views/img/avatars/{$wap_account.avatar}">
                                {else}
                                    <img src="{$module_dir}/views/img/avatar.jpg">
                                {/if}
                            </div>
                            <div class="hi-wap-account-details">
                                <div class="hi-wap-account-name">{$wap_account.name}</div>
                                <div class="hi-wap-account-title">{$wap_account.title}</div>
                                {if !$wap_account.availability_status}
                                    <div class="hi-wap-account-offline-text">{$wap_account.offline_text}</div>
                                {/if}
                            </div>
                            <div class="hi-wap-account-status {if !$wap_account.availability_status}hi-wap-account-offline{/if}">
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
        <a id="hi-wap-chatbox-opener" class="hi-wap-chatbox-opener">
            <i class="hi-wap-chatbox-icon"></i>
        </a>
    </div>
{/if}