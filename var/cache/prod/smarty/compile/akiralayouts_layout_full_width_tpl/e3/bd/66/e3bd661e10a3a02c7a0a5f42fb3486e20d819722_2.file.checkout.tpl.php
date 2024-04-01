<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:04:07
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0807a75471_37683583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bd661e10a3a02c7a0a5f42fb3486e20d819722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\checkout.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_660a0807a75471_37683583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523938758660a0807a6cad8_08396102', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_638691798660a0807a6d217_72958403', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_455957919660a0807a71496_45770384', "right_column");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115007798660a0807a74497_13381308', 'block_modal_checkout');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_523938758660a0807a6cad8_08396102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_523938758660a0807a6cad8_08396102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'checkout_process'} */
class Block_1590359440660a0807a6fbb7_04488533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'checkout_process'} */
/* {block "content"} */
class Block_269126771660a0807a6f8a1_32146110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590359440660a0807a6fbb7_04488533', 'checkout_process', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_638691798660a0807a6d217_72958403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_638691798660a0807a6d217_72958403',
  ),
  'content' => 
  array (
    0 => 'Block_269126771660a0807a6f8a1_32146110',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_1590359440660a0807a6fbb7_04488533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269126771660a0807a6f8a1_32146110', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'cart_summary'} */
class Block_1662083878660a0807a71aa4_57960487 extends Smarty_Internal_Block
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
class Block_226496333660a0807a71827_91242010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662083878660a0807a71aa4_57960487', 'cart_summary', $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_455957919660a0807a71496_45770384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_455957919660a0807a71496_45770384',
  ),
  'right_content' => 
  array (
    0 => 'Block_226496333660a0807a71827_91242010',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1662083878660a0807a71aa4_57960487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226496333660a0807a71827_91242010', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'block_modal_checkout'} */
class Block_1115007798660a0807a74497_13381308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_modal_checkout' => 
  array (
    0 => 'Block_1115007798660a0807a74497_13381308',
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
