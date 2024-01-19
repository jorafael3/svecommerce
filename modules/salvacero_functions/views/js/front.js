/**
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
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */

jQuery(document).ready(function($) {
    prestashop.on(
        'changedCheckoutStep',
        function(event) {
            if (typeof event.event.target.name !== 'undefined' && event.event.target.name == 'confirmDeliveryOption') {
                console.log(event.event.target.name);

                // $.sweetModal({
                //     content: "hola",
                //     icon: $.sweetModal.ICON_SUCCESS,
                //     onClose: () => {
                //         window.location.href = prestashop.urls.pages.index;
                //     },
                // });
            }

        }
    );


    $(".ps-shown-by-js").on("change", (e) => {
        if ($(e.target).data().moduleName == name_salvacero) {
            var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";
            console.log(url);

            $.ajax({
                url: url,
                dataType: 'json',
                type: "POST",
                data: {
                    action: "getDataCustomer",
                    customerEmail: prestashop.customer.email,
                    total: prestashop.cart.totals.total.amount

                },
                success: function(result) {
                    if (result.success) {


                        $.sweetModal({
                                content: '<h4> <center>¿Quieres agregar más productos a tu compra?</center></h4>',
                                title: '<strom><center class="title-modal-credic">Todavía tienes saldo disponible para comprar más</center></strom>',
                                buttons: [{
                                    label: 'No',
                                    classes: 'redB'
                                }, {
                                    label: 'SI',
                                    classes: 'greenB',
                                    action: function() {
                                        window.location.href = prestashop.urls.pages.index;
                                    }
                                }]
                            },

                            function() {
                                console.log("hola")
                                    // $.sweetModal('You declined. That\'s okay!');
                            });

                    } else {
                        $.sweetModal({
                            content: "NO posee saldo de crédito disponible",
                            title: 'Error',
                            icon: $.sweetModal.ICON_ERROR,
                            // onClose: () => {
                            //     window.location.href = url_action;
                            // },
                            // buttons: [{
                            //     label: 'OK',
                            //     classes: 'redB'
                            // }]
                        })
                    }
                },
                error: (jqXHR, exception) => {
                    var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }

                    $.sweetModal({
                        content: msg,
                        title: 'Error ' + jqXHR.status,
                        icon: $.sweetModal.ICON_ERROR,
                        onClose: () => {
                            console.log(jqXHR);
                            console.log(exception);
                            // window.location.href = url_action;
                        },
                        buttons: [{
                            label: 'volver a intentar',
                            classes: 'redB'
                        }]
                    });
                }
            });

        }
    });

});