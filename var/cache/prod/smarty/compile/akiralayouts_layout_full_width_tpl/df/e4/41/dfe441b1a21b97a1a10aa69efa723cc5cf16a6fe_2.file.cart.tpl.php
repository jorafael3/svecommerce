<?php
/* Smarty version 3.1.47, created on 2024-01-18 21:26:31
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a9ddd7c4c088_01611593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe441b1a21b97a1a10aa69efa723cc5cf16a6fe' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/checkout/cart.tpl',
      1 => 1685021478,
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
function content_65a9ddd7c4c088_01611593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78811850465a9ddd7c3d0e1_91923468', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7235725565a9ddd7c3df73_08053307', 'content_wrapper');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43816800765a9ddd7c444c7_09024181', "right_column");
?>
	 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85226187065a9ddd7c4b194_18993564', 'axps_block_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_78811850465a9ddd7c3d0e1_91923468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_78811850465a9ddd7c3d0e1_91923468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'cart_overview'} */
class Block_117788290465a9ddd7c40187_01961719 extends Smarty_Internal_Block
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
class Block_185177478565a9ddd7c42195_59328080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block "content"} */
class Block_35492250065a9ddd7c3fb78_34695137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-container">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117788290465a9ddd7c40187_01961719', 'cart_overview', $this->tplIndex);
?>

				</div>
				<!-- shipping informations -->
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185177478565a9ddd7c42195_59328080', 'hook_shopping_cart_footer', $this->tplIndex);
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_7235725565a9ddd7c3df73_08053307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_7235725565a9ddd7c3df73_08053307',
  ),
  'content' => 
  array (
    0 => 'Block_35492250065a9ddd7c3fb78_34695137',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_117788290465a9ddd7c40187_01961719',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_185177478565a9ddd7c42195_59328080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column cart-grid-body col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35492250065a9ddd7c3fb78_34695137', "content", $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'hook_shopping_cart'} */
class Block_14489287765a9ddd7c457b9_73993810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_106332186765a9ddd7c46762_68082540 extends Smarty_Internal_Block
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
class Block_96485891665a9ddd7c47eb7_45704739 extends Smarty_Internal_Block
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
class Block_75987080865a9ddd7c45245_06900333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="ax-cart-summary cart-summary">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14489287765a9ddd7c457b9_73993810', 'hook_shopping_cart', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106332186765a9ddd7c46762_68082540', 'cart_totals', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96485891665a9ddd7c47eb7_45704739', 'cart_actions', $this->tplIndex);
?>


				  </div>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_122440248565a9ddd7c49923_85075622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_reassurance'} */
/* {block "right_content"} */
class Block_154952910465a9ddd7c44c51_67032131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75987080865a9ddd7c45245_06900333', 'cart_summary', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122440248565a9ddd7c49923_85075622', 'hook_reassurance', $this->tplIndex);
?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_43816800765a9ddd7c444c7_09024181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_43816800765a9ddd7c444c7_09024181',
  ),
  'right_content' => 
  array (
    0 => 'Block_154952910465a9ddd7c44c51_67032131',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_75987080865a9ddd7c45245_06900333',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_14489287765a9ddd7c457b9_73993810',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_106332186765a9ddd7c46762_68082540',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_96485891665a9ddd7c47eb7_45704739',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_122440248565a9ddd7c49923_85075622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="cart-grid-right col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154952910465a9ddd7c44c51_67032131', "right_content", $this->tplIndex);
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_85226187065a9ddd7c4b194_18993564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_block_container' => 
  array (
    0 => 'Block_85226187065a9ddd7c4b194_18993564',
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
