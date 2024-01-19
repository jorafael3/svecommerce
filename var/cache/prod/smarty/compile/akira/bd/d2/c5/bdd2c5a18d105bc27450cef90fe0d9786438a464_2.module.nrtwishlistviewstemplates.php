<?php
/* Smarty version 3.1.47, created on 2024-01-11 23:25:42
  from 'module:nrtwishlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a0bf462c4ef6_38607415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd2c5a18d105bc27450cef90fe0d9786438a464' => 
    array (
      0 => 'module:nrtwishlistviewstemplates',
      1 => 1685021481,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a0bf462c4ef6_38607415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="my-wisht-list col-lg-3 col-md-4 col-sm-6 col-xs-6" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtwishlist','controller'=>'view'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
">
	<span class="link-item">
		<i class="lar la-heart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>

	</span>
</a><?php }
}
