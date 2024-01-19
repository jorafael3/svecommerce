<?php
/* Smarty version 3.1.47, created on 2024-01-19 07:37:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa6d08734958_76435648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf2bff5bbb3b6c8bbb35c7e60c277aa63f2ee15' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/category.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/category-subcategories.tpl' => 1,
    'file:catalog/_partials/category-footer.tpl' => 1,
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_65aa6d08734958_76435648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 

	 	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182726116965aa6d08723fc5_25825613', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23026992465aa6d087256c7_60601141', 'block_subcategories');
?>
 
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157129774965aa6d08728c56_54231673', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91723234065aa6d0872ac93_87040926', 'product_list_footer');
?>

	 	  	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_banner_layout'])) && !$_smarty_tpl->tpl_vars['opThemect']->value['category_banner_layout']) {?> 
	<?php $_smarty_tpl->_assignInScope('c_imageType', 'category_default');?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']))) {?>
		<?php $_smarty_tpl->_assignInScope('c_imageType', $_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']);?>
	<?php }?> 
	 
	<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['url'])) {?>
	 	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94761615965aa6d08730b07_58924304', 'bg_page_header_title');
?>

	<?php }?> 
<?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15952007765aa6d08732e22_03172599', 'banner_boxed');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'page_header_title'} */
class Block_182726116965aa6d08723fc5_25825613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_182726116965aa6d08723fc5_25825613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'block_subcategories'} */
class Block_23026992465aa6d087256c7_60601141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_subcategories' => 
  array (
    0 => 'Block_23026992465aa6d087256c7_60601141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_show_sub'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_show_sub']) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/category-subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}
}
/* {/block 'block_subcategories'} */
/* {block 'product_list_header'} */
class Block_157129774965aa6d08728c56_54231673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_157129774965aa6d08728c56_54231673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
		<div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
	<?php }
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_footer'} */
class Block_91723234065aa6d0872ac93_87040926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_91723234065aa6d0872ac93_87040926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_footer'} */
/* {block 'bg_page_header_title'} */
class Block_94761615965aa6d08730b07_58924304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bg_page_header_title' => 
  array (
    0 => 'Block_94761615965aa6d08730b07_58924304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['opThemect']) ? $_smarty_tpl->tpl_vars['opThemect']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bg_page_title_img'] = $_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['url'];
$_smarty_tpl->_assignInScope('opThemect', $_tmp_array);?>
	 	<?php
}
}
/* {/block 'bg_page_header_title'} */
/* {block 'banner_boxed'} */
class Block_15952007765aa6d08732e22_03172599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_boxed' => 
  array (
    0 => 'Block_15952007765aa6d08732e22_03172599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>
    <?php
}
}
/* {/block 'banner_boxed'} */
}
