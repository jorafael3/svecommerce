{if isset($posts) AND !empty($posts)}
<div class="widget wrapper_smart_blog">
	<div class="widget-content">
		<div class="widget-title h3"><span>{l s='Popular Articles' mod='smartblogpopularposts'}</span></div>
		<div class="block_content list-block">
			 <ul>
				{foreach from=$posts item="post"}
					<li>
						<div class="image">
							 <a title="{$post.meta_title}" href="{$post.url}">
								 <div class="img-placeholder {$post.image.type}">
									<img
										class="img-loader lazy-load" 
										data-src="{$post.image.url}"
										src="{if isset($opThemect.placeholder)}{$opThemect.placeholder}{/if}" 
										alt="{$post.meta_title}"
										title="{$post.meta_title}" 
										width="{$post.image.width}"
										height="{$post.image.height}"
									>  
								 </div>
							 </a>
						 </div>
						<a title="{$post.meta_title}" href="{$post.url}">{$post.meta_title}</a>
						<span>{$post.created}</span>
					</li>
				{/foreach}
			</ul>
		</div>
	</div>
</div>
{/if}