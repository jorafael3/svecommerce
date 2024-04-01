<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:34:24
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f20bd48a0_24267067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7095a3f9d2f1db29888f18ad87c6f2782e35af93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\pagination.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a0f20bd48a0_24267067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133611400660a0f20bcea35_98566044', 'pagination_page_list');
?>

<?php }
/* {block 'pagination_page_list'} */
class Block_133611400660a0f20bcea35_98566044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_133611400660a0f20bcea35_98566044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
	 	<div class="archive-bottom">
			<nav class="pagination">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
						<span class="spacer">&hellip;</span>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> 
							<span class="page-numbers current">
						<?php } else { ?>
							<a rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="page-numbers <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
">
						<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
									« <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

								<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 »
								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

								<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> 
							</span>
						<?php } else { ?>
							</a>
						<?php }?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</nav>
		</div>
	<?php }
}
}
/* {/block 'pagination_page_list'} */
}
