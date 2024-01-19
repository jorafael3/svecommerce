<?php
/* Smarty version 3.1.47, created on 2024-01-14 17:50:51
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/_partials/cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a4654b2bc6f7_83966547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a057686b40b50ce27ea533c0ab9aa9b47c9bfb' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/_partials/cart-detailed.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_65a4654b2bc6f7_83966547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50848625265a4654b2af557_25937773', 'cart_detailed_product');
?>

<?php }
/* {block 'cart_detailed_product_line'} */
class Block_167381536965a4654b2b49c9_59580135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						<?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'continue_shopping'} */
class Block_132781760365a4654b2b9465_18872274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="empty-products">
				<p class="empty-title empty-title-cart">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cart is currently empty.','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
				
				</p>
				<div class="empty-text">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before proceed to checkout you must add some products to your shopping cart.','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

				</div>
				<p class="return-to-home">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">
						<i class="las la-reply"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

					</a>
				</p>
			</div>
	  	<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_detailed_product'} */
class Block_50848625265a4654b2af557_25937773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product' => 
  array (
    0 => 'Block_50848625265a4654b2af557_25937773',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_167381536965a4654b2b49c9_59580135',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_132781760365a4654b2b9465_18872274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
		<table class="shop_table shop_table_responsive" cellspacing="0">
			<thead>
				<tr>
					<th class="product-remove"></th>
					<th class="product-thumbnail"></th>
					<th class="product-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</th>
					<th class="product-c-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</th>
					<th class="product-quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</th>
					<th class="product-subtotal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<tr class="cart-item">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167381536965a4654b2b49c9_59580135', 'cart_detailed_product_line', $this->tplIndex);
?>

					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary hidden-md-down">
			<i class="las la-reply"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

		</a>
        <?php if (Module::isEnabled('nrtshoppingcart')) {?>
            <br class="hidden-lg-up"/>
            <a href="javascript:void(0)" class="btn btn-secondary hidden-lg-up btn-full" data-link-action="delete-all-cart">
                <i class="las la-times-circle"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty cart','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

            </a>
            <a href="javascript:void(0)" class="btn btn-secondary hidden-md-down pull-right" data-link-action="delete-all-cart">
                <i class="las la-times-circle"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty cart','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

            </a>
        <?php }?>
    <?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132781760365a4654b2b9465_18872274', 'continue_shopping', $this->tplIndex);
?>

    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_product'} */
}
