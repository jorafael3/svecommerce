<?php
/* Smarty version 3.1.47, created on 2024-04-30 11:54:04
  from 'C:\xampp\htdocs\svecommerce\gqth8jpeqegdu5rw\themes\default\template\controllers\carrier_wizard\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6631222cbc2797_87599824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e97c1f4fea59b545e9699e3fd86a637f77601fe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\gqth8jpeqegdu5rw\\themes\\default\\template\\controllers\\carrier_wizard\\logo.tpl',
      1 => 1711123664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6631222cbc2797_87599824 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="carrier_logo_block" class="panel">
	<div class="panel-heading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logo','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		<div class="panel-heading-action">
			<a id="carrier_logo_remove" class="btn btn-default" <?php if (!$_smarty_tpl->tpl_vars['carrier_logo']->value) {?>style="display:none"<?php }?> href="javascript:removeCarrierLogo();">
				<i class="icon-trash"></i>
			</a>
		</div>
	</div>
	<img id="carrier_logo_img" src="<?php if ($_smarty_tpl->tpl_vars['carrier_logo']->value) {
echo $_smarty_tpl->tpl_vars['carrier_logo']->value;
} else { ?>../img/admin/carrier-default.jpg<?php }?>" class="img-thumbnail" alt=""/>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var carrier_translation_undefined = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'undefined','js'=>1,'d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
';

	function removeCarrierLogo()
	{
		if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to delete the logo?','js'=>1,'d'=>'Admin.Shipping.Notification'),$_smarty_tpl ) );?>
'))
		{
			$('#carrier_logo_img').attr('src', '../img/admin/carrier-default.jpg');
			$('#logo').val('null');
			$('#carrier_logo_remove').hide();
		}
	}

	function uploadCarrierLogo() {
		$.ajaxFileUpload({
			url: 'ajax-tab.php?tab=AdminCarrierWizard&token=<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
&action=uploadLogo',
			secureuri: false,
			fileElementId: 'carrier_logo_input',
			dataType: 'xml',
			success: function (data, status) {
				data = data.getElementsByTagName('return')[0];
				var message = data.getAttribute("message");
				if (data.getAttribute("result") == "success")
				{
					$('#carrier_logo_img').attr('src', message);
					$('#logo').val(message);
					$('#carrier_logo_remove').show();
				}
				else
					alert(message);
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }
}
