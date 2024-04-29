<?php
/* Smarty version 3.1.47, created on 2024-04-29 17:47:20
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_663023782a80c5_89378619',
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
function content_663023782a80c5_89378619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14147906056630237829d439_64762133', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18747646296630237829dbb7_20192432', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_589290010663023782a42e3_11943762', "right_column");
?>
	 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_561881812663023782a7971_06166800', 'axps_block_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_14147906056630237829d439_64762133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_14147906056630237829d439_64762133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'cart_overview'} */
class Block_622271391663023782a0721_53416990 extends Smarty_Internal_Block
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
class Block_1843819641663023782a3112_16602498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block "content"} */
class Block_1010584154663023782a0406_45819412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-container">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_622271391663023782a0721_53416990', 'cart_overview', $this->tplIndex);
?>

				</div>
				<!-- shipping informations -->
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1843819641663023782a3112_16602498', 'hook_shopping_cart_footer', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_18747646296630237829dbb7_20192432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_18747646296630237829dbb7_20192432',
  ),
  'content' => 
  array (
    0 => 'Block_1010584154663023782a0406_45819412',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_622271391663023782a0721_53416990',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_1843819641663023782a3112_16602498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column cart-grid-body col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010584154663023782a0406_45819412', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'hook_shopping_cart'} */
class Block_1261727044663023782a4bf2_74800715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_1223939710663023782a53b3_64959305 extends Smarty_Internal_Block
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
class Block_1853030327663023782a5c53_97918404 extends Smarty_Internal_Block
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
class Block_1406515169663023782a4957_75334143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="ax-cart-summary cart-summary">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1261727044663023782a4bf2_74800715', 'hook_shopping_cart', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1223939710663023782a53b3_64959305', 'cart_totals', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1853030327663023782a5c53_97918404', 'cart_actions', $this->tplIndex);
?>


				  </div>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_596233981663023782a6846_37115224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_reassurance'} */
/* {block "right_content"} */
class Block_1101955127663023782a46a9_10457517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1406515169663023782a4957_75334143', 'cart_summary', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_596233981663023782a6846_37115224', 'hook_reassurance', $this->tplIndex);
?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_589290010663023782a42e3_11943762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_589290010663023782a42e3_11943762',
  ),
  'right_content' => 
  array (
    0 => 'Block_1101955127663023782a46a9_10457517',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1406515169663023782a4957_75334143',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_1261727044663023782a4bf2_74800715',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_1223939710663023782a53b3_64959305',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_1853030327663023782a5c53_97918404',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_596233981663023782a6846_37115224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="cart-grid-right col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1101955127663023782a46a9_10457517', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_561881812663023782a7971_06166800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_block_container' => 
  array (
    0 => 'Block_561881812663023782a7971_06166800',
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
