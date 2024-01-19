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

$(document).ready(function() {

    $('#amount_div').hide(400);
    $('#percent_div').hide(400);
    $('input[type=checkbox]').each(function(i) {
        $('#' + this.id + '_div').toggle(this.checked);
    });

    $('input[type=checkbox]').on('click', toggle);
    var feetype = $('input[name=feetype]:checked').val();
    if (feetype == 'both') {
        $('#amount_div').show(400);
        $('#percent_div').show(400);
    } else {
        $('#' + feetype + '_div').show(400);
    }
    $('input[name=feetype]').on('click', toggleApplyFee);

    $('.priority').change(function(e) {
        var value = $(this).val();
        var id = $(this).attr('name').split('_')[1];
        $.ajax({
            type: "POST",
            url: controller,
            data: {
                id: id,
                value: value,
                action: 'prioritySet',
                ajax: true,
            },
            dataType: 'json',
            async: false,
            success: function(msg) {
                if (msg.error) {
                    showErrorMessage(msg.error);
                    return;
                }
                showSuccessMessage(success_mess);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (textStatus != 'error' || errorThrown != '')
                    showErrorMessage(textStatus + ': ' + errorThrown);
            }
        });
    });

    $('#submitAddwk_paymentfee').on('click', function() {
        var minAmount = parseFloat($('#min_amount').val());
        var maxAmount = parseFloat($('#max_amount').val());
        if (0 < minAmount && 0 < maxAmount) {
            if (minAmount > maxAmount) {
                showErrorMessage(errorMessage);
                return false;
            }
        }
        $('input[type=checkbox]').each(function(i) {
            if (!$(this).is(':checked')) {
                $('#' + this.id + '_select option').prop("selected", false);
            }
        });
    });

    if ($('.mColorPickerInput').length > 0) {
        $('.mColorPickerInput').mColorPicker({
            imageFolder: '../img/admin/'
        });
    }
});

function toggle(e) {
    var id = e.currentTarget.id;
    $('#' + id + '_div').toggle(e.currentTarget.checked);
}

function toggleApplyFee(e) {
    if (e.currentTarget.value == 'amount') {
        $('#amount_div').show(400);
        $('#percent_div').hide(400);
    } else if (e.currentTarget.value == 'percent') {
        $('#percent_div').show(400);
        $('#amount_div').hide(400);
    } else if (e.currentTarget.value == 'both') {
        $('#percent_div').show(400);
        $('#amount_div').show(400);
    }
}

function showLangField(lang_iso_code, id_lang) {
    $('#name_lang_btn').html(lang_iso_code + ' <span class="caret"></span>');
    $('#dis_lang_btn').html(lang_iso_code + ' <span class="caret"></span>');

    $('.translatable-field').hide();
    $('.lang-' + id_lang).show();
    $('.discription-field').hide();
    $('.langdis-' + id_lang).show();

}