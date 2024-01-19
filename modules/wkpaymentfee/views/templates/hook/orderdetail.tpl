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
{if isset($feeType)}
<div class="table_block table-responsive">
	<table class="table table-bordered">
		<tr>
			{if $feeType.type eq 0}
			<td><strong>{l s='Extra fee' mod='wkpaymentfee'}</strong></td>
			{else}
			<td><strong>{l s='Discount' mod='wkpaymentfee'}</strong></td>
			{/if}
			<td>{$feeType.extra_fee|escape:'html':'UTF-8'}</td>
		</tr>
	</table>
</div>
{/if}