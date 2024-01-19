<?php
/* Smarty version 3.1.47, created on 2024-01-14 17:49:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a464ff47e003_44576087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656f75149d96fd21c0284ddc9332bf097e0a3a9b' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/flags.tpl' => 1,
  ),
),false)) {
function content_65a464ff47e003_44576087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php $_smarty_tpl->_assignInScope('imageType', 'large_default');?>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']))) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']);
}?>	 
	 
<div class="images-container js-images-container">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9007764265a464ff449dc8_26191311', 'product_cover');
?>

	
	<?php $_smarty_tpl->_assignInScope('imageType', 'small_default');?>
	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_image_thumb_type']))) {?>
		<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['product_image_thumb_type']);?>
	<?php }?>	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87943730165a464ff466f59_21331669', 'product_images');
?>

	
	<?php $_smarty_tpl->_assignInScope('imageType', 'large_default');?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']))) {?>
		<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']);?>
	<?php }?>	 

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}
/* {block 'product_cover'} */
class Block_9007764265a464ff449dc8_26191311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_9007764265a464ff449dc8_26191311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="product-images-cover">
		<div class="js-images-cover images-cover-wrapper swiper-container img-count-<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['product']->value['images']), ENT_QUOTES, 'UTF-8');?>
">
			<div class="swiper-wrapper">
				<div class="item-image swiper-slide col-xs-12 img-cover">
					<div class="img-light-box">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
							<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['default_image']);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
						<?php }?>
						<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
							<div class="easyzoom easyzoom-product">
								<span data-zoom="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"></span>
							</div>
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
					</div>
				</div>
				<?php $_smarty_tpl->_assignInScope('item_key', "1");?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'] != $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url']) {?>
						<div class="item-image swiper-slide col-xs-12">
							<div class="img-light-box">
								<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
									<div class="easyzoom easyzoom-product">
										<span data-zoom="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"></span>
									</div>
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
							</div>
						</div>
						<?php $_smarty_tpl->_assignInScope('item_key', ((string)($_smarty_tpl->tpl_vars['item_key']->value+1)));?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="swiper-arrows">
				<button class="gallery-swiper-arrow gallery-swiper-arrow-prev"></button>
				<button class="gallery-swiper-arrow gallery-swiper-arrow-next"></button>
			</div>
			<div class="swiper-dots">
				<div class="gallery-swiper-pagination"></div>
			</div>
		</div>
		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="gr-btn-additional">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVideoBtn','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

			<div class="btn-additional">	
				<a class="btn-additional-view js-view-large" href="#" rel="nofollow">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to enlarge','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</span>
				</a>
			</div>
		</div>
	</div>
	<?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_87943730165a464ff466f59_21331669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_87943730165a464ff466f59_21331669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="product-images-thumb">
		<div class="images-thumb-wrapper js-images-thumb swiper-container img-count-<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['product']->value['images']), ENT_QUOTES, 'UTF-8');?>
">
			<div class="swiper-wrapper">
				<div class="item-image swiper-slide swiper-slide-thumb-active img-cover">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
						<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['default_image']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
					<?php }?>
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
				</div>
				<?php $_smarty_tpl->_assignInScope('item_key', "1");?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'] != $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url']) {?>
						<div class="item-image swiper-slide">
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
						</div>
						<?php $_smarty_tpl->_assignInScope('item_key', ((string)($_smarty_tpl->tpl_vars['item_key']->value+1)));?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="swiper-arrows">
				<button class="gallery-swiper-arrow gallery-swiper-arrow-prev"></button>
				<button class="gallery-swiper-arrow gallery-swiper-arrow-next"></button>
			</div>
			<div class="swiper-dots">
				<div class="gallery-swiper-pagination"></div>
			</div>
		</div>
	</div>
	<?php
}
}
/* {/block 'product_images'} */
}
