<?php
/* Smarty version 3.1.47, created on 2024-04-29 21:35:39
  from 'module:nrtshoppingcartmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_663058fb122af6_32391870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e4ad659787d70981b5f779b2bc20c67ea83d547' => 
    array (
      0 => 'module:nrtshoppingcartmodal.tpl',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663058fb122af6_32391870 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', 'cart_default');?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']) {?>
		<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']);?>
	<?php }?>	
    <h4><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></h4>
    <a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
'>
		<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
 loaded">
			<?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
				<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['default_image']);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
			<?php }?>
			<img
				class="img-loader loaded" 
				src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
				alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
				title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" 
				width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"
				height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"
			>
		</div>
        <span class='qtt-ajax'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    </a>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have added product to shopping cart.','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

    <div class='group_button'>
        <a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"View Cart",'mod'=>"nrtshoppingcart"),$_smarty_tpl ) );?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>
</a>
        <a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Checkout",'mod'=>"nrtshoppingcart"),$_smarty_tpl ) );?>
'>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

        </a>
    </div>
<?php } else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are not enough products in stock. You cannot proceed with your order until the quantity is adjusted.','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

	<a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
' class='goto_page' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"View Cart",'mod'=>"nrtshoppingcart"),$_smarty_tpl ) );?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>
</a>
	<a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
' class='goto_page' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Checkout",'mod'=>"nrtshoppingcart"),$_smarty_tpl ) );?>
'>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

	</a>
<?php }
}
}
