<?php
/* Smarty version 3.1.47, created on 2024-04-29 12:54:10
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_product\product-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fdec2e18790_01651751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7583b7960e752413ae201f29dcea6724c609bec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_product\\product-4.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_product/breadcrumb.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-tabs.tpl' => 1,
  ),
),false)) {
function content_662fdec2e18790_01651751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<div class="row">
	<div id="content-wrapper" class="col-xs-12">
		<div id="main-content" class="product-container js-product-container">
			<div class="row row-product">
				<div class="col-xl-6 col-lg-7 col-md-6 col-12 single-product-images">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439917046662fdec2e07fe1_41179461', 'page_content_container');
?>

				</div>
				<div class="col-xl-6 col-lg-5 col-md-6 col-12 single-product-summary">
					<div class="summary-container">
						<div class="single-breadcrumbs-wrapper">
							<div class="single-breadcrumbs">
								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_product/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductsLinkNav','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 
							</div>
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
							<div class="product-brands">
								<div class="product-brand">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
										<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
"  loading="lazy">
									</a>
								</div>
							</div>
						<?php }?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1373512462662fdec2e0b796_35361814', 'page_header_container');
?>


						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504114936662fdec2e0ca39_81832142', 'product_prices');
?>
 

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1963096166662fdec2e0d2d2_32982445', 'product_description_short');
?>


						<div class="product-information">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135336438662fdec2e0ea73_18282937', 'product_customization');
?>

							<?php }?>
							<div class="product-actions js-product-actions"> 
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823494507662fdec2e0f8c7_78553821', 'product_buy');
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1642412017662fdec2e16950_31417634', 'product_additional_info');
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475768887662fdec2e17111_23895258', 'product_images_modal');
?>
 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductSummary'),$_smarty_tpl ) );?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636629528662fdec2e17b90_04267052', 'hook_display_reassurance');
?>

						</div>
					</div>
				</div>
			</div>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>	
	</div>
</div><?php }
/* {block 'product_cover_tumbnails'} */
class Block_1718416982662fdec2e08749_32509851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
								<?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_2068122707662fdec2e08438_62317133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
		
							<div class="vertical-thumb vertical-thumb-left images-cover-slider">	  
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718416982662fdec2e08749_32509851', 'product_cover_tumbnails', $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_439917046662fdec2e07fe1_41179461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_439917046662fdec2e07fe1_41179461',
  ),
  'page_content' => 
  array (
    0 => 'Block_2068122707662fdec2e08438_62317133',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_1718416982662fdec2e08749_32509851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2068122707662fdec2e08438_62317133', 'page_content', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_689083967662fdec2e0ba94_40188438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<h1 class="product_title">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

								</h1>
							<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1373512462662fdec2e0b796_35361814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_1373512462662fdec2e0b796_35361814',
  ),
  'page_header' => 
  array (
    0 => 'Block_689083967662fdec2e0ba94_40188438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689083967662fdec2e0ba94_40188438', 'page_header', $this->tplIndex);
?>

						<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1504114936662fdec2e0ca39_81832142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_1504114936662fdec2e0ca39_81832142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						<?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_1963096166662fdec2e0d2d2_32982445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_1963096166662fdec2e0d2d2_32982445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-short-description">
								<?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

							</div>
						<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_135336438662fdec2e0ea73_18282937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_135336438662fdec2e0ea73_18282937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
								<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_899408107662fdec2e10887_66317743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
										<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1808382406662fdec2e13df4_13417616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
														<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_2112678464662fdec2e110e6_66473831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
												<?php $_smarty_tpl->_assignInScope('imageType', 'cart_default');?>
												<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']))) {?>
													<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']);?>
												<?php }?>
												<section class="product-pack">
													<p class="h4">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

													</p>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808382406662fdec2e13df4_13417616', 'product_miniature', $this->tplIndex);
?>

													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</section>
											<?php }?>
										<?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_1393384928662fdec2e151f1_14368561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
										<?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_1077209092662fdec2e15a07_10979811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
										<?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_1503430990662fdec2e161a9_18616665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_823494507662fdec2e0f8c7_78553821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_823494507662fdec2e0f8c7_78553821',
  ),
  'product_variants' => 
  array (
    0 => 'Block_899408107662fdec2e10887_66317743',
  ),
  'product_pack' => 
  array (
    0 => 'Block_2112678464662fdec2e110e6_66473831',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1808382406662fdec2e13df4_13417616',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1393384928662fdec2e151f1_14368561',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1077209092662fdec2e15a07_10979811',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1503430990662fdec2e161a9_18616665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
										<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
										<input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_899408107662fdec2e10887_66317743', 'product_variants', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112678464662fdec2e110e6_66473831', 'product_pack', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1393384928662fdec2e151f1_14368561', 'product_discounts', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1077209092662fdec2e15a07_10979811', 'product_add_to_cart', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1503430990662fdec2e161a9_18616665', 'product_refresh', $this->tplIndex);
?>

									</form>              
								<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_additional_info'} */
class Block_1642412017662fdec2e16950_31417634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_1642412017662fdec2e16950_31417634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_images_modal'} */
class Block_1475768887662fdec2e17111_23895258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_1475768887662fdec2e17111_23895258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'hook_display_reassurance'} */
class Block_1636629528662fdec2e17b90_04267052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_1636629528662fdec2e17b90_04267052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'hook_display_reassurance'} */
}
