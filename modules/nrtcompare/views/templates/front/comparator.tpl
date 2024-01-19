{extends file='page.tpl'}

{block name='page_header_title'}
	{$title_compare}
{/block}

{block name="content"}
	<div id="my_compare">
		{if $list_products}
			{$imageType	= 'home_default'}

			{if isset($opThemect.general_product_image_type_large) && $opThemect.general_product_image_type_large}
				{$imageType = $opThemect.general_product_image_type_large}
			{/if}	
			<div id="js-compare-table">
				<div class="compare-table-actions" style="display: none;">
					<a href="javascript:void(0)" class="js-compare-remove-all">
						<i class="las la-trash-alt"></i> {l s='Remove all products' mod='nrtcompare'}
					</a>
				</div>
				<div class="wrapper-compare-table">
					<div class="compare-row">
						<div class="compare-col compare-label"></div>
						{foreach from=$list_products item="product"}
							<div class="compare-col compare-value js-compare-{$product.id_product}-0">
								<div class="compare-header">
									<a href="javascript:void(0)" class="js-compare-remove js-compare-remove-{$product.id_product}-0 btn-action-compare-remove"
										data-id-product="{$product.id_product|intval}"
										data-id-product-attribute="0">
										{l s='Remove' mod='nrtcompare'}
									</a>
									<a href="{$product.url}" class="product-image" title="{$product.name}">
										<div class="img-placeholder {$imageType}">
                                            {if $product.default_image}
                                                {$image = $product.default_image}
                                            {else}
                                                {$image = $urls.no_picture_image}
                                            {/if}
											<img
												class="img-loader lazy-load" 
												data-src="{$image.bySize.{$imageType}.url}"
												src="{if isset($opThemect.placeholder)}{$opThemect.placeholder}{/if}" 
												alt="{if !empty($image.legend)}{$image.legend}{else}{$product.name}{/if}"
												title="{if !empty($image.legend)}{$image.legend}{else}{$product.name}{/if}" 
												width="{$image.bySize.{$imageType}.width}"
												height="{$image.bySize.{$imageType}.height}"
											> 
										</div>
									</a>  
									<a class="product-title" href="{$product.url}">
										{$product.name}
									</a>
                                    {if $product.show_price}
                                        <div class="product-c-price">
                                            {if $product.has_discount}
                                                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                                <span class="regular-price">{$product.regular_price}</span>&nbsp;&nbsp;
                                            {/if}
                                            {hook h='displayProductPriceBlock' product=$product type="before_price"}
                                            <span class="price">
                                                {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                                                {if '' !== $smarty.capture.custom_price}
                                                    {$smarty.capture.custom_price nofilter}
                                                {else}
                                                    {$product.price}
                                                {/if}
                                            </span>
                                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                                        </div>
                                    {/if}
									<div class="js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
										<form action="{$urls.pages.cart}" method="post">
											 {if !$configuration.is_catalog && $product.add_to_cart_url && ($product.quantity > 0 || $product.allow_oosp)}
												  {if !$product.id_product_attribute}
													<input type="hidden" name="token" value="{$static_token}">
													<input type="hidden" name="id_product" value="{$product.id}">
													<input type="number"
														   name="qty"
														   value="{$product.minimal_quantity}"
														   class="hidden"
														   min="{$product.minimal_quantity}"
													>
													<button class="btn-action btn button add-to-cart" data-button-action="add-to-cart" 
														title="{l s='Add to cart' d='Shop.Theme.Actions'}">
														{l s='Add to cart' d='Shop.Theme.Actions'}
													</button>
												  {else}
													<a 	href="javascript:void(0)" 
														class="btn-action btn button add-to-cart quick-view" data-link-action="quickview" 
														title="{l s='Select options' d='Shop.Theme.Actions'}">
														{l s='Select options' d='Shop.Theme.Actions'}
													</a>       
												  {/if}
											  {else}
												<a  href="{$product.url}" 
													class="btn-action btn button add-to-cart" title="{l s='Discover' mod='nrtcompare'}">
													{l s='Discover' mod='nrtcompare'}
												</a>
											  {/if}
										</form>
									</div>
								</div>
							</div>
						{/foreach}
					</div>
					<div class="compare-row">
						<div class="compare-col compare-label">{l s='Description' mod='nrtcompare'}</div>
						{foreach from=$list_products item="product"}
							<div class="compare-col compare-value js-compare-{$product.id_product}-0">
								{$product.description_short nofilter}
							</div>
						{/foreach}
					</div>
					<div class="compare-row">
						<div class="compare-col compare-label">{l s='SKU' mod='nrtcompare'}</div>
						{foreach from=$list_products item="product"}
							<div class="compare-col compare-value js-compare-{$product.id_product}-0">
								{if $product.reference}
									{$product.reference nofilter}
								{else}
									N/A
								{/if}
							</div>
						{/foreach}
					</div>
					<div class="compare-row">
						<div class="compare-col compare-label">{l s='Availability' mod='nrtcompare'}</div>
						{foreach from=$list_products item="product"}
							<div class="compare-col compare-value js-compare-{$product.id_product}-0">
								{if $product.show_availability && $product.availability_message}
									{if $product.availability == 'available'}
										<span class="type-available">
									{elseif $product.availability == 'last_remaining_items'}
										<span class="type-last-remaining-items">
									{else}
										<span class="type-out-stock">
									{/if}
										{$product.availability_message}
										</span>
								{/if}
							</div>
						{/foreach}
					</div>
					{foreach from=$ordered_features item=feature}
						<div class="compare-row">
							<div class="compare-col compare-label">{$feature.name|escape:'html':'UTF-8'}</div>
							{foreach from=$list_products item="product"}
								<div class="compare-col compare-value js-compare-{$product.id_product}-0">
									{assign var='product_id' value=$product.id_product}
									{assign var='feature_id' value=$feature.id_feature}
									{if isset($product_features[$product_id])}
										{assign var='tab' value=$product_features[$product_id]}
										{if (isset($tab[$feature_id]))} {$tab[$feature_id]|escape:'html':'UTF-8'}{/if}
									{else}
										-
									{/if}
								</div>
							{/foreach}
						</div>
					{/foreach}
					{hook h='displayProductExtraComparison' list_ids_product=$list_ids_product}
				</div>
			</div>
			<div id="js-compare-warning" style="display:none;" class="empty-products">
				<p class="empty-title empty-title-compare">
					{l s='Compare list is empty.' mod='nrtcompare'}
				</p>
				<div class="empty-text">
					{l s='No products added in the compare list. You must add some products to compare them.' mod='nrtcompare'}
				</div>
				<p class="return-to-home">
					<a href="{$urls.pages.index}" class="btn btn-primary">
						<i class="las la-reply"></i>
						{l s='Return to home' mod='nrtcompare'}
					</a>
				</p>
			</div>
		{else}
			<div class="empty-products">
				<p class="empty-title empty-title-compare">
					{l s='Compare list is empty.' mod='nrtcompare'}				
				</p>
				<div class="empty-text">
					{l s='No products added in the compare list. You must add some products to compare them.' mod='nrtcompare'}
				</div>
				<p class="return-to-home">
					<a href="{$urls.pages.index}" class="btn btn-primary">
						<i class="las la-reply"></i>
						{l s='Return to home' mod='nrtcompare'}
					</a>
				</p>
			</div>
		{/if}
	</div>
{/block}