<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/hiwhatsapp/views/templates/hook/chatbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa9253dd78b0_42162520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638795f196df8e97a7d175d47a71e0314d2ada25' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/hiwhatsapp/views/templates/hook/chatbox.tpl',
      1 => 1685021483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa9253dd78b0_42162520 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wap_accounts']->value) {?>
    <div class="hi-wap-chatbox-container hi-wap-chatbox-position-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chatbox_position']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="hi-wap-chatbox">
            <div class="hi-wap-chatbox-header">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/whatsapp-logo-white.png">
                <div class="hi-wap-chatbox-header-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello!','mod'=>'hiwhatsapp'),$_smarty_tpl ) );?>
</div>
                <div class="hi-wap-chatbox-header-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Any questions? Feel free to chat with our support team.','mod'=>'hiwhatsapp'),$_smarty_tpl ) );?>
</div>
            </div>
            <div class="hi-wap-chatbox-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wap_accounts']->value, 'wap_account');
$_smarty_tpl->tpl_vars['wap_account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wap_account']->value) {
$_smarty_tpl->tpl_vars['wap_account']->do_else = false;
?>
                    <div class="hi-wap-chatbox-account">
                        <a target="_blank" class="clearfix" href=" https://wa.me/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['account_number'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="hi-wap-account-avatar">
                                <?php if ($_smarty_tpl->tpl_vars['wap_account']->value['avatar']) {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/avatars/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['avatar'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php } else { ?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/avatar.jpg">
                                <?php }?>
                            </div>
                            <div class="hi-wap-account-details">
                                <div class="hi-wap-account-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <div class="hi-wap-account-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php if (!$_smarty_tpl->tpl_vars['wap_account']->value['availability_status']) {?>
                                    <div class="hi-wap-account-offline-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wap_account']->value['offline_text'], ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php }?>
                            </div>
                            <div class="hi-wap-account-status <?php if (!$_smarty_tpl->tpl_vars['wap_account']->value['availability_status']) {?>hi-wap-account-offline<?php }?>">
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
        <a id="hi-wap-chatbox-opener" class="hi-wap-chatbox-opener">
            <i class="hi-wap-chatbox-icon"></i>
        </a>
    </div>
<?php }
}
}
