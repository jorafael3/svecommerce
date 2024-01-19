<?php
/* Smarty version 3.1.47, created on 2024-01-14 17:49:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a464ff527295_11738747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e5a1614439a5e4e3a87b546a0725db4d38755e5' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a464ff527295_11738747 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayButtonCompare','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayButtonWishList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

	<?php if ((isset($_smarty_tpl->tpl_vars['has_sizeguide']->value))) {?>
		<a class="btn-size-chart btn-action" data-toggle="modal" data-target="#moda_sizechart" href="#" rel="nofollow">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

		</a>
	<?php }?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div><?php }
}
