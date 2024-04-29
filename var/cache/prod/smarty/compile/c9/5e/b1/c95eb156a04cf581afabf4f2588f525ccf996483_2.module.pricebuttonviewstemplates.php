<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:22:31
  from 'module:pricebuttonviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f3ca7669f18_24458399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95eb156a04cf581afabf4f2588f525ccf996483' => 
    array (
      0 => 'module:pricebuttonviewstemplates',
      1 => 1714370566,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f3ca7669f18_24458399 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" id="INDEX_PR_C_BUTTONS" >
    <div class="col-12 INDEX_PR_C_BUTTONS_CONTADO" id="">
        <button onclick="changePriceCustom(this, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
, false)"
            class="add-to-cart price-custom btn btn-primary btn-custom-pry">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contado'),$_smarty_tpl ) );?>

        </button>
    </div>
    <div class="col-6 INDEX_PR_C_BUTTONS_CREDITO" id="">
        <button onclick="changePriceCustom(this, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
, true)"
            class="add-to-cart price-custom btn btn-secondary btn-custom-sec" id="secondary-price">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Crédito'),$_smarty_tpl ) );?>

        </button>
    </div>

</div>
<div class="content-prices">
    <div class="content-price-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 INDEX_PR_C_PRICE_CONTADO">
        <label class="label-price">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

        </label>
    </div>

    <div class="content-cuotas-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 INDEX_PR_C_PRICE_CREDITO">
        <span>12 cuotas desde</span>
        <br>
        <label class="label-price">
            <?php echo htmlspecialchars(Tools::displayPrice(($_smarty_tpl->tpl_vars['price']->value*1.16)/12), ENT_QUOTES, 'UTF-8');?>

        </label>
    </div>
</div><?php }
}
