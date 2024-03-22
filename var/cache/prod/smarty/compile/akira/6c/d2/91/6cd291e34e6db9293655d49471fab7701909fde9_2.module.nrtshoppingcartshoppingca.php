<?php
/* Smarty version 3.1.47, created on 2024-03-22 17:30:01
  from 'module:nrtshoppingcartshoppingca' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fe06694a2e48_99062344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd291e34e6db9293655d49471fab7701909fde9' => 
    array (
      0 => 'module:nrtshoppingcartshoppingca',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fe06694a2e48_99062344 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn-canvas btn-canvas-cart" <?php if ($_smarty_tpl->tpl_vars['has_ajax']->value) {?>rel="nofollow" href="javascript:void(0)" data-toggle="canvas-widget" data-target="#canvas-mini-cart"<?php } else { ?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mini Cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>
"><span class="canvas-gr-icon"><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="las la-shopping-cart"></i><?php }?><span class="cart-nbr js-cart-nbr"><?php if ($_smarty_tpl->tpl_vars['is_ajax_cart']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?></span></span><span class="btn-canvas-text"><span class="amount js-cart-amount"><?php if ($_smarty_tpl->tpl_vars['is_ajax_cart']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['default_cart_amount']->value, ENT_QUOTES, 'UTF-8');
}?></span></span></a><?php }
}
