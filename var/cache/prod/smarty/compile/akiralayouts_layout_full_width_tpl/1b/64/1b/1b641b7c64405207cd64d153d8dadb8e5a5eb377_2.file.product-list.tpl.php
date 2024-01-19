<?php
/* Smarty version 3.1.47, created on 2024-01-19 07:37:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa6d08743906_08296963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b641b7c64405207cd64d153d8dadb8e5a5eb377' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/listing/product-list.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/listing/_listing/listing-".((string)$_smarty_tpl->tpl_vars[\'opThemect\']->value[\'category_layout\']).".tpl' => 1,
  ),
),false)) {
function content_65aa6d08743906_08296963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67215110465aa6d0873d209_11667003', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179893262965aa6d0873e709_76077116', 'page_header_title');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>

	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout']) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:catalog/listing/_listing/listing-".((string)$_smarty_tpl->tpl_vars['opThemect']->value['category_layout']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'head_microdata_special'} */
class Block_67215110465aa6d0873d209_11667003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_67215110465aa6d0873d209_11667003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'page_header_title'} */
class Block_179893262965aa6d0873e709_76077116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_179893262965aa6d0873e709_76077116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_header_title'} */
}
