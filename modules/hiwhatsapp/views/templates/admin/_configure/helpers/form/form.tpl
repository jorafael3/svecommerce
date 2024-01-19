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

{extends file="helpers/form/form.tpl"}
{block name="script"}
    var ps_force_friendly_product = false;
{/block}
{block name="input" prepend}
    <script type="text/javascript">
        var PS_ALLOW_ACCENTED_CHARS_URL;
        {if isset($PS_ALLOW_ACCENTED_CHARS_URL) && $PS_ALLOW_ACCENTED_CHARS_URL}
            PS_ALLOW_ACCENTED_CHARS_URL = 1;
        {else}
            PS_ALLOW_ACCENTED_CHARS_URL = 0;
        {/if}
    </script>
{/block}
{block name="field"}
    {if $input.type == 'weektime'}
        <div class="col-lg-9">
            {foreach $weekdays as $weekday_key => $weekday}
                <div class="checkbox clearfix">
                    <label for="{$weekday_key}" class="col-lg-2">
                        <input type="checkbox" name="{$weekday_key}" id="{$weekday_key}" class="weektime" value="1" {if $fields_value[$input.name][$weekday_key].active}checked{/if}>
                        {$weekday}
                    </label>
                    <select name="availability_from_{$weekday_key}" class="col-lg-2">
                        {foreach $availability_hours as $availability_hour}
                            <option value="{$availability_hour}" {if $fields_value[$input.name][$weekday_key].from == $availability_hour}selected{/if}>{$availability_hour}</option>
                        {/foreach}
                    </select>
                    <div class="col-lg-1"></div>
                    <select name="availability_to_{$weekday_key}" class="col-lg-2">
                        {foreach $availability_hours as $availability_hour}
                            <option value="{$availability_hour}" {if $fields_value[$input.name][$weekday_key].to == $availability_hour}selected{/if}>{$availability_hour}</option>
                        {/foreach}
                    </select>
                </div>
            {/foreach}
        </div>
    {/if}
    {$smarty.block.parent}
{/block}
