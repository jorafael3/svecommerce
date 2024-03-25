<?php
/* Smarty version 3.1.47, created on 2024-03-25 18:01:01
  from 'C:\xampp\htdocs\svecommerce\modules\smartblog\views\templates\admin\addjs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6602022da23f94_06505893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b391389991aef9280f1d9d6cc63fadb6956b5cb6' => 
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
function content_6602022da23f94_06505893 (Smarty_Internal_Template $_smarty_tpl) {
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
