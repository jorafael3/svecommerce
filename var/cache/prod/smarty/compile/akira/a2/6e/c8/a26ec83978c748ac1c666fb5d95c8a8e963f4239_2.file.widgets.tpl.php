<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:02:33
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/hiwhatsapp/views/templates/hook/widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa8f0901f143_89450129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26ec83978c748ac1c666fb5d95c8a8e963f4239' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/hiwhatsapp/views/templates/hook/widgets.tpl',
      1 => 1685021483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa8f0901f143_89450129 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wap_accounts']->value) {?>
    <div class="hi-wap-widgets-container">
        <div class="hi-wap-widget">
            <div class="hi-wap-widget-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wap_accounts']->value, 'wap_account');
$_smarty_tpl->tpl_vars['wap_account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wap_account']->value) {
$_smarty_tpl->tpl_vars['wap_account']->do_else = false;
?>
                    <div class="hi-wap-widget-account">
                        <a target="_blank" class="clearfix" href=" https://wa.me/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['account_number'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="hi-wap-widget-account-avatar">
                                <?php if ($_smarty_tpl->tpl_vars['wap_account']->value['avatar']) {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/avatars/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['avatar'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php } else { ?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/avatar.jpg">
                                <?php }?>
                            </div>
                            <div class="hi-wap-widget-account-details">
                                <div class="hi-wap-widget-account-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <div class="hi-wap-widget-account-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <div class="hi-wap-widget-button-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['button_label'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php if (!$_smarty_tpl->tpl_vars['wap_account']->value['availability_status']) {?>
                                    <div class="hi-wap-widget-account-offline-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['offline_text'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php }?>
                            </div>
                            <div class="hi-wap-widget-account-status <?php if (!$_smarty_tpl->tpl_vars['wap_account']->value['availability_status']) {?>hi-wap-widget-account-offline<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['wap_account']->value['availability_status']) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'online','mod'=>'hiwhatsapp'),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'offline','mod'=>'hiwhatsapp'),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        </a>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php }
}
}