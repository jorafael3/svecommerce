<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 16:38:51
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:21:20
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662ec1eb1ddb15_19119038',
=======
  'unifunc' => 'content_660aed106f0412_94965523',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26db393598162b1dc858eb7f4abd6da0b1540dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662ec1eb1ddb15_19119038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_815489843662ec1eb1d6478_15650992', 'login_form');
=======
function content_660aed106f0412_94965523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485410008660aed106ea140_11197192', 'login_form');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
/* {block 'login_form_errors'} */
<<<<<<< HEAD
class Block_1116261250662ec1eb1d69d9_71178865 extends Smarty_Internal_Block
=======
class Block_732958291660aed106ea788_68642898 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
<<<<<<< HEAD
class Block_324140715662ec1eb1d7ab4_03875517 extends Smarty_Internal_Block
=======
class Block_1053037839660aed106eb7c0_79493448 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
<<<<<<< HEAD
class Block_168388082662ec1eb1d93d6_33742871 extends Smarty_Internal_Block
=======
class Block_49571057660aed106ec7b4_46311784 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
<<<<<<< HEAD
class Block_1128213282662ec1eb1d8232_35652078 extends Smarty_Internal_Block
=======
class Block_920812068660aed106ebe16_83532561 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168388082662ec1eb1d93d6_33742871', 'form_field', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49571057660aed106ec7b4_46311784', 'form_field', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_1114810014662ec1eb1dc1e0_55416638 extends Smarty_Internal_Block
=======
class Block_779781077660aed106ee9c6_66628575 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
<<<<<<< HEAD
class Block_236892809662ec1eb1dbe19_29833314 extends Smarty_Internal_Block
=======
class Block_1537585218660aed106ee6c7_47513633 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1114810014662ec1eb1dc1e0_55416638', 'form_buttons', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_779781077660aed106ee9c6_66628575', 'form_buttons', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_social'} */
<<<<<<< HEAD
class Block_1492594008662ec1eb1dd469_33102034 extends Smarty_Internal_Block
=======
class Block_1661244687660aed106efcc6_56544556 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'login_social'} */
/* {block 'login_form'} */
<<<<<<< HEAD
class Block_815489843662ec1eb1d6478_15650992 extends Smarty_Internal_Block
=======
class Block_485410008660aed106ea140_11197192 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'login_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_815489843662ec1eb1d6478_15650992',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_1116261250662ec1eb1d69d9_71178865',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_324140715662ec1eb1d7ab4_03875517',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_1128213282662ec1eb1d8232_35652078',
  ),
  'form_field' => 
  array (
    0 => 'Block_168388082662ec1eb1d93d6_33742871',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_236892809662ec1eb1dbe19_29833314',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1114810014662ec1eb1dc1e0_55416638',
  ),
  'login_social' => 
  array (
    0 => 'Block_1492594008662ec1eb1dd469_33102034',
=======
    0 => 'Block_485410008660aed106ea140_11197192',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_732958291660aed106ea788_68642898',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_1053037839660aed106eb7c0_79493448',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_920812068660aed106ebe16_83532561',
  ),
  'form_field' => 
  array (
    0 => 'Block_49571057660aed106ec7b4_46311784',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_1537585218660aed106ee6c7_47513633',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_779781077660aed106ee9c6_66628575',
  ),
  'login_social' => 
  array (
    0 => 'Block_1661244687660aed106efcc6_56544556',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1116261250662ec1eb1d69d9_71178865', 'login_form_errors', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_732958291660aed106ea788_68642898', 'login_form_errors', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


  <form id="login-form" action="<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324140715662ec1eb1d7ab4_03875517', 'login_form_actionurl', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1053037839660aed106eb7c0_79493448', 'login_form_actionurl', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>
" method="post">

    <div>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1128213282662ec1eb1d8232_35652078', 'login_form_fields', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_920812068660aed106ebe16_83532561', 'login_form_fields', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

    </div>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236892809662ec1eb1dbe19_29833314', 'login_form_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1537585218660aed106ee6c7_47513633', 'login_form_footer', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
  </form>
<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1492594008662ec1eb1dd469_33102034', 'login_social', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1661244687660aed106efcc6_56544556', 'login_social', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php
}
}
/* {/block 'login_form'} */
}
