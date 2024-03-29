{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @license    https://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($social_links) && $social_links|is_array}
    {if count($social_links)}
        <div class="social-list" data-title="{l s='Share' mod='nrtsocialbutton'}:" data-title-follow="{l s='Follow' mod='nrtsocialbutton'}:">
            {foreach from=$social_links item='social_link'}
                <a rel="nofollow" target="_blank" class="social-icon social-{$social_link.class}" href="{$social_link.url}" title="{$social_link.label}">{$social_link.icon nofilter}{$social_link.label}</a>
            {/foreach}
        </div>
    {/if}
{/if}
