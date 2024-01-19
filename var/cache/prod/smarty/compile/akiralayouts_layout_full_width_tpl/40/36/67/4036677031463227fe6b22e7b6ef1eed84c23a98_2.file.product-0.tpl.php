<?php
/* Smarty version 3.1.47, created on 2024-01-05 12:52:27
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/miniatures/_partials/_product/product-0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_659841db6adcf1_84164371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4036677031463227fe6b22e7b6ef1eed84c23a98' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/miniatures/_partials/_product/product-0.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/flags.tpl' => 1,
  ),
),false)) {
function content_659841db6adcf1_84164371 (Smarty_Internal_Template $_smarty_tpl) {
?>	 
<div class="js-product item-product-list">
	<div class="js-product-miniature item-inner" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="element-top">
			<div class="element-top-content">
				<div class="item-images js-slider-images swiper-container">
					<div class="swiper-wrapper">
						<a class="swiper-slide" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
							<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
								<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
									<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['cover']);?>
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
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'] != $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url']) {?>
								<a class="swiper-slide" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
									<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
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
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<div class="swiper-arrows">
						<button class="axps-swiper-arrow axps-swiper-arrow-prev"><i class="las la-angle-left"></i></button>
						<button class="axps-swiper-arrow axps-swiper-arrow-next"><i class="las la-angle-right"></i></button>
					</div>
					<div class="swiper-dots">
						<div class="axps-swiper-pagination"></div>
					</div>
				</div>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && $_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCountDown'),$_smarty_tpl ) );?>
 
					<?php }?>
				</a>
			</div>
		</div>
		<div class="element-bottom">   
			<div class="element-bottom-1"> 
				<div class="info-product">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SKU','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
: </span>
					<span>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				</div>
				<div class="info-product">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
: </span>		
					<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'])) && $_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) {?>
						<?php $_smarty_tpl->_assignInScope('manufacturer_name', Manufacturer::getNameById($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']));?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>

						</a>
					<?php } else { ?>
						<span>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

						</span>
					<?php }?>
				</div>
				<div class="description-product">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<div class="product_name">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</div>  
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping hidden-md-up">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                        <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                        <span class="price">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </span>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                    </div>
                    <?php }?>	
				</div>

				<div class="decriptions-short">
					<?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

				</div>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
					<div class="variant-links-list">
					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayVariant','tpl_product'=>0,'imageType'=>$_smarty_tpl->tpl_vars['imageType']->value),$_smarty_tpl ) );?>
 
					</div>
				<?php }?>	
			</div> 
			<div class="element-bottom-2"> 
				<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
				  <div class="product-price-and-shipping hidden-sm-down">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

					  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                    <span class="price">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </span>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

				  </div>
				<?php }?>
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
					<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog'] && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
						<?php if (!$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>
						<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
						<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
						<div class="input-group input-group-add-cart bootstrap-touchspin">
							<span class="input-group-btn">
								<button class="qty-down bootstrap-touchspin-down" type="button">
									-
								</button>
							</span>
							<input type="number"
								   name="qty"
								   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
								   class="js-number-qty form-control"
								   data-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
							>
							<span class="input-group-btn">
								<button class="qty-up bootstrap-touchspin-up" type="button">
									+
								</button>
							</span>
						</div>
                        <button class="btn-action btn btn-primary add-to-cart" data-button-action="add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" type="submit"<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled<?php }?>>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                        </button>
						<?php } else { ?>
                            <a 	href="javascript:void(0)" class="btn-action btn btn-primary add-to-cart quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select options','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select options','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </a>  
						<?php }?>
					<?php } else { ?>
                        <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn-action btn btn-primary add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

                        </a>
					<?php }?>
				</form>
				<div class="button-action-botom axps-buttons-tootip-top">
                    <a href="javascript:void(0)" class="btn-action quick-view js-quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" rel="nofollow">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </a>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayButtonWishList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayButtonCompare','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
				<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
							<div class="product-availability-list type-available">
								<i class="las la-check"></i>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
							<div class="product-availability-list type-last-remaining-items">
								<i class="las la-exclamation-triangle"></i>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

							</div>
						<?php } else { ?>
							<div class="product-availability-list type-out-stock">
								<i class="las la-ban"></i>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

							</div>
						<?php }?>
					<?php }?>
				<?php }?>
			</div>
		</div>           
	</div>
</div>	<?php }
}
