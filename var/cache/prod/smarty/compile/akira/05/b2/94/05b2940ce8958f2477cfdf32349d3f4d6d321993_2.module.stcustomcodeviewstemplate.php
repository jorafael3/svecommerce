<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:32:12
  from 'module:stcustomcodeviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0e9c76d981_22421182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b2940ce8958f2477cfdf32349d3f4d6d321993' => 
    array (
      0 => 'module:stcustomcodeviewstemplate',
      1 => 1711210464,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a0e9c76d981_22421182 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['stcustomcode']->value))) {?>
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
}
}
}
