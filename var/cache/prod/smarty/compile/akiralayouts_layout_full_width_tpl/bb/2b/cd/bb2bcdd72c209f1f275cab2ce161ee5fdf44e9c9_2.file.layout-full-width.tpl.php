<?php
/* Smarty version 3.1.47, created on 2024-04-30 12:19:19
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_663128177eb908_96621656',
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
function content_663128177eb908_96621656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_413200421663128177e8976_80295483', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_701541230663128177e9272_75488873', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_238738689663128177e9a99_34770368', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_413200421663128177e8976_80295483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_413200421663128177e8976_80295483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_701541230663128177e9272_75488873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_701541230663128177e9272_75488873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "content"} */
class Block_2099655275663128177ea9f6_62368564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_238738689663128177e9a99_34770368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_238738689663128177e9a99_34770368',
  ),
  'content' => 
  array (
    0 => 'Block_2099655275663128177ea9f6_62368564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="col-xs-12 js-content-wrapper">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2099655275663128177ea9f6_62368564', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
