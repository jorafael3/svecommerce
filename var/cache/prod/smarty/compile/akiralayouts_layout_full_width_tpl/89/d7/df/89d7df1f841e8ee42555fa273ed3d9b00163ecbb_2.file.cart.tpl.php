<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:40:24
=======
/* Smarty version 3.1.47, created on 2024-04-01 09:58:28
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f40d8d9b862_02531714',
=======
  'unifunc' => 'content_660acb948d5367_85783023',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
function content_662f40d8d9b862_02531714 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660acb948d5367_85783023 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
	 


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1655811673662f40d8d90fb2_27749979', 'left_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1766888799660acb948cb044_15506649', 'left_column');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740771239662f40d8d91a30_01627498', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1897167382660acb948cb990_03660416', 'content_wrapper');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_583725602662f40d8d98549_39252450', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106561519660acb948d1a17_12113485', "right_column");
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>
	 

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1897109193662f40d8d9b1a6_29344665', 'axps_block_container');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236284011660acb948d4c00_33962514', 'axps_block_container');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_1655811673662f40d8d90fb2_27749979 extends Smarty_Internal_Block
=======
class Block_1766888799660acb948cb044_15506649 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1655811673662f40d8d90fb2_27749979',
=======
    0 => 'Block_1766888799660acb948cb044_15506649',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'cart_overview'} */
<<<<<<< HEAD
class Block_917284640662f40d8d94a05_66285661 extends Smarty_Internal_Block
=======
class Block_1493217154660acb948cd958_12564485 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_828839662f40d8d97438_17080684 extends Smarty_Internal_Block
=======
class Block_1528757534660acb948d07b1_06371597 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block "content"} */
<<<<<<< HEAD
class Block_770984400662f40d8d946c5_91552639 extends Smarty_Internal_Block
=======
class Block_152281439660acb948cd631_67713345 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-container">
					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917284640662f40d8d94a05_66285661', 'cart_overview', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1493217154660acb948cd958_12564485', 'cart_overview', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

				</div>
				<!-- shipping informations -->
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828839662f40d8d97438_17080684', 'hook_shopping_cart_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1528757534660acb948d07b1_06371597', 'hook_shopping_cart_footer', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

            <?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_1740771239662f40d8d91a30_01627498 extends Smarty_Internal_Block
=======
class Block_1897167382660acb948cb990_03660416 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1740771239662f40d8d91a30_01627498',
  ),
  'content' => 
  array (
    0 => 'Block_770984400662f40d8d946c5_91552639',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_917284640662f40d8d94a05_66285661',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_828839662f40d8d97438_17080684',
=======
    0 => 'Block_1897167382660acb948cb990_03660416',
  ),
  'content' => 
  array (
    0 => 'Block_152281439660acb948cd631_67713345',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_1493217154660acb948cd958_12564485',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_1528757534660acb948d07b1_06371597',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column cart-grid-body col-xs-12 col-lg-8">
  	<div id="main-content">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_770984400662f40d8d946c5_91552639', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152281439660acb948cd631_67713345', "content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'hook_shopping_cart'} */
<<<<<<< HEAD
class Block_1814227081662f40d8d98e10_75718081 extends Smarty_Internal_Block
=======
class Block_587505851660acb948d23c3_82129162 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
<<<<<<< HEAD
class Block_367883013662f40d8d994e3_82986820 extends Smarty_Internal_Block
=======
class Block_1980413233660acb948d2b48_96540368 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_89033944662f40d8d99d37_38386326 extends Smarty_Internal_Block
=======
class Block_111382243660acb948d34a3_39786171 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1683415543662f40d8d98ba8_34113732 extends Smarty_Internal_Block
=======
class Block_823996923660acb948d20a1_59977807 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="ax-cart-summary cart-summary">

					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1814227081662f40d8d98e10_75718081', 'hook_shopping_cart', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587505851660acb948d23c3_82129162', 'hook_shopping_cart', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367883013662f40d8d994e3_82986820', 'cart_totals', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1980413233660acb948d2b48_96540368', 'cart_totals', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89033944662f40d8d99d37_38386326', 'cart_actions', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111382243660acb948d34a3_39786171', 'cart_actions', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


				  </div>
				<?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
<<<<<<< HEAD
class Block_2110367808662f40d8d9a729_01372664 extends Smarty_Internal_Block
=======
class Block_171899365660acb948d3f86_09819407 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_reassurance'} */
/* {block "right_content"} */
<<<<<<< HEAD
class Block_392207162662f40d8d988f7_27517322 extends Smarty_Internal_Block
=======
class Block_1595840526660acb948d1de0_52953022 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1683415543662f40d8d98ba8_34113732', 'cart_summary', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823996923660acb948d20a1_59977807', 'cart_summary', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2110367808662f40d8d9a729_01372664', 'hook_reassurance', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171899365660acb948d3f86_09819407', 'hook_reassurance', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
<<<<<<< HEAD
class Block_583725602662f40d8d98549_39252450 extends Smarty_Internal_Block
=======
class Block_1106561519660acb948d1a17_12113485 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_583725602662f40d8d98549_39252450',
  ),
  'right_content' => 
  array (
    0 => 'Block_392207162662f40d8d988f7_27517322',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1683415543662f40d8d98ba8_34113732',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_1814227081662f40d8d98e10_75718081',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_367883013662f40d8d994e3_82986820',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_89033944662f40d8d99d37_38386326',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_2110367808662f40d8d9a729_01372664',
=======
    0 => 'Block_1106561519660acb948d1a17_12113485',
  ),
  'right_content' => 
  array (
    0 => 'Block_1595840526660acb948d1de0_52953022',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_823996923660acb948d20a1_59977807',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_587505851660acb948d23c3_82129162',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_1980413233660acb948d2b48_96540368',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_111382243660acb948d34a3_39786171',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_171899365660acb948d3f86_09819407',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="cart-grid-right col-xs-12 col-lg-4">
        <div id="right-content">
			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_392207162662f40d8d988f7_27517322', "right_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1595840526660acb948d1de0_52953022', "right_content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

        </div>
    </div>
<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
<<<<<<< HEAD
class Block_1897109193662f40d8d9b1a6_29344665 extends Smarty_Internal_Block
=======
class Block_236284011660acb948d4c00_33962514 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'axps_block_container' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1897109193662f40d8d9b1a6_29344665',
=======
    0 => 'Block_236284011660acb948d4c00_33962514',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
