<?php
/* Smarty version 3.1.47, created on 2024-01-05 10:17:51
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65981d9f7ef106_33093168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b36306bbc584933b620ad99b3a57eedc3c3ffb' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/brands.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_65981d9f7ef106_33093168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130417407565981d9f7eb9d8_80857116', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_miniature'} */
class Block_16875778965981d9f7ec254_49342549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul class="list_brand wrapper-list-brand row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_130417407565981d9f7eb9d8_80857116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130417407565981d9f7eb9d8_80857116',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_16875778965981d9f7ec254_49342549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16875778965981d9f7ec254_49342549', 'brand_miniature', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
