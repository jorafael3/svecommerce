<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:05
  from 'module:axoncreatorviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda5c77e64_59458490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29ccd58b4966aac24b2db7ad2b78d90175ab132' => 
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
function content_65fddda5c77e64_59458490 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="elementor-newsletter ajax-elementor-subscription block_newsletter" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
	<input name="email" type="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['placeholder'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['placeholder'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
}?>" required
	><button class="elementor-button elementor-animation-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['hover_animation'], ENT_QUOTES, 'UTF-8');?>
" name="submitNewsletter" value="1" type="submit">
		<span class="elementor-button-content-wrapper">
			<span class="elementor-button-icon elementor-align-icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['icon_align'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-loading fa fa-circle-notch"></i><?php if ($_smarty_tpl->tpl_vars['settings']->value['icon']) {
echo $_smarty_tpl->tpl_vars['settings']->value['icon'];
}?></span>
			<span class="elementor-button-text"><?php if (empty($_smarty_tpl->tpl_vars['settings']->value['button'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['button'], ENT_QUOTES, 'UTF-8');
}?></span>
		</span>
	</button>
	<input type="hidden" name="action" value="0">
	<div class="send-response">
		<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			</div>
		<?php }?>
	</div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value)) && !$_smarty_tpl->tpl_vars['settings']->value['disable_psgdpr']) {?>
        <div class="elementor_psgdpr_consent_message">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

        </div>
    <?php }?>
</form><?php }
}
