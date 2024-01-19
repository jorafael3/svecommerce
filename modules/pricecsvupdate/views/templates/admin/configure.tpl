{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Snegurka <site@web-esse.ru>
*  @link    http://web-esse.ru/
*  @copyright  2007-2021 Snegurka
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="panel">
	<h3><i class="icon-cogs"></i> {l s='Recounting and Cron Task' mod='pricecsvupdate'}</h3>
	<div class="row">
		<div class="alert alert-info">

			{l s='You can set a cron job that will update the products and combinations information using the following URL:' mod='pricecsvupdate'}
			<br />
			<strong>{$module_dir|escape:'htmlall':'UTF-8'}{$product_updater_url|escape:'htmlall':'UTF-8'}</strong>
			{l s='You can get more information in the manual' mod='pricecsvupdate'}
		</div>
	</div>
</div>
