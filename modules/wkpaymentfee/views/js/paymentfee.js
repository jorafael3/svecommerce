/**
 * 2010-2022 Webkul.
 *
 * NOTICE OF LICENSE
 *
 * All right is reserved,
 * Please go through LICENSE.txt file inside our module
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please refer to CustomizationPolicy.txt file inside our module for more information.
 *
 * @author Webkul IN
 * @copyright 2010-2022 Webkul IN
 * @license LICENSE.txt
 */
var RESULTADO_CREDITO;

if (document.getElementById("payment-confirmation") != null) {
    document.getElementById("payment-confirmation").addEventListener("click", function () {
        var moduleId = $('input[name="payment-option"]:checked').attr('id');
        //var moduleName = $('input[name="payment-option"]:checked').data('module-name');
        var paymentFeeDetail = $('#' + moduleId + '-additional-information').find('#wk-payment-fee');
        if (paymentFeeDetail.length) {
            var feeAmount = paymentFeeDetail.find('input[name = "wk-payment-fee-amount"]').val();
            var feeType = paymentFeeDetail.find('input[name = "wk-payment-fee-type"]').val();
            $.ajax({
                url: getformattedcurrency,
                dataType: 'json',
                async: false,
                data: {
                    ajax: '1',
                    token: static_token,
                    action: 'addPaymentFee',
                    feeType: feeType,
                    feeAmount: feeAmount,
                },
                success: function (result) {
                    console.log('result: ', result);

                }
            });
        }
    }, true);
}

$(document).ready(function () {
    var cartTotalObject = $('#js-checkout-summary .cart-summary-line.cart-total span.value');
    var orderConfirmationTable = $('#order-summary-content #order-items .order-confirmation-table table tbody tr').last().find('td').last();
    var cartTotal = cartTotalObject.html();
    // console.log('cartTotal: ', cartTotal);
    $(".ps-shown-by-js:not(div):not(input[name='conditions_to_approve[terms-and-conditions]'])").on('click', function () {
        cartTotalObject.html(cartTotal);
        orderConfirmationTable.html(cartTotal);
    });

    let HTML_TARJETA = $("#js-checkout-summary").html();
    let BUTON_CON = $("#payment-confirmation").html();
    var paragraphElement = document.querySelector('.paymentfee');

    // // Ocultar el párrafo
    paragraphElement.style.display = 'none';

    $('.payment-option').on('click', function (e) {
        // console.log('e: ', e.target);
        let tarjeta = $("#payment-option-1").is(":checked");
        // console.log('tarjeta: ', tarjeta);

        // $("#payment-option-2-additional-information").remove();

        if (tarjeta == true) {
            $("#js-checkout-summary").empty();
            $("#js-checkout-summary").append(HTML_TARJETA);

        } else {

            $(".js-cart-summary-subtotals-container").empty();
            $('.price-value').text('');
            $('#cart-subtotal-products').remove();
            $('.js-cart-voucher').remove();
            $('.js-cart-summary-totals').remove();
            $('#cart-subtotal-shipping').remove();

            let CREDITO_HTML = `
                <div>
                    <div class="cart-summary-line cart-summary-cuota" id="cart-subtotal-cuotas">
                        <span class="label">Tiempo</span>
                        <select class="text-end form-control" id="cart-select-cuotas">
                            <option value="3">3 meses</option>
                            <option value="6">6 meses</option>
                            <option value="12" selected>12 meses</option>
                            <option value="18">18 meses</option>
                            <option value="24">24 meses</option>
                        </select>
                    </div>
                    <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
                        <span class="label">Valor de la cuota</span>
                        <h5 style="font-weight:bold" class="value fs-5 fw-bold" id="cart-subtotal-valor-cuota"></h5>
                    </div>
                </div>
            `
            $(".js-cart-summary-subtotals-container").append(CREDITO_HTML);

            var moduleId = $(this).find(' input[name="payment-option"]:checked').attr('id');
            var moduleName = $(this).find(' input[name="payment-option"]:checked').data('module-name');
            var paymentFeeDetail = $('#' + moduleId + '-additional-information').find('#wk-payment-fee');
            $('ul.wk-card-block, #wk-order-summary-tr').remove();

            $('#cart-subtotal-cuotas').on('change', function (e) {
                calcular_Cuota();
            })
            calcular_Cuota();

            function calcular_Cuota() {


                if (paymentFeeDetail.length) {
                    var feeAmount = paymentFeeDetail.find('input[name = "wk-payment-fee-amount"]').val();
                    var feeType = paymentFeeDetail.find('input[name = "wk-payment-fee-type"]').val();

                    let param = {
                        ajax: '1',
                        token: static_token,
                        action: 'getFormattedPrice',
                        feeType: feeType,
                        feeAmount: feeAmount,
                    }

                    console.log('param: ', param);

                    $.ajax({
                        url: getformattedcurrency,
                        dataType: 'json',
                        async: false,
                        data: param,
                        success: function (result) {
                            console.log('result: ', result);
                            // RESULTADO_CREDITO = result

                            let MESES = $("#cart-select-cuotas").val();
                            var cadena = result.amount;
                            cadena = cadena.replace(".", "");
                            cadena = cadena.replace(",", ".");
                            cadena = cadena.split("$")[1];
                            cadena = parseFloat(cadena);
                            let CUOTA_TOTAL = cadena / parseInt(MESES);
                            var numeroFormateado = CUOTA_TOTAL.toLocaleString('en-US', { style: 'currency', currency: 'USD' });


                            $("#cart-subtotal-valor-cuota").text(numeroFormateado);



                            // setTimeout(function () {
                            //     cartTotalObject.html(result['feeAmount']);
                            // }, 100);

                            // $(".total-value td:nth-child(2)").html(result['amount']);
                            // result.discount = `<li class="cart-summary-line" id="cart-voucher-payment-option">
                            //     <span class="label">` + result.discountText + `</span>
                            //     <div class="float-xs-right"> ` + result.feeAmount + `</div>
                            // </li>`
                            // result.discount_tr = '<td>' + result.discountText + '</td><td>' + result.feeAmount + '</td>'
                            // if (result.discount) {
                            //     if ($('ul.wk-card-block').length != 0) {
                            //         $('ul.wk-card-block').html(result.discount);
                            //     } else {
                            //         $('.cart-summary-totals').prepend('<ul class="promo-name wk-card-block">' + result.discount + '</ul>');
                            //     }
                            // }
                            // if (result.discount_tr) {
                            //     if ($('#wk-order-summary-tr').length != 0) {
                            //         $('#wk-order-summary-tr').html(result.discount_tr);
                            //     } else {
                            //         $("#order-items table tr:first").after('<tr id="wk-order-summary-tr">' + result.discount_tr + '</tr>');
                            //     }
                            // }
                        }
                    });
                }
            }
        }

        //EDIT JORGE ALVARADO


    });
});