<?php
/* Smarty version 3.1.47, created on 2024-01-19 07:37:28
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/miniatures/product-loop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa6d08d54531_79276596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ebafee01a5827ddc0d3540a6c982ab66f6b37a5' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/catalog/_partials/miniatures/product-loop.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/_product/product-".((string)$_smarty_tpl->tpl_vars[\'productLayout\']->value).".tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/_product/product-1.tpl' => 1,
  ),
),false)) {
function content_65aa6d08d54531_79276596 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productLayout']->value)) && $_smarty_tpl->tpl_vars['productLayout']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_partials/_product/product-".((string)$_smarty_tpl->tpl_vars['productLayout']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_partials/_product/product-1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
