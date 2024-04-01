<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:36:05
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f85ad7218_97977744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '492a8c21b8e77707708b1ae194c7227a7ee99959' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/megamenu-sub.tpl' => 1,
  ),
),false)) {
function content_660a0f85ad7218_97977744 (Smarty_Internal_Template $_smarty_tpl) {
?>	
<ul class="nrt_mega_menu menu-horizontal element_ul_depth_0">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nrtmenu']->value, 'mm');
$_smarty_tpl->tpl_vars['mm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile'] == 2) {
continue 1;
}?>
		<li class="nrt_mega_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 item-level-0 element_li_depth_0 submenu_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['alignment'], ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?> is_parent<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['custom_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['custom_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['mm']->value['is_mega']) {?> dropdown-is-mega<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="style_element_a_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['id_nrt_mega_menu'], ENT_QUOTES, 'UTF-8');?>
 element_a_depth_0<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?> is_parent<?php }
if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?> ma_icon<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8');?>
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
</span><?php }
if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?><span class="triangle"></span><?php }?></a>
			<?php if ((isset($_smarty_tpl->tpl_vars['mm']->value['column'])) && count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
				<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-sub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_horizontal'=>true), 0, true);
?>
			<?php }?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
