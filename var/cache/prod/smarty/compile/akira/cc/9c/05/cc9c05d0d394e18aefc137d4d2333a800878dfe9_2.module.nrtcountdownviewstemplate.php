<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:22:33
=======
/* Smarty version 3.1.47, created on 2024-04-01 10:28:03
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'module:nrtcountdownviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f3ca929ba12_01133946',
=======
  'unifunc' => 'content_660ad2830ff918_16659896',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9c05d0d394e18aefc137d4d2333a800878dfe9' => 
    array (
      0 => 'module:nrtcountdownviewstemplate',
      1 => 1711123670,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f3ca929ba12_01133946 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660ad2830ff918_16659896 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
if ((isset($_smarty_tpl->tpl_vars['to']->value)) && $_smarty_tpl->tpl_vars['to']->value != '0000-00-00 00:00:00') {?>
    <div class="countdown-timer-wrapper">
		<div class="countdown-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry up! Sales Ends In','mod'=>'nrtcountdown'),$_smarty_tpl ) );?>

		</div>
		<div class="countdown-timer" data-countdown-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="countdown-timer-group countdown-days">
				<span class="countdown-number js-time-days">
					<i class="la la-circle-notch la-spin"></i>
				</span>
				<span class="countdown-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days','mod'=>'nrtcountdown'),$_smarty_tpl ) );?>
</span>
			</span>
			<span class="countdown-time-group countdown-hours">
				<span class="countdown-number js-time-hours">
					<i class="la la-circle-notch la-spin"></i>
				</span>
				<span class="countdown-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hrs','mod'=>'nrtcountdown'),$_smarty_tpl ) );?>
</span>
			</span>
			<span class="countdown-timer-group countdown-minutes">
				<span class="countdown-number js-time-minutes">
					<i class="la la-circle-notch la-spin"></i>
				</span>
				<span class="countdown-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','mod'=>'nrtcountdown'),$_smarty_tpl ) );?>
</span>
			</span>
			<span class="countdown-timer-group countdown-seconds">
				<span class="countdown-number js-time-seconds">
					<i class="la la-circle-notch la-spin"></i>
				</span>
				<span class="countdown-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sec','mod'=>'nrtcountdown'),$_smarty_tpl ) );?>
</span>
			</span>
		</div>
    </div>
<?php }
}
}
