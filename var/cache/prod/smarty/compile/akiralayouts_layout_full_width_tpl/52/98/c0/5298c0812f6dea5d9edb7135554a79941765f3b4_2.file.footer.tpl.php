<?php
/* Smarty version 3.1.47, created on 2024-03-22 17:30:01
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fe0669779b84_34359729',
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
function content_65fe0669779b84_34359729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133067639665fe0669777cd8_04886979', 'hook_footer_before');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184774753765fe06697788f6_58769672', 'hook_footer');
?>

	</div>
</div>
<div class="container container-parent">
	<div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31858075965fe0669779227_43363566', 'hook_footer_after');
?>

	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPageBuilder'),$_smarty_tpl ) );
}
/* {block 'hook_footer_before'} */
class Block_133067639665fe0669777cd8_04886979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_133067639665fe0669777cd8_04886979',
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
class Block_184774753765fe06697788f6_58769672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_184774753765fe06697788f6_58769672',
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
class Block_31858075965fe0669779227_43363566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_31858075965fe0669779227_43363566',
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
