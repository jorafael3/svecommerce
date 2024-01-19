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



<div class='panel-heading'>
    <i class='icon-cogs'></i>
    {l s='Configuración De intereses banco ' mod='datafast'}
    {l s=$bank mod='datafast'}

</div>

<div class='form-wrapper'>
    <div class="form-group">
        <label for="datafast_intereses_si"
            class='control-label col-sm-4 required'>{l s='Permitir pagos sin Intereses' mod='datafast'}</label>
        <div class="col-sm-4">
            <div class="form-check" style="margin-top: 9px;">
                <input class="form-check-input" type="checkbox" id="datafast_intereses_si"
                    {if isset($tasas[$bank]) &&  $tasas[$bank]['sin_interes'] == 'on'} checked {/if}
                    name='bancos[{$bank|escape:'htmlall':'UTF-8'}][DATAFAST_SINTERES]'>
                <label class="form-check-label" for="datafast_intereses_si">
                    Selecciona si quieres habilitar pagos sin interes
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="datafast_intereses_cc{$key|escape:'htmlall':'UTF-8'}"
            class='control-label col-sm-4 required'>{l s='Permitir Diferido con Interes' mod='datafast'}</label>
        <div class="col-sm-5">
            <div class="form-check" style="margin-top: 9px;">
                <input class="form-check-input" type="checkbox"
                    id="datafast_intereses_cc{$key|escape:'htmlall':'UTF-8'}"
                    {if isset($tasas[$bank]) && $tasas[$bank]['diferidos_cc']} checked {/if}
                    name='bancos[{$bank|escape:'htmlall':'UTF-8'}][diferidos_cc]'>
                <label class="form-check-label" for="datafast_intereses_cc{$key|escape:'htmlall':'UTF-8'}">
                    Selecciona si quieres habilitar pagos con opción diferidos con interés
                </label>
            </div>
        </div>
    </div>
    <div id="diferidos_cc_content{$key|escape:'htmlall':'UTF-8'}" class="form-group">

        <div id="diferidos_cc{$key|escape:'htmlall':'UTF-8'}" class="col-sm-11"
            style="display: flex;     justify-content: center;" data-num-tabs="4">
            {if isset($tasas[$bank]) &&  $tasas[$bank]['diferidos_cc']}
                {foreach $tasas[$bank]['diferidos_cc'] as $tcc}
                    <div class="data_tasa" style="margin-right: 10px;">
                        <input style="width: 100%;" type="text"
                            name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_cc][]" placeholder="Meses"
                            value="{l s=$tcc mod='datafast'}">
                    </div>
                {/foreach}
            {else}
                <div class="data_tasa" style="margin-right: 10px;">
                    <input style="width: 100%;" type="text"
                        name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_cc][]" placeholder="Meses">
                </div>
            {/if}
        </div>
        <button type="button" id="add_tab"
            onclick="add_tab_mes('diferidos_cc{$key|escape:'htmlall':'UTF-8'}', 'diferidos_cc', '{$bank|escape:'htmlall':'UTF-8'}')"
            style="height: fit-content; margin-left: 5px; ">
            <svg width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1344 960v-128q0-26-19-45t-45-19h-256v-256q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v256h-256q-26 0-45 19t-19 45v128q0 26 19 45t45 19h256v256q0 26 19 45t45 19h128q26 0 45-19t19-45v-256h256q26 0 45-19t19-45zm320-64q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            <span></span>
        </button>
    </div>
    <div class="form-group">
        <label for="datafast_intereses_sc{$key|escape:'htmlall':'UTF-8'}"
            class='control-label col-sm-4 required'>{l s='Permitir Diferido sin Interes' mod='datafast'}</label>
        <div class="col-sm-5">
            <div class="form-check" style="margin-top: 9px;">
                <input class="form-check-input" type="checkbox"
                    id="datafast_intereses_sc{$key|escape:'htmlall':'UTF-8'}"
                    {if isset($tasas[$bank]) && $tasas[$bank]['diferidos_sc']} checked {/if}
                    name='bancos[{$bank|escape:'htmlall':'UTF-8'}][diferidos_sc]'>
                <label class="form-check-label" for="datafast_intereses_sc{$key|escape:'htmlall':'UTF-8'}">
                    Selecciona si quieres habilitar pagos con opción diferidos sin interés
                </label>
            </div>
        </div>
    </div>
    <div id="diferidos_sc_content{$key|escape:'htmlall':'UTF-8'}" class="form-group">

        <div id="diferidos_sc{$key|escape:'htmlall':'UTF-8'}" class="col-sm-11"
            style="display: flex;     justify-content: center;" data-num-tabs="4">
            {if isset($tasas[$bank]) && $tasas[$bank]['diferidos_sc']}
                {foreach $tasas[$bank]['diferidos_sc'] as $tcc}
                    <div class="data_tasa" style="margin-right: 10px;">
                        <input style="width: 100%;" type="text"
                            name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_sc][]" placeholder="Meses"
                            value="{l s=$tcc mod='datafast'}">
                    </div>
                {/foreach}
            {else}
                <div class="data_tasa" style="margin-right: 10px;">
                    <input style="width: 100%;" type="text"
                        name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_sc][]" placeholder="Meses">
                </div>
            {/if}

        </div>
        <button type="button" id="add_tab"
            onclick="add_tab_mes('diferidos_sc{$key|escape:'htmlall':'UTF-8'}', 'diferidos_sc', '{$bank|escape:'htmlall':'UTF-8'}')"
            style="height: fit-content; margin-left: 5px; ">
            <svg width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1344 960v-128q0-26-19-45t-45-19h-256v-256q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v256h-256q-26 0-45 19t-19 45v128q0 26 19 45t45 19h256v256q0 26 19 45t45 19h128q26 0 45-19t19-45v-256h256q26 0 45-19t19-45zm320-64q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            <span></span>
        </button>
    </div>
    <div class="form-group">
        <label for="diferidos_cc_cmg{$key|escape:'htmlall':'UTF-8'}"
            class='control-label col-sm-4 required'>{l s='Diferido con Interés + Meses de Gracia' mod='datafast'}</label>
        <div class="col-sm-5">
            <div class="form-check" style="margin-top: 9px;">
                <input class="form-check-input" type="checkbox" id="diferidos_int_cc_cmg{$key|escape:'htmlall':'UTF-8'}"
                    {if  isset($tasas[$bank]) && isset($tasas[$bank]['diferidos_cc_cmg'])} checked {/if}
                    name='bancos[{$bank|escape:'htmlall':'UTF-8'}][diferidos_cc_cmg]'>
                <label class="form-check-label" for="diferidos_cc_cmg{$key|escape:'htmlall':'UTF-8'}">
                    Selecciona si quieres habilitar pagos con opción Diferido con Interés + Meses de Gracia
                </label>
            </div>
        </div>
    </div>

    <div id="diferidos_cc_cmg_content{$key|escape:'htmlall':'UTF-8'}" class="form-group">

        <div id="diferidos_cc_cmg{$key|escape:'htmlall':'UTF-8'}" class="col-sm-11"
            style="display: flex;     justify-content: center;" data-num-tabs="4">
            {if isset($tasas[$bank]) && $tasas[$bank]['diferidos_cc_cmg']}
                {foreach $tasas[$bank]['diferidos_cc_cmg'] as $tcc}
                    <div class="data_tasa" style="margin-right: 10px;">
                        <input style="width: 100%;" type="text"
                            name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_cc_cmg][]" placeholder="Meses"
                            value="{l s=$tcc mod='datafast'}">
                    </div>
                {/foreach}
            {else}
                <div class="data_tasa" style="margin-right: 10px;">
                    <input style="width: 100%;" type="text"
                        name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_cc_cmg][]" placeholder="Meses">
                </div>
            {/if}

        </div>
        <button type="button" id="add_tab"
            onclick="add_tab_mes('diferidos_cc_cmg{$key|escape:'htmlall':'UTF-8'}', 'diferidos_cc_cmg', '{$bank|escape:'htmlall':'UTF-8'}')"
            style="height: fit-content; margin-left: 5px; ">
            <svg width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1344 960v-128q0-26-19-45t-45-19h-256v-256q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v256h-256q-26 0-45 19t-19 45v128q0 26 19 45t45 19h256v256q0 26 19 45t45 19h128q26 0 45-19t19-45v-256h256q26 0 45-19t19-45zm320-64q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            <span></span>
        </button>
    </div>

    <div class="form-group">
        <label for="diferidos_sc_cmg{$key|escape:'htmlall':'UTF-8'}"
            class='control-label col-sm-4 required'>{l s='Diferido sin Interés + Meses de Gracia' mod='datafast'}</label>
        <div class="col-sm-5">
            <div class="form-check" style="margin-top: 9px;">
                <input class="form-check-input" type="checkbox" id="diferidos_sc_int_cmg{$key|escape:'htmlall':'UTF-8'}"
                    {if  isset($tasas[$bank]) && isset($tasas[$bank]['diferidos_sc_cmg'])} checked {/if}
                    name='bancos[{$bank|escape:'htmlall':'UTF-8'}][diferidos_sc_cmg]'>
                <label class="form-check-label" for="diferidos_sc_cmg{$key|escape:'htmlall':'UTF-8'}">
                    Selecciona si quieres habilitar pagos con opción Diferido sin Interés + Meses de Gracia
                </label>
            </div>
        </div>
    </div>

    <div id="diferidos_sc_cmg_content{$key|escape:'htmlall':'UTF-8'}" class="form-group">

        <div id="diferidos_sc_cmg{$key|escape:'htmlall':'UTF-8'}" class="col-sm-11"
            style="display: flex;     justify-content: center;" data-num-tabs="4">
            {if isset($tasas[$bank]) && $tasas[$bank]['diferidos_sc_cmg']}
                {foreach $tasas[$bank]['diferidos_sc_cmg'] as $tcc}
                    <div class="data_tasa" style="margin-right: 10px;">
                        <input style="width: 100%;" type="text"
                            name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_sc_cmg][]" placeholder="Meses"
                            value="{l s=$tcc mod='datafast'}">
                    </div>
                {/foreach}
            {else}
                <div class="data_tasa" style="margin-right: 10px;">
                    <input style="width: 100%;" type="text"
                        name="bancos[{$bank|escape:'htmlall':'UTF-8'}][tasas][diferidos_sc_cmg][]" placeholder="Meses">
                </div>
            {/if}

        </div>
        <button type="button" id="add_tab"
            onclick="add_tab_mes('diferidos_sc_cmg{$key|escape:'htmlall':'UTF-8'}', 'diferidos_sc_cmg', '{$bank|escape:'htmlall':'UTF-8'}')"
            style="height: fit-content; margin-left: 5px; ">
            <svg width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1344 960v-128q0-26-19-45t-45-19h-256v-256q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v256h-256q-26 0-45 19t-19 45v128q0 26 19 45t45 19h256v256q0 26 19 45t45 19h128q26 0 45-19t19-45v-256h256q26 0 45-19t19-45zm320-64q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            <span></span>
        </button>
    </div>
</div>