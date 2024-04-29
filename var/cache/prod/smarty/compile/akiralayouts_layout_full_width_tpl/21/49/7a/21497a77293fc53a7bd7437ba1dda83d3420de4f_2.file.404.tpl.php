<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:42
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410865f144_33713647',
=======
  'unifunc' => 'content_660aee160c1396_58820765',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21497a77293fc53a7bd7437ba1dda83d3420de4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\errors\\404.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f410865f144_33713647 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee160c1396_58820765 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['404_override_content_by_hook'])) && $_smarty_tpl->tpl_vars['opThemect']->value['404_override_content_by_hook']) {?>
	<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1463641710662f410865a602_76183946', 'block_full_width');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_480750377660aee160b96c5_43245883', 'block_full_width');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php } else { ?>
	<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_901584547662f410865d3b5_89524792', "content");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550467361660aee160bdb11_89806983', "content");
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'block_full_width'} */
<<<<<<< HEAD
class Block_1463641710662f410865a602_76183946 extends Smarty_Internal_Block
=======
class Block_480750377660aee160b96c5_43245883 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'block_full_width' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1463641710662f410865a602_76183946',
=======
    0 => 'Block_480750377660aee160b96c5_43245883',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_901584547662f410865d3b5_89524792 extends Smarty_Internal_Block
=======
class Block_1550467361660aee160bdb11_89806983 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_901584547662f410865d3b5_89524792',
=======
    0 => 'Block_1550467361660aee160bdb11_89806983',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
