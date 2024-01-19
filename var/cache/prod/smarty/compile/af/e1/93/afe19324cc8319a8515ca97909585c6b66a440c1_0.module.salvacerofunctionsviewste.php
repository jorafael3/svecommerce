<?php
/* Smarty version 3.1.47, created on 2024-01-18 17:54:41
  from 'module:salvacerofunctionsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a9ac3156a103_94982996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe19324cc8319a8515ca97909585c6b66a440c1' => 
    array (
      0 => 'module:salvacerofunctionsviewste',
      1 => 1691393047,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a9ac3156a103_94982996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="switch prestashop-switch custom-switch">
    <input type="radio" data-id="<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" name="SALVACERO_FUNCTIONS_STATUS_MODE_<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
"
        id="SALVACERO_FUNCTIONS_LIVE_MODE_on_<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" class="custom_switch_salvacero" value="1" <?php if ($_smarty_tpl->tpl_vars['active']->value == 1) {?>
        checked="checked" <?php }?>>
    <input type="radio" data-id="<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" name="SALVACERO_FUNCTIONS_STATUS_MODE_<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
"
        id="SALVACERO_FUNCTIONS_LIVE_MODE_off_<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
" class="custom_switch_salvacero" value="0" <?php if ($_smarty_tpl->tpl_vars['active']->value == 0) {?>
        checked="checked" <?php }?>>
    <a class="slide-button btn"></a>
</span><?php }
}
