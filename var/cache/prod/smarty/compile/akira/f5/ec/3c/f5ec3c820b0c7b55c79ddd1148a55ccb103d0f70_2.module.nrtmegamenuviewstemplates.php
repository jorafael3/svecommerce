<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:34:24
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f20bfa0f2_26795026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ec3c820b0c7b55c79ddd1148a55ccb103d0f70' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/column-megamenu-ul.tpl' => 1,
  ),
),false)) {
function content_660a0f20bfa0f2_26795026 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['nrtmenu']->value)) && is_array($_smarty_tpl->tpl_vars['nrtmenu']->value) && count($_smarty_tpl->tpl_vars['nrtmenu']->value)) {?>
<!-- Menu -->
<div class="widget wrapper-menu-column">
	<div class="widget-content">
		<div class="widget-title h3"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'nrtmegamenu'),$_smarty_tpl ) );?>
</span></div>
		<div class="block_content">
			<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/column-megamenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>
</div>
<!--/ Menu -->
<?php }
}
}
