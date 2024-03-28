<?php
/* Smarty version 3.1.47, created on 2024-03-28 10:05:41
  from 'module:salvacerofunctionsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66058745329d95_16860444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c7cd9dd74deda7fc6090e05df7445b9b3a41fd' => 
    array (
      0 => 'module:salvacerofunctionsviewste',
      1 => 1711463268,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66058745329d95_16860444 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
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

            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <label class="form-control-label">Monto total del credito</label>
                    <div class="input-group money-type">
                        <input type="text" id="amount_credict" name="amount_credict_inicial" data-display-price-precision="6"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['amount_inicial']->value;?>
">
                        <div class="input-group-append">
                            <span class="input-group-text"> US$</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <label class="form-control-label">Total credito consumido</label>
                    <div class="input-group money-type">
                        <input readonly type="text" id="amount_credict_2" name="amount_credict" data-display-price-precision="6"
                            class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
">
                        <div class="input-group-append">
                            <span class="input-group-text"> US$</span>
                        </div>
                    </div>
                </div>

            </div>
            <button class="btn btn-danger float-right mt-3" id="amount_credict_button_delete">
                Borrar credito
            </button>
            <button class="btn btn-primary float-right mt-3" id="amount_credict_button">
                Guardar
            </button>
        </div>
    </div>
</div><?php }
}
