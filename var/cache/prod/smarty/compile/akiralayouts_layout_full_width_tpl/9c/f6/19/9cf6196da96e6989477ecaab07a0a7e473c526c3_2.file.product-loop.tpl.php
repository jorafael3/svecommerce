<?php
/* Smarty version 3.1.47, created on 2024-04-01 11:18:57
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\catalog\_partials\miniatures\product-loop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ade7121e2f0_31964018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf6196da96e6989477ecaab07a0a7e473c526c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\catalog\\_partials\\miniatures\\product-loop.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/_product/product-".((string)$_smarty_tpl->tpl_vars[\'productLayout\']->value).".tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/_product/product-1.tpl' => 1,
  ),
),false)) {
function content_660ade7121e2f0_31964018 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productLayout']->value)) && $_smarty_tpl->tpl_vars['productLayout']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_partials/_product/product-".((string)$_smarty_tpl->tpl_vars['productLayout']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/_partials/_product/product-1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
