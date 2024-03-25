<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:39:23
  from 'module:datafastviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66008f7ba17662_68640508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3063ab3b380166b87d5b4a2e8d9a020c271a0d94' => 
    array (
      0 => 'module:datafastviewstemplatesfro',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66008f7ba17662_68640508 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .wpwl-registration {
        width: 100% !important;
    }

    select {
        background-image: initial !important;
        appearance: none !important;

    }

    .wpwl-wrapper-brand {
        padding-right: 15px;
    }

    .wpwl-form-card {
        background-color: black !important;
    }
</style>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
<?php echo '</script'; ?>
>

<div class="modal fade" style="background-color: rgba(0, 0, 0, 0.8);" id="dataFormDatafast" tabindex="-1" role="dialog"
    aria-labelledby="dataFormDatafast" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="background: transparent;">
        <div class="modal-content" style="background: border-box;">
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="payment-form-datafast" class="paymentWidgets"
                    data-brands="VISA MASTER AMEX DINERS DISCOVER">
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="
                position: absolute;
                top: 0;
                right: 10%;
                font-size: 60px;
                color: #FFF;
                opacity: 0.9;
            ">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    var wpwlOptions = {
        onReady: function() {
            <?php if ($_smarty_tpl->tpl_vars['tasas']->value) {?>
                var banks =
                    '<div class="wpwl-label wpwl-label-custom" >Escoge tu Banco:</div>' +
                    '<div class="wpwl-wrapper wpwl-wrapper-custom">' +
                    '<select id="bank" name="" style="width: 70%; border-radius: .3rem; padding: 5px; appearance: none;  margin-bottom: 4px;" onchange=getNewValBanck(this.value);>' +
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasas']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        '<option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl ) );?>
</option>'+
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    '</select>' +
                    '</div>';
                $('form.wpwl-form-card').find('.wpwl-button').before(banks);
                var frecuente =
                    '<div class="wpwl-label wpwl-label-custom">Escoge tu diferido:</div>' +
                    '<div class="wpwl-wrapper wpwl-wrapper-custom" >' +
                    '<select id="interes" name="customParameters[SHOPPER_TIPOCREDITO]"  onchange=getNewVal(this.options[this.selectedIndex]); style="width: 70%; border-radius: .3rem; padding: 5px; appearance: none;  margin-bottom: 4px;""></select></div>';

                jQuery('form.wpwl-form-card').find('.wpwl-button').before(frecuente);
                var numberOfInstallmentsHtml =
                    '<div id="plazo" class="wpwl-label wpwl-label-custom" >Escoge el plazo:</div>' +
                    '<div class="wpwl-wrapper wpwl-wrapper-custom" >' +
                    '<select id="diferido" name="recurring.numberOfInstallments" style="width: 70%; border-radius: .3rem; padding: 5px; appearance: none;  margin-bottom: 4px;"">' +
                    '</select></div>';
                jQuery('form.wpwl-form-card').find('.wpwl-button').before(numberOfInstallmentsHtml);
            <?php }?>



            <?php if ($_smarty_tpl->tpl_vars['subscription']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['hasSubProd']->value) {?>
                    var createRegistrationHtml =
                        '<div class="customInput" style="display: none;"><input checked type="checkbox" name="createRegistration"/></div>';
                    $('form.wpwl-form-card').find('.wpwl-button').before(createRegistrationHtml);
                <?php } elseif ($_smarty_tpl->tpl_vars['save_cc']->value) {?>
                    var createRegistrationHtml =
                        '<div class="customLabel" style="padding-top: 20px;">Desea guardar de manera segura sus datos?</div>' +
                        '<div class="customInput"><input type="checkbox" name="createRegistration"/></div>';
                    $('form.wpwl-form-card').find('.wpwl-button').before(createRegistrationHtml);
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['save_cc']->value) {?>
                var createRegistrationHtml =
                    '<div class="customLabel" style="padding-top: 20px;">Desea guardar de manera segura sus datos?</div>' +
                    '<div class="customInput"><input type="checkbox" name="createRegistration"/></div>';
                $('form.wpwl-form-card').find('.wpwl-button').before(createRegistrationHtml);
            <?php }?>
            var dfast =
                '<br/><br/><img src="https://www.datafast.com.ec/images/verified.png" style="display:block;margin:0 auto; width:100%;">';

            jQuery("form.wpwl-form-card").find(".wpwl-button").before(dfast);

        },
        registrations: {
            requiereCvv: true,
            hideInitialPaymentForms: true
        },
        style: "card",
        locale: "es",
        labels: { cvv: "CVV", cardHolder: "Nombre (Igual que en la tarjeta)" },
        onBeforeSubmitCard: function() {
            if (jQuery(".wpwl-control-cardHolder").val() === "") {
                jQuery(".wpwl-control-cardHolder").addClass("wpwl-has-error");
                jQuery(".wpwl-control-cardHolder").after(
                    "<div class='wpwl-hint-cardHolderError'>Campo Requerido</div>");
                jQuery(".wpwl-button-pay").addClass("wpwl-button-error").attr("disabled",
                    "disabled");
                return false;
            } else {
                return true;
            }
        }
    }


    let diferidos = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tasas']->value ));?>
