<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:32:14
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0e9e4e2119_20572204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61530f98628c21d5cb51a811eeeefbfc49029a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_660a0e9e4e2119_20572204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_340439772660a0e9e4d0631_68866745', 'axps_html');
?>

<?php }
/* {block 'head'} */
class Block_1755837962660a0e9e4d0ee8_31079093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_197640545660a0e9e4d8d08_29347301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_1607004506660a0e9e4d9765_49670521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_585265062660a0e9e4d9ef7_23914294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_1719164265660a0e9e4daa11_36295884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'notifications'} */
class Block_753075252660a0e9e4db125_21550888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block 'notifications'} */
/* {block "content"} */
class Block_1499940894660a0e9e4dc237_72680965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p>Hello world! This is HTML5 Boilerplate.</p>
											<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_399645406660a0e9e4dbb91_96633482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="content-wrapper" class="js-content-wrapper left-column right-column col-xs-12 col-lg-6">
										<div id="main-content">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1499940894660a0e9e4dc237_72680965', "content", $this->tplIndex);
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

										</div>
									</div>
								<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_663565021660a0e9e4dd014_68055169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_365092918660a0e9e4dccc9_57619947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="left-column" class="col-xs-12 col-lg-3">
										<div id="left-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_663565021660a0e9e4dd014_68055169', "left_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "left_column"} */
/* {block "right_content"} */
class Block_745293730660a0e9e4ddd83_39982239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_1549181483660a0e9e4dda24_48893838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="right-column" class="col-xs-12 col-lg-3">
										<div id="right-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_745293730660a0e9e4ddd83_39982239', "right_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_1309997007660a0e9e4de8a8_45591620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'axps_block_container'} */
/* {block 'block_full_width'} */
class Block_1503578475660a0e9e4db808_63347786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="container container-parent">
							<div class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399645406660a0e9e4dbb91_96633482', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_365092918660a0e9e4dccc9_57619947', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549181483660a0e9e4dda24_48893838', "right_column", $this->tplIndex);
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1309997007660a0e9e4de8a8_45591620', 'axps_block_container', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'block_full_width'} */
/* {block "footer"} */
class Block_586956817660a0e9e4df414_28803464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_1010002630660a0e9e4dfd43_75203649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      			<?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
			<?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_631010739660a0e9e4e0d31_07710578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'block_modal_checkout'} */
class Block_1898146423660a0e9e4e1785_35505616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_modal_checkout'} */
/* {block 'axps_html'} */
class Block_340439772660a0e9e4d0631_68866745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_html' => 
  array (
    0 => 'Block_340439772660a0e9e4d0631_68866745',
  ),
  'head' => 
  array (
    0 => 'Block_1755837962660a0e9e4d0ee8_31079093',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_197640545660a0e9e4d8d08_29347301',
  ),
  'product_activation' => 
  array (
    0 => 'Block_1607004506660a0e9e4d9765_49670521',
  ),
  'header' => 
  array (
    0 => 'Block_585265062660a0e9e4d9ef7_23914294',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_1719164265660a0e9e4daa11_36295884',
  ),
  'notifications' => 
  array (
    0 => 'Block_753075252660a0e9e4db125_21550888',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_1503578475660a0e9e4db808_63347786',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_399645406660a0e9e4dbb91_96633482',
  ),
  'content' => 
  array (
    0 => 'Block_1499940894660a0e9e4dc237_72680965',
  ),
  'left_column' => 
  array (
    0 => 'Block_365092918660a0e9e4dccc9_57619947',
  ),
  'left_content' => 
  array (
    0 => 'Block_663565021660a0e9e4dd014_68055169',
  ),
  'right_column' => 
  array (
    0 => 'Block_1549181483660a0e9e4dda24_48893838',
  ),
  'right_content' => 
  array (
    0 => 'Block_745293730660a0e9e4ddd83_39982239',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_1309997007660a0e9e4de8a8_45591620',
  ),
  'footer' => 
  array (
    0 => 'Block_586956817660a0e9e4df414_28803464',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_1010002630660a0e9e4dfd43_75203649',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_631010739660a0e9e4e0d31_07710578',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_1898146423660a0e9e4e1785_35505616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!doctype html>
	<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">
		<head>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1755837962660a0e9e4d0ee8_31079093', 'head', $this->tplIndex);
?>

		</head>

		<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_main_layout']))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['general_main_layout'], ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['cart']->value['products'])) && count($_smarty_tpl->tpl_vars['cart']->value['products']) < 1) {?> cart-is-empty<?php }
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_column_space']))) {?> col-space-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['general_column_space'], ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['header_overlap']))) {?> header-is-overlap<?php }
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['product_label']))) {?> product-label-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['product_label'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?> rtl<?php }
if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['open_vertical_menu'])) && $_smarty_tpl->tpl_vars['opThemect']->value['open_vertical_menu']) {?> allways_show_menu<?php }?>">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197640545660a0e9e4d8d08_29347301', 'hook_after_body_opening_tag', $this->tplIndex);
?>

			<main>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1607004506660a0e9e4d9765_49670521', 'product_activation', $this->tplIndex);
?>
      
				<header id="header">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585265062660a0e9e4d9ef7_23914294', 'header', $this->tplIndex);
?>

				</header>
				<section id="wrapper">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719164265660a0e9e4daa11_36295884', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753075252660a0e9e4db125_21550888', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1503578475660a0e9e4db808_63347786', 'block_full_width', $this->tplIndex);
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

				</section>
				<footer id="footer" class="js-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_586956817660a0e9e4df414_28803464', "footer", $this->tplIndex);
?>

				</footer>
			</main>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010002630660a0e9e4dfd43_75203649', 'javascript_bottom', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_631010739660a0e9e4e0d31_07710578', 'hook_before_body_closing_tag', $this->tplIndex);
?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBodyBottom'),$_smarty_tpl ) );?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1898146423660a0e9e4e1785_35505616', 'block_modal_checkout', $this->tplIndex);
?>

		</body>
	</html>
<?php
}
}
/* {/block 'axps_html'} */
}
