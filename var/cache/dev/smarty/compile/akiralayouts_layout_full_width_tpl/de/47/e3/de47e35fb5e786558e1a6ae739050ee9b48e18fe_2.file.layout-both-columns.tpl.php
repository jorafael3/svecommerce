<?php
/* Smarty version 3.1.47, created on 2023-06-08 14:13:09
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64822845d243a7_78025564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de47e35fb5e786558e1a6ae739050ee9b48e18fe' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/layouts/layout-both-columns.tpl',
      1 => 1685021478,
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
function content_64822845d243a7_78025564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187148445064822845d02591_64804683', 'axps_html');
?>

<?php }
/* {block 'head'} */
class Block_68492727564822845d03736_94744144 extends Smarty_Internal_Block
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
class Block_152430270364822845d0ecd9_85261540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_201574767864822845d0fe74_77125994 extends Smarty_Internal_Block
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
class Block_202737890064822845d10fc0_34237942 extends Smarty_Internal_Block
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
class Block_95209176464822845d127e6_94560709 extends Smarty_Internal_Block
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
class Block_75418801264822845d13788_79088825 extends Smarty_Internal_Block
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
class Block_146704069464822845d15ea2_44892799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p>Hello world! This is HTML5 Boilerplate.</p>
											<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_91696480864822845d14f49_20451060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="content-wrapper" class="js-content-wrapper left-column right-column col-xs-12 col-lg-6">
										<div id="main-content">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146704069464822845d15ea2_44892799', "content", $this->tplIndex);
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

										</div>
									</div>
								<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
class Block_21709217464822845d17e51_72720308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_28526593264822845d17638_68411788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="left-column" class="col-xs-12 col-lg-3">
										<div id="left-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21709217464822845d17e51_72720308', "left_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "left_column"} */
/* {block "right_content"} */
class Block_64847318564822845d19cf6_63466456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_89475187464822845d194f7_06432787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="right-column" class="col-xs-12 col-lg-3">
										<div id="right-content">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64847318564822845d19cf6_63466456', "right_content", $this->tplIndex);
?>

										</div>
									</div>
								<?php
}
}
/* {/block "right_column"} */
/* {block 'axps_block_container'} */
class Block_12064070464822845d1b1c0_39091784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'axps_block_container'} */
/* {block 'block_full_width'} */
class Block_34010471064822845d14742_20757263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="container container-parent">
							<div class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91696480864822845d14f49_20451060', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28526593264822845d17638_68411788', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89475187464822845d194f7_06432787', "right_column", $this->tplIndex);
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12064070464822845d1b1c0_39091784', 'axps_block_container', $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block 'block_full_width'} */
/* {block "footer"} */
class Block_189809974964822845d1eb96_16616841 extends Smarty_Internal_Block
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
class Block_1439264364822845d1ffb7_65003349 extends Smarty_Internal_Block
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
class Block_123336552064822845d21fc9_72947179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'block_modal_checkout'} */
class Block_7803361864822845d232f0_56993116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_modal_checkout'} */
/* {block 'axps_html'} */
class Block_187148445064822845d02591_64804683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'axps_html' => 
  array (
    0 => 'Block_187148445064822845d02591_64804683',
  ),
  'head' => 
  array (
    0 => 'Block_68492727564822845d03736_94744144',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_152430270364822845d0ecd9_85261540',
  ),
  'product_activation' => 
  array (
    0 => 'Block_201574767864822845d0fe74_77125994',
  ),
  'header' => 
  array (
    0 => 'Block_202737890064822845d10fc0_34237942',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_95209176464822845d127e6_94560709',
  ),
  'notifications' => 
  array (
    0 => 'Block_75418801264822845d13788_79088825',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_34010471064822845d14742_20757263',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_91696480864822845d14f49_20451060',
  ),
  'content' => 
  array (
    0 => 'Block_146704069464822845d15ea2_44892799',
  ),
  'left_column' => 
  array (
    0 => 'Block_28526593264822845d17638_68411788',
  ),
  'left_content' => 
  array (
    0 => 'Block_21709217464822845d17e51_72720308',
  ),
  'right_column' => 
  array (
    0 => 'Block_89475187464822845d194f7_06432787',
  ),
  'right_content' => 
  array (
    0 => 'Block_64847318564822845d19cf6_63466456',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_12064070464822845d1b1c0_39091784',
  ),
  'footer' => 
  array (
    0 => 'Block_189809974964822845d1eb96_16616841',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_1439264364822845d1ffb7_65003349',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_123336552064822845d21fc9_72947179',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_7803361864822845d232f0_56993116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!doctype html>
	<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">
		<head>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68492727564822845d03736_94744144', 'head', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152430270364822845d0ecd9_85261540', 'hook_after_body_opening_tag', $this->tplIndex);
?>

			<main>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201574767864822845d0fe74_77125994', 'product_activation', $this->tplIndex);
?>
      
				<header id="header">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202737890064822845d10fc0_34237942', 'header', $this->tplIndex);
?>

				</header>
				<section id="wrapper">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95209176464822845d127e6_94560709', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75418801264822845d13788_79088825', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34010471064822845d14742_20757263', 'block_full_width', $this->tplIndex);
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

				</section>
				<footer id="footer" class="js-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189809974964822845d1eb96_16616841', "footer", $this->tplIndex);
?>

				</footer>
			</main>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1439264364822845d1ffb7_65003349', 'javascript_bottom', $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123336552064822845d21fc9_72947179', 'hook_before_body_closing_tag', $this->tplIndex);
?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBodyBottom'),$_smarty_tpl ) );?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7803361864822845d232f0_56993116', 'block_modal_checkout', $this->tplIndex);
?>

		</body>
	</html>
<?php
}
}
/* {/block 'axps_html'} */
}
