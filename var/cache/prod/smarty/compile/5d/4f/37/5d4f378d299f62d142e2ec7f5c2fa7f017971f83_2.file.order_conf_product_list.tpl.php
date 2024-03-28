<?php
/* Smarty version 3.1.47, created on 2024-03-28 10:55:05
  from 'C:\xampp\htdocs\svecommerce\themes\akira\mails\es\order_conf_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660592d9f36e51_53689273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4f378d299f62d142e2ec7f5c2fa7f017971f83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\mails\\es\\order_conf_product_list.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660592d9f36e51_53689273 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <tr>
        <td style="padding: 10px 0;" width="18%">
            <p style="margin: 0; padding: 0 5px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</p>
        </td>
        <td style="padding: 10px 0;" width="37%">
            <p class="name-product" style="margin: 0; padding: 0 5px; font-weight: bold;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

                <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) == 1) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                        <span style="font-weight: normal; display: block;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

        </td>
        <td style="padding: 10px 0;" width="15%">
            <p style="margin: 0; padding: 0 5px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price'], ENT_QUOTES, 'UTF-8');?>
</p>
        </td>
        <td style="padding: 10px 0;" width="15%">
            <p style="margin: 0; padding: 0 5px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</p>
        </td>
        <td align="right" style="padding: 10px 0;" width="15%">
            <p style="margin: 0; padding: 0 5px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</p>
        </td>
    </tr>
    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
            <tr>
                <td colspan="3" style="padding: 10px 0;">
                    <p style="margin: 0; padding: 0;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>
</p>
                </td>
                <td colspan="2" align="left" style="padding: 10px 0;">
                    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
                        <p style="margin: 0; padding: 0; text-align: left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_quantity'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php }?>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
