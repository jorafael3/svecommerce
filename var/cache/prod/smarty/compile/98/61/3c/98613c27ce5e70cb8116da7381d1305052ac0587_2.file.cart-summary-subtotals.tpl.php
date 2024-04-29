<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-summary-subtotals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f410842fb10_57747005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98613c27ce5e70cb8116da7381d1305052ac0587' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-summary-subtotals.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f410842fb10_57747005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-subtotals-container js-cart-summary-subtotals-container">

    
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['subtotal']->value['value'], $tmp) > 0 && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
      <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>-&nbsp;<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
