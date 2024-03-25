<?php
/* Smarty version 3.1.47, created on 2024-03-24 12:58:47
  from 'module:nrtreviewsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660069d7b40783_79605638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8225ebc33b57647d1d8f7a2cc5d33b623cc3ee3d' => 
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
function content_660069d7b40783_79605638 (Smarty_Internal_Template $_smarty_tpl) {
?>		
<div class="product-rating">
	<span class="reviews_note">
		<span class="star_content star_content_avg"><span style="width:<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['avgReviews']->value['avg']/5)*100, ENT_QUOTES, 'UTF-8');?>
%"></span></span>
	</span>
	<a class="goto-product-review-tab" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
 (<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['avgReviews']->value['nbr'], ENT_QUOTES, 'UTF-8');?>
</span>)
	</a>
</div>
<?php }
}
