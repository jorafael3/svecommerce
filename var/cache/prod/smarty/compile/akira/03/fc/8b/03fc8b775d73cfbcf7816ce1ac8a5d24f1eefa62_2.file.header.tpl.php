<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:26:03
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\modules\ganalyticspro\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f41085a53c0_85724554',
=======
  'unifunc' => 'content_660aee2b435ec7_81594204',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03fc8b775d73cfbcf7816ce1ac8a5d24f1eefa62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\ganalyticspro\\views\\templates\\hook\\header.tpl',
      1 => 1711123670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f41085a53c0_85724554 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee2b435ec7_81594204 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
if (!empty($_smarty_tpl->tpl_vars['btGtagSource']->value) && !empty($_smarty_tpl->tpl_vars['btUseGFour']->value)) {?>
	<?php echo '<script'; ?>
 async src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btGtagSource']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
}
}
