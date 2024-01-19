<?php
/* Smarty version 3.1.47, created on 2024-01-12 00:33:57
  from 'module:axoncreatorviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a0cf45bcfc47_43707919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aedcb1ae2c46b83145baed4f7c27ecb8f95c7f3' => 
    array (
      0 => 'module:axoncreatorviewstemplates',
      1 => 1685021483,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a0cf45bcfc47_43707919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="contact_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
" class="elementor-form elementor-contact-form ajax-elementor-contact" action="<?php echo htmlspecialchars(Context::getContext()->shop->getBaseURL(true,false), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
#contact_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>
	<div class="elementor-form-fields-wrapper form-fields">
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['subject_id']) {?>
			<input type="hidden" name="id_contact" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['subject_id'], ENT_QUOTES, 'UTF-8');?>
">
		<?php } else { ?>
			<div class="elementor-field-group elementor-column elementor-field-type-select elementor-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['subject_width'], ENT_QUOTES, 'UTF-8');?>
">
				<?php if ((bool) $_smarty_tpl->tpl_vars['settings']->value['show_labels']) {?>
					<label class="elementor-field-label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

					</label>
				<?php }?>
				<div class="elementor-select-wrapper">
					<select name="id_contact" class="elementor-field elementor-field-textual elementor-size-sm">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
$_smarty_tpl->tpl_vars['contact_elt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
$_smarty_tpl->tpl_vars['contact_elt']->do_else = false;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
		<?php }?>
		<div class="elementor-field-group elementor-column elementor-field-type-email elementor-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['email_width'], ENT_QUOTES, 'UTF-8');?>
">
			<?php if ((bool) $_smarty_tpl->tpl_vars['settings']->value['show_labels']) {?>
				<label class="elementor-field-label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

				</label>
			<?php }?>
			<input class="elementor-field elementor-field-textual elementor-size-sm" name="from" type="email" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact']->value['email'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'your@email.com','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
">
		</div>
		<?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload'] && $_smarty_tpl->tpl_vars['settings']->value['show_upload']) {?>
			<div class="elementor-field-group elementor-column elementor-field-type-file elementor-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['upload_width'], ENT_QUOTES, 'UTF-8');?>
">
				<?php if ((bool) $_smarty_tpl->tpl_vars['settings']->value['show_labels']) {?>
					<label class="elementor-field-label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

					</label>
				<?php }?>
				<input class="elementor-field" type="file" name="fileUpload">
			</div>
		<?php }?>
		<div class="elementor-field-group elementor-column elementor-field-type-textarea elementor-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['message_width'], ENT_QUOTES, 'UTF-8');?>
">
			<?php if ((bool) $_smarty_tpl->tpl_vars['settings']->value['show_labels']) {?>
				<label class="elementor-field-label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

				</label>
			<?php }?>
			<textarea class="elementor-field elementor-field-textual elementor-size-sm" name="message" rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['message_rows'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contact']->value['message'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</textarea>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
			<div class="elementor-field-group elementor-column elementor-col-100">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNrtCaptcha','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

			</div>
		<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value)) && !$_smarty_tpl->tpl_vars['settings']->value['disable_psgdpr']) {?>
            <div class="elementor-field-group elementor-column elementor-col-100">
                <div class="elementor_psgdpr_consent_message">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                </div>
            </div>
        <?php }?>
		<div class="elementor-field-group elementor-column elementor-col-100 send-response"></div>
		<div class="elementor-field-group elementor-field-type-submit elementor-column elementor-col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['button_width'], ENT_QUOTES, 'UTF-8');?>
">
			<input type="hidden" name="url" value=""/>
			<input type="hidden" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
			<button class="elementor-button elementor-size-sm elementor-animation-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['button_hover_animation'], ENT_QUOTES, 'UTF-8');?>
" type="submit" name="submitMessage">
				<span>
					<span class="elementor-button-icon elementor-align-icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['icon_align'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-loading fa fa-circle-notch"></i><?php if ($_smarty_tpl->tpl_vars['settings']->value['icon']) {
echo $_smarty_tpl->tpl_vars['settings']->value['icon'];
}?></span>
					<span class="elementor-button-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</span>
			</button>
		</div>
	</div>
</form>
<?php }
}
