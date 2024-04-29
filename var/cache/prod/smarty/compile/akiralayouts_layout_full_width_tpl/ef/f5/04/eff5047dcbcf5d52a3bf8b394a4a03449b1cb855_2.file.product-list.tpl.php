<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:42
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc06a544cf0_88629699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff5047dcbcf5d52a3bf8b394a4a03449b1cb855' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/listing/_listing/listing-".((string)$_smarty_tpl->tpl_vars[\'opThemect\']->value[\'category_layout\']).".tpl' => 1,
  ),
),false)) {
function content_662fc06a544cf0_88629699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48785069662fc06a53ee26_27390460', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170610511662fc06a53fe38_82465399', 'page_header_title');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>

	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_layout'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_layout']) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:catalog/listing/_listing/listing-".((string)$_smarty_tpl->tpl_vars['opThemect']->value['category_layout']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'head_microdata_special'} */
class Block_48785069662fc06a53ee26_27390460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_48785069662fc06a53ee26_27390460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'page_header_title'} */
class Block_170610511662fc06a53fe38_82465399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_170610511662fc06a53fe38_82465399',
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
