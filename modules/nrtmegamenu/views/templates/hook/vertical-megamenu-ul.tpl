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

<ul class="nrt_mega_menu menu-vertical">
	{assign var="i" value="1"}
	{foreach $nrtvertical as $mm}
		{if $mm.hide_on_mobile == 2}{continue}{/if}
		<li class="nrt_mega_{$mm.id_nrt_mega_menu} item-level-0 element_li_depth_0 submenu_position_{$mm.alignment}{if isset($mm.column) && count($mm.column)} is_parent{/if}{if $mm.custom_class} {$mm.custom_class}{/if}{if $vetical_menu_limit < $i} more-cate{/if}" {if $vetical_menu_limit < $i}style="display:none;"{/if}>
			<a href="{if $mm.m_link}{$mm.m_link}{else}javascript:void(0){/if}" class="style_element_a_{$mm.id_nrt_mega_menu} element_a_depth_0{if isset($mm.column) && count($mm.column)} is_parent{/if}{if $mm.m_icon} ma_icon{/if}"{if !$menu_title} title="{$mm.m_title}"{/if}{if $mm.nofollow} rel="nofollow"{/if}{if $mm.new_window} target="_blank"{/if}>{if $mm.m_icon}{$mm.m_icon nofilter}{else}{if $mm.icon_class}{$icon_class_value = $mm.icon_class|json_decode:1}{if $icon_class_value.type == 1}<img class="icon-img img-responsive" src="{$icon_class_value.value}" alt=""/>{else}<i class="{$icon_class_value.value}"></i>{/if}{/if}<span>{$mm.m_name}</span>{/if}{if $mm.cate_label}<span class="cate_label">{$mm.cate_label}</span>{/if}{if isset($mm.column) && count($mm.column)}<span class="triangle"></span>{/if}</a>
			{if isset($mm.column) && count($mm.column)}
				{include file="module:nrtmegamenu/views/templates/hook/megamenu-sub.tpl"}
			{/if}
		</li>
		{assign var="i" value="`$i+1`"}
	{/foreach}
	{if $vetical_menu_limit < ($i-1)}
		<li class="show-more-cat item-level-0 element_li_depth_0 submenu_position_0">
			<a href="javascript:void(0)" class="show_more element_a_depth_0" title="{l s='Show More' mod='nrtmegamenu'}"><i class="las la-plus"></i>{l s='Show More' mod='nrtmegamenu'}</a>
			<a href="javascript:void(0)" class="show_less element_a_depth_0" title="{l s='Show Less' mod='nrtmegamenu'}"><i class="las la-minus"></i>{l s='Show Less' mod='nrtmegamenu'}</a>
		</li>	
	{/if}
</ul>