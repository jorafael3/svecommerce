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
    $(".custom_switch_salvacero").click(function(e) {
        let boton = $(e.target);
        console.log(boton.data().id);
        $.ajax({
            url: ps_customer_ajax,
            type: 'post',
            dataType: 'json',
            cache: false,
            data: {
                action: 'setStatusCustomer',
                ajax: true,
                id: boton.data().id
            },
            success: function(result) {
                console.log(result);
            },
            error: function(xhr) {
                console.log(xhr);
                alert(xhr.statusText);
            }
        });

    });


    $("#amount_credict_button").click(function(e) {
        let value = $("#amount_credict").val();
        let id_customer = $("#id_customer").val();
        if (typeof value !== 'undefined' && value != "") {

            $.ajax({
                url: ps_customer_ajax,
                type: 'post',
                dataType: 'json',
                cache: false,
                data: {
                    action: 'setAmountCustomer',
                    ajax: true,
                    val: value,
                    id_customer: id_customer
                },
                success: function(result) {
                    console.log(result);

                    if (result.success) {
                        alert("valor creado correctamente");
                    }
                },
                error: function(xhr) {
                    console.log(xhr);
                    alert(xhr.statusText);
                }
            });
        }
    });

});