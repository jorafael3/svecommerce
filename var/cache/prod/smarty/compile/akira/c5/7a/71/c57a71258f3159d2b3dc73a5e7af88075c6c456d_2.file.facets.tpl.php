<?php
/* Smarty version 3.1.47, created on 2024-04-30 12:19:23
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\canvas\facets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6631281b084ae1_18138912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57a71258f3159d2b3dc73a5e7af88075c6c456d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\canvas\\facets.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6631281b084ae1_18138912 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="canvas-facets-search" class="canvas-widget canvas-left">
	<div class="canvas-widget-top">
		<h3 class="title-canvas-widget" data-dismiss="canvas-widget"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Your Selection','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</h3>
	</div>
	<div class="canvas-widget-content">
		<div class="wrapper-scroll">
			<div class="wrapper-scroll-content">
				<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'] == 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

				<?php } else { ?>
					<div id="_mobile_facets_search"></div>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }
}
