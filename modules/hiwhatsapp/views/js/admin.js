/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

hiwhatsapp = {
    displayAccountForm: function(id_account = 0, $sel = null) {
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: wap_admin_controller,
            data: {
                ajax: true,
                action: 'displayAccountForm',
                secure_key: wap_secure_key,
                id_account: id_account
            },
            beforeSend: function() {
                if (!id_account) {
                    $('#desc-hiwhatsapp-new').find('i').removeClass('process-icon-new').addClass('process-icon-refresh icon-spin');
                } else {
                    $sel.find('i').removeClass('icon-pencil').addClass('icon-refresh icon-spin');
                }
            },
            success: function(response){
                if (!id_account) {
                    $('#desc-hiwhatsapp-new').find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-new');
                } else {
                    $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-pencil');
                }

                $('#form-hiwhatsapp').replaceWith(response.content);
            },
            error: function(jqXHR, error, errorThrown) {
                if (!id_account) {
                    $('#desc-hiwhatsapp-new').find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-new');
                } else {
                    $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-pencil');
                }

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    displayAccountsList: function($sel = null) {
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: wap_admin_controller,
            data: {
                ajax: true,
                action: 'displayAccountsList',
                secure_key : wap_secure_key
            },
            beforeSend: function() {
                if ($sel) {
                    $sel.find('i').removeClass('process-icon-cancel').addClass('process-icon-refresh icon-spin');
                }
            },
            success: function(response){
                if ($sel) {
                    $('[name="submit_cancel_wap_account"]').find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-cancel');
                }

                $('#hiwhatsapp_form').replaceWith(response.content);

                hiwhatsapp.initSort();
            },
            error: function(jqXHR, error, errorThrown) {
                if ($sel) {
                    $('[name="submit_cancel_wap_account"]').find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-cancel');
                }

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    saveAccount: function() {
        var $form = $('#hiwhatsapp_form');

        if ($('[name="submit_wap_account_add"]').length) {
            var $button = $('[name="submit_wap_account_add"]');
        } else {
            var $button = $('[name="submit_wap_account_update"]');
        }

        var positions = $form.find('input:checkbox.account_position:checked').map(function() {
            return this.value;
        }).get().join(',');

        var formdata = new FormData($('#hiwhatsapp_form')[0]);
        formdata.append('action', 'saveAccount');
        formdata.append('secure_key', wap_secure_key);
        formdata.append('positions', positions);
        formdata.append('ajax', true);
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: wap_admin_controller,
            data: formdata,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $button.find('i.process-icon-save').removeClass('process-icon-save').addClass('process-icon-refresh icon-spin');
            },
            success: function(response) {
                $button.find('i.process-icon-refresh').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');
                if (response.error) {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);

                    $('#hiwhatsapp_form').replaceWith(response.content);

                    hiwhatsapp.initSort();
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $button.find('i.process-icon-refresh').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    updateAccountStatus: function(id_account, $sel) {
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: wap_admin_controller,
            data: {
                ajax: true,
                action: 'updateAccountStatus',
                secure_key: wap_secure_key,
                id_account: id_account
            },
            beforeSend: function() {
                $sel.find('i').removeClass('icon-check').addClass('icon-refresh icon-spin');
            },
            success: function(response) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-check');

                if (response.error) {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);

                    $('#form-hiwhatsapp').replaceWith(response.content);

                    hiwhatsapp.initSort();
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-check');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    initSort: function() {
        if ($('#table-hiwhatsapp').length) {
            var $accountsTable = $('#table-hiwhatsapp');
        } else {
            var $accountsTable = $('.table.hiwhatsapp');
        }
        $accountsTable.find('tbody').sortable({
            handle: '.icon-move',
            stop: function(event, ui) {
                var sorted_items = [];
                $accountsTable.find('tbody tr').each(function(e) {
                    var id_account = parseInt($(this).find('td:eq(1)').text());
                    sorted_items.push('sortedAccounts['+e+']=' + id_account);
                });

                var params = sorted_items.join('&');
                params += '&ajax=1&secure_key=' + wap_secure_key + '&action=sortAccounts'
                $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    url: wap_admin_controller,
                    async: true,
                    data: params,
                    success: function(response){
                        if (response.error) {
                            showErrorMessage(response.error);
                        } else {
                            showSuccessMessage(response.message);
                        }
                    }
                });
            }
        }).disableSelection();
    },

    deleteAccount: function(id_account, $sel) {
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: wap_admin_controller,
            data: {
                ajax: true,
                action: 'deleteAccount',
                secure_key: wap_secure_key,
                id_account: id_account
            },
            beforeSend: function() {
                $sel.find('i').removeClass('icon-trash').addClass('icon-refresh icon-spin');
            },
            success: function(response) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-trash');

                if (response.error) {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);

                    $('#form-hiwhatsapp').replaceWith(response.content);

                    hiwhatsapp.initSort();
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-trash');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    initProductSearchAutocomplete: function() {
        $('#related_product').autocomplete(wap_admin_controller + '&ajax=1', {
            minChars: 2,
            max: 50,
            width: 500,
            formatItem: function (data) {
                return data[0]+ '. '+data[2] + '-' + data[1];
            },
            scroll: false,
            multiple: false,
            extraParams: {
                action : 'searchProducts',
                secure_key : wap_secure_key
            }
        });
    },

    renderRelatedProducts: function($sel) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: wap_admin_controller,
            data:{
                ajax : true,
                action : 'renderRelatedProducts',
                id_account : $sel.attr('data-id-account'),
                secure_key : wap_secure_key,
            },
            beforeSend: function(){
                $sel.find('i').removeClass('icon-list').addClass('icon-refresh icon-spin');
            },
            success: function(response){
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-list');
                $('#wap_modal_form .content').html(response.content);
                $('#wap_modal_form').modal('show');
                hiwhatsapp.initProductSearchAutocomplete();
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-list');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    addRelatedProduct: function($sel) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: wap_admin_controller,
            data:{
                ajax : true,
                action: 'addRelatedProduct',
                id_account: $sel.attr('data-id-account'),
                id_product: $('#related_product').val(),
                secure_key: wap_secure_key
            },
            beforeSend: function(){
                $sel.find('i').removeClass('process-icon-save').addClass('process-icon-refresh icon-spin');
            },
            success: function(response){
                $sel.find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');
                if (response.error != '') {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);
                    $('#wap_modal_form .account-related-products').replaceWith(response.content);
                    $('#related_product').val('');
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    deleteRelatedProduct: function($sel) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: wap_admin_controller,
            data:{
                ajax : true,
                action: 'deleteRelatedProduct',
                id_account: $sel.attr('data-id-account'),
                id_product: $sel.attr('data-id-product'),
                secure_key: wap_secure_key
            },
            beforeSend: function(){
                $sel.find('i').removeClass('icon-trash').addClass('icon-refresh icon-spin');
            },
            success: function(response){
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-trash');
                if (response.error != '') {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);
                    $('#wap_modal_form .account-related-products').replaceWith(response.content);
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-trash');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    renderRelatedCategories: function($sel) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: wap_admin_controller,
            data:{
                ajax: true,
                action: 'renderRelatedCategories',
                id_account: $sel.attr('data-id-account'),
                secure_key : wap_secure_key,
            },
            beforeSend: function(){
                $sel.find('i').removeClass('icon-folder-open').addClass('icon-refresh icon-spin');
            },
            success: function(response){
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-folder-open');
                $('#wap_modal_form .content').html(response.content);
                $('#wap_modal_form').modal('show');
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('icon-refresh icon-spin').addClass('icon-folder-open');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    },

    addRelatedCategories: function($sel) {
        var data = $('[name="categories[]"]').serialize();
        data += '&ajax=1';
        data += '&action=addRelatedCategories';
        data += '&id_account=' + $('#id_account').val();
        data += '&secure_key=' + wap_secure_key;
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: wap_admin_controller,
            data: data,
            beforeSend: function(){
                $sel.find('i').removeClass('process-icon-save').addClass('process-icon-refresh icon-spin');
            },
            success: function(response){
                $sel.find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');
                if (response.error != '') {
                    showErrorMessage(response.error);
                } else {
                    showSuccessMessage(response.message);
                    $('#wap_modal_form').modal('hide');
                }
            },
            error: function(jqXHR, error, errorThrown) {
                $sel.find('i').removeClass('process-icon-refresh icon-spin').addClass('process-icon-save');

                if (jqXHR.status && jqXHR.status == 400) {
                    showErrorMessage(jqXHR.responseText);
                } else {
                    showErrorMessage(ajax_error_message);
                }
            }
        });
    }
}

$(document).ready(function() {
    // init Accounts sort
    hiwhatsapp.initSort();

    $(document).on('click', '[name="submit_cancel_wap_account"]', function() {
        hiwhatsapp.displayAccountsList($(this));

        return false;
    });

    $(document).on('click', '#desc-hiwhatsapp-new', function() {
        hiwhatsapp.displayAccountForm();

        return false;
    });

    $(document).on('click', '.hiwhatsapp .edit', function() {
        var id_account = $(this).attr('href').match(/id_hiwhatsapp=([0-9]+)/)[1];
        hiwhatsapp.displayAccountForm(id_account, $(this));

        return false;
    });

    $(document).on('submit', '#hiwhatsapp_form', function(){
        hiwhatsapp.saveAccount();

        return false;
    });

    $(document).on('click', '.hiwhatsapp .hi-module-status', function() {
        var id_account = $(this).attr('data-id');
        hiwhatsapp.updateAccountStatus(id_account, $(this));
    });

    $(document).on('click', '.hiwhatsapp .delete', function() {
        var id_account = $(this).attr('href').match(/id_hiwhatsapp=([0-9]+)/)[1];
        hiwhatsapp.deleteAccount(id_account, $(this));

        return false;
    });

    $(document).on('click', '.add-account-related-products', function() {
        hiwhatsapp.renderRelatedProducts($(this));

        return false;
    });

    $(document).on('click', '#submit_related_product', function() {
        hiwhatsapp.addRelatedProduct($(this));

        return false;
    });

    // delete related product
    $(document).on('click', '.delete-related-product', function() {
        hiwhatsapp.deleteRelatedProduct($(this));

        return false;
    });

    $(document).on('click', '.add-account-related-category', function() {
        hiwhatsapp.renderRelatedCategories($(this))

        return false;
    });

    $(document).on('click', '[name="submit_assign_categories_form"]', function() {
        hiwhatsapp.addRelatedCategories($(this));

        return false;
    });

    $(document).on('click', '[name="close_modal_button"], #cancel_related_products_modal', function() {
        $('#wap_modal_form').modal('hide');
        return false;
    });
});