{if $product}
	{$imageType	= 'cart_default'}

	{if isset($opThemect.general_product_image_type_small) && $opThemect.general_product_image_type_small}
		{$imageType = $opThemect.general_product_image_type_small}
	{/if}	
    <h4><span>{$product.name}</span></h4>
    <a href='{$product.url}' title='{$product.name}'>
		<div class="img-placeholder {$imageType} loaded">
			{if $product.default_image}
				{$image = $product.default_image}
			{else}
				{$image = $urls.no_picture_image}
			{/if}
			<img
				class="img-loader loaded" 
				src="{$image.bySize.{$imageType}.url}"
				alt="{if !empty($image.legend)}{$image.legend}{else}{$product.name}{/if}"
				title="{if !empty($image.legend)}{$image.legend}{else}{$product.name}{/if}" 
				width="{$image.bySize.{$imageType}.width}"
				height="{$image.bySize.{$imageType}.height}"
			>
		</div>
        <span class='qtt-ajax'>{$product.quantity}</span>
    </a>
    {l s='You have added product to shopping cart.' mod='nrtshoppingcart'}
    <div class='group_button'>
        <a href='{$cart_url}' title='{l s="View Cart" mod="nrtshoppingcart"}'>{l s='View Cart' mod='nrtshoppingcart'}</a>
        <a href='{$urls.pages.order}' title='{l s="Checkout" mod="nrtshoppingcart"}'>
            {l s='Checkout' mod='nrtshoppingcart'}
        </a>
    </div>
{else}
	{l s='There are not enough products in stock. You cannot proceed with your order until the quantity is adjusted.' mod='nrtshoppingcart'}
	<a href='{$cart_url}' class='goto_page' title='{l s="View Cart" mod="nrtshoppingcart"}'>{l s='View Cart' mod='nrtshoppingcart'}</a>
	<a href='{$urls.pages.order}' class='goto_page' title='{l s="Checkout" mod="nrtshoppingcart"}'>
		{l s='Checkout' mod='nrtshoppingcart'}
	</a>
{/if}