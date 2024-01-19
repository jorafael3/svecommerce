<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:10
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6482284610e2a5_22282246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4ef1c413f798fec6b86160e43fca71c7a06364' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/footer.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6482284610e2a5_22282246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7207076286482284610ad88_81782165', 'hook_footer_before');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20007996236482284610c0c6_26376123', 'hook_footer');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7978762646482284610d016_49545079', 'hook_footer_after');
?>

	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPageBuilder'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_7207076286482284610ad88_81782165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_7207076286482284610ad88_81782165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_20007996236482284610c0c6_26376123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20007996236482284610c0c6_26376123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_7978762646482284610d016_49545079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_7978762646482284610d016_49545079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_after'} */
}
