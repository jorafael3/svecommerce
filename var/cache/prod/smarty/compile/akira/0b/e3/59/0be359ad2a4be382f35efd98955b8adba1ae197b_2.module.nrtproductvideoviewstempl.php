<?php
/* Smarty version 3.1.47, created on 2024-03-24 12:58:47
  from 'module:nrtproductvideoviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660069d791e299_31919615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0be359ad2a4be382f35efd98955b8adba1ae197b' => 
    array (
      0 => 'module:nrtproductvideoviewstempl',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660069d791e299_31919615 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productvideos']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productvideos']->value, 'productvideo');
$_smarty_tpl->tpl_vars['productvideo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productvideo']->value) {
$_smarty_tpl->tpl_vars['productvideo']->do_else = false;
?>
		<div class="btn-additional">
			<a class="btn-additional-video js-video-viewer" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productvideo']->value['url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Watch video','mod'=>'nrtproductvideo'),$_smarty_tpl ) );?>
</span>
			</a>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
