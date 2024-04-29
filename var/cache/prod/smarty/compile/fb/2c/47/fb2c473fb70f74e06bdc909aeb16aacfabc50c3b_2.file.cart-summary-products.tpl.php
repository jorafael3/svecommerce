<?php
/* Smarty version 3.1.47, created on 2024-04-29 17:47:43
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6630238fd5e563_58660999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2c473fb70f74e06bdc909aeb16aacfabc50c3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary-products.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-items-subtotal.tpl' => 1,
  ),
),false)) {
function content_6630238fd5e563_58660999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="cart-summary-products cart-summary-products-wrapper js-cart-summary-products">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17292635006630238fd5d985_79173826', 'cart_summary_product_list');
?>

</div><?php }
/* {block 'cart_summary_product_list'} */
class Block_17292635006630238fd5d985_79173826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_list' => 
  array (
    0 => 'Block_17292635006630238fd5d985_79173826',
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
