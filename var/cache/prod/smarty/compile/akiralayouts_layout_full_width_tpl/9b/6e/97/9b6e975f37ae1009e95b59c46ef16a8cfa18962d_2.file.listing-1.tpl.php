<?php
/* Smarty version 3.1.47, created on 2024-03-24 16:09:24
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\_listing\listing-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66009684816464_46954907',
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
function content_66009684816464_46954907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12475627076600968480cd91_90632291', 'block_full_width');
}
/* {block 'block_subcategories'} */
class Block_11453812456600968480de36_97780305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_5844744956600968480e2c1_74028338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'banner_boxed'} */
class Block_6139692636600968480f079_06638143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_boxed'} */
/* {block 'product_list_active_filters'} */
class Block_15834693226600968480f461_47190978 extends Smarty_Internal_Block
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
class Block_100874545660096848102f5_71442639 extends Smarty_Internal_Block
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
class Block_2077850699660096848135c6_52849954 extends Smarty_Internal_Block
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
class Block_28544932466009684813e61_17237334 extends Smarty_Internal_Block
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
class Block_15203181966009684814676_32105627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_8948235886600968480edf0_74100447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<section id="main">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6139692636600968480f079_06638143', 'banner_boxed', $this->tplIndex);
?>

								<section id="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15834693226600968480f461_47190978', 'product_list_active_filters', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100874545660096848102f5_71442639', 'product_list_top', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2077850699660096848135c6_52849954', 'product_list', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28544932466009684813e61_17237334', 'product_list_bottom', $this->tplIndex);
?>

								</section>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15203181966009684814676_32105627', 'product_list_footer', $this->tplIndex);
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

							</section>
						<?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_19714920966600968480e7f0_53053888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column col-xs-12 col-lg-9">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8948235886600968480edf0_74100447', 'content', $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_79515356660096848159c8_23981154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_154912041766009684815687_88769742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-lg-3">
					<div id="left-content">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79515356660096848159c8_23981154', "left_content", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "left_column"} */
/* {block 'block_full_width'} */
class Block_12475627076600968480cd91_90632291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_12475627076600968480cd91_90632291',
  ),
  'block_subcategories' => 
  array (
    0 => 'Block_11453812456600968480de36_97780305',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_5844744956600968480e2c1_74028338',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_19714920966600968480e7f0_53053888',
  ),
  'content' => 
  array (
    0 => 'Block_8948235886600968480edf0_74100447',
  ),
  'banner_boxed' => 
  array (
    0 => 'Block_6139692636600968480f079_06638143',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_15834693226600968480f461_47190978',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_100874545660096848102f5_71442639',
  ),
  'product_list' => 
  array (
    0 => 'Block_2077850699660096848135c6_52849954',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_28544932466009684813e61_17237334',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_15203181966009684814676_32105627',
  ),
  'left_column' => 
  array (
    0 => 'Block_154912041766009684815687_88769742',
  ),
  'left_content' => 
  array (
    0 => 'Block_79515356660096848159c8_23981154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11453812456600968480de36_97780305', 'block_subcategories', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5844744956600968480e2c1_74028338', 'product_list_header', $this->tplIndex);
?>

		<div class="row category-layout-1">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19714920966600968480e7f0_53053888', "content_wrapper", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154912041766009684815687_88769742', "left_column", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
