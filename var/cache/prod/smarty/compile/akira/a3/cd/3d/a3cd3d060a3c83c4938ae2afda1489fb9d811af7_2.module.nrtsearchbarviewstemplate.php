<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:54:34
  from 'module:nrtsearchbarviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660200aa506f25_62053738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cd3d060a3c83c4938ae2afda1489fb9d811af7' => 
    array (
      0 => 'module:nrtsearchbarviewstemplate',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtsearchbar/views/templates/hook/categories.tpl' => 1,
  ),
),false)) {
function content_660200aa506f25_62053738 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search-popup" class="modal" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog search-wrapper popup-wrapper" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="modal-body">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for products','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
</h3>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start typing to see products you are looking for.','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
</p>
			<hr/>
			<form class="search-form has-ajax-search <?php if ($_smarty_tpl->tpl_vars['show_cat']->value) {?> has-categories<?php }?>" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="order" value="product.position.desc" />
				<input type="text" class="query form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your keyword ...','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
" value="" name="s" required />
				<?php if ($_smarty_tpl->tpl_vars['show_cat']->value) {?>
					<?php $_smarty_tpl->_subTemplateRender("module:nrtsearchbar/views/templates/hook/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search_categories'=>$_smarty_tpl->tpl_vars['categories']->value), 0, false);
?>
				<?php } else { ?>
					<input name="c" value="0" type="hidden">
				<?php }?>
				<button type="submit" class="search-submit">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>

				</button>
			</form>
			<div class="search-results"></div>
		</div>
	</div>
</div></div>
<?php }
}