;

    function getNewValBanck(banck) {
        let active = true;
        jQuery("#interes").empty();
        jQuery("#diferido").empty();

        if (diferidos[banck].hasOwnProperty('sin_interes')) {
            jQuery("#interes").append('<option value="00">Corriente</option>');
            if (active) {
                console.log("aqui");
                jQuery("#diferido").append('<option  value="0">1 Mes</option>');
                active = false;
            }
        }


        if (diferidos[banck].hasOwnProperty('diferidos_cc')) {
            jQuery("#interes").append('<option data-type="diferidos_cc" value="02">Diferido con Interés</option>');
            if (active) {
                console.log("aqui");

                diferidos[banck].diferidos_sc.forEach((dia) => {
                    jQuery("#diferido").append('<option  value="' + dia + '">' + dia +
                        ' Meses</option>');
                })
                active = false;
            }
        }

        if (diferidos[banck].hasOwnProperty('diferidos_sc')) {
            jQuery("#interes").append(
                '<option data-type="diferidos_sc" value="03">Diferido sin Interés</option>');
            if (active) {
                diferidos[banck].diferidos_cc.forEach((dia) => {
                    jQuery("#diferido").append('<option  value="' + dia + '">' + dia +
                        ' Meses</option>');
                })
                active = false;
            }
        }


        if (diferidos[banck].hasOwnProperty('diferidos_cc_cmg')) {
            jQuery("#interes").append(
                '<option data-type="diferidos_cc_cmg" value="07">Diferido con Interés + Meses de Gracia</option>');
            if (active) {
                diferidos[banck].diferidos_cc.forEach((dia) => {
                    jQuery("#diferido").append('<option  value="' + dia + '">' + dia +
                        ' Meses</option>');
                })
                active = false;
            }
        }

        if (diferidos[banck].hasOwnProperty('diferidos_sc_cmg')) {
            jQuery("#interes").append(
                '<option  data-type="diferidos_sc_cmg" value="09">Diferido sin Interés + Meses de Gracia</option>');
            if (active) {
                diferidos[banck].diferidos_cc.forEach((dia) => {
                    jQuery("#diferido").append('<option  value="' + dia + '">' + dia +
                        ' Meses</option>');
                })
                active = false;
            }
        }
    }

    function getNewVal(data) {
        if (data.value == '00') {
            jQuery("#diferido").empty();
            jQuery("#diferido").append('<option value="0">1 Mes</option>');

        } else {
            jQuery("#diferido").empty();
            let banck = jQuery("#bank").val();
            let type = data.dataset.type;
            console.log(diferidos[banck]);
            console.log(type);
            diferidos[banck][type].forEach((dia) => {
                let data = '<option value="' + dia + '">' + dia + ' Meses</option>';
                jQuery("#diferido").append(data);
            })
        }
    }
<?php echo '</script'; ?>
><?php }
}
