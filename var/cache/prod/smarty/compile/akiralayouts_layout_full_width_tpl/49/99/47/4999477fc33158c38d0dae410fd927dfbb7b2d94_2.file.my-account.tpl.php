<?php
/* Smarty version 3.1.47, created on 2024-01-11 23:25:41
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/customer/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a0bf45d7d425_50085961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4999477fc33158c38d0dae410fd927dfbb7b2d94' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/customer/my-account.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a0bf45d7d425_50085961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10212273365a0bf45d774f5_20022589', 'page_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162604017865a0bf45d79279_50892025', 'page_content');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64734038165a0bf45d7c331_31605037', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_10212273365a0bf45d774f5_20022589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_10212273365a0bf45d774f5_20022589',
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
class Block_162604017865a0bf45d79279_50892025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_162604017865a0bf45d79279_50892025',
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
class Block_42971163965a0bf45d7c8c6_48226364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_64734038165a0bf45d7c331_31605037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_64734038165a0bf45d7c331_31605037',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_42971163965a0bf45d7c8c6_48226364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42971163965a0bf45d7c8c6_48226364', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
