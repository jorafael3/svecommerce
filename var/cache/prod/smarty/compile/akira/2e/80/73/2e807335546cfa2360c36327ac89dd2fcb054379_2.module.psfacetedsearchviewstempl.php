<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:42
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc06a2c07c9_41550924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1711123680,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fc06a2c07c9_41550924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="active-search-filters">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222203983662fc06a2bda59_76387061', 'active_filters_item');
?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value) > 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_603687020662fc06a2bf9f0_19640166', 'facets_clearall_button');
?>

                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>

<?php }
/* {block 'active_filters_item'} */
class Block_222203983662fc06a2bda59_76387061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_222203983662fc06a2bda59_76387061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li>
                            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'active_filters_item'} */
/* {block 'facets_clearall_button'} */
class Block_603687020662fc06a2bf9f0_19640166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_603687020662fc06a2bf9f0_19640166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li>
                            <a class="js-search-link filter-block-all" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'facets_clearall_button'} */
}
