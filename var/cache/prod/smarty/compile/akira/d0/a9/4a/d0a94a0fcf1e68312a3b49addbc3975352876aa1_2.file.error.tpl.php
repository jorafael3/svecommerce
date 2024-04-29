<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:38:39
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:54
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\modules\ganalyticspro\views\templates\hook\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f406f4f9465_98601018',
=======
  'unifunc' => 'content_660adee64c5330_32489529',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a94a0fcf1e68312a3b49addbc3975352876aa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\ganalyticspro\\views\\templates\\hook\\error.tpl',
      1 => 1711123670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f406f4f9465_98601018 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660adee64c5330_32489529 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?><div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aErrors']->value, 'aError', false, 'nKey', 'condition', array (
));
$_smarty_tpl->tpl_vars['aError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nKey']->value => $_smarty_tpl->tpl_vars['aError']->value) {
$_smarty_tpl->tpl_vars['aError']->do_else = false;
?>
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['aError']->value['msg'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['bDebug']->value == true) {?>
	<ol>
		<?php if (!empty($_smarty_tpl->tpl_vars['aError']->value['code'])) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error code','mod'=>'ganalyticspro'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['aError']->value['code']), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['aError']->value['file'])) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error file','mod'=>'ganalyticspro'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['aError']->value['file'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['aError']->value['line'])) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error line','mod'=>'ganalyticspro'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['aError']->value['line']), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['aError']->value['context'])) {?><li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error context','mod'=>'ganalyticspro'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['aError']->value['context'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	</ol>
	<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
