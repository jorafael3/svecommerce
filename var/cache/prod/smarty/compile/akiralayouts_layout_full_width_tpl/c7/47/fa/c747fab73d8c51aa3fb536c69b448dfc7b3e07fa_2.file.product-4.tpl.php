<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:02:32
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_product/product-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa8f08ce28d4_66305143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c747fab73d8c51aa3fb536c69b448dfc7b3e07fa' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_product/product-4.tpl',
      1 => 1685021478,
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
function content_65aa8f08ce28d4_66305143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<div class="row">
	<div id="content-wrapper" class="col-xs-12">
		<div id="main-content" class="product-container js-product-container">
			<div class="row row-product">
				<div class="col-xl-6 col-lg-7 col-md-6 col-12 single-product-images">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10738085865aa8f08ccb9e4_49506502', 'page_content_container');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120179672665aa8f08cd0fb7_51784917', 'page_header_container');
?>


						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145233348065aa8f08cd2b49_73624104', 'product_prices');
?>
 

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99029797065aa8f08cd3703_35032713', 'product_description_short');
?>


						<div class="product-information">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114497069865aa8f08cd5856_43540532', 'product_customization');
?>

							<?php }?>
							<div class="product-actions js-product-actions"> 
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147177888665aa8f08cd6cb8_36676930', 'product_buy');
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186656329665aa8f08cdfc80_83808933', 'product_additional_info');
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108126170165aa8f08ce07e3_54553498', 'product_images_modal');
?>
 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductSummary'),$_smarty_tpl ) );?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91717301865aa8f08ce17b9_88705610', 'hook_display_reassurance');
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
class Block_26131564365aa8f08ccc610_92967877 extends Smarty_Internal_Block
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
class Block_173078134765aa8f08ccc070_43339585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
		
							<div class="vertical-thumb vertical-thumb-left images-cover-slider">	  
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26131564365aa8f08ccc610_92967877', 'product_cover_tumbnails', $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10738085865aa8f08ccb9e4_49506502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10738085865aa8f08ccb9e4_49506502',
  ),
  'page_content' => 
  array (
    0 => 'Block_173078134765aa8f08ccc070_43339585',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_26131564365aa8f08ccc610_92967877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173078134765aa8f08ccc070_43339585', 'page_content', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_header'} */
class Block_44478783765aa8f08cd1477_71762403 extends Smarty_Internal_Block
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
class Block_120179672665aa8f08cd0fb7_51784917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_120179672665aa8f08cd0fb7_51784917',
  ),
  'page_header' => 
  array (
    0 => 'Block_44478783765aa8f08cd1477_71762403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44478783765aa8f08cd1477_71762403', 'page_header', $this->tplIndex);
?>

						<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_145233348065aa8f08cd2b49_73624104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_145233348065aa8f08cd2b49_73624104',
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
class Block_99029797065aa8f08cd3703_35032713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_99029797065aa8f08cd3703_35032713',
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
class Block_114497069865aa8f08cd5856_43540532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_114497069865aa8f08cd5856_43540532',
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
class Block_59404196965aa8f08cd8420_53573499 extends Smarty_Internal_Block
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
class Block_3983973265aa8f08cdc112_74989335 extends Smarty_Internal_Block
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
class Block_133447980465aa8f08cd8f52_47963244 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3983973265aa8f08cdc112_74989335', 'product_miniature', $this->tplIndex);
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
class Block_147938140965aa8f08cddb07_72213858 extends Smarty_Internal_Block
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
class Block_151047967565aa8f08cde644_60282367 extends Smarty_Internal_Block
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
class Block_53644795865aa8f08cdf1a4_74069876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_147177888665aa8f08cd6cb8_36676930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_147177888665aa8f08cd6cb8_36676930',
  ),
  'product_variants' => 
  array (
    0 => 'Block_59404196965aa8f08cd8420_53573499',
  ),
  'product_pack' => 
  array (
    0 => 'Block_133447980465aa8f08cd8f52_47963244',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_3983973265aa8f08cdc112_74989335',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_147938140965aa8f08cddb07_72213858',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_151047967565aa8f08cde644_60282367',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_53644795865aa8f08cdf1a4_74069876',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59404196965aa8f08cd8420_53573499', 'product_variants', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133447980465aa8f08cd8f52_47963244', 'product_pack', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147938140965aa8f08cddb07_72213858', 'product_discounts', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151047967565aa8f08cde644_60282367', 'product_add_to_cart', $this->tplIndex);
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53644795865aa8f08cdf1a4_74069876', 'product_refresh', $this->tplIndex);
?>

									</form>              
								<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_additional_info'} */
class Block_186656329665aa8f08cdfc80_83808933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_186656329665aa8f08cdfc80_83808933',
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
class Block_108126170165aa8f08ce07e3_54553498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_108126170165aa8f08ce07e3_54553498',
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
class Block_91717301865aa8f08ce17b9_88705610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_91717301865aa8f08ce17b9_88705610',
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
