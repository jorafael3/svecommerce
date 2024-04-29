<?php
/* Smarty version 3.1.47, created on 2024-04-29 12:54:12
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\product-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fdec4ea58c6_15790187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508397e5f88a1d11cb2ee54cda861cbb2367638a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\product-tabs.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
  ),
),false)) {
function content_662fdec4ea58c6_15790187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="wrapper-tab-product" class="wc-tabs-wrapper <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && ($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 1 || $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 2)) {?> tab-type-default<?php } else { ?> tab-type-accordion<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 4) {?> accordion-show-all<?php }
}?> tabs clearfix">
	<ul class="nav nav-tabs <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && ($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 3 || $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 4)) {?> hidden<?php } else { ?> hidden-md-down<?php }?>" role="tablist">
		<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
			<li class="nav-item">
				<a
					class="nav-link active js-product-nav-active"
					data-toggle="tab"
					href="#description"
					role="tab"
					aria-controls="description"
					aria-selected="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
			</li>
		<?php }?>
		<li class="nav-item">
			<a
				class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
				data-toggle="tab"
				href="#product-details-tab-content"
				role="tab"
				aria-controls="product-details"
				<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
		</li>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
			<li class="nav-item">
				<a
					class="nav-link"
					data-toggle="tab"
					href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
					role="tab"
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
if ($_smarty_tpl->tpl_vars['val']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div class="tab-content">
		<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
			<a class="accordion-title js-accordion active_accordion <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && ($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 1 || $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 2)) {?> hidden-lg-up<?php }?>" href="#description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
			<div id="description" class="wc-tab tab-pane active js-product-tab-active">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1784156392662fdec4e9dcc2_36245300', 'product_description');
?>

			</div>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_725705604662fdec4e9e946_78184732', 'product_details');
?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
			<a class="accordion-title js-accordion <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && ($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 1 || $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 2)) {?> hidden-lg-up<?php }?>" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
if ($_smarty_tpl->tpl_vars['val']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
			<div id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" class="wc-tab tab-pane <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
if ($_smarty_tpl->tpl_vars['val']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
			   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
/* {block 'product_description'} */
class Block_1784156392662fdec4e9dcc2_36245300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description' => 
  array (
    0 => 'Block_1784156392662fdec4e9dcc2_36245300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="product-description">
						<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

					</div>
				<?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_725705604662fdec4e9e946_78184732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_details' => 
  array (
    0 => 'Block_725705604662fdec4e9e946_78184732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a class="accordion-title js-accordion <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active_accordion<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'])) && ($_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 1 || $_smarty_tpl->tpl_vars['opThemect']->value['product_tabs_type'] == 2)) {?> hidden-lg-up<?php }?>" href="#product-details-tab-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
			<div id="product-details-tab-content" class="wc-tab tab-pane <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-tab-active<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		<?php
}
}
/* {/block 'product_details'} */
}
