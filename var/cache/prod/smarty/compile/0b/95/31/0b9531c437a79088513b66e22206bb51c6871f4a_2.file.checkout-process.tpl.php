<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:19:01
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:35
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\checkout-process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3bd5da1a91_04672669',
=======
  'unifunc' => 'content_660aded3a8d5a9_08100094',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b9531c437a79088513b66e22206bb51c6871f4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\checkout-process.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f3bd5da1a91_04672669 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aded3a8d5a9_08100094 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'step', false, 'index');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl ) );?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
