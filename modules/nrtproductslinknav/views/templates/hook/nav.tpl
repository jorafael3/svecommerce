{$imageType	= 'cart_default'}

{if isset($opThemect.general_product_image_type_small) && $opThemect.general_product_image_type_small}
	{$imageType = $opThemect.general_product_image_type_small}
{/if}	

<div class="axps-products-nav">
    {if isset($prev)}
		<div class="product-btn product-prev">
			<a href="{$prev.url}">
				{l s='Previous product' mod='nrtproductslinknav'}
				<span class="product-btn-icon"></span>
			</a>
			<div class="wrapper-short">
				<div class="product-short">
					<div class="product-short-image">
						<div class="img-placeholder {$imageType}">
							{if $prev.default_image}
								{$image = $prev.default_image}
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
					</div>
					<div class="product-short-description">
						<a class="product-title" href="{$prev.url}">{$prev.name}</a>
                        {if $prev.show_price}
                            {if $prev.has_discount}
                            {hook h='displayProductPriceBlock' product=$prev type="old_price"}
                            <span class="regular-price">{$prev.regular_price}</span>
                            {/if}
                            {hook h='displayProductPriceBlock' product=$prev type="before_price"}
                            <span class="price">
                                {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$prev type='custom_price' hook_origin='products_list'}{/capture}
                                {if '' !== $smarty.capture.custom_price}
                                    {$smarty.capture.custom_price nofilter}
                                {else}
                                    {$prev.price}
                                {/if}
                            </span>
                            {hook h='displayProductPriceBlock' product=$prev type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$prev type='weight'}
                        {/if}
					</div>
				</div>
			</div>
		</div>
    {/if}
	<a href="{$urls.pages.index}" class="axps-back-btn" title="" data-original-title="{l s='Back to home' mod='nrtproductslinknav'}">
		{l s='Back to home' mod='nrtproductslinknav'}
	</a>
    {if isset($next)}
		<div class="product-btn product-next">
			<a href="{$next.url}">
				{l s='Next product' mod='nrtproductslinknav'}
				<span class="product-btn-icon"></span>
			</a>
			<div class="wrapper-short">
				<div class="product-short">
					<div class="product-short-image">
						<div class="img-placeholder {$imageType}">
							{if $next.default_image}
								{$image = $next.default_image}
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
					</div>
					<div class="product-short-description">
						<a class="product-title" href="{$next.url}">{$next.name}</a>
                        {if $next.show_price}
                            {if $next.has_discount}
                            {hook h='displayProductPriceBlock' product=$next type="old_price"}
                            <span class="regular-price">{$next.regular_price}</span>
                            {/if}
                            {hook h='displayProductPriceBlock' product=$next type="before_price"}
                            <span class="price">
                                {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$next type='custom_price' hook_origin='products_list'}{/capture}
                                {if '' !== $smarty.capture.custom_price}
                                    {$smarty.capture.custom_price nofilter}
                                {else}
                                    {$next.price}
                                {/if}
                            </span>
                            {hook h='displayProductPriceBlock' product=$next type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$next type='weight'}
                        {/if}
					</div>
				</div>
			</div>
		</div>
    {/if}
</div>


