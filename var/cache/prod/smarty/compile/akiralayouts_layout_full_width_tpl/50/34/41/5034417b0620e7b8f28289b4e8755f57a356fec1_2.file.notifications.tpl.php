<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:14
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:59
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410abcd2b0_77756781',
=======
  'unifunc' => 'content_660aee27733527_39534963',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
function content_662f410abcd2b0_77756781 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee27733527_39534963 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
	<aside id="notifications">
		<div class="container container-parent">
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_232775617662f410abc7fd3_26717202', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2067044448660aee2772b365_13574875', 'notifications_error');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190947531662f410abc97b2_59360844', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1375260514660aee2772da09_32289689', 'notifications_warning');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1147613568662f410abcaca5_65495831', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780670350660aee2772f9f7_88318834', 'notifications_success');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_591735339662f410abcc251_45857099', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219146766660aee27731b62_14072436', 'notifications_info');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php }?>
		</div>
	</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_232775617662f410abc7fd3_26717202 extends Smarty_Internal_Block
=======
class Block_2067044448660aee2772b365_13574875 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_232775617662f410abc7fd3_26717202',
=======
    0 => 'Block_2067044448660aee2772b365_13574875',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_190947531662f410abc97b2_59360844 extends Smarty_Internal_Block
=======
class Block_1375260514660aee2772da09_32289689 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_190947531662f410abc97b2_59360844',
=======
    0 => 'Block_1375260514660aee2772da09_32289689',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1147613568662f410abcaca5_65495831 extends Smarty_Internal_Block
=======
class Block_1780670350660aee2772f9f7_88318834 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1147613568662f410abcaca5_65495831',
=======
    0 => 'Block_1780670350660aee2772f9f7_88318834',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_591735339662f410abcc251_45857099 extends Smarty_Internal_Block
=======
class Block_1219146766660aee27731b62_14072436 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_591735339662f410abcc251_45857099',
=======
    0 => 'Block_1219146766660aee27731b62_14072436',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
