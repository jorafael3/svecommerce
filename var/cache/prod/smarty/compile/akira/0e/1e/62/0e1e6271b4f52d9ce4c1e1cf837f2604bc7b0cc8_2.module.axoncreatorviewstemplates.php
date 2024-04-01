<?php
/* Smarty version 3.1.47, created on 2024-04-01 12:26:00
  from 'module:axoncreatorviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660aee28bb0c35_47378673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e1e6271b4f52d9ce4c1e1cf837f2604bc7b0cc8' => 
    array (
      0 => 'module:axoncreatorviewstemplates',
      1 => 1711123670,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660aee28bb0c35_47378673 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    $('.ajax-elementor-contact-xxx .send-response').html('<div class="alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notif']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div>');
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['token']->value) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=token]').val('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=from]').val('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
    $('.ajax-elementor-contact-xxx [name=message]').val('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
  <?php echo '</script'; ?>
>
<?php }
}
}
