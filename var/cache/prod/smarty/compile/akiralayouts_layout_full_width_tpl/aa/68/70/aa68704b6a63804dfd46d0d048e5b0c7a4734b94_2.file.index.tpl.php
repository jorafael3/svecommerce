<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:22:32
=======
/* Smarty version 3.1.47, created on 2024-04-01 10:28:02
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3ca882b721_71546908',
=======
  'unifunc' => 'content_660ad282480ae2_40212952',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
function content_662f3ca882b721_71546908 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660ad282480ae2_40212952 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	

	
<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543606524662f3ca88293f9_04382506', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_756355270660ad28247e659_46078343', 'breadcrumb');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

	
<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_544698808662f3ca8829ab8_11379717', 'block_full_width');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1971644128660ad28247ecd7_37638685', 'block_full_width');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_543606524662f3ca88293f9_04382506 extends Smarty_Internal_Block
=======
class Block_756355270660ad28247e659_46078343 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_543606524662f3ca88293f9_04382506',
=======
    0 => 'Block_756355270660ad28247e659_46078343',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'hook_home'} */
<<<<<<< HEAD
class Block_700218286662f3ca882a6a2_56769325 extends Smarty_Internal_Block
=======
class Block_529318934660ad28247f939_94960796 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

				<?php
}
}
/* {/block 'hook_home'} */
/* {block "content"} */
<<<<<<< HEAD
class Block_1192156891662f3ca882a3e2_53483565 extends Smarty_Internal_Block
=======
class Block_396773770660ad28247f5d1_62637939 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700218286662f3ca882a6a2_56769325', 'hook_home', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_529318934660ad28247f939_94960796', 'hook_home', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php
}
}
/* {/block "content"} */
/* {block 'block_full_width'} */
<<<<<<< HEAD
class Block_544698808662f3ca8829ab8_11379717 extends Smarty_Internal_Block
=======
class Block_1971644128660ad28247ecd7_37638685 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'block_full_width' => 
  array (
<<<<<<< HEAD
    0 => 'Block_544698808662f3ca8829ab8_11379717',
  ),
  'content' => 
  array (
    0 => 'Block_1192156891662f3ca882a3e2_53483565',
  ),
  'hook_home' => 
  array (
    0 => 'Block_700218286662f3ca882a6a2_56769325',
=======
    0 => 'Block_1971644128660ad28247ecd7_37638685',
  ),
  'content' => 
  array (
    0 => 'Block_396773770660ad28247f5d1_62637939',
  ),
  'hook_home' => 
  array (
    0 => 'Block_529318934660ad28247f939_94960796',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="content-wrapper">
		<div id="main-content">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192156891662f3ca882a3e2_53483565', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396773770660ad28247f5d1_62637939', "content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
