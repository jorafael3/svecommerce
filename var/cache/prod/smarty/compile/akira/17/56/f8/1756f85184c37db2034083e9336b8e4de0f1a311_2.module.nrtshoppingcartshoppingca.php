<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:41:15
  from 'module:nrtshoppingcartshoppingca' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f410b8bd474_62428847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1756f85184c37db2034083e9336b8e4de0f1a311' => 
    array (
      0 => 'module:nrtshoppingcartshoppingca',
      1 => 1714369400,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f410b8bd474_62428847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('imageType', 'cart_default');?>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']);
}?>	

<div id="canvas-mini-cart" class="canvas-widget canvas-right">
	<div class="canvas-widget-top">
		<h3 class="title-canvas-widget" data-dismiss="canvas-widget">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

			<span class="totals-nb js-cart-canvans-title">
				<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
					<span class="nbr">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

					</span>
					<span class="text">
						<?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] < 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );
}?>
					</span>
				<?php }?>	
			</span>
		</h3>
	</div>
	<div class="widget_shopping_cart js-shopping-cart">
		<div class="widget_shopping_cart_content">
			<div class="wrapper-scroll">
				<div class="wrapper-scroll-content">
					<div class="block-shopping-cart">
						<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
								<div class="cart-item-product cart-item-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
 row">
									<div class="cart-item-product-left col col-xs-3">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
										  <div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
											<?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
												<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['default_image']);?>
											<?php } else { ?>
												<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
											<?php }?>
											<img
												class="img-loader lazy-load" 
												data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
												src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" 
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
										</a>
										<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
											<a
												class                       = "btn-primary remove-from-cart"
												rel                         = "nofollow"
												href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
												data-link-action            = "delete-from-cart"
												data-id-product             = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
												data-id-product-attribute   = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
												data-id-customization   	  = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
">
												<i class="las la-times"></i>
											</a>
										<?php }?>
									</div>
									<div class="cart-item-product-right col col-xs-9">
										<div class="row">
											<div class="product-info col col-xs-7">
												<div class="product-name">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

													</a>
												</div>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
													<div class="product-line-info-top">
														<span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
: </span>
														<span class="value-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
													</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
											<div class="price-qty col col-xs-5">
												<div class="CART_PRICE_CONTADO">
													<div class="price">
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

													</div>
												</div>
												<div class="CART_PRICE_CREDIT">
													<div class="price">
														<?php $_smarty_tpl->_assignInScope('price_without_currency', str_replace("$",'',$_smarty_tpl->tpl_vars['product']->value['price']));?>
														<?php $_smarty_tpl->_assignInScope('price_with_tax', ($_smarty_tpl->tpl_vars['price_without_currency']->value*1.16));?>
														<?php $_smarty_tpl->_assignInScope('price_per_month', ($_smarty_tpl->tpl_vars['price_with_tax']->value/12));?>
														<?php echo htmlspecialchars(Tools::displayPrice(($_smarty_tpl->tpl_vars['price_per_month']->value)), ENT_QUOTES, 'UTF-8');?>

													</div>
												</div>
												<div class="qty">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>
:</span>
													<input
														class="js-cart-line-product-quantity CART_PRODUCT_CANT"
														data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
														data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
														data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
														data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
														data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
														data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" 
														type="number"
														value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
														min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
													/>
													<i class="las la-sync"></i>
												</div>	
											</div>
										</div>
									</div>
									<?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
										<div class="customizations col col-xs-12">
											<ul>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
													<li>
														<ul>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
																<li>
																	<span class="lable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
: </span>
																	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
																		<span class="text"><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span>
																	<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
																		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
																			<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="">
																		</a>
																	<?php }?>
																</li>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</ul>
													</li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</div>
									<?php }?>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
						<?php } else { ?>
							<div class="shopping-cart-no-item">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

							</div>
						<?php }?>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
				<div class="widget_shopping_cart_bottom">
					<div class="card-block-bottom">
						<div class="totals-top">
						   	<span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
						   	<span class="CART_SUBTOTAL_TEXT" style="font-size:11px;color:red"></span>
							<span class="CART_PRICE_TOTAL_CONTADO">
						   		<span class="value-top price CART_PRICE_TOTAL_CONTADO_VAL"><?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
							</span>
							<span class="CART_PRICE_TOTAL_CREDITO">
						   		<span class="value-top price CART_PRICE_TOTAL_CREDITO_VAL"></span>
							</span>
						</div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNrtCartInfo'),$_smarty_tpl ) );?>

						<div class="card-block-btn">
							<a class="btn btn-full btn-outline-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

							</a> 
							<a class="btn btn-full btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','mod'=>'nrtshoppingcart'),$_smarty_tpl ) );?>

							</a>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div><?php }
}
