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
{literal}
<!-- Facebook Pixel Code -->
<script>
fbq('track', 'Purchase', {
{/literal}
customer_groups: '{$customer_groups|escape:'javascript':'UTF-8'}',
default_customer_group: '{$default_customer_group|escape:'javascript':'UTF-8'}',
value: {$totalPaidTaxIncluded|escape:'javascript':'UTF-8'},
currency: '{$currency|escape:'javascript':'UTF-8'}',
content_type: 'product',
content_ids: [{strip}
	{assign var='total' value=$productList|@count}
	{foreach from=$productList item=product}
	{counter assign="count"}'{$product|escape:'javascript':'UTF-8'}'
	{if $count lt $total},{/if}
{/foreach}{/strip}]
{literal}
});
</script>
{/literal}
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

