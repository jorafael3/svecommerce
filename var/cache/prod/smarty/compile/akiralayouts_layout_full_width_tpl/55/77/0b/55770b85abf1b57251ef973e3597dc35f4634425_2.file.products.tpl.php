<?php
/* Smarty version 3.1.47, created on 2024-01-19 07:37:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa6d08d47c90_00648577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55770b85abf1b57251ef973e3597dc35f4634425' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/products.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-loop.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/_product/product-0.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_65aa6d08d47c90_00648577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('imageType', 'home_default');?>
	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_image_type']))) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['category_product_image_type']);
}?>

<?php $_smarty_tpl->_assignInScope('productLayout', 0);?>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_layout']))) {?>
	<?php $_smarty_tpl->_assignInScope('productLayout', $_smarty_tpl->tpl_vars['opThemect']->value['category_product_layout']);
}?>

<div id="js-product-list">
	<?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_default_view'])) && !$_smarty_tpl->tpl_vars['opThemect']->value['category_default_view']) {?>
		  <div id="box-product-grid" class="products product-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productLayout']->value, ENT_QUOTES, 'UTF-8');?>
">
			  <div class="archive-wrapper-items wrapper-items">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<div class="item">
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-loop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			  </div>  
		  </div>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('imageType', 'home_default');?>
			<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']) {?>
				<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']);?>
			<?php }?>
			<div id="box-product-list" class="products archive-wrapper-items wrapper-items">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_partials/_product/product-0.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
	<?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
	<?php }?>
</div>

<?php }
}
