<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 23:01:18
=======
/* Smarty version 3.1.47, created on 2024-04-01 11:20:36
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\steps\shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f1b8e20a872_76266647',
=======
  'unifunc' => 'content_660aded4145668_79220254',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350ec7232316d812d2cff4552c68936d32f59d65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\steps\\shipping.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f1b8e20a872_76266647 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aded4145668_79220254 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_605644189662f1b8e201a26_31089167', 'step_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690426545660aded413bd37_11740936', 'step_content');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/steps/checkout-step.tpl');
}
/* {block 'delivery_options'} */
<<<<<<< HEAD
class Block_1867275881662f1b8e203176_74038058 extends Smarty_Internal_Block
=======
class Block_1665332695660aded413d410_68803877 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="delivery-options">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_options']->value, 'carrier', false, 'carrier_id');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier_id']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
                  <div class="delivery-option js-delivery-option">
                    <label class="wrapper-custom-checkbox delivery-option-2">
                      <span class="custom-radio">
                        <input type="radio" name="delivery_option[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
]" id="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value == $_smarty_tpl->tpl_vars['carrier_id']->value) {?> checked<?php }?>>
                        <span></span>
                      </span>
                      <div class="row">
                        <div class="col-sm-5 col-xs-12">
                          <div class="row">
                            <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                            <div class="col-xs-3">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/>
                            </div>
                            <?php }?>
                            <div class="<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>col-xs-9<?php } else { ?>col-xs-12<?php }?>">
                              <span class="h6 carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                          <span class="carrier-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="row carrier-extra-content js-carrier-extra-content"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value != $_smarty_tpl->tpl_vars['carrier_id']->value) {?> style="display:none;"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['carrier']->value['extraContent'];?>

                  </div>
                  <div class="clearfix"></div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php
}
}
/* {/block 'delivery_options'} */
/* {block 'step_content'} */
<<<<<<< HEAD
class Block_605644189662f1b8e201a26_31089167 extends Smarty_Internal_Block
=======
class Block_1690426545660aded413bd37_11740936 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'step_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_605644189662f1b8e201a26_31089167',
  ),
  'delivery_options' => 
  array (
    0 => 'Block_1867275881662f1b8e203176_74038058',
=======
    0 => 'Block_1690426545660aded413bd37_11740936',
  ),
  'delivery_options' => 
  array (
    0 => 'Block_1665332695660aded413d410_68803877',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="hook-display-before-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>

  </div>

  <div class="delivery-options-list">
    <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>
      <form
        class="clearfix"
        id="js-delivery"
        data-url-update="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'selectDeliveryOption')),$_smarty_tpl ) );?>
"
        method="post"
      >
        <div class="form-fields">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1867275881662f1b8e203176_74038058', 'delivery_options', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1665332695660aded413d410_68803877', 'delivery_options', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

          <div class="order-options">
            <div id="delivery">
              <label for="delivery_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
              <textarea rows="2" cols="120" id="delivery_message" name="delivery_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_message']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
			  <label class="wrapper-custom-checkbox">
				  <span class="custom-checkbox">
					<input type="checkbox" id="input_recyclable" name="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value) {?> checked <?php }?>>
					<span><i class="las la-check checkbox-checked"></i></span>
				  </span>
				  <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like to receive my order in recycled packaging.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			  </label>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['gift']->value['allowed']) {?>
			  <label class="wrapper-custom-checkbox">
				  <span class="custom-checkbox">
					<input class="js-gift-checkbox" id="input_gift" name="gift" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?>checked="checked"<?php }?>>
					<span><i class="las la-check checkbox-checked"></i></span>
				  </span>
				  <span class="text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
			  </label>
				
              <div id="gift" class="collapse<?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?> in<?php }?>">
                <label for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like, you can add a note to the gift:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
                <textarea rows="2" cols="120" id="gift_message" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
              </div>
            <?php }?>

          </div>
        </div>
        <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </form>
    <?php } else { ?>
      <p class="alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unfortunately, there are no carriers available for your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>

  <div id="hook-display-after-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>

  </div>

  <div id="extra_carrier"></div>
<?php
}
}
/* {/block 'step_content'} */
}
