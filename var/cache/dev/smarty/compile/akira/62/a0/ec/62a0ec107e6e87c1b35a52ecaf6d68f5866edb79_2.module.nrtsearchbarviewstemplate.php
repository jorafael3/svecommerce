<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:10
  from 'module:nrtsearchbarviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64822846066726_44781227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a0ec107e6e87c1b35a52ecaf6d68f5866edb79' => 
    array (
      0 => 'module:nrtsearchbarviewstemplate',
      1 => 1685021483,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64822846066726_44781227 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtsearchbar/views/templates/hook/btn_search.tpl -->
<a class="btn-canvas btn-canvas-search" rel="nofollow" href="javascript:void(0)" data-toggle="modal" data-target="#search-popup" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
"><?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
} else { ?><i class="las la-search"></i><?php }?><span class="btn-canvas-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
</span></a><!-- end /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtsearchbar/views/templates/hook/btn_search.tpl --><?php }
}
