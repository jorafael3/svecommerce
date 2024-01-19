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

<div class="header-toolbar">
    <ul class='nav nav-tabs' role='tablist'>

        {foreach key=key item=bank from=$bancks}
            <li class='{if $key|escape:'htmlall':'UTF-8' == "0"}active{/if}'><a
                    href='#template_{$key|escape:'htmlall':'UTF-8'}' role='tab'
                    data-toggle='tab'>{l s=$bank mod='datafast'}</a></li>
        {/foreach}

    </ul>
</div>

<div class='panel'>
    <form id='store_form' class='defaultForm form-horizontal' method='post' enctype='multipart/form-data' novalidate>
        <div class='tab-content'>
            {foreach key=key item=bank from=$bancks}
                <div class='tab-pane  {if $key|escape:'htmlall':'UTF-8' == "0"}active{/if}'
                    id='template_{$key|escape:'htmlall':'UTF-8'}'>{include file='./interes.tpl'}</div>

            {/foreach}

        </div>

        <div class='panel-footer'>
            <button type='submit' name='submitDatafastInteres' class='btn btn-default pull-right'>
                <i class='process-icon-save'></i>
                {l s='    ACEPTAR    ' mod='datafast'}
            </button>
        </div>
    </form>
</div>

<script>
    let bancks = {$bancks|json_encode};
    function add_tab_mes($key, tab, banck, type) {
        let tabC =
            ' <div class="data_tasa" style="margin-right: 10px;"><input style="width: 100%;" type="text" name="bancos[' +
            banck + '][tasas][' + tab + '][]" placeholder="Meses"value=""></div>';
        console.log($key);
        console.log(tabC);
        console.log(jQuery("#" + $key));
        jQuery("#" + $key).append(tabC);

    }

    jQuery(document).ready(function($) {
        if (bancks.length > 0) {
            bancks.forEach((bank, key) => {
                let checkSC = $('#datafast_intereses_cc' + key);
                let checkC = $('#datafast_intereses_sc' + key);
                let checkDmg = $('#diferidos_cc_cmg' + key);


                if (checkSC.length == 0) {
                    return;
                }

                if (checkC.length == 0) {
                    return;
                }

                if (checkC[0].checked) {
                    $('#diferidos_sc_content' + key).show();
                } else {
                    $('#diferidos_sc_content' + key).hide();
                }

                if (checkSC[0].checked) {
                    $('#diferidos_cc_content' + key).show();
                } else {
                    $('#diferidos_cc_content' + key).hide();

                }



                checkSC.change(function() {
                    if ($(this).is(':checked')) {
                        $('#diferidos_cc_content' + key).show();
                    } else {
                        $('#diferidos_cc_content' + key).hide();
                    }
                });

                checkC.change(function() {
                    if ($(this).is(':checked')) {
                        $('#diferidos_sc_content' + key).show();
                    } else {
                        $('#diferidos_sc_content' + key).hide();

                    }
                });
            });
        }
    });
</script>