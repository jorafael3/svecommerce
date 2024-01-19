<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:02:33
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa8f0902f1a2_47152070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3e0593edc70949cc468793ff2a9e16207b36ad' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-attachment.tpl' => 1,
  ),
),false)) {
function content_65aa8f0902f1a2_47152070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="js-product-images-modal">
	<div class="product_meta">
		<div class="sku_wrapper">
			<span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SKU','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
: </span>
			<span>
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

				<?php }?>
			</span>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212658016765aa8f09029c41_91554692', 'product_attachment');
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTags'),$_smarty_tpl ) );?>

	</div>
	<?php $_smarty_tpl->_assignInScope('imageType', 'large_default');?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']))) {?>
		<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['product_image_type']);?>
	<?php }?>	 

	<?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
		<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['default_image']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
	<?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductShareButtons','link'=>$_smarty_tpl->tpl_vars['product']->value['canonical_url'],'img'=>$_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'],'title'=>$_smarty_tpl->tpl_vars['product']->value['name']),$_smarty_tpl ) );?>

</div>
<?php }
/* {block 'product_attachment'} */
class Block_212658016765aa8f09029c41_91554692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_attachment' => 
  array (
    0 => 'Block_212658016765aa8f09029c41_91554692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-attachment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'product_attachment'} */
}
