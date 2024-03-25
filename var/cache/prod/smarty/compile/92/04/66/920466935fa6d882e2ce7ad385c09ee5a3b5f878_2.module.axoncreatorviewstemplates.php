<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:26:36
  from 'module:axoncreatorviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6601fa1c504d62_98767047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '920466935fa6d882e2ce7ad385c09ee5a3b5f878' => 
    array (
      0 => 'module:axoncreatorviewstemplates',
      1 => 1711123670,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6601fa1c504d62_98767047 (Smarty_Internal_Template $_smarty_tpl) {
?>	 
<?php if (count($_smarty_tpl->tpl_vars['content']->value['products']) > 0) {?> 
	<?php if ($_smarty_tpl->tpl_vars['content']->value['image_size']) {?> 
		<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['content']->value['image_size']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('imageType', 'home_default');?>
	<?php }?>

	<?php $_smarty_tpl->_assignInScope('i', 0);?>

	<?php if ((isset($_smarty_tpl->tpl_vars['content']->value['per_col'])) && $_smarty_tpl->tpl_vars['content']->value['per_col']) {?>
		<?php $_smarty_tpl->_assignInScope('y', $_smarty_tpl->tpl_vars['content']->value['per_col']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('y', 1);?>
	<?php }?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value % $_smarty_tpl->tpl_vars['y']->value == 0) {?>
		<div class="swiper-slide item">
		<?php }?>
			<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['items_type_path'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>	
		<?php if ($_smarty_tpl->tpl_vars['i']->value % $_smarty_tpl->tpl_vars['y']->value == 0 || $_smarty_tpl->tpl_vars['i']->value == count($_smarty_tpl->tpl_vars['content']->value['products'])) {?>
		</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="swiper-slide-alert swiper-slide item">
        <div class="item-inner">
            <p class="alert alert-warning clearfix">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','mod'=>'axoncreator'),$_smarty_tpl ) );?>

            </p>
        </div>
    </div>
<?php }?> 

<?php }
}
