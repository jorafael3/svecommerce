<?php
/* Smarty version 3.1.47, created on 2024-04-01 11:18:56
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ade70cf31e3_54368308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2ab9a34f02878291d3a78ae8d59f228bc75e64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_660ade70cf31e3_54368308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\svecommerce\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="nav-products-list-top">
	<?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
		<div class="nav-products-list-top-left">
			<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
				<div class="filter-buttons<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'] != 1) {?> hidden-lg-up<?php }?>">
					<a href="#" class="open-filters" data-toggle="canvas-widget" data-target="#canvas-facets-search"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
				</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_faceted_position'] == 2) {?>
					<div class="filter-buttons hidden-md-down">
						<a href="#" class="open-filters open-filters-middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
					</div>
				<?php }?>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'sort_order', false, NULL, 'sort_order_name', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sort_order_name']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sort_order_name']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sort_order_name']->value['index'];
?>
				<?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sort_order_name']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sort_order_name']->value['first'] : null)) {?>
						<?php if (!strpos($_smarty_tpl->tpl_vars['sort_order']->value['url'],"?")) {?>
							<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sort_order']) ? $_smarty_tpl->tpl_vars['sort_order']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['url'] = ((string)$_smarty_tpl->tpl_vars['sort_order']->value['url'])."?page=1";
$_smarty_tpl->_assignInScope('sort_order', $_tmp_array);?>
						<?php }?>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('currentSortUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['sort_order']->value['url'],"/&shop_view=(grid|list)/",''));?>
					<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite']) {?>
						<?php $_smarty_tpl->_assignInScope('currentSortUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['currentSortUrl']->value,"/page=\d+/","page=1"));?>
					<?php }?>
					<?php break 1;?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['currentSortUrl']->value))) {?>
				<div class="gr-list-gird">
					<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&shop_view=grid" class="shop-view <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_default_view'])) && !$_smarty_tpl->tpl_vars['opThemect']->value['category_default_view']) {?>active-view<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
">
						<svg viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><rect width="5" height="5"></rect><rect x="7" width="5" height="5"></rect><rect x="14" width="5" height="5"></rect><rect y="7" width="5" height="5"></rect><rect x="7" y="7" width="5" height="5"></rect><rect x="14" y="7" width="5" height="5"></rect><rect y="14" width="5" height="5"></rect><rect x="7" y="14" width="5" height="5"></rect><rect x="14" y="14" width="5" height="5"></rect></svg>
					</a>
					<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&shop_view=list" class="shop-view <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_default_view'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_default_view']) {?>active-view<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );?>
">
						<svg viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><rect width="5" height="5"></rect><rect x="7" height="5" width="12"></rect><rect y="7" width="5" height="5"></rect><rect x="7" y="7" height="5" width="12"></rect><rect y="14" width="5" height="5"></rect><rect x="7" y="14" height="5" width="12"></rect></svg>
					</a>
				</div>
			<?php }?>
		</div>
		<div class="nav-products-list-top-center"></div>
		<div class="nav-products-list-top-right">
			<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite'])) && $_smarty_tpl->tpl_vars['opThemect']->value['category_product_infinite']) {?>
				<?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
					<?php $_smarty_tpl->_assignInScope('nb_count_items_shown_from', 1);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('nb_count_items_shown_from', 0);?>
				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('nb_count_items_shown_from', $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from']);?>
			<?php }?>
			<p class="wc-result-count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['nb_count_items_shown_from']->value,'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633439964660ade70cf1fa6_83365878', 'sort_by');
?>

		</div>
	<?php }?>
</div><?php }
/* {block 'sort_by'} */
class Block_1633439964660ade70cf1fa6_83365878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_1633439964660ade70cf1fa6_83365878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
			<?php
}
}
/* {/block 'sort_by'} */
}
