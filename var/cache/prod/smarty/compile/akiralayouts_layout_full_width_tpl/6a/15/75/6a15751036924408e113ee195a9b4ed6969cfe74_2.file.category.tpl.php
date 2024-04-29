<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:42
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc06a3b6e50_83316637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a15751036924408e113ee195a9b4ed6969cfe74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\listing\\category.tpl',
      1 => 1711123680,
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
function content_662fc06a3b6e50_83316637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 

	 	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1944315287662fc06a3acf23_66004729', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1067842799662fc06a3adb58_09373725', 'block_subcategories');
?>
 
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1098746583662fc06a3b10e4_86346070', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_545999002662fc06a3b2166_69944455', 'product_list_footer');
?>

	 	  	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_banner_layout'])) && !$_smarty_tpl->tpl_vars['opThemect']->value['category_banner_layout']) {?> 
	<?php $_smarty_tpl->_assignInScope('c_imageType', 'category_default');?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']))) {?>
		<?php $_smarty_tpl->_assignInScope('c_imageType', $_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']);?>
	<?php }?> 
	 
	<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['url'])) {?>
	 	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_758133243662fc06a3b5020_66512518', 'bg_page_header_title');
?>

	<?php }?> 
<?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1696021906662fc06a3b61f6_38177445', 'banner_boxed');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'page_header_title'} */
class Block_1944315287662fc06a3acf23_66004729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_1944315287662fc06a3acf23_66004729',
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
class Block_1067842799662fc06a3adb58_09373725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_subcategories' => 
  array (
    0 => 'Block_1067842799662fc06a3adb58_09373725',
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
class Block_1098746583662fc06a3b10e4_86346070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_1098746583662fc06a3b10e4_86346070',
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
class Block_545999002662fc06a3b2166_69944455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_545999002662fc06a3b2166_69944455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_footer'} */
/* {block 'bg_page_header_title'} */
class Block_758133243662fc06a3b5020_66512518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bg_page_header_title' => 
  array (
    0 => 'Block_758133243662fc06a3b5020_66512518',
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
class Block_1696021906662fc06a3b61f6_38177445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_boxed' => 
  array (
    0 => 'Block_1696021906662fc06a3b61f6_38177445',
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
