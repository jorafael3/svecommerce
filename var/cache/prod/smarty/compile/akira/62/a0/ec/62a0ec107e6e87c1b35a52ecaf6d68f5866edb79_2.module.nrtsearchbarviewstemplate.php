<?php
/* Smarty version 3.1.47, created on 2024-04-29 22:07:21
  from 'module:nrtsearchbarviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66306069cf24e2_69698812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a0ec107e6e87c1b35a52ecaf6d68f5866edb79' => 
    array (
      0 => 'module:nrtsearchbarviewstemplate',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66306069cf24e2_69698812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="btn-canvas btn-canvas-search" rel="nofollow" href="javascript:void(0)" data-toggle="modal" data-target="#search-popup" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
"><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="las la-search"></i><?php }?><span class="btn-canvas-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
</span></a><?php }
}
