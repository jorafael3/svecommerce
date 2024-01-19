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
	<label class="control-label col-lg-3 required">
		{l s='Name' mod='wkpaymentfee'}
	</label>
	<div class="col-lg-9">
		{foreach from=$languages item=language}
		{if $languages|count > 1}
		<div class="row">
			<div class="translatable-field lang-{$language.id_lang|intval}"
				{if $language.id_lang != $current_lang.id_lang}style="display:none"{/if}>
				<div class="col-lg-9">
					{/if}
					<input type="text" id="name_{$language.id_lang|intval}"
					name="name_{$language.id_lang|intval}"
					{if isset($objPaymentFee)}value="{$objPaymentFee->name[$language.id_lang]|escape:'html':'UTF-8'}"{/if}/>
					{if $languages|count > 1}
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle"
					data-toggle="dropdown" id="name_lang_btn_{$language.iso_code|escape:'html':'UTF-8'}">
					{$language.iso_code|escape:'html':'UTF-8'}
					<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						{foreach from=$languages item=language}
						<li>
							<a href="javascript:void(0);"
								onclick="showLangField('{$language.iso_code|escape:'html':'UTF-8'}', {$language.id_lang|escape:'html':'UTF-8'});"
								tabindex="-1">
								{$language.name|escape:'html':'UTF-8'}
							</a>
						</li>
						{/foreach}
					</ul>
				</div>
			</div>
		</div>
		{/if}
		{/foreach}
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">
		{l s='Description' mod='wkpaymentfee'}
	</label>
	<div class="col-lg-9">
		{foreach from=$languages item=language}
		{if $languages|count > 1}
		<div class="row">
			<div class="discription-field langdis-{$language.id_lang|intval}"
				{if $language.id_lang != $current_lang.id_lang}style="display:none"{/if}>
				<div class="col-lg-9">
					{/if}
					<textarea name="description_{$language.id_lang|intval}" rows="2"
					class="rte autoload_rte rte wk_tinymce">
					{if isset($objPaymentFee)}{$objPaymentFee->description[$language.id_lang]|escape:'html':'UTF-8'}{/if}
					</textarea>
					{if $languages|count > 1}
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle"
					data-toggle="dropdown" id="dis_lang_btn_{$language.iso_code|escape:'html':'UTF-8'}">
					{$language.iso_code|escape:'html':'UTF-8'}
					<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						{foreach from=$languages item=language}
						<li>
							<a href="javascript:void(0);"
								onclick="showLangField('{$language.iso_code|escape:'html':'UTF-8'}', {$language.id_lang|escape:'html':'UTF-8'});"
								tabindex="-1">
								{$language.name|escape:'html':'UTF-8'}
							</a>
						</li>
						{/foreach}
					</ul>
				</div>
			</div>
		</div>
		{/if}
		{/foreach}
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">{l s='Select payment method' mod='wkpaymentfee'}</label>
	<div class="col-lg-4">
		<select name="module" id="module">
			{foreach $paymentDetails as $payment}
			<option value="{$payment.name|escape:'html':'UTF-8'}"
				{if isset($objPaymentFee)}
				{if $objPaymentFee->module eq $payment.name }
				selected="selected"
				{/if}
				{/if}>
				{$payment.displayName|escape:'html':'UTF-8'}
			</option>
			{/foreach}
		</select>
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"
			title="{l s='Fees are applied to the cart by priority. A fee with priority of "1" will be processed before a fee with a priority of "2".' mod='wkpaymentfee'}">
			{l s='Priority' mod='wkpaymentfee'}
		</span>
	</label>
	<div class="col-lg-1">
		<input type="text" class="input-mini" name="priority" id="priority"
		value="{if isset($objPaymentFee)}{$objPaymentFee->priority|escape:'html':'UTF-8'}{else}1{/if}" />
	</div>
</div>
<div class="form-group row">
	<label class="control-label col-lg-3">{l s='Status' mod='wkpaymentfee'}</label>
	<div class="input-group col-lg-2">
		<span class="switch prestashop-switch">
			<input type="radio" name="active" id="active_on" value="1"
			{if isset($objPaymentFee)}
			{if $objPaymentFee->active eq 1}checked="ckecked"{/if}
			{else}checked="ckecked"{/if}/>
			<label class="t" for="active_on">{l s='Yes' mod='wkpaymentfee'}</label>
			<input type="radio" name="active" id="active_off" value="0"
		    {if isset($objPaymentFee)}{if $objPaymentFee->active eq 0}checked="ckecked"{/if}{/if}/>
			<label class="t" for="active_off">{l s='No' mod='wkpaymentfee'}</label>
			<a class="slide-button btn"></a>
		</span>
	</div>
</div>
<script type="text/javascript">
	var iso = '{$iso|escape:'html':'UTF-8'}';
	var pathCSS = '{$smarty.const._THEME_CSS_DIR_|escape:'html':'UTF-8'}';
	var ad = '{$ad|escape:'html':'UTF-8'}';
	$(document).ready(function(){
		tinySetup({
			editor_selector :"wk_tinymce"
		});
	});
</script>