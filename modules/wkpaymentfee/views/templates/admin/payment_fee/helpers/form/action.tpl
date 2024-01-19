{*
* 2010-2022 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2022 Webkul IN
* @license LICENSE.txt
*}

<div class="form-group row">
    <label class="control-label col-lg-3">{l s='Apply a fee' mod='wkpaymentfee'}</label>
    <div class="col-lg-9">
        <div class="radio">
            <label for="amount">
                <input type="radio" name="feetype" id="amount" value="amount" checked="checked"
                {if isset($objPaymentFee)}{if $objPaymentFee->feetype == 'amount'}checked{/if}{/if}/>
                {l s='Amount' mod='wkpaymentfee'}
            </label>
        </div>
        <div class="radio">
            <label for="percent">
                <input type="radio" name="feetype" id="percent" value="percent"
                {if isset($objPaymentFee)}{if $objPaymentFee->feetype == 'percent'}checked{/if}{/if}/>
                {l s='Percent (%)' mod='wkpaymentfee'}
            </label>
        </div>
        <div class="radio">
            <label for="both">
                <input type="radio" name="feetype" id="both" value="both"
                {if isset($objPaymentFee)}{if $objPaymentFee->feetype == 'both'}checked{/if}{/if}/>
                <i class="icon-ban-circle color_danger"></i> {l s='Amount + Percent' mod='wkpaymentfee'}
            </label>
        </div>
    </div>
</div>
<div id="amount_div" class="form-group row">
    <label class="control-label col-lg-3">{l s='Amount' mod='wkpaymentfee'}</label>
    <div class="col-lg-7">
        <div class="row">
            <div class="col-lg-3">
                <input type="text" id="feeamount" name="feeamount" value="{if isset($objPaymentFee)}{$objPaymentFee->feeamount|escape:'html':'UTF-8'}{/if}" onchange="this.value = this.value.replace(/,/g, '.');" />
            </div>
            <div class="col-lg-3">
                <select name="feecurrency" >
                    {foreach from=$currencies item='currency'}
                    <option value="{$currency.id_currency|intval}"
                        {if isset($idCurrency)}
                        {if $idCurrency.fee_currency == $currency.id_currency}selected="selected" {/if}
                        {elseif $currency.id_currency == $current_currency}selected="selected"{/if}>
                        {$currency.iso_code|escape:'quotes':'UTF-8'}
                    </option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</div>
<div id="percent_div" class="form-group row">
    <label class="control-label col-lg-3">{l s='Percent value' mod='wkpaymentfee'}</label>
    <div class="input-group col-lg-2">
        <span class="input-group-addon">%</span>
        <input type="text" id="feepercent" class="input-mini" name="feepercent"
        value="{if isset($objPaymentFee)}{$objPaymentFee->feepercent|escape:'html':'UTF-8'}{/if}"/>
    </div>
</div>
<div id="order_div" class="form-group row">
    <label class="control-label col-lg-3">
        <span class="label-tooltip" data-toggle="tooltip"
            title="{l s='Maximum amount to exempt fee & minimum amount to avail discount (Zero to disable).' mod='wkpaymentfee'}">
            {l s='Order amount' mod='wkpaymentfee'}
        </span>
    </label>
    <div class="col-lg-7">
        <div class="row">
            <div class="col-lg-3">
                <input type="text" id="orderamount" name="orderamount"
                value="{if isset($objPaymentFee)}{$objPaymentFee->orderamount|escape:'html':'UTF-8'}{/if}"
                onchange="this.value = this.value.replace(/,/g, '.');" />
            </div>
            <div class="col-lg-3">
                <select name="ordercurrency" >
                    {foreach from=$currencies item='currency'}
                    <option value="{$currency.id_currency|intval}"
                        {if isset($idCurrency)}
                        {if $idCurrency.orderamount_currency == $currency.id_currency}selected="selected" {/if}
                        {elseif $currency.id_currency == $current_currency}selected="selected"{/if}>
                        {$currency.iso_code|escape:'quotes':'UTF-8'}
                    </option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</div>