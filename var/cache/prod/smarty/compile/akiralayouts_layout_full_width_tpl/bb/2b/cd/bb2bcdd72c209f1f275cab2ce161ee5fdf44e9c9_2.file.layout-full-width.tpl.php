<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:56
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f4108705718_74181296',
=======
  'unifunc' => 'content_660aee24cf8369_01784121',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2bcdd72c209f1f275cab2ce161ee5fdf44e9c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\layouts\\layout-full-width.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f4108705718_74181296 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee24cf8369_01784121 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149809074662f4108702e80_86450988', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1477813944662f4108703562_82877048', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266119203660aee24cf5bd7_16629691', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1459552715660aee24cf63b0_16358888', 'right_column');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1349488221662f4108703b03_61568075', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1887955718660aee24cf6ac9_56550173', 'content_wrapper');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_1149809074662f4108702e80_86450988 extends Smarty_Internal_Block
=======
class Block_266119203660aee24cf5bd7_16629691 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1149809074662f4108702e80_86450988',
=======
    0 => 'Block_266119203660aee24cf5bd7_16629691',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_1477813944662f4108703562_82877048 extends Smarty_Internal_Block
=======
class Block_1459552715660aee24cf63b0_16358888 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1477813944662f4108703562_82877048',
=======
    0 => 'Block_1459552715660aee24cf63b0_16358888',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "content"} */
<<<<<<< HEAD
class Block_1017013348662f4108704690_23759086 extends Smarty_Internal_Block
=======
class Block_751005312660aee24cf75b9_10504075 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_1349488221662f4108703b03_61568075 extends Smarty_Internal_Block
=======
class Block_1887955718660aee24cf6ac9_56550173 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1349488221662f4108703b03_61568075',
  ),
  'content' => 
  array (
    0 => 'Block_1017013348662f4108704690_23759086',
=======
    0 => 'Block_1887955718660aee24cf6ac9_56550173',
  ),
  'content' => 
  array (
    0 => 'Block_751005312660aee24cf75b9_10504075',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="col-xs-12 js-content-wrapper">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017013348662f4108704690_23759086', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_751005312660aee24cf75b9_10504075', "content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
