<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:40:27
=======
/* Smarty version 3.1.47, created on 2024-04-01 09:58:31
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-detailed-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f40db9cf8c7_98611551',
=======
  'unifunc' => 'content_660acb973c7570_11616614',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f392e00e68913541b05885a97c609317c783ccac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-detailed-totals.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-voucher.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662f40db9cf8c7_98611551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1280419663662f40db9c7ea7_66862325', 'cart_detailed_totals');
=======
function content_660acb973c7570_11616614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2058980805660acb973bec85_11435197', 'cart_detailed_totals');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
/* {block 'cart_voucher'} */
<<<<<<< HEAD
class Block_1702819046662f40db9ce210_41254471 extends Smarty_Internal_Block
=======
class Block_774127477660acb973c5f26_61435397 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_voucher'} */
/* {block 'cart_summary_totals'} */
<<<<<<< HEAD
class Block_143524174662f40db9cebe1_70546979 extends Smarty_Internal_Block
=======
class Block_391064650660acb973c67f0_50686835 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_detailed_totals'} */
<<<<<<< HEAD
class Block_1280419663662f40db9c7ea7_66862325 extends Smarty_Internal_Block
=======
class Block_2058980805660acb973bec85_11435197 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_detailed_totals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1280419663662f40db9c7ea7_66862325',
  ),
  'cart_voucher' => 
  array (
    0 => 'Block_1702819046662f40db9ce210_41254471',
  ),
  'cart_summary_totals' => 
  array (
    0 => 'Block_143524174662f40db9cebe1_70546979',
=======
    0 => 'Block_2058980805660acb973bec85_11435197',
  ),
  'cart_voucher' => 
  array (
    0 => 'Block_774127477660acb973c5f26_61435397',
  ),
  'cart_summary_totals' => 
  array (
    0 => 'Block_391064650660acb973c67f0_50686835',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="cart-detailed-totals js-cart-detailed-totals">
  <div class="cart-detailed-subtotals js-cart-detailed-subtotals">  
    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart totals','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</h2>
    
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['subtotal']->value['value'], $tmp) > 0 && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
        <div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
        <span class="label<?php if ('products' === $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
            <?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </span>
        <span class="value">
            <?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>- <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>

        </span>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?>
            <div><small class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</small></div>
        <?php }?>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1702819046662f40db9ce210_41254471', 'cart_voucher', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_774127477660acb973c5f26_61435397', 'cart_voucher', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143524174662f40db9cebe1_70546979', 'cart_summary_totals', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_391064650660acb973c67f0_50686835', 'cart_summary_totals', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


</div>
<?php
}
}
/* {/block 'cart_detailed_totals'} */
}
