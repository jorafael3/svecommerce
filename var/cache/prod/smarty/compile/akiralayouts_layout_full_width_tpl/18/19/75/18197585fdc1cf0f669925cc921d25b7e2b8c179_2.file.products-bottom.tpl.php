<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:47
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\products-bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc06fa898d6_68400847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18197585fdc1cf0f669925cc921d25b7e2b8c179' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\products-bottom.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_662fc06fa898d6_68400847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-bottom">
	<?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite']) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'sort_order', false, 'page_key');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page_key']->value => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'][$_smarty_tpl->tpl_vars['page_key']->value+1])) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'][$_smarty_tpl->tpl_vars['page_key']->value+1]['type'] != 'next') {?>
						<?php $_smarty_tpl->_assignInScope('infiniteUrl', $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'][$_smarty_tpl->tpl_vars['page_key']->value+1]['url']);?>
					<?php }?>
					<?php break 1;?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['infiniteUrl']->value))) {?>
				<div class="archive-bottom">
					<div class="archive-load-wrapper">
						<div class="archive-load-button">
							<a class="btn widget-archive-trigger <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite'] == 2) {?> trigger_infinit<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['infiniteUrl']->value, ENT_QUOTES, 'UTF-8');?>
&infinite" rel="nofollow">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Products','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
					
							</a>
							<div class="btn widget-archive-loader" style="display:none;">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
						
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		<?php } else { ?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_372027006662fc06fa88848_42401549', 'pagination');
?>

		<?php }?>
	<?php }?>
</div>
<?php }
/* {block 'pagination'} */
class Block_372027006662fc06fa88848_42401549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_372027006662fc06fa88848_42401549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
			<?php
}
}
/* {/block 'pagination'} */
}
