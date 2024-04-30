<?php
/* Smarty version 3.1.47, created on 2024-04-29 22:07:19
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66306067d64e75_33309192',
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
function content_66306067d64e75_33309192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78860370366306067d531b9_17141721', 'axps_html');
?>

<?php }
/* {block 'head'} */
class Block_58466183666306067d53b96_62844458 extends Smarty_Internal_Block
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
class Block_196463457866306067d5bb78_72530959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_36322768366306067d5c415_95590908 extends Smarty_Internal_Block
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
class Block_118215767266306067d5cb30_83475674 extends Smarty_Internal_Block
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
class Block_199362104366306067d5d673_46707145 extends Smarty_Internal_Block
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
class Block_32747768166306067d5dd66_89880032 extends Smarty_Internal_Block
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
class Block_114238945766306067d5edf3_23265552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p>Hello world! This is HTML5 Boilerplate.</p>
											<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_147112983766306067d5e785_15842446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="content-wrapper" class="js-content-wrapper left-column right-column col-xs-12 col-lg-6">
										<div id="main-content">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114238945766306067d5edf3_23265552', "content", $this->tplIndex);
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

										</div>
									</div>
								<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_71585639666306067d5fbb5_12798271 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_195941278266306067d5f862_21451317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="left-column" class="col-xs-12 col-lg-3">
										<div id="left-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71585639666306067d5fbb5_12798271', "left_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "left_column"} */
/* {block "right_content"} */
class Block_43035364166306067d608d1_24309902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_209024172366306067d60581_82571022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="right-column" class="col-xs-12 col-lg-3">
										<div id="right-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43035364166306067d608d1_24309902', "right_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_136715181966306067d61206_54069680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'axps_block_container'} */
/* {block 'block_full_width'} */
class Block_153020938766306067d5e421_10667221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="container container-parent">
							<div class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147112983766306067d5e785_15842446', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195941278266306067d5f862_21451317', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209024172366306067d60581_82571022', "right_column", $this->tplIndex);
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136715181966306067d61206_54069680', 'axps_block_container', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'block_full_width'} */
/* {block "footer"} */
class Block_176324647966306067d61c00_98708214 extends Smarty_Internal_Block
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
class Block_9157761266306067d627a1_93471076 extends Smarty_Internal_Block
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
class Block_103866452666306067d639c6_78970096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'block_modal_checkout'} */
class Block_161950270966306067d642f3_21012391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_modal_checkout'} */
/* {block 'axps_html'} */
class Block_78860370366306067d531b9_17141721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_html' => 
  array (
    0 => 'Block_78860370366306067d531b9_17141721',
  ),
  'head' => 
  array (
    0 => 'Block_58466183666306067d53b96_62844458',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_196463457866306067d5bb78_72530959',
  ),
  'product_activation' => 
  array (
    0 => 'Block_36322768366306067d5c415_95590908',
  ),
  'header' => 
  array (
    0 => 'Block_118215767266306067d5cb30_83475674',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_199362104366306067d5d673_46707145',
  ),
  'notifications' => 
  array (
    0 => 'Block_32747768166306067d5dd66_89880032',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_153020938766306067d5e421_10667221',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_147112983766306067d5e785_15842446',
  ),
  'content' => 
  array (
    0 => 'Block_114238945766306067d5edf3_23265552',
  ),
  'left_column' => 
  array (
    0 => 'Block_195941278266306067d5f862_21451317',
  ),
  'left_content' => 
  array (
    0 => 'Block_71585639666306067d5fbb5_12798271',
  ),
  'right_column' => 
  array (
    0 => 'Block_209024172366306067d60581_82571022',
  ),
  'right_content' => 
  array (
    0 => 'Block_43035364166306067d608d1_24309902',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_136715181966306067d61206_54069680',
  ),
  'footer' => 
  array (
    0 => 'Block_176324647966306067d61c00_98708214',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_9157761266306067d627a1_93471076',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_103866452666306067d639c6_78970096',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_161950270966306067d642f3_21012391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!doctype html>
	<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">
		<head>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58466183666306067d53b96_62844458', 'head', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196463457866306067d5bb78_72530959', 'hook_after_body_opening_tag', $this->tplIndex);
?>

			<main>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36322768366306067d5c415_95590908', 'product_activation', $this->tplIndex);
?>
      
				<header id="header">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118215767266306067d5cb30_83475674', 'header', $this->tplIndex);
?>

				</header>
				<section id="wrapper">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199362104366306067d5d673_46707145', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32747768166306067d5dd66_89880032', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153020938766306067d5e421_10667221', 'block_full_width', $this->tplIndex);
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

				</section>
				<footer id="footer" class="js-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176324647966306067d61c00_98708214', "footer", $this->tplIndex);
?>

				</footer>
			</main>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9157761266306067d627a1_93471076', 'javascript_bottom', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103866452666306067d639c6_78970096', 'hook_before_body_closing_tag', $this->tplIndex);
?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBodyBottom'),$_smarty_tpl ) );?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161950270966306067d642f3_21012391', 'block_modal_checkout', $this->tplIndex);
?>

		</body>
	</html>
<?php
}
}
/* {/block 'axps_html'} */
}
