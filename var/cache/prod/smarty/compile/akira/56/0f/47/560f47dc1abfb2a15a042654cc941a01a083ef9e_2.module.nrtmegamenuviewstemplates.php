<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:13
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:57
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410974bbd6_20759865',
=======
  'unifunc' => 'content_660aee25db32d0_00930820',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '560f47dc1abfb2a15a042654cc941a01a083ef9e' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/megamenu-cate-img.tpl' => 3,
    'module:nrtmegamenu/views/templates/hook/megamenu-category.tpl' => 4,
    'module:nrtmegamenu/views/templates/hook/megamenu-link.tpl' => 2,
  ),
),false)) {
<<<<<<< HEAD
function content_662f410974bbd6_20759865 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee25db32d0_00930820 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\svecommerce\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ($_smarty_tpl->tpl_vars['mm']->value['is_mega']) {?>
	<div class="menu_sub style_wide sub-menu-dropdown" <?php if ($_smarty_tpl->tpl_vars['mm']->value['location'] == 2) {?>style<?php } else { ?>data-width<?php }?>="<?php if ($_smarty_tpl->tpl_vars['mm']->value['location'] == 2) {?>width: <?php }
if ($_smarty_tpl->tpl_vars['mm']->value['width']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['width'], ENT_QUOTES, 'UTF-8');
} else { ?>800px<?php }?>">
		<?php if ((isset($_smarty_tpl->tpl_vars['is_horizontal']->value)) && $_smarty_tpl->tpl_vars['is_horizontal']->value) {?><div class="container container-parent"><?php }?>
			<div class="row m_column_row">
			<?php $_smarty_tpl->_assignInScope('t_width_tpl', 0);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
				<?php if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
				<?php $_smarty_tpl->_assignInScope('t_width_tpl', $_smarty_tpl->tpl_vars['t_width_tpl']->value+$_smarty_tpl->tpl_vars['column']->value['width']);?>
				<?php if ($_smarty_tpl->tpl_vars['t_width_tpl']->value > $_smarty_tpl->tpl_vars['mm']->value['t_width']) {?>
					<?php $_smarty_tpl->_assignInScope('t_width_tpl', $_smarty_tpl->tpl_vars['column']->value['width']);?>
					</div><div class="row m_column_row">
				<?php }?>
				<div class="nrt_mega_column_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value['id_nrt_mega_column'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars(smarty_modifier_replace(($_smarty_tpl->tpl_vars['column']->value['width']*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
						<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {?>
							<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children']))) {?>
								<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
									<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
									<?php }?>
									<ul class="element_ul_depth_1">
										<li class="element_li_depth_1">
											<a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['children']['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_<?php } else { ?>style_<?php }?>element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_1 element_a_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
											<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
												<ul class="element_ul_depth_2">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
												<li class="element_li_depth_2"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="element_a_depth_2 element_a_item"><i class="las la-angle-right list_arrow hidden"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</ul>	
											<?php }?>
										</li>
									</ul>	
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
								<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
								<div class="row">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_18_saved = $_smarty_tpl->tpl_vars['menu'];
?>
									<div class="col-md-<?php echo htmlspecialchars(smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
										<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['menu']->value,'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
										<?php }?>
										<ul class="element_ul_depth_1">
											<li class="element_li_depth_1">
												<a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="element_a_depth_1 element_a_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
												<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])) {?>
													<?php $_smarty_tpl->_assignInScope('granditem', 0);?>
													<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['granditem'])) && $_smarty_tpl->tpl_vars['block']->value['granditem']) {
$_smarty_tpl->_assignInScope('granditem', 1);
}?>
													<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0, true);
?>
												<?php }?>
											</li>
										</ul>	
									</div>
									<?php if ($_smarty_tpl->tpl_vars['menu']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md'] == 0 && !$_smarty_tpl->tpl_vars['menu']->last) {?>
									</div><div class="row">
									<?php }?>
								<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?>
								<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
									<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0, true);
?>
									<?php }?>
									<ul class="element_ul_depth_1">
										<li class="element_li_depth_1 no-gutters">
											<a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['children']['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_<?php } else { ?>style_<?php }?>element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_1 element_a_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
											<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
												<?php $_smarty_tpl->_assignInScope('granditem', 0);?>
												<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['granditem'])) && $_smarty_tpl->tpl_vars['block']->value['granditem']) {
$_smarty_tpl->_assignInScope('granditem', 1);
}?>
												<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0, true);
?>
											<?php }?>
										</li>
									</ul>	
								</div>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
							<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
							<div class="products_on_menu row">
							<?php $_smarty_tpl->_assignInScope('imageType', 'home_default');?>
							<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']) {?>
								<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']);?>
							<?php }?>	
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
								<div class="col-md-<?php echo htmlspecialchars(smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
									<div class="menu-product">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
											<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
												<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
													<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['cover']);?>
												<?php } else { ?>
													<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
												<?php }?>
												<img
													class="img-loader lazy-load" 
													data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
													src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" 
													alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
													title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" 
													width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"
													height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"
												> 
											</div>
										</a> 
										<div class="product_name">
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
										</div>   
										<div class="info-product">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                                                <div class="product-price-and-shipping">
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                                    <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                                    <span class="price">
                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                        <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                                                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                                                        <?php } else { ?>
                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                                                        <?php }?>
                                                    </span>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                                </div>
                                            <?php }?>
										</div>	
									</div>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 3 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['subtype'])) && $_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
								<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
								<div class="row">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand', true);
