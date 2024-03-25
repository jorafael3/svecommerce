<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:19:01
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66008ab5646f56_80816220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40747adc0a3139f3e3e85d034e612970f7353fe9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\customer\\my-account.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66008ab5646f56_80816220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164805632566008ab5642327_15724523', 'page_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25769050266008ab5644d41_31271623', 'page_content');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205629492966008ab56466f6_94244787', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_164805632566008ab5642327_15724523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_164805632566008ab5642327_15724523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dashboard','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_25769050266008ab5644d41_31271623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_25769050266008ab5644d41_31271623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hi','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
<b class="label"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%firstname% %lastname%','d'=>'Shop.Theme.Axon','sprintf'=>array('%firstname%'=>$_smarty_tpl->tpl_vars['customer']->value['firstname'],'%lastname%'=>$_smarty_tpl->tpl_vars['customer']->value['lastname'])),$_smarty_tpl ) );?>
</b></p>	
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
</p>	
<?php
}
}
/* {/block 'page_content'} */
/* {block 'my_account_links'} */
class Block_17243372566008ab56469a8_85247753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_205629492966008ab56466f6_94244787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_205629492966008ab56466f6_94244787',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_17243372566008ab56469a8_85247753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17243372566008ab56469a8_85247753', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
