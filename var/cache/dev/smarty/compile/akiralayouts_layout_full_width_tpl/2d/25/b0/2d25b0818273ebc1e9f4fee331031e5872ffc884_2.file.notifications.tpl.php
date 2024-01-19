<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:10
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_648228461027a7_28786536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d25b0818273ebc1e9f4fee331031e5872ffc884' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/notifications.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648228461027a7_28786536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
	<aside id="notifications">
		<div class="container container-parent">
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714452731648228460f5014_66948635', 'notifications_error');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519749750648228460fab88_28393004', 'notifications_warning');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556145275648228460fd875_72575583', 'notifications_success');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21969263664822846100352_94779455', 'notifications_info');
?>

			<?php }?>
		</div>
	</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_714452731648228460f5014_66948635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_714452731648228460f5014_66948635',
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
class Block_1519749750648228460fab88_28393004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_1519749750648228460fab88_28393004',
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
class Block_556145275648228460fd875_72575583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_556145275648228460fd875_72575583',
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
class Block_21969263664822846100352_94779455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_21969263664822846100352_94779455',
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
