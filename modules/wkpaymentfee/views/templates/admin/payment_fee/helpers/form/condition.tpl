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
	<label class="control-label col-lg-3">
		<span
			class="label-tooltip" data-toggle="tooltip"
			title="{l s='This fee will be converted into discount' mod='wkpaymentfee'}">
			{l s='Discount' mod='wkpaymentfee'}
		</span>
	</label>
	<div class="input-group col-lg-2">
		<span class="switch prestashop-switch">
			<input
			type="radio"
			name="discount"
			id="discount_on"
			value="1"
			{if isset($objPaymentFee)}
			{if $objPaymentFee->discount == 1}checked="ckecked"{/if}{/if}/>
			<label class="t" for="discount_on">{l s='Yes' mod='wkpaymentfee'}</label>
			<input type="radio" name="discount" id="discount_off" value="0"
			{if isset($objPaymentFee)}
			{if $objPaymentFee->discount == 0}checked="ckecked"{/if}
			{else}checked="ckecked"{/if}/>
			<label class="t" for="discount_off">{l s='No' mod='wkpaymentfee'}</label>
			<a class="slide-button btn"></a>
		</span>
	</div>
</div>
<div>

</div>
<div class="form-group row">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="{l s='The minimum fee/discount to apply. If the payment fee/discount is less than minimum amount value, then minimum amount value will be considered (zero to disable).' mod='wkpaymentfee'}">
			{l s='Minimum amount' mod='wkpaymentfee'}
		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-3">
				<input type="text" name="min_amount" id="min_amount"
				value="{if isset($objPaymentFee)}{$objPaymentFee->min_amount|escape:'html':'UTF-8'}{else}0{/if}" />
			</div>
			<div class="col-lg-2">
				<select name="min_amount_currency">
					{foreach from=$currencies item='currency'}
					<option value="{$currency.id_currency|intval}"
						{if isset($idCurrency)}
						{if $idCurrency.min_currency == $currency.id_currency}selected="selected" {/if}
						{elseif $currency.id_currency == $current_currency}selected="selected"{/if}>
						{$currency.iso_code|escape:'html':'UTF-8'}
					</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" title="{l s='The maximum fee/discount to apply. If the payment fee/discount is greater than maximum amount value, then maximum amount value will be considered (zero to disable)' mod='wkpaymentfee'}">{l s='Maximum amount' mod='wkpaymentfee'}
		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-3">
				<input type="text" name="max_amount" id="max_amount"
				value="{if isset($objPaymentFee)}{$objPaymentFee->max_amount|escape:'html':'UTF-8'}{else}0{/if}" />
			</div>
			<div class="col-lg-2">
				<select name="max_amount_currency">
					{foreach from=$currencies item='currency'}
					<option value="{$currency.id_currency|intval}"
						{if isset($idCurrency)}
						{if $idCurrency.max_currency == $currency.id_currency}
						selected="selected"
						{/if}
						{elseif $currency.id_currency == $current_currency}selected="selected"{/if}>
						{$currency.iso_code|escape:'html':'UTF-8'}
					</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">
		{l s='Conditions' mod='wkpaymentfee'}
	</label>
	<div class="col-lg-9">
		<p class="checkbox">
			<label>
				<input type="checkbox" id="country_restriction" name="country_restriction" value="1"
				{if isset($selectedCountry) && $selectedCountry}checked{/if}/>
				{l s='Country selection' mod='wkpaymentfee'}
			</label>
		</p>
		<div id="country_restriction_div" class="row">
			<div class="col-lg-5">
				<select name="country_select[]" id="country_restriction_select" class="input-large" multiple>
					{foreach from=$countries item='country'}
					<option value="{$country.id_country|intval}"
						{if isset($selectedCountry) && $selectedCountry}
						{foreach $selectedCountry as $setcountry}
						{if $setcountry eq $country.id_country}
						selected="selected"
						{/if}
						{/foreach}
						{/if}>
					&nbsp;{$country.name|escape:'html':'UTF-8'}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<p class="checkbox">
			<label>
				<input type="checkbox" id="group_restriction" name="group_restriction" value="1"
				{if isset($selectedCustomerGroup) && $selectedCustomerGroup}checked{/if}/>
				{l s='Customer group selection' mod='wkpaymentfee'}
			</label>
		</p>
		<div id="group_restriction_div" class="row">
			<div class="col-lg-5">
				<select name="group_select[]" class="input-large" id="group_restriction_select" multiple>
					{foreach from=$groups item='group'}
					<option value="{$group.id_group|intval}"
						{if isset($selectedCustomerGroup) && $selectedCustomerGroup}
						{foreach $selectedCustomerGroup as $customerGroup}
						{if $customerGroup eq $group.id_group}
						selected="selected"
						{/if}
						{/foreach}
						{/if}>
						&nbsp;{$group.name|escape:'html':'UTF-8'}
					</option>
					{/foreach}
				</select>
			</div>
		</div>
		<p class="checkbox">
			<label>
				<input type="checkbox" id="category_restriction" name="category_restriction" value="1"
				{if isset($selectedCategory) && $selectedCategory}checked{/if}/>
				{l s='Category' mod='wkpaymentfee'}
			</label>
		</p>
		<div id="category_restriction_div" class="row">
			<div class="col-lg-5">
				<select name="category_select[]" class="input-large" id="category_restriction_select" multiple>
					{foreach from=$categories item=category}
					{if $category.id_category != 1}
					<option value="{$category.id_category|intval}"
						{if isset($selectedCategory) && $selectedCategory}
						{foreach $selectedCategory as $selectcategory}
						{if $selectcategory eq $category.id_category}
						selected="selected"
						{/if}
						{/foreach}
						{/if}>
						&nbsp;{$category.name|escape:'html':'UTF-8'}
					</option>
					{/if}
					{/foreach}
				</select>
			</div>
		</div>
		<p class="checkbox">
			<label>
				<input type="checkbox" id="manufacturer_restriction" name="manufacturer_restriction" value="1"
				{if isset($selectedManufacturer) && $selectedManufacturer}checked{/if}/>
				{l s='Manufacturer' mod='wkpaymentfee'}
			</label>
		</p>
		<div id="manufacturer_restriction_div" class="row">
			<div class="col-lg-5">
				<select name="manufacturer_select[]" class="input-large" id="manufacturer_restriction_select" multiple>
					{foreach from=$manufacturer item='manufacture'}
					<option value="{$manufacture.id_manufacturer|intval}"
						{if isset($selectedManufacturer) && $selectedManufacturer}
						{foreach $selectedManufacturer as $selectmanufacturer}
						{if $selectmanufacturer eq $manufacture.id_manufacturer}
						selected="selected"
						{/if}
						{/foreach}
						{/if}>
						&nbsp;{$manufacture.name|escape:'html':'UTF-8'}
					</option>
					{/foreach}
				</select>
			</div>
		</div>
		<p class="checkbox">
			<label>
				<input type="checkbox" id="supplier_restriction" name="supplier_restriction" value="1"
				{if isset($selectedSupplier) && $selectedSupplier}checked{/if}/>
				{l s='Supplier' mod='wkpaymentfee'}
			</label>
		</p>
		<div id="supplier_restriction_div" class="row">
			<div class="col-lg-5">
				<select name="supplier_select[]" class="input-large" id="supplier_restriction_select" multiple>
					{foreach from=$suppliers item='supplier'}
					<option value="{$supplier.id_supplier|intval}"
						{if isset($selectedSupplier) && $selectedSupplier}
						{foreach $selectedSupplier as $selectsupplier}
						{if $selectsupplier eq $supplier.id_supplier}
						selected="selected"
						{/if}
						{/foreach}
						{/if}>
						&nbsp;{$supplier.name|escape:'html':'UTF-8'}
					</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
</div>