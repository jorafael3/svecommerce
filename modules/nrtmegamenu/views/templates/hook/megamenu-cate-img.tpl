{*
*
* 2017 AxonVIP
*
* NOTICE OF LICENSE
*
*  @author AxonVIP <axonvip@gmail.com>
*  @copyright  2017 axonvip.com
*   
*
*}

{if $menu_cate.cat_image_url}
	<a href="{$menu_cate.link}"{if !$menu_title} title="{$menu_cate.name}"{/if} class="menu_cate_img"{if $nofollow} rel="nofollow"{/if}{if $new_window} target="_blank"{/if}>
		<img class="img-responsive" src="{$menu_cate.cat_image_url}" alt="{$menu_cate.name}" title="{$menu_cate.name}"/>
	</a>
{/if}