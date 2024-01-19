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


<div class='panel'>
<div class='panel-heading'>
	    	<i class='icon-cogs'></i>
            {l s='Configuración De bancos ' mod='datafast'}
        </div>
    <form id='store_form' class='defaultForm form-horizontal'  method='post' enctype='multipart/form-data' novalidate>
    <div id="bancks_content" class="form-group">

                <div id="bancks" class="" data-num-tabs="4">
                    {if  $bancks}
                        {foreach  $bancks as $banck}
                            <div class="data_tasa" style="margin-bottom: 10px;">
                                <input style="width: 30%;" type="text" name="bancos[]" placeholder="Nombre del Banco" value="{l s=$banck mod='datafast'}">
                            </div>
                        {/foreach}
                    {else}
                    <div class="data_tasa" style="margin-bottom: 10px;">
                        <input style="width: 30%;" type="text" name="bancos[]" placeholder="Nombre del Banco">
                    </div>
                    {/if}
                    
                </div>
               
            </div>
     <div class='panel-footer'>
            <button type='submit' name='submitDatafastBancks' class='btn btn-default pull-right'>
                <i class='process-icon-save' ></i>
                {l s='    ACEPTAR    ' mod='datafast'}
            </button>

             <button type='button' id="add_tab" onclick="add_tab_banck()" name='submitDatafastBancks' class='btn btn-default pull-left'>
                <i class='process-icon-new' ></i>
                {l s='    NUEVO    ' mod='datafast'}
            </button>
        </div>
    </form>

</div>

<script>
    function add_tab_banck() {
        let tabC = ' <div class="data_tasa" style="margin-bottom: 10px; width: 30%;"><input style="width: 100%;" type="text" name="bancos[]" placeholder="Nombre del Banco"value=""></div>';

        jQuery("#bancks").append(jQuery(tabC));

    }

</script>