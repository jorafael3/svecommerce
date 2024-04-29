<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 16:38:48
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:21:17
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662ec1e8c8ed61_74874659',
=======
  'unifunc' => 'content_660aed0d98e5e4_89271951',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ddd509f72dd4f87d9d8c830360f538329f1db2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\customer\\authentication.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662ec1e8c8ed61_74874659 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aed0d98e5e4_89271951 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458619932662ec1e8c88fd0_61077151', 'page_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_684461462660aed0d988418_89626071', 'page_title');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51754663662ec1e8c8bb54_41864891', 'page_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_369679409660aed0d98b106_09979705', 'page_content');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_1458619932662ec1e8c88fd0_61077151 extends Smarty_Internal_Block
=======
class Block_684461462660aed0d988418_89626071 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'page_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1458619932662ec1e8c88fd0_61077151',
=======
    0 => 'Block_684461462660aed0d988418_89626071',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
<<<<<<< HEAD
class Block_326326241662ec1e8c8cc88_35475383 extends Smarty_Internal_Block
=======
class Block_1306717951660aed0d98c362_73955253 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
<<<<<<< HEAD
class Block_1386820521662ec1e8c8be78_21629751 extends Smarty_Internal_Block
=======
class Block_655672493660aed0d98b461_82208178 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326326241662ec1e8c8cc88_35475383', 'display_after_login_form', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306717951660aed0d98c362_73955253', 'display_after_login_form', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

	  <div class="no-account">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>  
		<a class="active-color" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

		</a>
	  </div>
	  <div class="text-center">
		   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialLogin'),$_smarty_tpl ) );?>

	  </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_51754663662ec1e8c8bb54_41864891 extends Smarty_Internal_Block
=======
class Block_369679409660aed0d98b106_09979705 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_51754663662ec1e8c8bb54_41864891',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_1386820521662ec1e8c8be78_21629751',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_326326241662ec1e8c8cc88_35475383',
=======
    0 => 'Block_369679409660aed0d98b106_09979705',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_655672493660aed0d98b461_82208178',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_1306717951660aed0d98c362_73955253',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1386820521662ec1e8c8be78_21629751', 'login_form_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_655672493660aed0d98b461_82208178', 'login_form_container', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php
}
}
/* {/block 'page_content'} */
}
