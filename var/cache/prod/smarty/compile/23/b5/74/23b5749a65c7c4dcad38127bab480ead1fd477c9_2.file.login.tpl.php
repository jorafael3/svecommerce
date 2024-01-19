<?php
/* Smarty version 3.1.47, created on 2024-01-08 12:53:12
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtwishlist/views/templates/front/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_659c368821b367_95395536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b5749a65c7c4dcad38127bab480ead1fd477c9' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/nrtwishlist/views/templates/front/login.tpl',
      1 => 1685021481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659c368821b367_95395536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?controller=authentication?back=<?php echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>
" method="post">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please login first','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</h3>
	<hr/>
	<div class="form-group">
		<label class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</label>
		<input class="form-control" name="email" type="email" value="" required>
	</div>
	<div class="form-group">
		<label class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</label>
		<div class="input-group">
			<input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required>
			<button type="button" data-action="show-password-t" data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
" data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>

			</button>
		</div>  
	</div>
	<br/>
	<div class="clearfix">
		<input name="submitLogin" value="1" type="hidden">
		<button class="btn btn-full btn-primary" data-link-action="sign-in" type="submit">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>

		</button>
	</div>
	<div class="forgot-password">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>

		</a>
	</div>
</form>
<div class="no-account">
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account?','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>
</span>  
	<a class="active-color" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">
	  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create one here','mod'=>'nrtwishlist'),$_smarty_tpl ) );?>

	</a>
</div>
<div class="text-center">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialLogin'),$_smarty_tpl ) );?>

</div><?php }
}
