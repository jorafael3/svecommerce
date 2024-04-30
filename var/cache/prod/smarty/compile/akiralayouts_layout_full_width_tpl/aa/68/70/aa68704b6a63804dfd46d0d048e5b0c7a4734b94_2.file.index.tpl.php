<?php
/* Smarty version 3.1.47, created on 2024-04-29 21:35:04
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_663058d8915f74_71348186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa68704b6a63804dfd46d0d048e5b0c7a4734b94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\index.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663058d8915f74_71348186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_762134546663058d8913ca6_32846741', 'breadcrumb');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_988979649663058d8914381_77058456', 'block_full_width');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'breadcrumb'} */
class Block_762134546663058d8913ca6_32846741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_762134546663058d8913ca6_32846741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'hook_home'} */
class Block_609844596663058d8914ef1_95061343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

				<?php
}
}
/* {/block 'hook_home'} */
/* {block "content"} */
class Block_1806123792663058d8914c57_43373991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609844596663058d8914ef1_95061343', 'hook_home', $this->tplIndex);
?>

			<?php
}
}
/* {/block "content"} */
/* {block 'block_full_width'} */
class Block_988979649663058d8914381_77058456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_988979649663058d8914381_77058456',
  ),
  'content' => 
  array (
    0 => 'Block_1806123792663058d8914c57_43373991',
  ),
  'hook_home' => 
  array (
    0 => 'Block_609844596663058d8914ef1_95061343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="content-wrapper">
		<div id="main-content">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1806123792663058d8914c57_43373991', "content", $this->tplIndex);
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
