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

<div id='wk-payment-fee'>
	<input type='hidden' name='wk-payment-fee-amount' value='{$wk_fee}'/>
	<input type='hidden' name='wk-payment-fee-type' value='{if $wk_fee_type}1{else}0{/if}'/>
	{if $wk_fee_type}
		<p class='paymentfee'>{l s='Discount' mod='wkpaymentfee'} : {$wk_display_fee} </p>
	{else}
		<p class='paymentfee'>{l s='Additional fee' mod='wkpaymentfee'} : {$wk_display_fee} </p>
	{/if}
	<div class="fee_description">{$wk_description nofilter}</div>
</div>

<style type='text/css'>
	.paymentfee {
		color: {$color|escape:'html':'UTF-8'};
		font-size: {$font|escape:'html':'UTF-8'}px;
	}
</style>
