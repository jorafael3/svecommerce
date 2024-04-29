<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:19:02
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:36
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3bd668fc05_66154121',
=======
  'unifunc' => 'content_660aded498f908_06389463',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91416238f284672426c1f99b10e20f958f943773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary.tpl',
      1 => 1711123680,
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
function content_662f3bd668fc05_66154121 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aded498f908_06389463 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971641514662f3bd668bdd9_43872355', 'hook_checkout_summary_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506103441660aded498b026_92069973', 'hook_checkout_summary_top');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836414923662f3bd668c924_28349516', 'cart_summary_products');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145036180660aded498be47_27339103', 'cart_summary_products');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1058361617662f3bd668d1b3_74351784', 'cart_summary_subtotals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195271310660aded498c946_01593549', 'cart_summary_subtotals');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86950955662f3bd668d9d2_83306422', 'cart_summary_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964454188660aded498d283_28732978', 'cart_summary_voucher');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1141474362662f3bd668e144_05993719', 'cart_summary_totals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_506810090660aded498da99_22449090', 'cart_summary_totals');
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
class Block_971641514662f3bd668bdd9_43872355 extends Smarty_Internal_Block
=======
class Block_1506103441660aded498b026_92069973 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_971641514662f3bd668bdd9_43872355',
=======
    0 => 'Block_1506103441660aded498b026_92069973',
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
class Block_836414923662f3bd668c924_28349516 extends Smarty_Internal_Block
=======
class Block_145036180660aded498be47_27339103 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
<<<<<<< HEAD
    0 => 'Block_836414923662f3bd668c924_28349516',
=======
    0 => 'Block_145036180660aded498be47_27339103',
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
class Block_1058361617662f3bd668d1b3_74351784 extends Smarty_Internal_Block
=======
class Block_1195271310660aded498c946_01593549 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1058361617662f3bd668d1b3_74351784',
=======
    0 => 'Block_1195271310660aded498c946_01593549',
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
class Block_86950955662f3bd668d9d2_83306422 extends Smarty_Internal_Block
=======
class Block_1964454188660aded498d283_28732978 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_86950955662f3bd668d9d2_83306422',
=======
    0 => 'Block_1964454188660aded498d283_28732978',
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
class Block_1141474362662f3bd668e144_05993719 extends Smarty_Internal_Block
=======
class Block_506810090660aded498da99_22449090 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1141474362662f3bd668e144_05993719',
=======
    0 => 'Block_506810090660aded498da99_22449090',
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
