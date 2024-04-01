<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:32:14
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0e9e4b6bd3_97363394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21497a77293fc53a7bd7437ba1dda83d3420de4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\errors\\404.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a0e9e4b6bd3_97363394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['404_override_content_by_hook'])) && $_smarty_tpl->tpl_vars['opThemect']->value['404_override_content_by_hook']) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_624966638660a0e9e4b1572_32401654', 'block_full_width');
?>

<?php } else { ?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823553214660a0e9e4b4a21_12766377', "content");
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'block_full_width'} */
class Block_624966638660a0e9e4b1572_32401654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_624966638660a0e9e4b1572_32401654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'display404PageBuilder'),$_smarty_tpl ) );?>

	<?php
}
}
/* {/block 'block_full_width'} */
/* {block "content"} */
class Block_823553214660a0e9e4b4a21_12766377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_823553214660a0e9e4b4a21_12766377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="text-center">
			<h1>404</h1>
			<h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry! Page you are looking can’t be found.','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</h5>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go back to the','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home page','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</a></p>
		</div>
	<?php
}
}
/* {/block "content"} */
}
