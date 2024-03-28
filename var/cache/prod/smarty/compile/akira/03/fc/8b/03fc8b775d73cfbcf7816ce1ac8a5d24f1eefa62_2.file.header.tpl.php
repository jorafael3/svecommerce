<?php
/* Smarty version 3.1.47, created on 2024-03-28 14:41:42
  from 'C:\xampp\htdocs\svecommerce\modules\ganalyticspro\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6605c7f69cf523_45902133',
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
function content_6605c7f69cf523_45902133 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['btGtagSource']->value) && !empty($_smarty_tpl->tpl_vars['btUseGFour']->value)) {?>
	<?php echo '<script'; ?>
 async src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btGtagSource']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
}
}
