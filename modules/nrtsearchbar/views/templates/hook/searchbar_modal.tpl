<div id="search-popup" class="modal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog search-wrapper popup-wrapper" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="{l s='Close' d='Shop.Theme.Global'}">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="modal-body">
			<h3>{l s='Search for products' mod='nrtsearchbar'}</h3>
			<p>{l s='Start typing to see products you are looking for.' mod='nrtsearchbar'}</p>
			<hr/>
			<form class="search-form has-ajax-search {if $show_cat} has-categories{/if}" method="get" action="{$search_controller_url}">
				<input type="hidden" name="order" value="product.position.desc" />
				<input type="text" class="query form-control" placeholder="{l s='Enter your keyword ...' mod='nrtsearchbar'}" value="" name="s" required />
				{if $show_cat}
					{include file="module:nrtsearchbar/views/templates/hook/categories.tpl" search_categories=$categories}
				{else}
					<input name="c" value="0" type="hidden">
				{/if}
				<button type="submit" class="search-submit">
					{l s='Search' mod='nrtsearchbar'}
				</button>
			</form>
			<div class="search-results"></div>
		</div>
	</div>
</div></div>
