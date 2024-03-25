<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:48:03
  from 'C:\xampp\htdocs\svecommerce\modules\nrtthemecustomizer\views\templates\admin\_cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660091836cd9c8_11075127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174cdecfc13808356b9c2c4f83e7987217f96a1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\modules\\nrtthemecustomizer\\views\\templates\\admin\\_cms.tpl',
      1 => 1711210455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660091836cd9c8_11075127 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/template" id="wrapper-form-cms-config">
	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Header Layout','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="header_layout" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['headers']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['headers']->value, 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['header']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['header_layout'])) && $_smarty_tpl->tpl_vars['selected']->value['header_layout'] == $_smarty_tpl->tpl_vars['header']->value['id']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['header']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Header Sticky Layout','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="header_sticky_layout" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['headers']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['headers']->value, 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['header']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['header_sticky_layout'])) && $_smarty_tpl->tpl_vars['selected']->value['header_sticky_layout'] == $_smarty_tpl->tpl_vars['header']->value['id']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['header']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header overlap','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="header_overlap" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['status']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'statu');
$_smarty_tpl->tpl_vars['statu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['statu']->value) {
$_smarty_tpl->tpl_vars['statu']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['statu']->value['value'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['header_overlap'])) && $_smarty_tpl->tpl_vars['selected']->value['header_overlap'] == $_smarty_tpl->tpl_vars['statu']->value['value']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['statu']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Footer Layout','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="footer_layout" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['footers']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footers']->value, 'footer');
$_smarty_tpl->tpl_vars['footer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footer']->value) {
$_smarty_tpl->tpl_vars['footer']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['footer']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['footer_layout'])) && $_smarty_tpl->tpl_vars['selected']->value['footer_layout'] == $_smarty_tpl->tpl_vars['footer']->value['id']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['footer']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page title','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="page_title_layout" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['titles']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titles']->value, 'title');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['title']->value['value'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['page_title_layout'])) && $_smarty_tpl->tpl_vars['selected']->value['page_title_layout'] == $_smarty_tpl->tpl_vars['title']->value['value']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['title']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>
	
	<div class="form-group row">
		<label class="form-control-label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open vertical menu','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>

		</label>
		<div class="col-sm">
			<select name="open_vertical_menu" class="form-control">
				<?php if ((isset($_smarty_tpl->tpl_vars['status']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'statu');
$_smarty_tpl->tpl_vars['statu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['statu']->value) {
$_smarty_tpl->tpl_vars['statu']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['statu']->value['value'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selected']->value['open_vertical_menu'])) && $_smarty_tpl->tpl_vars['selected']->value['open_vertical_menu'] == $_smarty_tpl->tpl_vars['statu']->value['value']) {?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['statu']->value['name'];?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	</div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {
	var $wrapperCmsConfig = $('#cms_page_content').closest('.form-group'),
		$btnTemplateCmsConfig = $('#wrapper-form-cms-config');
		$wrapperCmsConfig.after($btnTemplateCmsConfig.html());
});
<?php echo '</script'; ?>
>
<?php }
}
