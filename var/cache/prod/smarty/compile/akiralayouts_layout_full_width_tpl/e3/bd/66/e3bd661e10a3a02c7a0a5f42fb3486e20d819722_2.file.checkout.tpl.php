<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:54:23
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6602009f3a3266_67793795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bd661e10a3a02c7a0a5f42fb3486e20d819722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\checkout.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_6602009f3a3266_67793795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3033400316602009f39a002_69998964', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2202698186602009f39a776_36184204', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16752924606602009f39ec13_31466598', "right_column");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19322016546602009f3a2331_62125612', 'block_modal_checkout');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_3033400316602009f39a002_69998964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_3033400316602009f39a002_69998964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'checkout_process'} */
class Block_2999141016602009f39d184_05386281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'checkout_process'} */
/* {block "content"} */
class Block_15135764976602009f39ce60_53423998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2999141016602009f39d184_05386281', 'checkout_process', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_2202698186602009f39a776_36184204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_2202698186602009f39a776_36184204',
  ),
  'content' => 
  array (
    0 => 'Block_15135764976602009f39ce60_53423998',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_2999141016602009f39d184_05386281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15135764976602009f39ce60_53423998', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'cart_summary'} */
class Block_20156557856602009f39f273_80298543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block "right_content"} */
class Block_5952105906602009f39efd5_92025573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20156557856602009f39f273_80298543', 'cart_summary', $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_16752924606602009f39ec13_31466598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_16752924606602009f39ec13_31466598',
  ),
  'right_content' => 
  array (
    0 => 'Block_5952105906602009f39efd5_92025573',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_20156557856602009f39f273_80298543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5952105906602009f39efd5_92025573', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'block_modal_checkout'} */
class Block_19322016546602009f3a2331_62125612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_modal_checkout' => 
  array (
    0 => 'Block_19322016546602009f3a2331_62125612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="modal" id="modal"><div class="modal-dialog modal-conditions" role="document">
      <div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
			<span aria-hidden="true">&times;</span>
		</button>  
		<div class="modal-body">  
        	<div class="js-modal-content">
				<i style="font-size: 24px;" class="las la-circle-notch la-spin"></i>
			</div>
		</div>
      </div>
    </div></div>
<?php
}
}
/* {/block 'block_modal_checkout'} */
}
