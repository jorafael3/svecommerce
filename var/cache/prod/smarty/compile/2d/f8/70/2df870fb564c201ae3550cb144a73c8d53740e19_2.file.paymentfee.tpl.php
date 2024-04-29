<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:19:02
  from 'C:\xampp\htdocs\svecommerce\modules\wkpaymentfee\views\templates\hook\paymentfee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f3bd6587991_36912558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df870fb564c201ae3550cb144a73c8d53740e19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\wkpaymentfee\\views\\templates\\hook\\paymentfee.tpl',
      1 => 1711210464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f3bd6587991_36912558 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id='wk-payment-fee'>
	<input type='hidden' name='wk-payment-fee-amount' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wk_fee']->value, ENT_QUOTES, 'UTF-8');?>
'/>
	<input type='hidden' name='wk-payment-fee-type' value='<?php if ($_smarty_tpl->tpl_vars['wk_fee_type']->value) {?>1<?php } else { ?>0<?php }?>'/>
	<?php if ($_smarty_tpl->tpl_vars['wk_fee_type']->value) {?>
		<p class='paymentfee'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','mod'=>'wkpaymentfee'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wk_display_fee']->value, ENT_QUOTES, 'UTF-8');?>
 </p>
	<?php } else { ?>
		<p class='paymentfee'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional fee','mod'=>'wkpaymentfee'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wk_display_fee']->value, ENT_QUOTES, 'UTF-8');?>
 </p>
	<?php }?>
	<div class="fee_description"><?php echo $_smarty_tpl->tpl_vars['wk_description']->value;?>
</div>
</div>

<style type='text/css'>
	.paymentfee {
		color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
		font-size: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['font']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
	}
</style>
<?php }
}