$_smarty_tpl->tpl_vars['brand']->iteration = 0;
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
$_smarty_tpl->tpl_vars['brand']->iteration++;
$_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
$__foreach_brand_20_saved = $_smarty_tpl->tpl_vars['brand'];
?>
									<div class="col-md-<?php echo htmlspecialchars(smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
										<ul class="element_ul_depth_1">
											<li class="element_li_depth_1">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_element_a_depth_1 advanced_element_a_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
											</li>
										</ul>	
									</div>
									<?php if ($_smarty_tpl->tpl_vars['brand']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md'] == 0 && !$_smarty_tpl->tpl_vars['brand']->last) {?>
									</div><div class="row">
									<?php }?>
								<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
								</div>
							<?php } else { ?>
								<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 row">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand', true);
$_smarty_tpl->tpl_vars['brand']->iteration = 0;
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
$_smarty_tpl->tpl_vars['brand']->iteration++;
$_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
$__foreach_brand_21_saved = $_smarty_tpl->tpl_vars['brand'];
?>
									<div class="col-md-<?php echo htmlspecialchars(smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');?>
">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="nrt_mega_brand">
											<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" />
										</a>
									</div>
								<?php
$_smarty_tpl->tpl_vars['brand'] = $__foreach_brand_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?>
							<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
">
								<ul class="element_ul_depth_1">
									<li class="element_li_depth_1">
										<?php $_smarty_tpl->_assignInScope('class_has_icon_img', false);?>
										
										<?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {
$_smarty_tpl->_assignInScope('icon_class_value', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['icon_class'],1 )));
if ($_smarty_tpl->tpl_vars['icon_class_value']->value['type'] == 1) {
$_smarty_tpl->_assignInScope('class_has_icon_img', true);
}
}?>
										
										<a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_<?php } else { ?>style_<?php }?>element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_1 element_a_item<?php if ($_smarty_tpl->tpl_vars['class_has_icon_img']->value) {?> has-icon-img<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {
$_smarty_tpl->_assignInScope('icon_class_value', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['icon_class'],1 )));
if ($_smarty_tpl->tpl_vars['icon_class_value']->value['type'] == 1) {?><img class="icon-img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
" alt=""/><?php } else { ?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
										<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
											<ul class="element_ul_depth_2">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_22_saved = $_smarty_tpl->tpl_vars['menu'];
?>
												<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
												<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0, true);
?>
											<?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										<?php }?>
									</li>
								</ul>	
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?>
							<div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 style_content">
								<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['is_horizontal']->value)) && $_smarty_tpl->tpl_vars['is_horizontal']->value) {?></div><?php }?>
	</div>
	<?php } else { ?>
		<ul class="nrt_mega_multi_level_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 menu_sub nrtmenu_multi_level" style="width: <?php if ($_smarty_tpl->tpl_vars['mm']->value['width']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['width'], ENT_QUOTES, 'UTF-8');
} else { ?>170px<?php }?>">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 2) {
continue 1;
}
if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 2) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {
if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {
if ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><li class="element_li_depth_1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="element_a_depth_1 element_a_item"><i class="las la-angle-right list_arrow hidden"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
} elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_26_saved = $_smarty_tpl->tpl_vars['menu'];
?><li class="element_li_depth_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])));?><div class="menu_a_wrap"><a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="element_a_depth_1 element_a_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><i class="las la-angle-right list_arrow hidden"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?></a></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>2), 0, true);
}?></li><?php
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?><li class="element_li_depth_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?><div class="menu_a_wrap"><a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['children']['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_<?php } else { ?>style_<?php }?>element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_1 element_a_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><i class="las la-angle-right list_arrow hidden"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>2), 0, true);
}?></li><?php }
} elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?><li class="element_li_depth_1"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])));?><div class="menu_a_wrap"><a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_<?php } else { ?>style_<?php }?>element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_1 element_a_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {
$_smarty_tpl->_assignInScope('icon_class_value', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['icon_class'],1 )));
if ($_smarty_tpl->tpl_vars['icon_class_value']->value['type'] == 1) {?><img class="icon-img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
" alt=""/><?php } else { ?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
} else { ?><i class="las la-angle-right list_arrow hidden"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><ul class="element_ul_depth_2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu', true);
$_smarty_tpl->tpl_vars['menu']->iteration = 0;
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
$_smarty_tpl->tpl_vars['menu']->iteration++;
$_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
$__foreach_menu_27_saved = $_smarty_tpl->tpl_vars['menu'];
if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 2) {
continue 1;
}
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0, true);
$_smarty_tpl->tpl_vars['menu'] = $__foreach_menu_27_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?><li class="element_li_depth_1"><div class="nrt_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 style_content"><?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>
</div></li><?php } else {
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
}
}
