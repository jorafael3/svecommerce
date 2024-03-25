<?php
/* Smarty version 3.1.47, created on 2024-03-25 18:01:03
  from 'module:salvacerofunctionsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6602022f8497e1_66435398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c7cd9dd74deda7fc6090e05df7445b9b3a41fd' => 
    array (
      0 => 'module:salvacerofunctionsviewste',
      1 => 1711123677,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602022f8497e1_66435398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-6">
    <div class="card customer-private-note-card">
        <h3 class="card-header">
            <i class="material-icons">done</i>
            Añadir un monto de credito
        </h3>
        <div class="card-body clearfix">
            <div class="alert alert-info" role="alert">
                <p class="alert-text">
                    Este monto sera el disponible en las compras por el cliente.
                </p>
            </div>
                        <input type="hidden" id="id_customer" value="<?php echo $_smarty_tpl->tpl_vars['id_customer']->value;?>
" />
            <div class="col-xl-4 col-lg-5">
                <label class="form-control-label">Monto del credito</label>

                <div class="input-group money-type">
                    <input type="text" id="amount_credict" name="amount_credict" data-display-price-precision="6"
                        class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
">
                    <div class="input-group-append">
                        <span class="input-group-text"> US$</span>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary float-right mt-3" id="amount_credict_button">
                Guardar
            </button>
        </div>
    </div>
</div><?php }
}
