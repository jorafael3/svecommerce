<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:40:27
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:37
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f40dbbf18c1_43187468',
=======
  'unifunc' => 'content_660aded501aae9_90086460',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2541f76226ef8f855632125e9c6dc9d6d631a2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f40dbbf18c1_43187468 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aded501aae9_90086460 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="cart-summary-totals js-cart-summary-totals">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNrtCartInfo'),$_smarty_tpl ) );?>

  
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1267886422662f40dbbec655_11023606', 'cart_summary_total');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998872453660aded5014b02_31248406', 'cart_summary_total');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2110668367662f40dbbf0168_14444361', 'cart_summary_tax');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_612965600660aded5018f90_18950761', 'cart_summary_tax');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

</div>
<?php }
/* {block 'cart_summary_total'} */
<<<<<<< HEAD
class Block_1267886422662f40dbbec655_11023606 extends Smarty_Internal_Block
=======
class Block_1998872453660aded5014b02_31248406 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1267886422662f40dbbec655_11023606',
=======
    0 => 'Block_1998872453660aded5014b02_31248406',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <div class="cart-summary-line">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } else { ?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
<<<<<<< HEAD
class Block_2110668367662f40dbbf0168_14444361 extends Smarty_Internal_Block
=======
class Block_612965600660aded5018f90_18950761 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2110668367662f40dbbf0168_14444361',
=======
    0 => 'Block_612965600660aded5018f90_18950761',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
      <div class="cart-summary-line">
        <span class="label sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
