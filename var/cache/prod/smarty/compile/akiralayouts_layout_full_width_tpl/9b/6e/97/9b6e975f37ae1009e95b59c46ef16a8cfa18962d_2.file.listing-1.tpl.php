<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:34:24
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\_listing\listing-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f20358099_83771771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6e975f37ae1009e95b59c46ef16a8cfa18962d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\listing\\_listing\\listing-1.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_660a0f20358099_83771771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1205989118660a0f20349c73_59261367', 'block_full_width');
}
/* {block 'block_subcategories'} */
class Block_696983682660a0f2034b918_17020541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_141076259660a0f2034c533_56900867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'banner_boxed'} */
class Block_406771277660a0f2034dd81_95027453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_boxed'} */
/* {block 'product_list_active_filters'} */
class Block_234872215660a0f2034e361_70292475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters']))) {?>
											<?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

										<?php }?>
									<?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list_top'} */
class Block_881985111660a0f2034fb62_98570410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
									<?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list'} */
class Block_1519587922660a0f20354bb5_93406413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_104824852660a0f20355632_29472326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
									<?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_428890159660a0f20355ed5_98451068 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_2073670670660a0f2034d962_55147005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<section id="main">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_406771277660a0f2034dd81_95027453', 'banner_boxed', $this->tplIndex);
?>

								<section id="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234872215660a0f2034e361_70292475', 'product_list_active_filters', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_881985111660a0f2034fb62_98570410', 'product_list_top', $this->tplIndex);
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'] == 2) {?>
										<div id="facets_search_middle" class="hidden-md-down">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

										</div>
									<?php } elseif ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'] == 3) {?>
										<div id="facets_search_middle_dropdown" class="hidden-md-down">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

										</div>
									<?php }?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519587922660a0f20354bb5_93406413', 'product_list', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104824852660a0f20355632_29472326', 'product_list_bottom', $this->tplIndex);
?>

								</section>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_428890159660a0f20355ed5_98451068', 'product_list_footer', $this->tplIndex);
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

							</section>
						<?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_989190170660a0f2034cf63_85763037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column col-xs-12 col-lg-9">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073670670660a0f2034d962_55147005', 'content', $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_288839788660a0f20357413_21126825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_1064842654660a0f20357093_49519992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-lg-3">
					<div id="left-content">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288839788660a0f20357413_21126825', "left_content", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "left_column"} */
/* {block 'block_full_width'} */
class Block_1205989118660a0f20349c73_59261367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_1205989118660a0f20349c73_59261367',
  ),
  'block_subcategories' => 
  array (
    0 => 'Block_696983682660a0f2034b918_17020541',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_141076259660a0f2034c533_56900867',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_989190170660a0f2034cf63_85763037',
  ),
  'content' => 
  array (
    0 => 'Block_2073670670660a0f2034d962_55147005',
  ),
  'banner_boxed' => 
  array (
    0 => 'Block_406771277660a0f2034dd81_95027453',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_234872215660a0f2034e361_70292475',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_881985111660a0f2034fb62_98570410',
  ),
  'product_list' => 
  array (
    0 => 'Block_1519587922660a0f20354bb5_93406413',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_104824852660a0f20355632_29472326',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_428890159660a0f20355ed5_98451068',
  ),
  'left_column' => 
  array (
    0 => 'Block_1064842654660a0f20357093_49519992',
  ),
  'left_content' => 
  array (
    0 => 'Block_288839788660a0f20357413_21126825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_696983682660a0f2034b918_17020541', 'block_subcategories', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141076259660a0f2034c533_56900867', 'product_list_header', $this->tplIndex);
?>

		<div class="row category-layout-1">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_989190170660a0f2034cf63_85763037', "content_wrapper", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1064842654660a0f20357093_49519992', "left_column", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
