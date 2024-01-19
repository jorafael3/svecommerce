<?php
/* Smarty version 3.1.47, created on 2024-01-19 07:37:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/_listing/listing-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa6d0875e768_62483454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f1f5ef8a7dc32fa6f16de83c57338c8d1a08f7' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/_listing/listing-1.tpl',
      1 => 1685021478,
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
function content_65aa6d0875e768_62483454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118384529565aa6d0874aaa0_92986987', 'block_full_width');
}
/* {block 'block_subcategories'} */
class Block_125916751965aa6d0874d106_91413828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_154626948565aa6d0874da86_79263858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'banner_boxed'} */
class Block_87742021865aa6d0874f976_70040005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_boxed'} */
/* {block 'product_list_active_filters'} */
class Block_115402543865aa6d087501f3_04932524 extends Smarty_Internal_Block
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
class Block_8472491665aa6d08752420_70801066 extends Smarty_Internal_Block
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
class Block_185919830265aa6d08757e73_61961683 extends Smarty_Internal_Block
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
class Block_11617776565aa6d08759178_95307966 extends Smarty_Internal_Block
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
class Block_163115865065aa6d0875a305_17537556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_60499390965aa6d0874f385_10124283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<section id="main">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87742021865aa6d0874f976_70040005', 'banner_boxed', $this->tplIndex);
?>

								<section id="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115402543865aa6d087501f3_04932524', 'product_list_active_filters', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8472491665aa6d08752420_70801066', 'product_list_top', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185919830265aa6d08757e73_61961683', 'product_list', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11617776565aa6d08759178_95307966', 'product_list_bottom', $this->tplIndex);
?>

								</section>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163115865065aa6d0875a305_17537556', 'product_list_footer', $this->tplIndex);
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

							</section>
						<?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_119866484365aa6d0874e632_02284175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column col-xs-12 col-lg-9">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60499390965aa6d0874f385_10124283', 'content', $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_165843102465aa6d0875cef0_79000489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_32792074165aa6d0875c782_46125065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-lg-3">
					<div id="left-content">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165843102465aa6d0875cef0_79000489', "left_content", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "left_column"} */
/* {block 'block_full_width'} */
class Block_118384529565aa6d0874aaa0_92986987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_118384529565aa6d0874aaa0_92986987',
  ),
  'block_subcategories' => 
  array (
    0 => 'Block_125916751965aa6d0874d106_91413828',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_154626948565aa6d0874da86_79263858',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_119866484365aa6d0874e632_02284175',
  ),
  'content' => 
  array (
    0 => 'Block_60499390965aa6d0874f385_10124283',
  ),
  'banner_boxed' => 
  array (
    0 => 'Block_87742021865aa6d0874f976_70040005',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_115402543865aa6d087501f3_04932524',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_8472491665aa6d08752420_70801066',
  ),
  'product_list' => 
  array (
    0 => 'Block_185919830265aa6d08757e73_61961683',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_11617776565aa6d08759178_95307966',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_163115865065aa6d0875a305_17537556',
  ),
  'left_column' => 
  array (
    0 => 'Block_32792074165aa6d0875c782_46125065',
  ),
  'left_content' => 
  array (
    0 => 'Block_165843102465aa6d0875cef0_79000489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125916751965aa6d0874d106_91413828', 'block_subcategories', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154626948565aa6d0874da86_79263858', 'product_list_header', $this->tplIndex);
?>

		<div class="row category-layout-1">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119866484365aa6d0874e632_02284175', "content_wrapper", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32792074165aa6d0875c782_46125065', "left_column", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
