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

{if isset($nrtmenu) && is_array($nrtmenu) && count($nrtmenu)}
<!-- Menu -->
<div class="widget wrapper-menu-column">
	<div class="widget-content">
		<div class="widget-title h3"><span>{l s='Categories' mod='nrtmegamenu'}</span></div>
		<div class="block_content">
			{include file="module:nrtmegamenu/views/templates/hook/column-megamenu-ul.tpl"}
		</div>
	</div>
</div>
<!--/ Menu -->
{/if}