<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:40:27
=======
/* Smarty version 3.1.47, created on 2024-04-01 09:58:31
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f40db30d5e6_17195771',
=======
  'unifunc' => 'content_660acb9726fe13_42493339',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7fb91de17e004f360a68127b2c787926cb81ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-detailed.tpl',
<<<<<<< HEAD
      1 => 1714372429,
=======
      1 => 1711123680,
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
    'file:checkout/_partials/cart-detailed-product-line_credit.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662f40db30d5e6_17195771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1222527170662f40db305541_99968739', 'cart_detailed_product');
=======
function content_660acb9726fe13_42493339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1657548239660acb972683c6_71821293', 'cart_detailed_product');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
/* {block 'cart_detailed_product_line'} */
<<<<<<< HEAD
class Block_1051136777662f40db308f79_81893918 extends Smarty_Internal_Block
=======
class Block_1385786561660acb9726c246_95773331 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						<?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'cart_detailed_product_line'} */
class Block_987894751662f40db30a060_76751126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line_credit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						<?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'continue_shopping'} */
<<<<<<< HEAD
class Block_68383100662f40db30bf72_48242571 extends Smarty_Internal_Block
=======
class Block_778943500660acb9726e569_60816098 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1222527170662f40db305541_99968739 extends Smarty_Internal_Block
=======
class Block_1657548239660acb972683c6_71821293 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_detailed_product' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1222527170662f40db305541_99968739',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_1051136777662f40db308f79_81893918',
    1 => 'Block_987894751662f40db30a060_76751126',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_68383100662f40db30bf72_48242571',
=======
    0 => 'Block_1657548239660acb972683c6_71821293',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_1385786561660acb9726c246_95773331',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_778943500660acb9726e569_60816098',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
			<tbody class="CART_CHECK_CONTADO">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<tr class="cart-item">
						<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1051136777662f40db308f79_81893918', 'cart_detailed_product_line', $this->tplIndex);
?>

					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
			<tbody class="CART_CHECK_CREDIT">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<tr class="cart-item">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_987894751662f40db30a060_76751126', 'cart_detailed_product_line', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385786561660acb9726c246_95773331', 'cart_detailed_product_line', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68383100662f40db30bf72_48242571', 'continue_shopping', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778943500660acb9726e569_60816098', 'continue_shopping', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_product'} */
}
