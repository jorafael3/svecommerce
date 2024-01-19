{*
 * This file allows you to customize your search page.
 * You can safely remove it if you want it to appear exactly like all other product listing pages
 *}
{extends file='catalog/listing/product-list.tpl'}

{block name='page_header_title'}
	{l s='Search Results for:' d='Shop.Theme.Axon'} {Tools::getValue('s')}
{/block}

{block name="error_content"}
  <h4 id="product-search-no-matches">{l s='No matches were found for your search' d='Shop.Theme.Catalog'}</h4>
  <p>{l s='Please try other keywords to describe what you are looking for.' d='Shop.Theme.Catalog'}</p>
{/block}


