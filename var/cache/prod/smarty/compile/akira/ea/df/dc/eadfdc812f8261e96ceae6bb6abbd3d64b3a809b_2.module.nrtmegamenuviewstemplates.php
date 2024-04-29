<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:15
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:26:00
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410bd7fdc2_49118354',
=======
  'unifunc' => 'content_660aee28d19bd4_57925834',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadfdc812f8261e96ceae6bb6abbd3d64b3a809b' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/megamenu-category.tpl' => 2,
    'module:nrtmegamenu/views/templates/hook/megamenu-link.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662f410bd7fdc2_49118354 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee28d19bd4_57925834 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'axps_menumobile_tpl' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\svecommerce\\var\\cache\\prod\\smarty\\compile\\akira\\ea\\df\\dc\\eadfdc812f8261e96ceae6bb6abbd3d64b3a809b_2.module.nrtmegamenuviewstemplates.php',
    'uid' => 'eadfdc812f8261e96ceae6bb6abbd3d64b3a809b',
<<<<<<< HEAD
    'call_name' => 'smarty_template_function_axps_menumobile_tpl_1626578236662f410bd22a79_64330264',
=======
    'call_name' => 'smarty_template_function_axps_menumobile_tpl_1837460112660aee28ccbb28_66613949',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
));
?>	

	
<?php if ((isset($_smarty_tpl->tpl_vars['nrtmenu']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('v_mb_menu', array());?>
	<?php $_smarty_tpl->_assignInScope('h_mb_menu', array());?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nrtmenu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile'] == 1) {
continue 1;
}?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['location'] == 2) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['v_mb_menu']) ? $_smarty_tpl->tpl_vars['v_mb_menu']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['mm']->value;
$_smarty_tpl->_assignInScope('v_mb_menu', $_tmp_array);
continue 1;
}?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['h_mb_menu']) ? $_smarty_tpl->tpl_vars['h_mb_menu']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['mm']->value;
$_smarty_tpl->_assignInScope('h_mb_menu', $_tmp_array);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<ul class="mo_element_ul_depth_0">
		<?php if ($_smarty_tpl->tpl_vars['h_mb_menu']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['h_mb_menu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'axps_menumobile_tpl', array('mm'=>$_smarty_tpl->tpl_vars['mm']->value), true);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['v_mb_menu']->value) {?>
			<li class="nrt_mo_mega_0 mo_element_li_depth_0 mo_ml_column">
				<div class="menu_a_wrap menu-item-has-children">
				<a href="javascript:void(0)" class="mo_element_a_0 mo_element_a_depth_0 js-opener-menu"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All categories','mod'=>'nrtmegamenu'),$_smarty_tpl ) );?>
</span></a>
				<span class="icon-opener js-opener-menu"></span>
				</div>
				<ul class="mo_element_ul_depth_00 mo_sub_ul">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v_mb_menu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile'] == 1) {
continue 1;
}?>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'axps_menumobile_tpl', array('mm'=>$_smarty_tpl->tpl_vars['mm']->value,'depth'=>1), true);?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</li>
		<?php }?>
	</ul>
