{extends file='page.tpl'}

{block name="left_content"}
    {hook h="displaySmartBlogLeft"}
{/block} 

{block name="right_content"}
    {hook h="displaySmartBlogRight"}
{/block}

{$title_page = {l s='Blog Archive' mod='smartblog'}}

{block name='page_header_title'}
	{$title_page}
{/block}

{block name='page_content'}
	{if $posts == ''}
		<p class="alert alert-warning">{l s='No Post in Archive' mod='smartblog'}</p> 
	{else}   
		<div class="smartblogcat clearfix">
		   {include file="module:smartblog/views/templates/front/blog_loop.tpl" posts=$posts}
		</div>
		{$options.year = $year}
		{if $month}
			{$options.month = $month}
		{/if}
		{$rule = 'smartblog_archive_rule'}
		{include file='module:smartblog/views/templates/front/pagination.tpl'}
	{/if}
{/block}