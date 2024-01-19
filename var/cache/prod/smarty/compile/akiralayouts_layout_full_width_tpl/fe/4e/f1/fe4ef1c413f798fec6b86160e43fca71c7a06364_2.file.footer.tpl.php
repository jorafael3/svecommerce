<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa9253dc7665_31271147',
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
function content_65aa9253dc7665_31271147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167516955665aa9253dc50e8_40240598', 'hook_footer_before');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98296160965aa9253dc5de3_31646959', 'hook_footer');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182762396665aa9253dc6938_16754652', 'hook_footer_after');
?>

	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPageBuilder'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_167516955665aa9253dc50e8_40240598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_167516955665aa9253dc50e8_40240598',
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
class Block_98296160965aa9253dc5de3_31646959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_98296160965aa9253dc5de3_31646959',
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
class Block_182762396665aa9253dc6938_16754652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_182762396665aa9253dc6938_16754652',
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
