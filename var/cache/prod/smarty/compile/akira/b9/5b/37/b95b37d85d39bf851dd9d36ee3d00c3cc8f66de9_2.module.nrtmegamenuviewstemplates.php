<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:41:14
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f410a6a0a24_64240113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95b37d85d39bf851dd9d36ee3d00c3cc8f66de9' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/horizontal-megamenu-ul.tpl' => 1,
  ),
),false)) {
function content_662f410a6a0a24_64240113 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['nrtmenu']->value)) && is_array($_smarty_tpl->tpl_vars['nrtmenu']->value) && count($_smarty_tpl->tpl_vars['nrtmenu']->value)) {?>
	<div class="wrapper-menu-horizontal">
		<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/horizontal-megamenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
<?php }
}
}
