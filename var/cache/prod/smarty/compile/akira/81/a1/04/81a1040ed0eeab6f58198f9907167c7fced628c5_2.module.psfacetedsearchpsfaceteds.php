<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:06
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda69f6dd9_48194606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1711123680,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fddda69f6dd9_48194606 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) && $_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) {?>
	<div id="_desktop_facets_search" class="hidden-md-down widget">
		<div id="search_filters_wrapper">
			<?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

		</div>
	</div>
<?php }
}
}