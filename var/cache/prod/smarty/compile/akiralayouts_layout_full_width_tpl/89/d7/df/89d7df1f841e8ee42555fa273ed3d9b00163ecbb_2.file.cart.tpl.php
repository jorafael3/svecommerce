<?php
/* Smarty version 3.1.47, created on 2024-03-25 17:26:54
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6601fa2e08b1c4_10299950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d7df1f841e8ee42555fa273ed3d9b00163ecbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\cart.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_6601fa2e08b1c4_10299950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16474397406601fa2e0805f0_48239149', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16107938986601fa2e080dc7_49270271', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11266274546601fa2e087840_82517183', "right_column");
?>
	 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3854892186601fa2e08a9c5_15529004', 'axps_block_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_16474397406601fa2e0805f0_48239149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_16474397406601fa2e0805f0_48239149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'cart_overview'} */
class Block_13631304186601fa2e083932_30863001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
					<?php
}
}
/* {/block 'cart_overview'} */
/* {block 'hook_shopping_cart_footer'} */
class Block_13433198426601fa2e086694_61272452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block "content"} */
class Block_7608948236601fa2e0835f3_93116176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-container">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13631304186601fa2e083932_30863001', 'cart_overview', $this->tplIndex);
?>

				</div>
				<!-- shipping informations -->
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13433198426601fa2e086694_61272452', 'hook_shopping_cart_footer', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_16107938986601fa2e080dc7_49270271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_16107938986601fa2e080dc7_49270271',
  ),
  'content' => 
  array (
    0 => 'Block_7608948236601fa2e0835f3_93116176',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_13631304186601fa2e083932_30863001',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_13433198426601fa2e086694_61272452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column cart-grid-body col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7608948236601fa2e0835f3_93116176', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'hook_shopping_cart'} */
class Block_15147207036601fa2e088175_36630537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_13357405256601fa2e0888d9_52353363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
					<?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_9943819016601fa2e0891c2_33909613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
					<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_18042642306601fa2e087ed7_41990683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="ax-cart-summary cart-summary">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15147207036601fa2e088175_36630537', 'hook_shopping_cart', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13357405256601fa2e0888d9_52353363', 'cart_totals', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9943819016601fa2e0891c2_33909613', 'cart_actions', $this->tplIndex);
?>


				  </div>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_2414282746601fa2e089dc5_50691615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_reassurance'} */
/* {block "right_content"} */
class Block_11255198966601fa2e087c16_38726507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18042642306601fa2e087ed7_41990683', 'cart_summary', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2414282746601fa2e089dc5_50691615', 'hook_reassurance', $this->tplIndex);
?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_11266274546601fa2e087840_82517183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_11266274546601fa2e087840_82517183',
  ),
  'right_content' => 
  array (
    0 => 'Block_11255198966601fa2e087c16_38726507',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_18042642306601fa2e087ed7_41990683',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_15147207036601fa2e088175_36630537',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_13357405256601fa2e0888d9_52353363',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_9943819016601fa2e0891c2_33909613',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_2414282746601fa2e089dc5_50691615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="cart-grid-right col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11255198966601fa2e087c16_38726507', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_3854892186601fa2e08a9c5_15529004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_block_container' => 
  array (
    0 => 'Block_3854892186601fa2e08a9c5_15529004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'axps_block_container'} */
}
