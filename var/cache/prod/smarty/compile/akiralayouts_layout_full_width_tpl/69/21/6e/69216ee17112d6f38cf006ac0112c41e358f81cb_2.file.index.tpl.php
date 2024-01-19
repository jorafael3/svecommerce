<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:19
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa9243eb8a18_20038416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69216ee17112d6f38cf006ac0112c41e358f81cb' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/index.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa9243eb8a18_20038416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71533998565aa9243eb57a9_14035210', 'breadcrumb');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60978828565aa9243eb60b9_33260133', 'block_full_width');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'breadcrumb'} */
class Block_71533998565aa9243eb57a9_14035210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_71533998565aa9243eb57a9_14035210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'hook_home'} */
class Block_156353876665aa9243eb7237_13659341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

				<?php
}
}
/* {/block 'hook_home'} */
/* {block "content"} */
class Block_163581081065aa9243eb6e13_47505978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156353876665aa9243eb7237_13659341', 'hook_home', $this->tplIndex);
?>

			<?php
}
}
/* {/block "content"} */
/* {block 'block_full_width'} */
class Block_60978828565aa9243eb60b9_33260133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_60978828565aa9243eb60b9_33260133',
  ),
  'content' => 
  array (
    0 => 'Block_163581081065aa9243eb6e13_47505978',
  ),
  'hook_home' => 
  array (
    0 => 'Block_156353876665aa9243eb7237_13659341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="content-wrapper">
		<div id="main-content">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163581081065aa9243eb6e13_47505978', "content", $this->tplIndex);
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
