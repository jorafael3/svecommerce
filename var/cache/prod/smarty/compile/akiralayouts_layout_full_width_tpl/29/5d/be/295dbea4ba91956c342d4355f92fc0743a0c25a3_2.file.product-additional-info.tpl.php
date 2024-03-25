<?php
/* Smarty version 3.1.47, created on 2024-03-24 12:58:47
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660069d7ba8f22_47003422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '295dbea4ba91956c342d4355f92fc0743a0c25a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660069d7ba8f22_47003422 (Smarty_Internal_Template $_smarty_tpl) {
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
