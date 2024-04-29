<?php
/* Smarty version 3.1.47, created on 2024-04-29 17:47:32
  from 'module:nrtmegamenuviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_663023847936f7_87715694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4b080ee382b2f61b318c797f3d6a282ccb09b3' => 
    array (
      0 => 'module:nrtmegamenuviewstemplates',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtmegamenu/views/templates/hook/megamenu-category.tpl' => 2,
  ),
),false)) {
function content_663023847936f7_87715694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\svecommerce\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if (is_array($_smarty_tpl->tpl_vars['menus']->value) && count($_smarty_tpl->tpl_vars['menus']->value)) {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['granditem']->value))) {
$_smarty_tpl->_assignInScope('granditem', 0);
}?>
	<ul class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_sub_ul mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_sub_ul col_<?php }?>element_ul_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_level']->value, ENT_QUOTES, 'UTF-8');?>
 p_granditem_<?php if ($_smarty_tpl->tpl_vars['m_level']->value > 2) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['granditem']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?> <?php if ($_smarty_tpl->tpl_vars['mm']->value['is_mega'] && $_smarty_tpl->tpl_vars['m_level']->value == 2 && $_smarty_tpl->tpl_vars['block']->value['subtype'] == 1) {?>row<?php }?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['menu']->value['children'])) && is_array($_smarty_tpl->tpl_vars['menu']->value['children']) && count($_smarty_tpl->tpl_vars['menu']->value['children'])));?>
		<li class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_sub_li mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_sub_li col_<?php }?>element_li_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_level']->value, ENT_QUOTES, 'UTF-8');?>
 granditem_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['granditem']->value, ENT_QUOTES, 'UTF-8');?>
 p_granditem_<?php if ($_smarty_tpl->tpl_vars['m_level']->value > 2) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['granditem']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?> <?php if ($_smarty_tpl->tpl_vars['mm']->value['is_mega'] && $_smarty_tpl->tpl_vars['m_level']->value == 2 && $_smarty_tpl->tpl_vars['block']->value['subtype'] == 1) {?>col-lg-<?php echo htmlspecialchars(smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-'), ENT_QUOTES, 'UTF-8');
}?>">
        	<div class="menu_a_wrap">
                <a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['link']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['nofollow']->value) {?> rel="nofollow"<?php }
if ($_smarty_tpl->tpl_vars['new_window']->value) {?> target="_blank"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value))) {?>mo_sub_a mo_<?php } elseif ((isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value))) {?>col_sub_a col_<?php }?>element_a_depth_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_level']->value, ENT_QUOTES, 'UTF-8');?>
 element_a_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><i class="las la-angle-right list_arrow hidden"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['has_children']->value && !(isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) && !(isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value)) && (!(isset($_smarty_tpl->tpl_vars['granditem']->value)) || !$_smarty_tpl->tpl_vars['granditem']->value)) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?></a>
                <?php if ($_smarty_tpl->tpl_vars['has_children']->value && ((isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) || (isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value)))) {?><span class="icon-opener js-opener-menu"><i class="las la-plus plus_sign"></i><i class="las la-minus minus_sign"></i></span><?php }?>
        	</div>   
		<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("module:nrtmegamenu/views/templates/hook/megamenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>($_smarty_tpl->tpl_vars['m_level']->value+1)), 0, true);
?>
		<?php }?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php }
}
}
