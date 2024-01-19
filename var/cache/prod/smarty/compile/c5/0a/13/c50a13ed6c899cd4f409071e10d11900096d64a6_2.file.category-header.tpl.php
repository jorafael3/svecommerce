<?php
/* Smarty version 3.1.47, created on 2024-01-13 10:48:40
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a2b0d88b4ae5_25505791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50a13ed6c899cd4f409071e10d11900096d64a6' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/category-header.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a2b0d88b4ae5_25505791 (Smarty_Internal_Template $_smarty_tpl) {
?>	 
<?php $_smarty_tpl->_assignInScope('c_imageType', 'category_default');?>
	 
<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']))) {?>
	<?php $_smarty_tpl->_assignInScope('c_imageType', $_smarty_tpl->tpl_vars['opThemect']->value['category_image_type']);
}?> 
	 
<div id="js-product-list-header">
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['url'])) {?>
			<div class="category-banner-boxed">
				<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
					<img
						class="img-loader lazy-load" 
						data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
						src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" 
						alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
						title="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" 
						width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"
						height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize'][$_smarty_tpl->tpl_vars['c_imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"
					>
				</div> 
			</div>
		<?php }?> 
	<?php }?> 
</div>
<?php }
}
