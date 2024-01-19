<div class="search-widget search-wrapper">
	<form class="search-form has-ajax-search {if $show_cat} has-categories{/if}" method="get" action="{$search_controller_url}">
		<div class="wrapper-form">
			<input type="hidden" name="order" value="product.position.desc" />
			<input type="text" class="query" placeholder="{l s='Enter your keyword ...' mod='nrtsearchbar'}" value="" name="s" required />
			{if $show_cat}
				{include file="module:nrtsearchbar/views/templates/hook/categories.tpl" search_categories=$categories}
			{else}
				<input name="c" value="0" type="hidden">
			{/if}
			<button type="submit" class="search-submit">
				{l s='Search' mod='nrtsearchbar'}
			</button>
		</div>
	</form>
	<div class="search-results-wrapper"><div class="wrapper-scroll"><div class="search-results wrapper-scroll-content"></div></div></div>
</div>