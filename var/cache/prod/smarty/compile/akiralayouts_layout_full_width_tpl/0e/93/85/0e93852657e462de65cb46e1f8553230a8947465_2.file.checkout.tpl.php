<?php
/* Smarty version 3.1.47, created on 2024-01-18 21:27:43
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a9de1f866551_85250427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e93852657e462de65cb46e1f8553230a8947465' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/checkout.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_65a9de1f866551_85250427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106919660665a9de1f85eb67_25508223', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13625643865a9de1f85f4e8_23118010', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12324937065a9de1f862bb2_71967730', "right_column");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122412024665a9de1f8655c6_40481148', 'block_modal_checkout');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_106919660665a9de1f85eb67_25508223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_106919660665a9de1f85eb67_25508223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'checkout_process'} */
class Block_21587183165a9de1f860e01_91514369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'checkout_process'} */
/* {block "content"} */
class Block_149479752765a9de1f860970_19015028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21587183165a9de1f860e01_91514369', 'checkout_process', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_13625643865a9de1f85f4e8_23118010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13625643865a9de1f85f4e8_23118010',
  ),
  'content' => 
  array (
    0 => 'Block_149479752765a9de1f860970_19015028',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_21587183165a9de1f860e01_91514369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149479752765a9de1f860970_19015028', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'cart_summary'} */
class Block_20431165065a9de1f863518_10930502 extends Smarty_Internal_Block
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
class Block_196261027965a9de1f863129_76755964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20431165065a9de1f863518_10930502', 'cart_summary', $this->tplIndex);
?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_12324937065a9de1f862bb2_71967730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_12324937065a9de1f862bb2_71967730',
  ),
  'right_content' => 
  array (
    0 => 'Block_196261027965a9de1f863129_76755964',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_20431165065a9de1f863518_10930502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196261027965a9de1f863129_76755964', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'block_modal_checkout'} */
class Block_122412024665a9de1f8655c6_40481148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_modal_checkout' => 
  array (
    0 => 'Block_122412024665a9de1f8655c6_40481148',
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