<?php }
}
<<<<<<< HEAD
/* smarty_template_function_axps_menumobile_tpl_1626578236662f410bd22a79_64330264 */
if (!function_exists('smarty_template_function_axps_menumobile_tpl_1626578236662f410bd22a79_64330264')) {
function smarty_template_function_axps_menumobile_tpl_1626578236662f410bd22a79_64330264(Smarty_Internal_Template $_smarty_tpl,$params) {
=======
/* smarty_template_function_axps_menumobile_tpl_1837460112660aee28ccbb28_66613949 */
if (!function_exists('smarty_template_function_axps_menumobile_tpl_1837460112660aee28ccbb28_66613949')) {
function smarty_template_function_axps_menumobile_tpl_1837460112660aee28ccbb28_66613949(Smarty_Internal_Template $_smarty_tpl,$params) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$params = array_merge(array('mm'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<li class="nrt_mo_mega_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
 mo_ml_column"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])));?><div class="menu_a_wrap<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> menu-item-has-children<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="mo_element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {
echo $_smarty_tpl->tpl_vars['mm']->value['m_icon'];
} else {
if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {
$_smarty_tpl->_assignInScope('icon_class_value', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['mm']->value['icon_class'],1 )));
if ($_smarty_tpl->tpl_vars['icon_class_value']->value['type'] == 1) {?><img class="icon-img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
" alt=""/><?php } else { ?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
}?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_name'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="icon-opener js-opener-menu"></span><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><ul class="mo_element_ul_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_ul"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mm']->value['column'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile'] == 1) {
continue 1;
}
if ((isset($_smarty_tpl->tpl_vars['column']->value['children'])) && count($_smarty_tpl->tpl_vars['column']->value['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['children'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile'] == 1) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 1) {
if ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children']))) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']['children']) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?><div class="menu_a_wrap<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> menu-item-has-children<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['children']['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="icon-opener js-opener-menu"></span><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><ul class="mo_element_ul_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');?>
 mo_sub_ul"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><li class="mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 0 && (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children']['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])));?><div class="menu_a_wrap<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> menu-item-has-children<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="icon-opener js-opener-menu"></span><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>$_prefixVariable4,'ismobilemenu'=>true), 0, true);
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['block']->value['subtype'] == 1 || $_smarty_tpl->tpl_vars['block']->value['subtype'] == 3) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children']['children'])));?><div class="menu_a_wrap<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> menu-item-has-children<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['children']['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="icon-opener js-opener-menu"></span><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>$_prefixVariable5,'ismobilemenu'=>true), 0, true);
}?></li><?php }
} elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 2 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><div class="products_on_menu"><?php $_smarty_tpl->_assignInScope('imageType', 'home_default');
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']) {
$_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_large']);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><div class="m-b-1"><div class="menu-product"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['product']->value['cover']);
} else {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);
}?><img class="img-loader lazy-load" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>"alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"></div></a><div class="product_name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></li><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 3 && (isset($_smarty_tpl->tpl_vars['block']->value['children'])) && count($_smarty_tpl->tpl_vars['block']->value['children'])) {
if ((isset($_smarty_tpl->tpl_vars['block']->value['subtype'])) && $_smarty_tpl->tpl_vars['block']->value['subtype']) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li><?php } else { ?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?><div class="mo_brand_div"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="nrt_mega_brand"><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturerSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
" /></a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li><?php }
} elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 4) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li"><?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['block']->value['children'])) && is_array($_smarty_tpl->tpl_vars['block']->value['children']) && count($_smarty_tpl->tpl_vars['block']->value['children'])));?><div class="menu_a_wrap<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> menu-item-has-children<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_a"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {
$_smarty_tpl->_assignInScope('icon_class_value', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_decode' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['icon_class'],1 )));
if ($_smarty_tpl->tpl_vars['icon_class_value']->value['type'] == 1) {?><img class="icon-img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
" alt=""/><?php } else { ?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon_class_value']->value['value'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['cate_label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 1) {
continue 1;
}?><span class="icon-opener js-opener-menu"></span><?php break 1;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><ul class="mo_element_ul_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');?>
 mo_sub_ul"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value['children'], 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile'] == 1) {
continue 1;
}
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+2, ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>$_prefixVariable6,'ismobilemenu'=>true), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t'] == 5 && $_smarty_tpl->tpl_vars['block']->value['html']) {?><li class="nrt_mo_mega_block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 mo_element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value+1, ENT_QUOTES, 'UTF-8');?>
 mo_sub_li style_content"><?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></li>
<?php
}}
<<<<<<< HEAD
/*/ smarty_template_function_axps_menumobile_tpl_1626578236662f410bd22a79_64330264 */
=======
/*/ smarty_template_function_axps_menumobile_tpl_1837460112660aee28ccbb28_66613949 */
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
}
