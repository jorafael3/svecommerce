<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:26:37
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6601fa1d1992a4_70089971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa68704b6a63804dfd46d0d048e5b0c7a4734b94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\index.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601fa1d1992a4_70089971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3021321566601fa1d196f06_75345030', 'breadcrumb');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10499801376601fa1d197636_24942220', 'block_full_width');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'breadcrumb'} */
class Block_3021321566601fa1d196f06_75345030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_3021321566601fa1d196f06_75345030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'hook_home'} */
class Block_16646331276601fa1d1981d2_93264784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

				<?php
}
}
/* {/block 'hook_home'} */
/* {block "content"} */
class Block_920122626601fa1d197f07_38220487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16646331276601fa1d1981d2_93264784', 'hook_home', $this->tplIndex);
?>

			<?php
}
}
/* {/block "content"} */
/* {block 'block_full_width'} */
class Block_10499801376601fa1d197636_24942220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_10499801376601fa1d197636_24942220',
  ),
  'content' => 
  array (
    0 => 'Block_920122626601fa1d197f07_38220487',
  ),
  'hook_home' => 
  array (
    0 => 'Block_16646331276601fa1d1981d2_93264784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="content-wrapper">
		<div id="main-content">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_920122626601fa1d197f07_38220487', "content", $this->tplIndex);
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
