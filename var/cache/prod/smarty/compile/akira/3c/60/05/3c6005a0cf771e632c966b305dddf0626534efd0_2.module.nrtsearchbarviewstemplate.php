<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:14
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:58
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'module:nrtsearchbarviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410a4be7e2_75242232',
=======
  'unifunc' => 'content_660aee26dd1e46_93251139',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c6005a0cf771e632c966b305dddf0626534efd0' => 
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
<<<<<<< HEAD
function content_662f410a4be7e2_75242232 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee26dd1e46_93251139 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?><div class="search-widget search-wrapper">
	<form class="search-form has-ajax-search <?php if ($_smarty_tpl->tpl_vars['show_cat']->value) {?> has-categories<?php }?>" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<div class="wrapper-form">
			<input type="hidden" name="order" value="product.position.desc" />
			<input type="text" class="query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your keyword ...','mod'=>'nrtsearchbar'),$_smarty_tpl ) );?>
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
		</div>
	</form>
	<div class="search-results-wrapper"><div class="wrapper-scroll"><div class="search-results wrapper-scroll-content"></div></div></div>
</div><?php }
}
