<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:34:24
  from 'module:nrtreviewsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f20b9a133_86598693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2df7be7e7f6636669f16b9b262e887bf1e46ed1' => 
    array (
      0 => 'module:nrtreviewsviewstemplatesh',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a0f20b9a133_86598693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="reviews_note js-review-avgs" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
	<span class="star_content star_content_avg"></span>
	<span class="nb-reviews">(<span class="r-nbr">0</span><span class="r-unit"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</span>)</span>
</span>
<?php }
}
