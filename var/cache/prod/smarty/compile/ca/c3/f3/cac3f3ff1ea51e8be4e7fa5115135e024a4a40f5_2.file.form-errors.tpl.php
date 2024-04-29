<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 16:38:51
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:21:21
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662ec1ebcf1ec1_44269438',
=======
  'unifunc' => 'content_660aed11469441_50640214',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac3f3ff1ea51e8be4e7fa5115135e024a4a40f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\form-errors.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662ec1ebcf1ec1_44269438 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aed11469441_50640214 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74456718662ec1ebcf0a34_43849753', 'form_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069673288660aed11467cf5_78408004', 'form_errors');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
<<<<<<< HEAD
class Block_74456718662ec1ebcf0a34_43849753 extends Smarty_Internal_Block
=======
class Block_1069673288660aed11467cf5_78408004 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_74456718662ec1ebcf0a34_43849753',
=======
    0 => 'Block_1069673288660aed11467cf5_78408004',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
