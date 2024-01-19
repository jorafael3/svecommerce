<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:14:32
  from 'module:stcustomcodeviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64822898509734_22907689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b2940ce8958f2477cfdf32349d3f4d6d321993' => 
    array (
      0 => 'module:stcustomcodeviewstemplate',
      1 => 1685021481,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64822898509734_22907689 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/stcustomcode/views/templates/hook/header.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['stcustomcode']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['css']) {?>
    <style type="text/css"><?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['css'];?>
</style>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['js']) {?>
    <?php echo '<script'; ?>
 type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['js'];
echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['head_code']) {?>
    <?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['head_code'];?>

    <?php }
}?><!-- end /home/u672279739/domains/salvacerohomecenter.com/public_html/modules/stcustomcode/views/templates/hook/header.tpl --><?php }
}
