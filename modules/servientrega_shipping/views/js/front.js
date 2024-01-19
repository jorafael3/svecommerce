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
jQuery(document).ready(function($) {
    $('.select_servientrega_data').select2({
        placeholder: 'Seleccione la ciudad de origen',

    });

    // jQuery('#state_servientrega').val('<?php echo $state;?>');
    // jQuery('#state_servientrega').trigger('change');
    var dataAjax = {
        citys: $('#select2-servi'),
        status: false,
        botton: document.getElementsByName('confirmDeliveryOption'),
        start: function() {
            // if (this.citys.length > 0) {
            //     dataAjax.setDataCityServi();
            // }

            this.citys.on('change', function() {
                dataAjax.setDataCityServi();
            })

            $('#js-delivery :radio').on("change", function() {
                if (this.value.slice(0, -1) == idServiCarrier) {
                    if (!dataAjax.status) {
                        dataAjax.botton[0].setAttribute("disabled", "");
                    } else {
                        setTimeout(() => dataAjax.botton[0].removeAttribute('disabled'), 1000);

                    }
                } else {
                    setTimeout(() => dataAjax.botton[0].removeAttribute('disabled'), 1000);

                }

            });

            $.each($('#js-delivery :radio'), (key, value) => {
                if (value.checked) {
                    if (value.value.slice(0, -1) != idServiCarrier) {
                        setTimeout(() => dataAjax.botton[0].removeAttribute('disabled'), 1000);

                    } else {
                        if (!dataAjax.status) {
                            dataAjax.botton[0].setAttribute("disabled", "");
                        }
                    }
                }
            });
        },
        setDataCityServi: function() {
            var url = "index.php?fc=module&module=servientrega_shipping&controller=ajax";
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    cityID: this.citys.val(),
                },
                success: function(rest) {
                    console.log(rest);
                    dataAjax.status = true;
                    setTimeout(() => dataAjax.botton[0].removeAttribute('disabled'), 1000);
                },
                error: function(e) {
                    console.log(e);
                },
            });
        },
    };
    dataAjax.start();

});