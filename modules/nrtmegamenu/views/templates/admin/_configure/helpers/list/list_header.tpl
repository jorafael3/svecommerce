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

{extends file="helpers/list/list_header.tpl"}


{block name=override_header}
    {if isset($navigate) && count($navigate)}
	<ul class="breadcrumb cat_bar2">
		{assign var=i value=0}
		{foreach $navigate key=key item=item}
		<li>
			{if $i++ == 0}
				<i class="icon-home"></i>
			{/if}
			{$item}
		</li>
		{/foreach}
	</ul>
    {/if}
{/block}
