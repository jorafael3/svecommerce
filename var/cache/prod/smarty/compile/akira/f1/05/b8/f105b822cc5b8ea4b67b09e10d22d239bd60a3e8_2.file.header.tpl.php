<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ganalyticspro/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa9253a4c564_74790459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f105b822cc5b8ea4b67b09e10d22d239bd60a3e8' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/ganalyticspro/views/templates/hook/header.tpl',
      1 => 1688410886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa9253a4c564_74790459 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['btGtagSource']->value) && !empty($_smarty_tpl->tpl_vars['btUseGFour']->value)) {?>
	<?php echo '<script'; ?>
 async src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btGtagSource']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
}
}
