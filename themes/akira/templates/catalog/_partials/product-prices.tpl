{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="product-prices js-product-prices">
	{if $product.show_price}
		{block name='product_price'}
		  <div
			class="product-price {if $product.has_discount}has-discount{/if}">

			<div class="current-price">
                <span class='current-price-value' content="{$product.rounded_display_price}">
                    {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='product_sheet'}{/capture}
                    {if '' !== $smarty.capture.custom_price}
                        {$smarty.capture.custom_price nofilter}
                    {else}
                        {$product.price}
                    {/if}
                </span>
				{if $product.has_discount}
					<span class="product-discount">
					  {hook h='displayProductPriceBlock' product=$product type="old_price"}
					  <span class="regular-price">{$product.regular_price}</span>
					</span>
				{/if}
				{block name='product_unit_price'}
					{if $displayUnitPrice}
						<span class="product-unit-price sub">{l s='(%unit_price%)' d='Shop.Theme.Catalog' sprintf=['%unit_price%' => $product.unit_price_full]}</span>
					{/if}
				{/block}
			</div>
		  </div>
		{/block}
		{if $product.has_discount}
			{hook h='displayCountDown'} 
		{/if}
		{block name='product_without_taxes'}
		  {if $priceDisplay == 2}
			<p class="product-without-taxes">{l s='%price% tax excl.' d='Shop.Theme.Catalog' sprintf=['%price%' => $product.price_tax_exc]}</p>
		  {/if}
		{/block}

		{block name='product_pack_price'}
		  {if $displayPackPrice}
			<p class="product-pack-price"><span>{l s='Instead of %price%' d='Shop.Theme.Catalog' sprintf=['%price%' => $noPackPrice]}</span></p>
		  {/if}
		{/block}

		{block name='product_ecotax'}
		  {if $product.ecotax.amount > 0}
			<p class="price-ecotax">{l s='Including %amount% for ecotax' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.ecotax.value]}
			  {if $product.has_discount}
				{l s='(not impacted by the discount)' d='Shop.Theme.Catalog'}
			  {/if}
			</p>
		  {/if}
		{/block}
		{hook h='displayProductPriceBlock' product=$product type="weight" hook_origin='product_sheet'}
		{if !$configuration.taxes_enabled}
			<div class="label-small">
				<div class="tax-shipping-delivery-label">
					{l s='No tax' d='Shop.Theme.Catalog'}
				</div>
			</div>
		{elseif $configuration.display_taxes_label}
			<div class="label-small">
				<div class="tax-shipping-delivery-label">
					{$product.labels.tax_long}
				</div>
			</div>
		{/if}
		{hook h='displayProductPriceBlock' product=$product type="price"}
		{hook h='displayProductPriceBlock' product=$product type="after_price"}
        {if $product.is_virtual	== 0}
            {if $product.additional_delivery_times == 1}
                {if $product.delivery_information}
                <span class="delivery-information">{$product.delivery_information}</span>
                {/if}
            {elseif $product.additional_delivery_times == 2}
                {if $product.quantity > 0}
                <span class="delivery-information">{$product.delivery_in_stock}</span>
                {* Out of stock message should not be displayed if customer can't order the product. *}
                {elseif $product.quantity <= 0 && $product.add_to_cart_url}
                <span class="delivery-information">{$product.delivery_out_stock}</span>
                {/if}
            {/if}
        {/if}
	{/if}
</div>