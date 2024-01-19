<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:18:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/smartblog/views/templates/admin/addjs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa92c4ba9ca6_68208463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10f9c4942d5fea4d217e705b6546462fc9a63fae' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/smartblog/views/templates/admin/addjs.tpl',
      1 => 1685021483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa92c4ba9ca6_68208463 (Smarty_Internal_Template $_smarty_tpl) {
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
