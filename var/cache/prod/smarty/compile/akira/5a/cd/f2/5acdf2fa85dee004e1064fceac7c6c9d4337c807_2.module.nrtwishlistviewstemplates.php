<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:22:32
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:18:59
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'module:nrtwishlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3ca86de184_42970982',
=======
  'unifunc' => 'content_660ade736066b7_00495788',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5acdf2fa85dee004e1064fceac7c6c9d4337c807' => 
    array (
      0 => 'module:nrtwishlistviewstemplates',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f3ca86de184_42970982 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660ade736066b7_00495788 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
if ((isset($_smarty_tpl->tpl_vars['id_product']->value))) {?><a class="btn-action btn-wishlist js-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtwishlist','controller'=>'view'),$_smarty_tpl ) );?>
" data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</a><?php }
}
}
