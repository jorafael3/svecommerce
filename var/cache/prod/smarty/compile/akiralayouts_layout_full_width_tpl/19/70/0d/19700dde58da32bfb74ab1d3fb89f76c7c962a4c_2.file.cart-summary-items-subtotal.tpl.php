<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:19:02
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:36
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3bd682b910_53756238',
=======
  'unifunc' => 'content_660aded4b99cd9_77207707',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19700dde58da32bfb74ab1d3fb89f76c7c962a4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-product-line.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662f3bd682b910_53756238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_365060824662f3bd6829e71_70459436', 'cart_summary_items_subtotal');
=======
function content_660aded4b99cd9_77207707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113208346660aded4b97c45_80289891', 'cart_summary_items_subtotal');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
<<<<<<< HEAD
class Block_365060824662f3bd6829e71_70459436 extends Smarty_Internal_Block
=======
class Block_2113208346660aded4b97c45_80289891 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
<<<<<<< HEAD
    0 => 'Block_365060824662f3bd6829e71_70459436',
=======
    0 => 'Block_2113208346660aded4b97c45_80289891',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="cart-summary-items-subtotal">
	<span class="summary_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
	<ul class="media-list">
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		<li class="media"><?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
	  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
