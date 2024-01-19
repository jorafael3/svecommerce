<?php
/* Smarty version 3.1.47, created on 2024-01-18 10:08:13
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/_partials/cart-summary-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a93edd2057b1_09099688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e25becc5e38f92aee3251de338c3f40396324556' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/_partials/cart-summary-products.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-items-subtotal.tpl' => 1,
  ),
),false)) {
function content_65a93edd2057b1_09099688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="cart-summary-products cart-summary-products-wrapper js-cart-summary-products">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184801696565a93edd204b97_72273040', 'cart_summary_product_list');
?>

</div><?php }
/* {block 'cart_summary_product_list'} */
class Block_184801696565a93edd204b97_72273040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_list' => 
  array (
    0 => 'Block_184801696565a93edd204b97_72273040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="cart-summary-product-list">
            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-items-subtotal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    <?php
}
}
/* {/block 'cart_summary_product_list'} */
}
