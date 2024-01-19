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
if (document.getElementById("payment-confirmation") != null) {
    document.getElementById("payment-confirmation").addEventListener("click", function() {
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
                success: function(result) {}
            });
        }
    }, true);
}

$(document).ready(function() {
    var cartTotalObject = $('#js-checkout-summary .cart-summary-line.cart-total span.value');
    var orderConfirmationTable = $('#order-summary-content #order-items .order-confirmation-table table tbody tr').last().find('td').last();
    var cartTotal = cartTotalObject.html();
    $(".ps-shown-by-js:not(div):not(input[name='conditions_to_approve[terms-and-conditions]'])").on('click', function() {
        cartTotalObject.html(cartTotal);
        orderConfirmationTable.html(cartTotal);
    });

    $('.payment-option').on('click', function() {
        var moduleId = $(this).find(' input[name="payment-option"]:checked').attr('id');
        //var moduleName = $(this).find(' input[name="payment-option"]:checked').data('module-name');
        var paymentFeeDetail = $('#' + moduleId + '-additional-information').find('#wk-payment-fee');
        $('ul.wk-card-block, #wk-order-summary-tr').remove();
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
                    action: 'getFormattedPrice',
                    feeType: feeType,
                    feeAmount: feeAmount,
                },
                success: function(result) {
                    setTimeout(function() {
                        cartTotalObject.html(result['amount']);
                    }, 100);
                    $(".total-value td:nth-child(2)").html(result['amount']);
                    result.discount = `<li class="cart-summary-line" id="cart-voucher-payment-option">
                        <span class="label">` + result.discountText + `</span>
                        <div class="float-xs-right"> ` + result.feeAmount + `</div>
                    </li>`
                    result.discount_tr = '<td>' + result.discountText + '</td><td>' + result.feeAmount + '</td>'
                    if (result.discount) {
                        if ($('ul.wk-card-block').length != 0) {
                            $('ul.wk-card-block').html(result.discount);
                        } else {
                            $('.cart-summary-totals').prepend('<ul class="promo-name wk-card-block">' + result.discount + '</ul>');
                        }
                    }
                    if (result.discount_tr) {
                        if ($('#wk-order-summary-tr').length != 0) {
                            $('#wk-order-summary-tr').html(result.discount_tr);
                        } else {
                            $("#order-items table tr:first").after('<tr id="wk-order-summary-tr">' + result.discount_tr + '</tr>');
                        }
                    }
                }
            });
        }
    });
});