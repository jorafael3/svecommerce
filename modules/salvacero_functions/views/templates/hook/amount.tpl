{*
* 2007-2023 PrestaShop
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
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="col-6">
    <div class="card customer-private-note-card">
        <h3 class="card-header">
            <i class="material-icons">done</i>
            Añadir un monto de credito
        </h3>
        <div class="card-body clearfix">
            <div class="alert alert-info" role="alert">
                <p class="alert-text">
                    Este monto sera el disponible en las compras por el cliente.
                </p>
            </div>
            {* <input type='number' min class="form-control" value="" name="amount-credict" id="amount-credict"
                placeholder='Añade el monto del credito para este cliente.' /> *}
            <input type="hidden" id="id_customer" value="{$id_customer}" />
            <div class="col-xl-4 col-lg-5">
                <label class="form-control-label">Monto del credito</label>

                <div class="input-group money-type">
                    <input type="text" id="amount_credict" name="amount_credict" data-display-price-precision="6"
                        class="form-control" value="{$amount}">
                    <div class="input-group-append">
                        <span class="input-group-text"> US$</span>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary float-right mt-3" id="amount_credict_button">
                Guardar
            </button>
        </div>
    </div>
</div>