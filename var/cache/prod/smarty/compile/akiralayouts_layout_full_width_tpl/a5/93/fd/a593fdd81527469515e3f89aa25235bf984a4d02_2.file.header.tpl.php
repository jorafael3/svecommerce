<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:13
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:57
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f4109204057_65475655',
=======
  'unifunc' => 'content_660aee25821903_39045200',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a593fdd81527469515e3f89aa25235bf984a4d02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\header.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f4109204057_65475655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_676077690662f4109202671_02622948', 'header_banner');
=======
function content_660aee25821903_39045200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019724079660aee2581f7c1_84597424', 'header_banner');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<nav class="header-nav">
	<div class="container container-parent">
		<div class="row">
			<div class="col-xs-12">
				<div id="site_width"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-xs-12 left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			<div class="col-md-7 col-xs-12 right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
</nav>
<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_991016236662f4109203757_21584052', 'header_top');
}
/* {block 'header_banner'} */
class Block_676077690662f4109202671_02622948 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718832439660aee25820f16_59473943', 'header_top');
}
/* {block 'header_banner'} */
class Block_2019724079660aee2581f7c1_84597424 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'header_banner' => 
  array (
<<<<<<< HEAD
    0 => 'Block_676077690662f4109202671_02622948',
=======
    0 => 'Block_2019724079660aee2581f7c1_84597424',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-banner">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

	</div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_top'} */
<<<<<<< HEAD
class Block_991016236662f4109203757_21584052 extends Smarty_Internal_Block
=======
class Block_1718832439660aee25820f16_59473943 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'header_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_991016236662f4109203757_21584052',
=======
    0 => 'Block_1718832439660aee25820f16_59473943',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
		<div class="container container-parent">
			<div class="row">
				<div class="col-xs-12">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

				</div>
			</div>
		</div>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
