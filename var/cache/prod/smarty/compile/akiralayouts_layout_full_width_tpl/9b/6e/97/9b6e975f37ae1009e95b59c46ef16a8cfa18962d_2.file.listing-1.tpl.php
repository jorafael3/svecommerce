<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:42
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\_listing\listing-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc06a602132_03965434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6e975f37ae1009e95b59c46ef16a8cfa18962d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\listing\\_listing\\listing-1.tpl',
      1 => 1711123680,
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
function content_662fc06a602132_03965434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_253220482662fc06a5f5f00_31089869', 'block_full_width');
}
/* {block 'block_subcategories'} */
class Block_1028032055662fc06a5f7563_78231218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_611726216662fc06a5f7a94_35692197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'banner_boxed'} */
class Block_1767478914662fc06a5f8ad4_42858368 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_boxed'} */
/* {block 'product_list_active_filters'} */
class Block_2002347512662fc06a5f8fb8_35138143 extends Smarty_Internal_Block
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
class Block_1858782749662fc06a5fa0a8_49694687 extends Smarty_Internal_Block
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
class Block_77836306662fc06a5feb17_65687425 extends Smarty_Internal_Block
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
class Block_1281064386662fc06a5ff545_51701969 extends Smarty_Internal_Block
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
class Block_164212873662fc06a5ffe77_00028840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_219362353662fc06a5f8816_61061309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<section id="main">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1767478914662fc06a5f8ad4_42858368', 'banner_boxed', $this->tplIndex);
?>

								<section id="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2002347512662fc06a5f8fb8_35138143', 'product_list_active_filters', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1858782749662fc06a5fa0a8_49694687', 'product_list_top', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77836306662fc06a5feb17_65687425', 'product_list', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281064386662fc06a5ff545_51701969', 'product_list_bottom', $this->tplIndex);
?>

								</section>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164212873662fc06a5ffe77_00028840', 'product_list_footer', $this->tplIndex);
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

							</section>
						<?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_1059360338662fc06a5f8147_32273584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column col-xs-12 col-lg-9">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_219362353662fc06a5f8816_61061309', 'content', $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_1488908420662fc06a6014a2_33530226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_2120568625662fc06a6010e8_17577000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-lg-3">
					<div id="left-content">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1488908420662fc06a6014a2_33530226', "left_content", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "left_column"} */
/* {block 'block_full_width'} */
class Block_253220482662fc06a5f5f00_31089869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_253220482662fc06a5f5f00_31089869',
  ),
  'block_subcategories' => 
  array (
    0 => 'Block_1028032055662fc06a5f7563_78231218',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_611726216662fc06a5f7a94_35692197',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_1059360338662fc06a5f8147_32273584',
  ),
  'content' => 
  array (
    0 => 'Block_219362353662fc06a5f8816_61061309',
  ),
  'banner_boxed' => 
  array (
    0 => 'Block_1767478914662fc06a5f8ad4_42858368',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_2002347512662fc06a5f8fb8_35138143',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_1858782749662fc06a5fa0a8_49694687',
  ),
  'product_list' => 
  array (
    0 => 'Block_77836306662fc06a5feb17_65687425',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_1281064386662fc06a5ff545_51701969',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_164212873662fc06a5ffe77_00028840',
  ),
  'left_column' => 
  array (
    0 => 'Block_2120568625662fc06a6010e8_17577000',
  ),
  'left_content' => 
  array (
    0 => 'Block_1488908420662fc06a6014a2_33530226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1028032055662fc06a5f7563_78231218', 'block_subcategories', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611726216662fc06a5f7a94_35692197', 'product_list_header', $this->tplIndex);
?>

		<div class="row category-layout-1">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1059360338662fc06a5f8147_32273584', "content_wrapper", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2120568625662fc06a6010e8_17577000', "left_column", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
