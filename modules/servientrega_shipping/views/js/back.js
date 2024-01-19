/**
* 2007-2020 PrestaShop
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
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/
document.addEventListener("DOMContentLoaded", function () {
    if (typeof status_servientrega !== 'undefined') {
        if (!status_servientrega) {
            $("#shipping").append('<div class="row-margin-bottom row-margin-top order_action"><button id="create_guia" class="btn btn-default" type="button"><i class="icon-truck"></i>Crear guia Servientrega</button></div>');

        }
    }

    $("#create_guia").on("click", (e) => {
        e.preventDefault();
        if (confirm("Generar guia Servientrega")) {
            $.ajax({
                url: adminajax_link_servientrega,
                type: "POST",
                dataType: 'json',
                data: {
                    action: "getGuiaServi",
                    order_id: id_order,
                },
                success: function (rest) {
                    if(rest.estado){
                        var win = window.open(rest.rastreoEnvio, '_blank');
                        win.focus();
                    }else{
                        jAlert(rest.razon);
			            return false;
                    }
                },
                error: function (e, a) {
                    console.log(e);
                },
            });
        }
    });
});