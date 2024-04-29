
{$imageType	= 'cart_default'}

{if isset($opThemect.general_product_image_type_small) && $opThemect.general_product_image_type_small}
	{$imageType = $opThemect.general_product_image_type_small}
{/if}	

<div id="canvas-mini-cart" class="canvas-widget canvas-right">
	<div class="canvas-widget-top">
		<h3 class="title-canvas-widget" data-dismiss="canvas-widget">
			{l s='Your cart' mod='nrtshoppingcart'}
			<span class="totals-nb js-cart-canvans-title">
				{if $cart.products}
					<span class="nbr">
						{$cart.products_count}
					</span>
					<span class="text">
						{if $cart.products_count < 2}{l s='Item' mod='nrtshoppingcart'}{else}{l s='Items' mod='nrtshoppingcart'}{/if}
					</span>
				{/if}	
			</span>
		</h3>
	</div>
	<div class="widget_shopping_cart js-shopping-cart">
		<div class="widget_shopping_cart_content">
			<div class="wrapper-scroll">
				<div class="wrapper-scroll-content">
					<div class="block-shopping-cart">
						{if $cart.products}
							{foreach from=$cart.products item="product"}
								<div class="cart-item-product cart-item-{$product.id_product}-{$product.id_product_attribute} row">
									<div class="cart-item-product-left col col-xs-3">
										<a href="{$product.url}" title="{$product.name}">
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
										{if !isset($product.is_gift) || !$product.is_gift}
											<a
												class                       = "btn-primary remove-from-cart"
												rel                         = "nofollow"
												href                        = "{$product.remove_from_cart_url}"
												data-link-action            = "delete-from-cart"
												data-id-product             = "{$product.id_product|escape:'javascript'}"
												data-id-product-attribute   = "{$product.id_product_attribute|escape:'javascript'}"
												data-id-customization   	  = "{$product.id_customization|escape:'javascript'}">
												<i class="las la-times"></i>
											</a>
										{/if}
									</div>
									<div class="cart-item-product-right col col-xs-9">
										<div class="row">
											<div class="product-info col col-xs-7">
												<div class="product-name">
													<a href="{$product.url}" title="{$product.name}">
														{$product.name}
													</a>
												</div>
												{foreach from=$product.attributes key="attribute" item="value"}
													<div class="product-line-info-top">
														<span class="label-top">{$attribute}: </span>
														<span class="value-top">{$value}</span>
													</div>
												{/foreach}
											</div>
											<div class="price-qty col col-xs-5">
												<div class="CART_PRICE_CONTADO">
													<div class="price">
														{$product.price}
													</div>
												</div>
												<div class="CART_PRICE_CREDIT">
													<div class="price">
														{assign var="price_without_currency" value=str_replace("$", "", $product.price)}
														{assign var="price_with_tax" value=($price_without_currency * 1.16)}
														{assign var="price_per_month" value=($price_with_tax / 12)}
														{Tools::displayPrice(($price_per_month))}
													</div>
												</div>
												<div class="qty">
													<span>{l s='Qty' mod='nrtshoppingcart'}:</span>
													<input
														class="js-cart-line-product-quantity CART_PRODUCT_CANT"
														data-down-url="{$product.down_quantity_url}"
														data-up-url="{$product.up_quantity_url}"
														data-update-url="{$product.update_quantity_url}"
														data-product-id="{$product.id_product}"
														data-id-product="{$product.id_product}"
														data-id-product-attribute="{$product.id_product_attribute}" 
														type="number"
														value="{$product.quantity}"
														min="{$product.minimal_quantity}"
													/>
													<i class="las la-sync"></i>
												</div>	
											</div>
										</div>
									</div>
									{if is_array($product.customizations) && $product.customizations|count}
										<div class="customizations col col-xs-12">
											<ul>
												{foreach from=$product.customizations item='customization'}
													<li>
														<ul>
															{foreach from=$customization.fields item='field'}
																<li>
																	<span class="lable">{$field.label}: </span>
																	{if $field.type == 'text'}
																		<span class="text">{$field.text nofilter}</span>
																	{else if $field.type == 'image'}
																		<a href="{$field.image.large.url}" target="_blank">
																			<img class="img-responsive" src="{$field.image.small.url}" alt="">
																		</a>
																	{/if}
																</li>
															{/foreach}
														</ul>
													</li>
												{/foreach}
											</ul>
										</div>
									{/if}
								</div>
							{/foreach} 
						{else}
							<div class="shopping-cart-no-item">
								{l s='There are no more items in your cart' mod='nrtshoppingcart'}
							</div>
						{/if}
					</div>
				</div>
			</div>
			{if $cart.products}
				<div class="widget_shopping_cart_bottom">
					<div class="card-block-bottom">
						<div class="totals-top">
						   	<span class="label-top">{$cart.subtotals.products.label}:</span>
						   	<span class="CART_SUBTOTAL_TEXT" style="font-size:11px;color:red"></span>
							<span class="CART_PRICE_TOTAL_CONTADO">
						   		<span class="value-top price CART_PRICE_TOTAL_CONTADO_VAL">{($cart.subtotals.products.value)}</span>
							</span>
							<span class="CART_PRICE_TOTAL_CREDITO">
						   		<span class="value-top price CART_PRICE_TOTAL_CREDITO_VAL"></span>
							</span>
						</div>
                        {hook h='displayNrtCartInfo'}
						<div class="card-block-btn">
							<a class="btn btn-full btn-outline-primary" href="{$cart_url}">
								{l s='View cart' mod='nrtshoppingcart'}
							</a> 
							<a class="btn btn-full btn-primary" href="{$urls.pages.order}">
								{l s='Checkout' mod='nrtshoppingcart'}
							</a>
						</div>
					</div>
				</div>
			{/if}
		</div>
	</div>
</div>