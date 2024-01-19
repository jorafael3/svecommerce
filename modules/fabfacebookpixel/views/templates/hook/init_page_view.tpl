{*
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}


<script id="fabfacebookpixel_script" type="application/json">
	{ldelim}
		"fabFacebookPixelAddToCartUrl": "{$addToCartUrl nofilter}",
		"fabFacebookPixelExecutorUrl": "{$executorUrl nofilter}",
		"facebookPixelId": "{$facebookPixelId|escape:'javascript':'UTF-8'}",
		"isPixelEnabled": "{$is_pixel_enabled|escape:'javascript':'UTF-8'}",
		"customerGroups": "{$customer_groups|escape:'javascript':'UTF-8'}",
		"defaultCustomerGroup": "{$default_customer_group|escape:'javascript':'UTF-8'}",
		"events": [
			{foreach from=$ordersData item=orderData}
			{ldelim}
				"type": "Purchase",
				"params": {ldelim}
					"customer_groups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"default_customer_group": "{$default_customer_group|escape:'javascript':'UTF-8'}",
					"value": "{$orderData.content.total_paid|escape:'javascript':'UTF-8'}",
					"currency": "{$orderData.content.currency_code|escape:'javascript':'UTF-8'}",
					"canonical_url": "{$orderData.content.canonical_url nofilter}",
					"content_type": "product",
					"eventID": "{$orderData.event_id|escape:'javascript':'UTF-8'}",
					"content_ids": [{strip}
						{assign var='total' value=$orderData.content.product_list|@count}
						{foreach from=$orderData.content.product_list item=product}
						{counter assign="count"}"{$product|escape:'javascript':'UTF-8'}"{if $count lt $total},{/if}
						{/foreach}{/strip}]
				{rdelim}
			{rdelim},
			{/foreach}
				{if $specific_event_data|@count gt 0}
					{if $specific_event_data.type == 'Search'}
			{ldelim}
				"type": "Search",
				"params": {ldelim}
					"search_string": "{$specific_event_data.data.search_string|escape:'javascript':'UTF-8'}",
					"customerGroups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"defaultCustomerGroup": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
					{/if}
					{if $specific_event_data.type == 'ViewContent'}
			{ldelim}
				"type": "ViewContent",
				"params": {ldelim}
					"content_type": "product",
					"id_product": "{$specific_event_data.data.id_product|escape:'javascript':'UTF-8'}",
					"content_ids": ["{$specific_event_data.data.id_product|escape:'javascript':'UTF-8'}"],
					"content_name": "{$specific_event_data.data.product_name nofilter}",
					"content_category": "{$specific_event_data.data.product_category nofilter}",
					"value": "{$specific_event_data.data.product_price|escape:'javascript':'UTF-8'}",
					"canonical_url": "{$specific_event_data.data.canonical_url nofilter}",
					"description": "{$specific_event_data.data.description nofilter}",
					"product_price": "{$specific_event_data.data.product_price|escape:'javascript':'UTF-8'}",
					"currency": "{$specific_event_data.data.currency_code|escape:'javascript':'UTF-8'}",
					"customer_groups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"default_customer_group": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
					{/if}
					{if $specific_event_data.type == 'ViewCategory'}
			{ldelim}
				"type": "ViewCategory",
				"params": {ldelim}
					"content_name": "{$specific_event_data.data.content_name nofilter}",
					"content_category": "{$specific_event_data.data.content_category nofilter}",
					"content_ids": [{strip}
						{assign var='total' value=$specific_event_data.data.content_ids|@count}
						{foreach from=$specific_event_data.data.content_ids item=product}
						{counter assign="count"}"{$product|escape:'javascript':'UTF-8'}"
						{if $count lt $total},{/if}
						{/foreach}{/strip}],
					"canonical_url": "{$specific_event_data.data.canonical_url nofilter}",
					"content_type": "{$specific_event_data.data.content_type|escape:'javascript':'UTF-8'}",
					"customer_groups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"default_customer_group": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
					{/if}
					{if $specific_event_data.type == 'AddToCart'}
			{ldelim}
				"type": "AddToCart",
				"params": {ldelim}
					"content_ids": ["{$specific_event_data.data.content_ids|escape:'javascript':'UTF-8'}"],
					"content_type": "{$specific_event_data.data.content_type|escape:'javascript':'UTF-8'}",
					"currency": "{$specific_event_data.data.currency|escape:'javascript':'UTF-8'}",
					"value": "{$specific_event_data.data.value|escape:'javascript':'UTF-8'}",
					"eventID": "{$specific_event_data.data.eventID|escape:'javascript':'UTF-8'}",
					"customer_groups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"default_customer_group": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
					{/if}
					{if $specific_event_data.type == 'InitiateCheckout'}
			{ldelim}
				"type": "InitiateCheckout",
				"params": {ldelim}
					"content_ids": [{strip}
					{assign var='total' value=$specific_event_data.data.content_ids|@count}
					{foreach from=$specific_event_data.data.content_ids item=product}
					{counter assign="count"}"{$product|escape:'javascript':'UTF-8'}"
					{if $count lt $total},{/if}
					{/foreach}{/strip}],
					"value": "{$specific_event_data.data.value|escape:'javascript':'UTF-8'}",
					"content_type": "{$specific_event_data.data.content_type|escape:'javascript':'UTF-8'}",
					"currency": "{$specific_event_data.data.currency_code|escape:'javascript':'UTF-8'}",
				    "canonical_url": "{$specific_event_data.data.canonical_url|escape:'javascript':'UTF-8'}",
					"customerGroups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"defaultCustomerGroup": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
					{/if}
				{/if}
				{if $customerAdded eq "true"}
			{ldelim}
				"type": "CompleteRegistration",
				"params": {ldelim}
					"value": 1.0,
					"currency": "{$currency}",
					"eventID": "{$event_id|escape:'javascript':'UTF-8'}",
					"customer_groups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"default_customer_group": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim},
			{/if}
			{ldelim}
				"type": "PageView",
				"params": {ldelim}
					"customerGroups": "{$customer_groups|escape:'javascript':'UTF-8'}",
					"defaultCustomerGroup": "{$default_customer_group|escape:'javascript':'UTF-8'}"
				{rdelim}
			{rdelim}
			]
	{rdelim}
