<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:51:54
  from 'C:\xampp\htdocs\svecommerce\modules\smartblog\views\templates\admin\addjs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6602000abde730_27386148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285c9215eaef754c539c32dc4dbbda16e67c708a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\smartblog\\views\\templates\\admin\\addjs.tpl',
      1 => 1711123678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602000abde730_27386148 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.icon-AdminSmartBlog:before{
  content: "\f14b";
   }
 
</style>

<?php echo '<script'; ?>
 type="text/javascript">
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }
echo '</script'; ?>
><?php }
}
