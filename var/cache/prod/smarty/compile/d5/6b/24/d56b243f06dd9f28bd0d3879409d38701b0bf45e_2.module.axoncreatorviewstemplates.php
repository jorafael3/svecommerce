<?php
/* Smarty version 3.1.47, created on 2024-03-28 14:38:51
  from 'module:axoncreatorviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6605c74bef1471_59436576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56b243f06dd9f28bd0d3879409d38701b0bf45e' => 
    array (
      0 => 'module:axoncreatorviewstemplates',
      1 => 1711123670,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605c74bef1471_59436576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="btn-canvas btn-canvas-account" href="javascript:void(0)" data-toggle="canvas-widget" data-target="#canvas-my-account" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','mod'=>'axoncreator'),$_smarty_tpl ) );?>
"><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="las la-user"></i><?php }?><span class="btn-canvas-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','mod'=>'axoncreator'),$_smarty_tpl ) );?>
</span></a><?php }
}
