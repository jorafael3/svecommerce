<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:19:02
  from 'module:datafastviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f3bd64455b9_63755582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53cd19d98a7d904e975ac68a07e286aef47a0f56' => 
    array (
      0 => 'module:datafastviewstemplatesfro',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f3bd64455b9_63755582 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
    <?php if ($_smarty_tpl->tpl_vars['message']->value == '') {?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'the payment option will be shown in the following page','mod'=>'datafast'),$_smarty_tpl ) );?>
</p>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php }?>
</section>
<?php }
}