</script>

{if $specific_event_data|@count gt 0}
	{if $specific_event_data.type == 'ViewContent'}
		{if $specific_event_data.has_microdata}
		<script type="application/ld+json">
		{ldelim}
			"@context":"https://schema.org",
			"@type":"Product",
			"productID":"{$specific_event_data.data.id_product|escape:'javascript':'UTF-8'}",
			"name":"{$specific_event_data.data.product_name nofilter}",
			"description":"{$specific_event_data.data.description nofilter}",
			"category":"{$specific_event_data.google_category nofilter}",
			"url":"{$specific_event_data.data.canonical_url nofilter}",
			"image":"{$specific_event_data.data.image_url|escape:'html':'UTF-8'}",
			"brand":"{$specific_event_data.data.brand|escape:'html':'UTF-8'}",
			"gtin":"{$specific_event_data.data.gtin|escape:'html':'UTF-8'}",
			"mpn":"{$specific_event_data.data.mpn|escape:'html':'UTF-8'}",
			"offers": [
				{ldelim}
					"@type": "Offer",
					"price": "{$specific_event_data.data.product_price|escape:'javascript':'UTF-8'}",
					"priceCurrency":"{$specific_event_data.data.currency_code|escape:'javascript':'UTF-8'}",
					{if $specific_event_data.data.condition == 'used'}"itemCondition": "https://schema.org/UsedCondition",
					{elseif $specific_event_data.data.condition == 'refurbished'}"itemCondition": "https://schema.org/RefurbishedCondition",
					{else}"itemCondition": "https://schema.org/NewCondition",{/if}

					{if $specific_event_data.data.availability == 1}"availability": "https://schema.org/InStock"
					{else}"availability": "https://schema.org/OutOfStock"
					{/if}
				{rdelim}
			]
		{rdelim}
	</script>
		{/if}
	{/if}
{/if}
