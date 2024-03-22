{*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<form action="index.php?controller=authentication?back={$current_url|urlencode}" method="post">
	<h3>{l s='Please login first' mod='nrtwishlist'}</h3>
	<hr/>
	<div class="form-group">
		<label class="required">{l s='Email' mod='nrtwishlist'}</label>
		<input class="form-control" name="email" type="email" value="" required>
	</div>
	<div class="form-group">
		<label class="required">{l s='Password' mod='nrtwishlist'}</label>
		<div class="input-group">
			<input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{literal}{{/literal}5,{literal}}{/literal}" required>
			<button type="button" data-action="show-password-t" data-text-show="{l s='Show' mod='nrtwishlist'}" data-text-hide="{l s='Hide' mod='nrtwishlist'}">
				{l s='Show' mod='nrtwishlist'}
			</button>
		</div>  
	</div>
	<br/>
	<div class="clearfix">
		<input name="submitLogin" value="1" type="hidden">
		<button class="btn btn-full btn-primary" data-link-action="sign-in" type="submit">
			{l s='Sign in' mod='nrtwishlist'}
		</button>
	</div>
	<div class="forgot-password">
		<a href="{$urls.pages.password}" rel="nofollow">
			{l s='Forgot your password?' mod='nrtwishlist'}
		</a>
	</div>
</form>
<div class="no-account">
	<span>{l s='No account?' mod='nrtwishlist'}</span>  
	<a class="active-color" href="{$urls.pages.register}">
	  {l s='Create one here' mod='nrtwishlist'}
	</a>
</div>
<div class="text-center">
	{hook h='displaySocialLogin'}
</div>