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

//JORGE ALVARADO EDIT

jQuery(document).ready(function ($) {


    var paymentStepSection = document.getElementById('checkout-payment-step');

    // $("#checkout-payment-step").append("<button id='realizarPedidoBtn'>PEDIDO</button>")

    if (paymentStepSection) {
        // Si la sección existe, obtén el botón "Realizar pedido" dentro de ella
        var realizarPedidoBtn = paymentStepSection.querySelector('.btn.btn-primary.center-block');


        // Verifica si se encontró el botón dentro de la sección
        if (realizarPedidoBtn) {
            // Agrega el ID deseado al botón
            realizarPedidoBtn.setAttribute('id', 'realizarPedidoBtn');
        }
    }

    function Mostrar_Credito() {
        var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";

        $.ajax({
            url: url,
            dataType: 'json',
            type: "POST",
            data: {
                action: "getDataCustomer",
                customerEmail: prestashop.customer.email,
                total: prestashop.cart.totals.total.amount

            },
            success: function (result) {



                if (result.success) {

                    // Calcular el porcentaje de crédito consumido
                    var percentage = (result.Monto_Credito / result.amount_inicial) * 100;

                    var percentage = (result.Monto_Credito / result.amount_inicial) * 100;


                    // Crear el string HTML para la barra de progreso
                    var barra = `
                    <style>
                        .bg-custom {
                            background-color: #f0f0f0; /* Color gris claro, puedes cambiar esto según tus preferencias */
                        }
                        @keyframes wave {
                            0%, 100% {
                                opacity: 0.3;
                            }
                            50% {
                                opacity: 1;
                            }
                        }
                    
                        .progress-bar {
                            border-radius: 20px; /* Redondear la barra de progreso */
                            animation: wave 3s infinite; /* Animación de "ola" */
                        }
                    </style>
                    <div class="container ">
                        <div class="col-4 p-1 justify-content-end">
                            <h5>Credito disponible ` + parseFloat(percentage).toFixed(2) + `%</h5>
                            <div class="progress bg-custom rounded ">
                                <div id="progressBar" class="progress-bar " role="progressbar" style="width: `+ percentage + `%;" aria-valuenow="` + percentage + `" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("#header-normal").append(barra);

                    if (percentage >= 75) {
                        progressBar.classList.add("bg-success"); // Verde si el porcentaje es 75% o más
                    } else if (percentage >= 50) {
                        progressBar.classList.add("bg-warning"); // Amarillo si el porcentaje está entre 50% y 75%
                    } else {
                        progressBar.classList.add("bg-danger"); // Rojo si el porcentaje es menos del 50%
                    }

                }
            },
            error: (jqXHR, exception) => {

            }
        });

    }
    Mostrar_Credito();

    function Editar_Pedido_Confirmado() {
        if (window.location.href.includes('order-confirmation') || window.location.href.includes('confirmacion-pedido')) {

            var detailsElements = document.querySelectorAll('.details');
            var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";
            var encontrado = false;

            // Recorrer cada elemento con la clase order-line

            for (var i = 0; i < detailsElements.length; i++) {
                // Obtener el texto dentro de la etiqueta <span> dentro del elemento actual
                var productName = detailsElements[i].querySelector('span').textContent;

                // Verificar si el nombre del producto coincide con "Pago de tarifa adicional"
                if (productName.trim() === "Pago de tarifa adicional") {
                    var table = document.querySelector('table');
                    // Vaciar el contenido de la tabla
                    table.innerHTML = '';

                    var orderReferenceText = $("#order-reference-value").text().trim();
                    // Dividir el texto en partes usando ":" como separador y tomar la última parte
                    var parts = orderReferenceText.split(":");
                    var orderReference = parts[parts.length - 1].trim();
                    // Mostrar el texto obtenido

                    let param = {
                        action: "SetActualizarOrdenCredito",
                        orderReference: orderReference,
                    }
                    console.log('param: ', param);


                    $.ajax({
                        url: url,
                        dataType: 'json',
                        type: "POST",
                        data: param,
                        success: function (result) {
                            console.log('result: ', result);

                            let MESES = result["datos"]["meses"];
                            let TOTAL = result["datos"]["total"];
                            var VALOR = TOTAL / MESES;


                            // Crear una nueva fila <tr>
                            var newRow = document.createElement('tr');
                            // Crear una celda <td> para la descripción
                            var descriptionCell = document.createElement('td');
                            var descriptionSpan = document.createElement('span');
                            descriptionSpan.textContent = 'TOTAL CREDITO DIRECTO';
                            descriptionCell.appendChild(descriptionSpan);
                            // Crear una celda <td> para el total
                            var totalCell = document.createElement('td');
                            var boldText = document.createElement('strong'); // Crear un elemento strong para el texto en negrita
                            boldText.textContent = MESES + " CUOTAS DE " + VALOR.toLocaleString('en-US', { style: 'currency', currency: 'USD' }); // Establecer el texto dentro del elemento strong
                            totalCell.appendChild(boldText); // Agregar el texto en negrita a la celda de total
                            // Añadir las celdas a la nueva fila
                            newRow.appendChild(descriptionCell);
                            newRow.appendChild(totalCell);
                            // Añadir la nueva fila a la tabla
                            table.appendChild(newRow);
                            // Obtener la fila del producto
                            var productRow = detailsElements[i].closest('.order-line');
                            // Eliminar la fila del producto
                            productRow.parentNode.removeChild(productRow);
                        },
                        error: (jqXHR, exception) => {


                        }

                    });


                    break;
                }
            }
        }
    }
    Editar_Pedido_Confirmado()

    function historial_compra() {
        if (window.location.href.includes('historial-compra')) {
            var rows = document.querySelectorAll('tbody tr');
            var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";

            rows.forEach(function (row) {
                // Obtener la celda oculta con el texto "Salvacero modulo de credito" en la fila actual
                var cell = $(row).find('td.hidden-md-down');

                // Verificar si la celda contiene "Salvacero modulo de credito"
                if (cell.length > 0 && cell.text().trim() === "Salvacero modulo de credito") {
                    cell.text("Credito directo");
                    var priceCell = $(row).find('.price');
                    if (priceCell.length > 0) {

                        var firstElement = $(row, 'tr').find('th:first').text().trim();


                        let param = {
                            action: "getDatosCreditoOrden",
                            orderReference: firstElement,
                        }

                        $.ajax({
                            url: url,
                            dataType: 'json',
                            type: "POST",
                            data: param,
                            success: function (result) {

                                let MESES = result["datos"]["meses"];
                                let TOTAL = result["datos"]["total"];
                                var VALOR = TOTAL / MESES;
                                VALOR = MESES + " CUOTAS DE " + VALOR.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                                if (result.datos != false) {
                                    priceCell.text(VALOR);
                                }

                            },
                            error: (jqXHR, exception) => {


                            }

                        });
                        // Aquí puedes colocar el texto deseado

                    }
                }
            });

            var columnIndexToHide = 5; // Por ejemplo, si la columna "Orden" es la séptima, su índice sería 6

            var rows = document.querySelectorAll('tbody tr');

            // Iterar sobre cada fila
            rows.forEach(function (row) {
                // Obtener la celda en la columna específica
                var cellToHide = row.cells[columnIndexToHide];

                // Ocultar la celda
                cellToHide.style.display = 'none';
            });

        }
    }
    historial_compra()

    function Order_detalle() {

        if (window.location.href.includes("order-detail")) {
            var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";

            var orderId = $(".axps-breadcrumb span:last").text();

            // Imprimir el resultado en la consola


            let param = {
                action: "getDatosCreditoOrden",
                orderReference: orderId,
            }

            $.ajax({
                url: url,
                dataType: 'json',
                type: "POST",
                data: param,
                success: function (result) {


                    if (result.datos != false) {
                        var tbodyRows = document.querySelectorAll('#order-products tbody tr');

                        // Iterar sobre cada fila del tbody
                        tbodyRows.forEach(function (row) {
                            // Obtener el texto dentro de la primera celda (td) de la fila actual
                            var productName = row.querySelector('td').textContent.trim();
                            console.log('productName: ', productName);
                            // Verificar si el texto de la primera celda coincide con "Pago de tarifa adicional"
                            if (productName.includes("Pago de tarifa adicional")) {
                                // Eliminar la fila del tbody
                                row.parentNode.removeChild(row);
                            }
                        });

                        var tableFooter = $("#order-products tfoot");
                        tableFooter.empty();


                        let MESES = result["datos"]["meses"];
                        let TOTAL = result["datos"]["total"];
                        var VALOR = TOTAL / MESES;
                        VALOR = MESES + " CUOTAS DE " + VALOR.toLocaleString('en-US', { style: 'currency', currency: 'USD' });

                        let b = `
                        <tr class="text-xs-right line-total">
                            <td colspan="3">TOTAL</td>
                            <td class="price">CREDITO DIRECTO</td>
                        </tr>
                        <tr class="text-xs-right line-total">
                            <td colspan="3">CUOTAS</td>
                            <td class="price">`+ VALOR + `</td>
                        </tr>
                        `;
                        tableFooter.append(b);

                    }

                },
                error: (jqXHR, exception) => {


                }

            });

        }
    }

    Order_detalle()

    function Editar_index() {


        var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";
        console.log('url: ', url);

        $.ajax({
            url: url,
            dataType: 'json',
            type: "POST",
            data: {
                action: "getDataCustomer",
                customerEmail: prestashop.customer.email,
                total: prestashop.cart.totals.total.amount

            },
            success: function (result) {
                console.log('result: ', result);
                if (result.success) {
                    $(".INDEX_PR_C_BUTTONS_CONTADO").hide();
                    $(".INDEX_PR_C_PRICE_CONTADO").hide();
                    $(".INDEX_PR_C_BUTTONS_CREDITO").addClass("col-12");
                    $(".INDEX_PR_C_BUTTONS_CREDITO").show();
                    $(".INDEX_PR_C_PRICE_CREDITO").show();

                    $(".CART_SUBTOTAL_TEXT").text("12 cuotas de");


                    //* PRECIO CARRITO FLOTANTE
                    $(".CART_PRICE_CONTADO").hide();
                    $(".CART_PRICE_TOTAL_CREDITO").show();
                    $(".CART_PRICE_TOTAL_CONTADO").empty();

                  
                    var totalPriceCredit = 0;
                    var cartItems = document.querySelectorAll('.cart-item-product');
                    cartItems.forEach(function (item) {
                        var priceElement = item.querySelector('.CART_PRICE_CREDIT .price');
                        var priceText = priceElement.textContent.trim().replace('$', '').replace(',', '.');
                        var price = parseFloat(priceText);
                        var quantityElement = item.querySelector('.CART_PRODUCT_CANT');
                        var quantity = parseInt(quantityElement.value);
                        totalPriceCredit += price * quantity;
                    });

                    // Mostrar la suma total
                    console.log('Total de CART_PRICE_CREDIT por cantidad:', totalPriceCredit);
                    var formattedPrice = totalPriceCredit.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                    $(".CART_PRICE_TOTAL_CREDITO_VAL").text(formattedPrice);


                } else {
                    $(".CART_PRICE_CONTADO").show();
                    $(".CART_PRICE_CREDIT").empty();
                    $(".CART_PRICE_TOTAL_CONTADO").show();
                    $(".CART_PRICE_TOTAL_CREDITO").empty();


                }
            },
            error: (jqXHR, exception) => {

            }
        });

    }
    Editar_index()

    function Editar_Carrito_flotante() {

    }





    prestashop.on(
        'changedCheckoutStep',
        function (event) {
            if (typeof event.event.target.name !== 'undefined' && event.event.target.name == 'confirmDeliveryOption') {


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
    var TIENE_CREDITO = false;
    var DATOS_CREDITO_ORDEN;

    $(".ps-shown-by-js").on("change", (e) => {
        if ($(e.target).data().moduleName == name_salvacero) {
            var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";
            // 

            $.ajax({
                url: url,
                dataType: 'json',
                type: "POST",
                data: {
                    action: "getDataCustomer",
                    customerEmail: prestashop.customer.email,
                    total: prestashop.cart.totals.total.amount

                },
                success: function (result) {

                    // 
                    if (result.success) {
                        TIENE_CREDITO = true
                        DATOS_CREDITO_ORDEN = result

                        // $.sweetModal({
                        //         content: '<h4> <center>¿Quieres agregar más productos a tu comprass?</center></h4>',
                        //         title: '<strom><center class="title-modal-credic">Todavía tienes saldo disponible para comprar más</center></strom>',
                        //         buttons: [{
                        //             label: 'No',
                        //             classes: 'redB'
                        //         }, {
                        //             label: 'SI',
                        //             classes: 'greenB',
                        //             action: function() {
                        //                 window.location.href = prestashop.urls.pages.index;
                        //             }
                        //         }]
                        //     },

                        //     function() {
                        //         
                        //             // $.sweetModal('You declined. That\'s okay!');
                        //     });

                    } else {
                        // $("#payment-confirmation").remove()

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


    $("#realizarPedidoBtn").on("click", (e) => {
        var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";

        for (var addressId in prestashop.customer.addresses) {
            if (prestashop.customer.addresses.hasOwnProperty(addressId)) {
                var address = prestashop.customer.addresses[addressId];
                // Verificar si la dirección tiene un ID
                if (address.id) {
                    var customerId = address.id;
                    // Hacer algo con el ID del cliente
                    // Aquí puedes salir del bucle si solo necesitas el primer ID encontrado
                    break;
                }
            }
        }    // Verifica si la sección existe

        let es_credito = $("#payment-option-2").is(":checked");

        if (es_credito == true) {

            if (TIENE_CREDITO == true) {

                let valor_total = $("#cart-subtotal-valor-total").val();
                let meses = $("#cart-select-cuotas").val();

                let param = {
                    action: "SetCustomerCreditData",
                    id_customer: "",
                    meses: meses,
                    valor_total: valor_total
                }


                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: "POST",
                    data: param,
                    success: function (result) {


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

        }


    })


});