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
<div class="panel">
	<div class="panel-heading">
		<i class="icon-money"></i>
		{l s='Extra fee/discount' mod='wkpaymentfee'}
	</div>
	<li>
		{if $feeType.type eq 0}
		<b>{l s='Extra fee' mod='wkpaymentfee'}</b> : {$feeType.extra_fee|escape:'html':'UTF-8'}
		{else}
		<b>{l s='Discount' mod='wkpaymentfee'}</b> : {$feeType.extra_fee|escape:'html':'UTF-8'}
		{/if}
	</li>
</div>
{/if}