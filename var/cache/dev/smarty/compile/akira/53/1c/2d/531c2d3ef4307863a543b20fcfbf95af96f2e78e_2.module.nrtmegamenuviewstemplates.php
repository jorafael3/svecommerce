<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:10
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64822846050878_81770624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531c2d3ef4307863a543b20fcfbf95af96f2e78e' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1685021481,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64822846050878_81770624 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtmegamenu/views/templates/hook/button-canvas.tpl --><a class="btn-canvas btn-canvas-menu" href="javascript:void(0)" data-toggle="canvas-widget" data-target="#canvas-menu-mobile" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'nrtmegamenu'),$_smarty_tpl ) );?>
">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="las la-bars"></i><?php }?>
	<span class="btn-canvas-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'nrtmegamenu'),$_smarty_tpl ) );?>
</span>
</a><!-- end /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtmegamenu/views/templates/hook/button-canvas.tpl --><?php }
}