<?php
/* Smarty version 3.1.47, created on 2024-03-24 16:09:24
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\miniatures\flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66009684c5db17_73038117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5e4f8e5d39e59e20374c0169218b9276528a31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\miniatures\\flags.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66009684c5db17_73038117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26722579166009684c55850_05748937', 'product_flags');
}
/* {block 'product_flags'} */
class Block_26722579166009684c55850_05748937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_26722579166009684c55850_05748937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="label-flags">
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['product']->value['flags']), 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'discount') {?>
			<?php if (!$_smarty_tpl->tpl_vars['product']->value['on_sale']) {?>
				<li class="label-flag type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
					<span>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>

					</span>
				</li>
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_condition'])) && (isset($_smarty_tpl->tpl_vars['product']->value['condition']['type'])) && $_smarty_tpl->tpl_vars['product']->value['show_condition']) {?>
				<li class="label-flag type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
					<span>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['condition']['type'] == 'refurbished') {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refurbished','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['condition']['type'] == 'used') {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Used','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

						<?php }?> 
					</span>
				</li>	
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'on-sale') {?>
			<li class="label-flag type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
				<span>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

				</span>
			</li>
		<?php } elseif ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'out_of_stock') {?>
			<li class="label-flag type-outstock">
				<span>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>

				</span>
			</li>
		<?php } else { ?>
			<li class="label-flag type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
				<span>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>

				</span>
			</li>
		<?php }?>
	  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php
}
}
/* {/block 'product_flags'} */
}
