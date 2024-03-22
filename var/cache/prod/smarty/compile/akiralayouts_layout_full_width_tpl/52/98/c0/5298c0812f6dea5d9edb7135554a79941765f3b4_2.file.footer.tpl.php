<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:05
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda5a5d314_52214945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5298c0812f6dea5d9edb7135554a79941765f3b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\footer.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fddda5a5d314_52214945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35873899865fddda5a5b010_75963907', 'hook_footer_before');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138029838165fddda5a5c0d4_03731192', 'hook_footer');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165156474665fddda5a5c8f6_96089786', 'hook_footer_after');
?>

	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPageBuilder'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_35873899865fddda5a5b010_75963907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_35873899865fddda5a5b010_75963907',
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
class Block_138029838165fddda5a5c0d4_03731192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_138029838165fddda5a5c0d4_03731192',
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
class Block_165156474665fddda5a5c8f6_96089786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_165156474665fddda5a5c8f6_96089786',
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
