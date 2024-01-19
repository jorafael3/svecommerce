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
<table id="payment-tab" width="100%">
	<tr>
		{if $feeType.type eq 0}
		<td class="payment center small grey bold" width="44%">{l s='Extra Fee' mod='wkpaymentfee'}</td>
		{else}
		<td class="payment center small grey bold" width="44%">{l s='Discount' mod='wkpaymentfee'}</td>
		{/if}
		<td class="payment left white" width="56%">
			{$feeType.extra_fee|escape:'html':'UTF-8'}
		</td>
	</tr>
</table>