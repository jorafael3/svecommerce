<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:39:23
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66008f7b4f5374_17847840',
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
function content_66008f7b4f5374_17847840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153559777266008f7b4ec6c7_30294817', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84950433966008f7b4ece68_35647684', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114483280466008f7b4f1213_18856532', "right_column");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207249852866008f7b4f4470_81187744', 'block_modal_checkout');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_153559777266008f7b4ec6c7_30294817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_153559777266008f7b4ec6c7_30294817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'checkout_process'} */
class Block_162025251166008f7b4ef911_35399815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'checkout_process'} */
/* {block "content"} */
class Block_133312121166008f7b4ef5f7_52522151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162025251166008f7b4ef911_35399815', 'checkout_process', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_84950433966008f7b4ece68_35647684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_84950433966008f7b4ece68_35647684',
  ),
  'content' => 
  array (
    0 => 'Block_133312121166008f7b4ef5f7_52522151',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_162025251166008f7b4ef911_35399815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133312121166008f7b4ef5f7_52522151', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'cart_summary'} */
class Block_97589349266008f7b4f1822_90661324 extends Smarty_Internal_Block
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
class Block_82127484366008f7b4f15b9_11262671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97589349266008f7b4f1822_90661324', 'cart_summary', $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_114483280466008f7b4f1213_18856532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_114483280466008f7b4f1213_18856532',
  ),
  'right_content' => 
  array (
    0 => 'Block_82127484366008f7b4f15b9_11262671',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_97589349266008f7b4f1822_90661324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82127484366008f7b4f15b9_11262671', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'block_modal_checkout'} */
class Block_207249852866008f7b4f4470_81187744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_modal_checkout' => 
  array (
    0 => 'Block_207249852866008f7b4f4470_81187744',
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
