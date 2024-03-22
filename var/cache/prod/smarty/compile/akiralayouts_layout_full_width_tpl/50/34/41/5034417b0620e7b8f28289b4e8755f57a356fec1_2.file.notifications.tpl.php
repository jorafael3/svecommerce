<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:05
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda58e57d8_23238606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5034417b0620e7b8f28289b4e8755f57a356fec1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\notifications.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fddda58e57d8_23238606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
	<aside id="notifications">
		<div class="container container-parent">
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76021126565fddda58e0151_37372268', 'notifications_error');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67774603265fddda58e1946_60534777', 'notifications_warning');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6800735065fddda58e31f9_25982941', 'notifications_success');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114730238565fddda58e4617_89953664', 'notifications_info');
?>

			<?php }?>
		</div>
	</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_76021126565fddda58e0151_37372268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_76021126565fddda58e0151_37372268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="alert alert-danger" role="alert" data-alert="danger">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</article>
				<?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_67774603265fddda58e1946_60534777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_67774603265fddda58e1946_60534777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="alert alert-warning" role="alert" data-alert="danger">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</article>
				<?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_6800735065fddda58e31f9_25982941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_6800735065fddda58e31f9_25982941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="alert alert-success" role="alert" data-alert="danger">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</article>
				<?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_114730238565fddda58e4617_89953664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_114730238565fddda58e4617_89953664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="alert alert-info" role="alert" data-alert="danger">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</article>
				<?php
}
}
/* {/block 'notifications_info'} */
}
