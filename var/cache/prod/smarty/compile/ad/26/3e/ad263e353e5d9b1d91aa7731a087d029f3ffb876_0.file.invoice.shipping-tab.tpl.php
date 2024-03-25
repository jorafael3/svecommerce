<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:40:21
  from 'C:\xampp\htdocs\svecommerce\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66008fb5b04e35_21593746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad263e353e5d9b1d91aa7731a087d029f3ffb876' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\pdf\\invoice.shipping-tab.tpl',
      1 => 1711210464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66008fb5b04e35_21593746 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
