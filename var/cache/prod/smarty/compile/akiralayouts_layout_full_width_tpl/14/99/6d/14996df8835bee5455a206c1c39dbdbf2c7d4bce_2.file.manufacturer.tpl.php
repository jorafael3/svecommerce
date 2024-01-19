<?php
/* Smarty version 3.1.47, created on 2024-01-18 22:53:49
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a9f24d80f172_03600514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14996df8835bee5455a206c1c39dbdbf2c7d4bce' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/manufacturer.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a9f24d80f172_03600514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18190321065a9f24d80cd94_89869842', 'page_header_title');
?>
	 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203935035065a9f24d80ddb0_67162059', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'page_header_title'} */
class Block_18190321065a9f24d80cd94_89869842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_18190321065a9f24d80cd94_89869842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'product_list_header'} */
class Block_203935035065a9f24d80ddb0_67162059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_203935035065a9f24d80ddb0_67162059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="page-header">
		<div id="manufacturer-short_description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>
</div>
		<div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
	</div>
<?php
}
}
/* {/block 'product_list_header'} */
}
