<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:10
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6482284633bec6_72824876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2308bd0c30ade0907e29678d4c8c2380c23c4cca' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1685021481,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/mobile-megamenu-ul.tpl' => 1,
  ),
),false)) {
function content_6482284633bec6_72824876 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtmegamenu/views/templates/hook/mobile-megamenu.tpl -->
<div id="canvas-menu-mobile" class="canvas-widget canvas-left">
	<div class="canvas-widget-top">
		<h3 class="title-canvas-widget" data-dismiss="canvas-widget"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Megamenu','mod'=>'nrtmegamenu'),$_smarty_tpl ) );?>
</h3>
	</div>
	<div class="canvas-widget-content">
		<div class="wrapper-scroll">
			<div class="wrapper-scroll-content">
				<div class="wrapper-menu-mobile">
					<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/mobile-megamenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMenuMobileCanVas'),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFollowButtons'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
</div><!-- end /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtmegamenu/views/templates/hook/mobile-megamenu.tpl --><?php }
}
