<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:02:32
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa8f0888d420_75516230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e1c050fc464f1f2993f4bba26f55e82bdfff778' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/product.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_product/product-".((string)$_smarty_tpl->tpl_vars[\'opThemect\']->value[\'product_layout\']).".tpl' => 1,
  ),
),false)) {
function content_65aa8f0888d420_75516230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

	 
<?php $_smarty_tpl->_assignInScope('imageType', 'large_default');?>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']))) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']);
}?>	
	 
<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
	<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['cover']);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);
}?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88692665465aa8f0887e9b0_77438766', 'head');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74879035965aa8f08883d97_24963247', 'breadcrumb');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66795067965aa8f088844e9_13252553', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50750293465aa8f088850e4_23090308', 'block_full_width');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'head'} */
class Block_88692665465aa8f0887e9b0_77438766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_88692665465aa8f0887e9b0_77438766',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
	<meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
	<meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
	<meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
	<meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
	<meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
	<meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'breadcrumb'} */
class Block_74879035965aa8f08883d97_24963247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_74879035965aa8f08883d97_24963247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'head_microdata_special'} */
class Block_66795067965aa8f088844e9_13252553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_66795067965aa8f088844e9_13252553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'page_footer'} */
class Block_66199835165aa8f08889bf9_63734422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <!-- Footer content -->
                        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_81329867665aa8f088897c7_88290655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <footer class="page-footer">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66199835165aa8f08889bf9_63734422', 'page_footer', $this->tplIndex);
?>

                    </footer>
                <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_footer_container'} */
class Block_96265316665aa8f0888ace0_15437968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="product-footer">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAccessories','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductSameCategory','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

		</div>
	<?php
}
}
/* {/block 'product_footer_container'} */
/* {block 'block_full_width'} */
class Block_50750293465aa8f088850e4_23090308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_50750293465aa8f088850e4_23090308',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_81329867665aa8f088897c7_88290655',
  ),
  'page_footer' => 
  array (
    0 => 'Block_66199835165aa8f08889bf9_63734422',
  ),
  'product_footer_container' => 
  array (
    0 => 'Block_96265316665aa8f0888ace0_15437968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_layout_width_type'])) && $_smarty_tpl->tpl_vars['opThemect']->value['product_layout_width_type']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['product_layout_width_type'], ENT_QUOTES, 'UTF-8');
}?> container-parent">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_layout'])) && $_smarty_tpl->tpl_vars['opThemect']->value['product_layout']) {?>
            <section id="main" class="product-layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['product_layout'], ENT_QUOTES, 'UTF-8');?>
">
                <meta content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_product/product-".((string)$_smarty_tpl->tpl_vars['opThemect']->value['product_layout']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductSizeGuide'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81329867665aa8f088897c7_88290655', 'page_footer_container', $this->tplIndex);
?>

            </section>
        <?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96265316665aa8f0888ace0_15437968', 'product_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'block_full_width'} */
}
