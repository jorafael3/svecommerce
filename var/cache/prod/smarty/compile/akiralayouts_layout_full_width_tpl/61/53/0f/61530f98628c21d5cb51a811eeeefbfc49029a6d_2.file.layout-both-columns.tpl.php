<?php
/* Smarty version 3.1.47, created on 2024-03-28 14:38:49
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6605c7494a4b85_77527930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61530f98628c21d5cb51a811eeeefbfc49029a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1711123680,
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
function content_6605c7494a4b85_77527930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14866498806605c749492297_88012863', 'axps_html');
?>

<?php }
/* {block 'head'} */
class Block_6383195836605c749492ea8_72290991 extends Smarty_Internal_Block
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
class Block_13153952056605c74949b333_14581431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_19264901646605c74949bc05_75814423 extends Smarty_Internal_Block
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
class Block_7656863656605c74949c3f3_20038675 extends Smarty_Internal_Block
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
class Block_12348407396605c74949d074_18534507 extends Smarty_Internal_Block
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
class Block_9684609146605c74949d836_74536758 extends Smarty_Internal_Block
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
class Block_16890871346605c74949eb09_87677472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p>Hello world! This is HTML5 Boilerplate.</p>
											<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_11979104916605c74949e3d2_53647798 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="content-wrapper" class="js-content-wrapper left-column right-column col-xs-12 col-lg-6">
										<div id="main-content">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16890871346605c74949eb09_87677472', "content", $this->tplIndex);
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

										</div>
									</div>
								<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_11144523246605c74949fab6_71814182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_12392344326605c74949f713_62241333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="left-column" class="col-xs-12 col-lg-3">
										<div id="left-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11144523246605c74949fab6_71814182', "left_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "left_column"} */
/* {block "right_content"} */
class Block_15445879266605c7494a09e9_75542794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_10313040256605c7494a0630_70373803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="right-column" class="col-xs-12 col-lg-3">
										<div id="right-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15445879266605c7494a09e9_75542794', "right_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_9579667016605c7494a1408_86820060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'axps_block_container'} */
/* {block 'block_full_width'} */
class Block_10203623596605c74949e024_99759132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="container container-parent">
							<div class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11979104916605c74949e3d2_53647798', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12392344326605c74949f713_62241333', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10313040256605c7494a0630_70373803', "right_column", $this->tplIndex);
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9579667016605c7494a1408_86820060', 'axps_block_container', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'block_full_width'} */
/* {block "footer"} */
class Block_16764881986605c7494a1f66_84881405 extends Smarty_Internal_Block
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
class Block_9257115736605c7494a2839_11533974 extends Smarty_Internal_Block
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
class Block_17141117326605c7494a3730_70128249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'block_modal_checkout'} */
class Block_7213784926605c7494a41b3_70920725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_modal_checkout'} */
/* {block 'axps_html'} */
class Block_14866498806605c749492297_88012863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_html' => 
  array (
    0 => 'Block_14866498806605c749492297_88012863',
  ),
  'head' => 
  array (
    0 => 'Block_6383195836605c749492ea8_72290991',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_13153952056605c74949b333_14581431',
  ),
  'product_activation' => 
  array (
    0 => 'Block_19264901646605c74949bc05_75814423',
  ),
  'header' => 
  array (
    0 => 'Block_7656863656605c74949c3f3_20038675',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_12348407396605c74949d074_18534507',
  ),
  'notifications' => 
  array (
    0 => 'Block_9684609146605c74949d836_74536758',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_10203623596605c74949e024_99759132',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_11979104916605c74949e3d2_53647798',
  ),
  'content' => 
  array (
    0 => 'Block_16890871346605c74949eb09_87677472',
  ),
  'left_column' => 
  array (
    0 => 'Block_12392344326605c74949f713_62241333',
  ),
  'left_content' => 
  array (
    0 => 'Block_11144523246605c74949fab6_71814182',
  ),
  'right_column' => 
  array (
    0 => 'Block_10313040256605c7494a0630_70373803',
  ),
  'right_content' => 
  array (
    0 => 'Block_15445879266605c7494a09e9_75542794',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_9579667016605c7494a1408_86820060',
  ),
  'footer' => 
  array (
    0 => 'Block_16764881986605c7494a1f66_84881405',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_9257115736605c7494a2839_11533974',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_17141117326605c7494a3730_70128249',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_7213784926605c7494a41b3_70920725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!doctype html>
	<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">
		<head>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6383195836605c749492ea8_72290991', 'head', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13153952056605c74949b333_14581431', 'hook_after_body_opening_tag', $this->tplIndex);
?>

			<main>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19264901646605c74949bc05_75814423', 'product_activation', $this->tplIndex);
?>
      
				<header id="header">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7656863656605c74949c3f3_20038675', 'header', $this->tplIndex);
?>

				</header>
				<section id="wrapper">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12348407396605c74949d074_18534507', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9684609146605c74949d836_74536758', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10203623596605c74949e024_99759132', 'block_full_width', $this->tplIndex);
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

				</section>
				<footer id="footer" class="js-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16764881986605c7494a1f66_84881405', "footer", $this->tplIndex);
?>

				</footer>
			</main>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9257115736605c7494a2839_11533974', 'javascript_bottom', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17141117326605c7494a3730_70128249', 'hook_before_body_closing_tag', $this->tplIndex);
?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBodyBottom'),$_smarty_tpl ) );?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7213784926605c7494a41b3_70920725', 'block_modal_checkout', $this->tplIndex);
?>

		</body>
	</html>
<?php
}
}
/* {/block 'axps_html'} */
}
