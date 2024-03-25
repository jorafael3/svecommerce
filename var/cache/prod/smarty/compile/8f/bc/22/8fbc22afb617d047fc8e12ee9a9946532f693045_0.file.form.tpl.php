<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:49:09
  from 'C:\xampp\htdocs\svecommerce\modules\axoncreator\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660091c5ad4ff8_96700419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbc22afb617d047fc8e12ee9a9946532f693045' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\axoncreator\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1711210454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660091c5ad4ff8_96700419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204209314660091c5ad1107_45921683', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_204209314660091c5ad1107_45921683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_204209314660091c5ad1107_45921683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'page_trigger') {?>
        <div class="form-group">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <?php if ($_smarty_tpl->tpl_vars['input']->value['url']) {?>
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['url'],'html','UTF-8' ));?>
" class="btn btn-info axps-btn-edit"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with - AxonCreator','mod'=>'axoncreator'),$_smarty_tpl ) );?>
</a>
                <?php } else { ?>
                    <div class="alert alert-info">&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable AxonCreator','mod'=>'axoncreator'),$_smarty_tpl ) );?>
</div>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
