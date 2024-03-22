/**
* 2007-2015 PrestaShop
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
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/

$(document).ready(function () {
				toggleSrc();
				$('#data_src').change(function () {toggleSrc()});
});
			
			function toggleSrc()
			{

				if ($('#data_src option:selected').val() == 'src_url')
				{
					$('#PRICECSVUPDATE_FILE, #PRICECSVUPDATE_FILE_ATTR').closest('.form-wrapper > .form-group').hide();
					$('#PRICECSVUPDATE_PROD_URL, #PRICECSVUPDATE_ATTR_URL').closest('.form-group').show();
				}
				else
				{
					$('#PRICECSVUPDATE_FILE, #PRICECSVUPDATE_FILE_ATTR').closest('.form-wrapper > .form-group').show();
					$('#PRICECSVUPDATE_PROD_URL, #PRICECSVUPDATE_ATTR_URL').closest('.form-group').hide();
				}

			}