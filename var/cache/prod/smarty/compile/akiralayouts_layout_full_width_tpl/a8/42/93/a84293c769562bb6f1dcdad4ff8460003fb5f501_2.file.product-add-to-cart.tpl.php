<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:02:32
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa8f08f3ac06_36205989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a84293c769562bb6f1dcdad4ff8460003fb5f501' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa8f08f3ac06_36205989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart js-product-add-to-cart">
  	<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17582184865aa8f08f2d4e8_50328697', 'product_minimal_quantity');
?>

	<?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28037917165aa8f08f2f813_19042082', 'product_quantity');
?>

</div>
<?php }
/* {block 'product_minimal_quantity'} */
class Block_17582184865aa8f08f2d4e8_50328697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_17582184865aa8f08f2d4e8_50328697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <p class="product-minimal-quantity js-product-minimal-quantity">
			<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
			  <span>
			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

			  </span>
			<?php }?>
		  </p>
		<?php
}
}
/* {/block 'product_minimal_quantity'} */
/* {block 'product_availability'} */
class Block_100485127565aa8f08f30416_03324802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div id="product-availability" class="js-product-availability">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
					<div class="label<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?> type-available<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?> type-last-remaining-items<?php } else { ?> type-out-stock<?php }?>">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
						<span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>

						</span>
						<?php }?>
					</div>
				<?php }?>
			  </div>	  
			<?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_28037917165aa8f08f2f813_19042082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_28037917165aa8f08f2f813_19042082',
  ),
  'product_availability' => 
  array (
    0 => 'Block_100485127565aa8f08f30416_03324802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
		<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>  
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100485127565aa8f08f30416_03324802', 'product_availability', $this->tplIndex);
?>

		<?php }?>  
		<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>   
			<div class="qty">
				<div class="input-group bootstrap-touchspin">	
                    <input
                        type="number"
                        name="qty"
                        id="quantity_wanted"
                        inputmode="numeric"
                        pattern="[0-9]*"
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_wanted']) {?>
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
                        min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                        value="1"
                        min="1"
                        <?php }?>
                        class="input-group"
                        aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                    >
					<span class="input-group-btn-vertical">
						<button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
							<i class="material-icons touchspin-up"></i>
						</button>
						<button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">	  
							<i class="material-icons touchspin-down"></i>
						</button>
					</span>
				</div>
			</div>
			<div class="add">
			  <button class="add-to-cart btn btn-primary" data-button-action="add-to-cart" type="submit"<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled<?php }?>>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  </button>
              <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_show_buy_now'])) && $_smarty_tpl->tpl_vars['opThemect']->value['product_show_buy_now']) {?>
                <button class="add-to-cart btn btn-primary js-buy-now" data-button-action="add-to-cart" type="submit"<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled<?php }?>>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buy Now','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

                </button>
              <?php }?>
			</div>
		  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

		<?php }?>  
      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
}
