<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:07
  from 'module:nrtwishlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda7cd6552_62200006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2025345b51fe7eb64b48ef949981aed8a124b4' => 
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
function content_65fddda7cd6552_62200006 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn-canvas btn-canvas-wishlist sb-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtwishlist','controller'=>'view'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
"><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="lar la-heart"></i><?php }?><span class="btn-canvas-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</span><span class="js-wishlist-nb wishlist-nbr">0</span></a><?php }
}
