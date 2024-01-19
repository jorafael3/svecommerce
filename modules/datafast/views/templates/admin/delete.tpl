{*
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}


{if (isset($description) == true) }
<div class="alert alert-info" role="alert">
    {$description|escape:'htmlall':'UTF-8'}
</div>
{/if}


<div class='panel'>
    <form id='store_form' class='defaultForm form-horizontal'  method='post' enctype='multipart/form-data' novalidate>
	<div class='panel-heading'>
		<i class='icon-cogs'></i>
        {l s='Configuración Datafast Reversos' mod='datafast'}
    </div>
    
	<div class='form-wrapper'>
        <div class='form-group'>
			<label class='control-label col-lg-3 required' >{l s='Ingrese Código de transacción' mod='datafast'}</label>
            <div class='col-lg-6'>
                <input class="form-control" type='text'  name='orderNumber' />
            </div>			
		</div>


        <div class='form-group'>
			<label class='control-label col-lg-3 required' >{l s='Ingrese el monto de la transacción' mod='datafast'}</label>
            <div class='col-lg-6'>
                <input class="form-control" type='number'  name='orderAmount' />
            </div>			
		</div>

        <div class='panel-footer'>
            <button type='submit' name='submitDatafastDelete' class='btn btn-default pull-right'>
                <i class='process-icon-save' ></i>
                {l s='    ACEPTAR    ' mod='datafast'}
            </button>
        </div>

        

    </div>
    </form>

</div>