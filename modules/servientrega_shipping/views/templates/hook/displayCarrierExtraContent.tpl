{*
* 2007-2019 PrestaShop
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
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<style>
    .select2-container, #select2-servi{
        margin-bottom: 2rem;
    }
</style>
{* <div class='alert alert-danger' id='error-vexglovo' style="display: none;" role='alert'>
    {l s='Debe seleccionar una ciudad destino.' mod='vexglovo'}
</div> *}

<div class="container">
    <div class="row">
        <div class="col-lg-11">
            <label>
                Confirme la ciudad de destino valida, de servientrega.
            </label>
            <br>
            <select name="servientrega_select_address" id="select2-servi" class="select_servientrega_data custom-select form-control">
                <option disabled selected>Selecciona una ciudad...</option>
                {foreach $citys as $city}
                    <option value="{$city.id}">{l s=$city.nombre}</option>
                {/foreach}
            </select>
        </div>
    </div>
</div>
<script>
// Initialize and add the map
 let idServiCarrier = "{$id|escape:'html':'UTF-8'}";
</script>




    

