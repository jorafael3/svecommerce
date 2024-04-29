<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 21:42:27
=======
/* Smarty version 3.1.47, created on 2024-04-01 10:29:01
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f0913a25833_92554463',
=======
  'unifunc' => 'content_660ad2bd06b9c8_03992740',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91416238f284672426c1f99b10e20f958f943773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662f0913a25833_92554463 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660ad2bd06b9c8_03992740 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="js-cart ax-cart-summary cart-summary" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
	
  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart totals','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</h2>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1894042118662f0913a1f2e7_59637707', 'hook_checkout_summary_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247830101660ad2bd065247_57080960', 'hook_checkout_summary_top');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_521551378662f0913a21de0_11820730', 'cart_summary_products');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1250383348660ad2bd067f26_38216361', 'cart_summary_products');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1937753146662f0913a22779_03175889', 'cart_summary_subtotals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1303391728660ad2bd0689b0_24191427', 'cart_summary_subtotals');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146825849662f0913a23026_24760852', 'cart_summary_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_992961323660ad2bd0692e2_51493835', 'cart_summary_voucher');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_228252776662f0913a237a3_88377604', 'cart_summary_totals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1352039129660ad2bd069b61_20690943', 'cart_summary_totals');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

	
  <div class="checkout cart-btn-actions">
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',null,$_smarty_tpl->tpl_vars['language']->value['id'],array('action'=>'show'),false,null,true), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View And Edit Cart','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</a>
      </div>
  </div>

</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
<<<<<<< HEAD
class Block_1894042118662f0913a1f2e7_59637707 extends Smarty_Internal_Block
=======
class Block_247830101660ad2bd065247_57080960 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1894042118662f0913a1f2e7_59637707',
=======
    0 => 'Block_247830101660ad2bd065247_57080960',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
<<<<<<< HEAD
class Block_521551378662f0913a21de0_11820730 extends Smarty_Internal_Block
=======
class Block_1250383348660ad2bd067f26_38216361 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
<<<<<<< HEAD
    0 => 'Block_521551378662f0913a21de0_11820730',
=======
    0 => 'Block_1250383348660ad2bd067f26_38216361',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
<<<<<<< HEAD
class Block_1937753146662f0913a22779_03175889 extends Smarty_Internal_Block
=======
class Block_1303391728660ad2bd0689b0_24191427 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1937753146662f0913a22779_03175889',
=======
    0 => 'Block_1303391728660ad2bd0689b0_24191427',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_voucher'} */
<<<<<<< HEAD
class Block_146825849662f0913a23026_24760852 extends Smarty_Internal_Block
=======
class Block_992961323660ad2bd0692e2_51493835 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_146825849662f0913a23026_24760852',
=======
    0 => 'Block_992961323660ad2bd0692e2_51493835',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
/* {block 'cart_summary_totals'} */
<<<<<<< HEAD
class Block_228252776662f0913a237a3_88377604 extends Smarty_Internal_Block
=======
class Block_1352039129660ad2bd069b61_20690943 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_228252776662f0913a237a3_88377604',
=======
    0 => 'Block_1352039129660ad2bd069b61_20690943',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
}
