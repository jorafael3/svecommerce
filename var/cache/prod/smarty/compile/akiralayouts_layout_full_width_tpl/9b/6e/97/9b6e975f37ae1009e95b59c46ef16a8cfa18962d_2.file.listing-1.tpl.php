<?php
/* Smarty version 3.1.47, created on 2024-03-27 17:17:41
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\_listing\listing-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66049b0599a0c4_81584286',
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
function content_66049b0599a0c4_81584286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194823173366049b0598e4c2_01616070', 'block_full_width');
}
/* {block 'block_subcategories'} */
class Block_154025134066049b0598fbe8_32094640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_21231676266049b05990198_69300412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'banner_boxed'} */
class Block_22271046966049b05991140_75736813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_boxed'} */
/* {block 'product_list_active_filters'} */
class Block_87238168966049b05991597_23802524 extends Smarty_Internal_Block
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
class Block_106292015066049b059925e8_16321354 extends Smarty_Internal_Block
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
class Block_44162317166049b05995ea6_39969972 extends Smarty_Internal_Block
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
class Block_101935413466049b05996815_37782816 extends Smarty_Internal_Block
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
class Block_108156748266049b059972b4_35881191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_191917502766049b05990e92_75328701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<section id="main">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22271046966049b05991140_75736813', 'banner_boxed', $this->tplIndex);
?>

								<section id="products">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87238168966049b05991597_23802524', 'product_list_active_filters', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106292015066049b059925e8_16321354', 'product_list_top', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44162317166049b05995ea6_39969972', 'product_list', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101935413466049b05996815_37782816', 'product_list_bottom', $this->tplIndex);
?>

								</section>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108156748266049b059972b4_35881191', 'product_list_footer', $this->tplIndex);
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>

							</section>
						<?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_47261687766049b059907e4_53359723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column col-xs-12 col-lg-9">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191917502766049b05990e92_75328701', 'content', $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_88758833766049b05999227_95577301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_1111304466049b05998df8_10428591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-lg-3">
					<div id="left-content">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88758833766049b05999227_95577301', "left_content", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "left_column"} */
/* {block 'block_full_width'} */
class Block_194823173366049b0598e4c2_01616070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_194823173366049b0598e4c2_01616070',
  ),
  'block_subcategories' => 
  array (
    0 => 'Block_154025134066049b0598fbe8_32094640',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_21231676266049b05990198_69300412',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_47261687766049b059907e4_53359723',
  ),
  'content' => 
  array (
    0 => 'Block_191917502766049b05990e92_75328701',
  ),
  'banner_boxed' => 
  array (
    0 => 'Block_22271046966049b05991140_75736813',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_87238168966049b05991597_23802524',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_106292015066049b059925e8_16321354',
  ),
  'product_list' => 
  array (
    0 => 'Block_44162317166049b05995ea6_39969972',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_101935413466049b05996815_37782816',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_108156748266049b059972b4_35881191',
  ),
  'left_column' => 
  array (
    0 => 'Block_1111304466049b05998df8_10428591',
  ),
  'left_content' => 
  array (
    0 => 'Block_88758833766049b05999227_95577301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['category_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154025134066049b0598fbe8_32094640', 'block_subcategories', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21231676266049b05990198_69300412', 'product_list_header', $this->tplIndex);
?>

		<div class="row category-layout-1">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47261687766049b059907e4_53359723', "content_wrapper", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111304466049b05998df8_10428591', "left_column", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
