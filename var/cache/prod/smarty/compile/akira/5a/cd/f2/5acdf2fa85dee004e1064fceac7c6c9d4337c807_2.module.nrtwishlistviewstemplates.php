<?php
/* Smarty version 3.1.47, created on 2024-03-31 19:59:00
  from 'module:nrtwishlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a06d4081319_16536345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5acdf2fa85dee004e1064fceac7c6c9d4337c807' => 
    array (
      0 => 'module:nrtwishlistviewstemplates',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a06d4081319_16536345 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['id_product']->value))) {?><a class="btn-action btn-wishlist js-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtwishlist','controller'=>'view'),$_smarty_tpl ) );?>
" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</a><?php }
}
}
