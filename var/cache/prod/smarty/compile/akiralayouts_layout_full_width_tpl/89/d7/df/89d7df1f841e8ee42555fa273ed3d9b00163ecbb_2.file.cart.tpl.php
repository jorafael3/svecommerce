<?php
/* Smarty version 3.1.47, created on 2024-03-31 19:57:02
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a065e03f5a0_20629855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d7df1f841e8ee42555fa273ed3d9b00163ecbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\cart.tpl',
      1 => 1711210466,
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
function content_660a065e03f5a0_20629855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121920214660a065e0353b2_01432210', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050962418660a065e035b74_19698678', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1911335250660a065e03c221_63126641', "right_column");
?>
	 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239673409660a065e03eed5_19517629', 'axps_block_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_121920214660a065e0353b2_01432210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_121920214660a065e0353b2_01432210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'cart_overview'} */
class Block_876923017660a065e038834_15547690 extends Smarty_Internal_Block
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
class Block_634898076660a065e03b0f2_17033193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block "content"} */
class Block_205120433660a065e0384f2_55025758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-container">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_876923017660a065e038834_15547690', 'cart_overview', $this->tplIndex);
?>

				</div>
				<!-- shipping informations -->
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634898076660a065e03b0f2_17033193', 'hook_shopping_cart_footer', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_1050962418660a065e035b74_19698678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1050962418660a065e035b74_19698678',
  ),
  'content' => 
  array (
    0 => 'Block_205120433660a065e0384f2_55025758',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_876923017660a065e038834_15547690',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_634898076660a065e03b0f2_17033193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column cart-grid-body col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205120433660a065e0384f2_55025758', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'hook_shopping_cart'} */
class Block_647260950660a065e03cac9_42882869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_362110010660a065e03d1b5_20029320 extends Smarty_Internal_Block
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
class Block_551987569660a065e03da17_08773706 extends Smarty_Internal_Block
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
class Block_370907680660a065e03c846_87604713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="ax-cart-summary cart-summary">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_647260950660a065e03cac9_42882869', 'hook_shopping_cart', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_362110010660a065e03d1b5_20029320', 'cart_totals', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_551987569660a065e03da17_08773706', 'cart_actions', $this->tplIndex);
?>


				  </div>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_1414778630660a065e03e405_53452638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_reassurance'} */
/* {block "right_content"} */
class Block_1234125054660a065e03c5c3_62587648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_370907680660a065e03c846_87604713', 'cart_summary', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414778630660a065e03e405_53452638', 'hook_reassurance', $this->tplIndex);
?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_1911335250660a065e03c221_63126641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1911335250660a065e03c221_63126641',
  ),
  'right_content' => 
  array (
    0 => 'Block_1234125054660a065e03c5c3_62587648',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_370907680660a065e03c846_87604713',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_647260950660a065e03cac9_42882869',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_362110010660a065e03d1b5_20029320',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_551987569660a065e03da17_08773706',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_1414778630660a065e03e405_53452638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="cart-grid-right col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1234125054660a065e03c5c3_62587648', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_239673409660a065e03eed5_19517629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_block_container' => 
  array (
    0 => 'Block_239673409660a065e03eed5_19517629',
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
