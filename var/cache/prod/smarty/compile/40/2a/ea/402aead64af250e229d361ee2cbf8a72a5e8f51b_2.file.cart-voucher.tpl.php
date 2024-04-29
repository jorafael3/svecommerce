<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
=======
/* Smarty version 3.1.47, created on 2024-04-01 10:29:01
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f41086839a2_65884135',
=======
  'unifunc' => 'content_660ad2bd50a7c6_41755028',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402aead64af250e229d361ee2cbf8a72a5e8f51b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\cart-voucher.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f41086839a2_65884135 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660ad2bd50a7c6_41755028 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1019548866662f410867c034_82792759', 'cart_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77576105660ad2bd503859_20503766', 'cart_voucher');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
}
/* {block 'cart_voucher_list'} */
<<<<<<< HEAD
class Block_252581632662f410867c934_28826251 extends Smarty_Internal_Block
=======
class Block_2094804799660ad2bd5043c4_98958175 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="promo-name">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
					<?php if ((isset($_smarty_tpl->tpl_vars['voucher']->value['code'])) && $_smarty_tpl->tpl_vars['voucher']->value['code'] !== '') {?>
					  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher">
						  <i class="las la-times-circle"></i>
					  </a>
					<?php }?>
                  <div class="float-xs-right">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
<<<<<<< HEAD
class Block_1484671212662f41086802d9_71926916 extends Smarty_Internal_Block
=======
class Block_1798387822660ad2bd506f03_66013393 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input form-control" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
              <button type="submit" class="btn btn-primary-r"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
            </form>
          <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
<<<<<<< HEAD
class Block_1215354499662f4108681587_07720220 extends Smarty_Internal_Block
=======
class Block_1470078481660ad2bd508245_89740020 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="alert alert-danger js-error" role="alert">
              <i class="las la-exclamation-circle"></i><span class="js-error-text"></span>
            </div>
          <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
<<<<<<< HEAD
class Block_1019548866662f410867c034_82792759 extends Smarty_Internal_Block
=======
class Block_77576105660ad2bd503859_20503766 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1019548866662f410867c034_82792759',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_252581632662f410867c934_28826251',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_1484671212662f41086802d9_71926916',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_1215354499662f4108681587_07720220',
=======
    0 => 'Block_77576105660ad2bd503859_20503766',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_2094804799660ad2bd5043c4_98958175',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_1798387822660ad2bd506f03_66013393',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_1470078481660ad2bd508245_89740020',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="block-promo cart-voucher js-cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252581632662f410867c934_28826251', 'cart_voucher_list', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094804799660ad2bd5043c4_98958175', 'cart_voucher_list', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        <?php }?>
		  
        <div class="promo-code" id="promo-code">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1484671212662f41086802d9_71926916', 'cart_voucher_form', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798387822660ad2bd506f03_66013393', 'cart_voucher_form', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1215354499662f4108681587_07720220', 'cart_voucher_notifications', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1470078481660ad2bd508245_89740020', 'cart_voucher_notifications', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        </div>

        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </p>
          <ul class="js-discount card-block promo-discounts">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
            <li class="cart-summary-line">
              <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
