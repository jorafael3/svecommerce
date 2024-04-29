<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:19:23
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_product\product-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f3beb98bc62_64019069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7583b7960e752413ae201f29dcea6724c609bec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_product\\product-4.tpl',
      1 => 1711210466,
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
function content_662f3beb98bc62_64019069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<div class="row">
	<div id="content-wrapper" class="col-xs-12">
		<div id="main-content" class="product-container js-product-container">
			<div class="row row-product">
				<div class="col-xl-6 col-lg-7 col-md-6 col-12 single-product-images">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2045657507662f3beb97dfc2_25686266', 'page_content_container');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_532508307662f3beb981269_47576769', 'page_header_container');
?>


						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1259847602662f3beb9823e2_32694231', 'product_prices');
?>
 

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975783482662f3beb982b29_52701689', 'product_description_short');
?>


						<div class="product-information">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281820835662f3beb983f67_21211367', 'product_customization');
?>

							<?php }?>
							<div class="product-actions js-product-actions"> 
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1748692804662f3beb984bb9_93150071', 'product_buy');
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138480516662f3beb98a0d5_38816973', 'product_additional_info');
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_724533485662f3beb98a7d8_02526324', 'product_images_modal');
?>
 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductSummary'),$_smarty_tpl ) );?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288080337662f3beb98b149_52986772', 'hook_display_reassurance');
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
class Block_505010188662f3beb97e690_63457789 extends Smarty_Internal_Block
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
class Block_1350026471662f3beb97e3c4_54645322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
		
							<div class="vertical-thumb vertical-thumb-left images-cover-slider">	  
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_505010188662f3beb97e690_63457789', 'product_cover_tumbnails', $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2045657507662f3beb97dfc2_25686266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2045657507662f3beb97dfc2_25686266',
  ),
  'page_content' => 
  array (
    0 => 'Block_1350026471662f3beb97e3c4_54645322',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_505010188662f3beb97e690_63457789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1350026471662f3beb97e3c4_54645322', 'page_content', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_1645283343662f3beb981513_02335783 extends Smarty_Internal_Block
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
class Block_532508307662f3beb981269_47576769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_532508307662f3beb981269_47576769',
  ),
  'page_header' => 
  array (
    0 => 'Block_1645283343662f3beb981513_02335783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1645283343662f3beb981513_02335783', 'page_header', $this->tplIndex);
?>

						<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1259847602662f3beb9823e2_32694231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_1259847602662f3beb9823e2_32694231',
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
class Block_1975783482662f3beb982b29_52701689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_1975783482662f3beb982b29_52701689',
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
class Block_281820835662f3beb983f67_21211367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_281820835662f3beb983f67_21211367',
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
class Block_599326233662f3beb985a15_45880828 extends Smarty_Internal_Block
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
class Block_1071207119662f3beb987cb9_49998303 extends Smarty_Internal_Block
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
class Block_1447195364662f3beb986108_87545140 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1071207119662f3beb987cb9_49998303', 'product_miniature', $this->tplIndex);
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
class Block_1615173301662f3beb988c52_42924597 extends Smarty_Internal_Block
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
class Block_243069097662f3beb989331_12869486 extends Smarty_Internal_Block
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
class Block_1640016513662f3beb989a03_27194654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_1748692804662f3beb984bb9_93150071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_1748692804662f3beb984bb9_93150071',
  ),
  'product_variants' => 
  array (
    0 => 'Block_599326233662f3beb985a15_45880828',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1447195364662f3beb986108_87545140',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1071207119662f3beb987cb9_49998303',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1615173301662f3beb988c52_42924597',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_243069097662f3beb989331_12869486',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1640016513662f3beb989a03_27194654',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599326233662f3beb985a15_45880828', 'product_variants', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1447195364662f3beb986108_87545140', 'product_pack', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1615173301662f3beb988c52_42924597', 'product_discounts', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243069097662f3beb989331_12869486', 'product_add_to_cart', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1640016513662f3beb989a03_27194654', 'product_refresh', $this->tplIndex);
?>

									</form>              
								<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_additional_info'} */
class Block_1138480516662f3beb98a0d5_38816973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_1138480516662f3beb98a0d5_38816973',
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
class Block_724533485662f3beb98a7d8_02526324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_724533485662f3beb98a7d8_02526324',
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
class Block_288080337662f3beb98b149_52986772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_288080337662f3beb98b149_52986772',
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
