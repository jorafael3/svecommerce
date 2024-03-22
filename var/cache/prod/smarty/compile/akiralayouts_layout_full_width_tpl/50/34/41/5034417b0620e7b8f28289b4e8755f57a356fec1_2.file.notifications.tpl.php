<?php
/* Smarty version 3.1.47, created on 2024-03-22 17:30:01
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fe06696091f7_18913280',
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
function content_65fe06696091f7_18913280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
	<aside id="notifications">
		<div class="container container-parent">
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193516334565fe0669603a91_75112114', 'notifications_error');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78836119365fe0669605474_33753948', 'notifications_warning');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21955492265fe0669606a44_24320260', 'notifications_success');
?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31812323765fe0669607f15_63498967', 'notifications_info');
?>

			<?php }?>
		</div>
	</aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_193516334565fe0669603a91_75112114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_193516334565fe0669603a91_75112114',
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
class Block_78836119365fe0669605474_33753948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_78836119365fe0669605474_33753948',
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
class Block_21955492265fe0669606a44_24320260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_21955492265fe0669606a44_24320260',
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
class Block_31812323765fe0669607f15_63498967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_31812323765fe0669607f15_63498967',
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
