<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:12
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:56
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f41087da946_25548327',
=======
  'unifunc' => 'content_660aee24db0ff7_14765503',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
function content_662f41087da946_25548327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1333642292662f41087c9648_78187924', 'axps_html');
=======
function content_660aee24db0ff7_14765503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012670198660aee24da10e2_81981561', 'axps_html');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_74367612662f41087ca012_63511833 extends Smarty_Internal_Block
=======
class Block_777772008660aee24da1c53_62740383 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1053615501662f41087d1fb8_22385517 extends Smarty_Internal_Block
=======
class Block_2042858636660aee24da7524_11998436 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
<<<<<<< HEAD
class Block_1410845945662f41087d27d7_17269779 extends Smarty_Internal_Block
=======
class Block_1202165121660aee24da7de9_37030954 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1982217045662f41087d2f20_03601350 extends Smarty_Internal_Block
=======
class Block_1707146358660aee24da85e9_07373532 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_850873157662f41087d3ad5_68207848 extends Smarty_Internal_Block
=======
class Block_1186004801660aee24da9290_21824633 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_371167656662f41087d41d0_39464247 extends Smarty_Internal_Block
=======
class Block_332199570660aee24da9a59_13487054 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1143677461662f41087d52f6_59359177 extends Smarty_Internal_Block
=======
class Block_257072299660aee24daad69_05999074 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p>Hello world! This is HTML5 Boilerplate.</p>
											<?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
<<<<<<< HEAD
class Block_637375044662f41087d4c42_90434511 extends Smarty_Internal_Block
=======
class Block_213027181660aee24daa636_52909205 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="content-wrapper" class="js-content-wrapper left-column right-column col-xs-12 col-lg-6">
										<div id="main-content">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

											<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1143677461662f41087d52f6_59359177', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257072299660aee24daad69_05999074', "content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

										</div>
									</div>
								<?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_content"} */
<<<<<<< HEAD
class Block_1098199161662f41087d60f3_41953228 extends Smarty_Internal_Block
=======
class Block_563117198660aee24dabd50_70148099 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
<<<<<<< HEAD
class Block_1569277825662f41087d5d91_76928493 extends Smarty_Internal_Block
=======
class Block_468251599660aee24dab9a7_35640009 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="left-column" class="col-xs-12 col-lg-3">
										<div id="left-content">
											<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1098199161662f41087d60f3_41953228', "left_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_563117198660aee24dabd50_70148099', "left_content", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

										</div>
									</div>
								<?php
}
}
/* {/block "left_column"} */
/* {block "right_content"} */
<<<<<<< HEAD
class Block_569221219662f41087d6e50_75535898 extends Smarty_Internal_Block
=======
class Block_866485472660aee24daccd8_44907765 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
<<<<<<< HEAD
class Block_1122276570662f41087d6af0_24057084 extends Smarty_Internal_Block
=======
class Block_1825917520660aee24dac915_76083778 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div id="right-column" class="col-xs-12 col-lg-3">
										<div id="right-content">
											<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_569221219662f41087d6e50_75535898', "right_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_866485472660aee24daccd8_44907765', "right_content", $this->tplIndex);
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
class Block_1321853494662f41087d7794_33473516 extends Smarty_Internal_Block
=======
class Block_1721225355660aee24dad788_06298085 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'axps_block_container'} */
/* {block 'block_full_width'} */
<<<<<<< HEAD
class Block_489041389662f41087d48d2_87627456 extends Smarty_Internal_Block
=======
class Block_1924122711660aee24daa262_95899475 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="container container-parent">
							<div class="row">
								<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_637375044662f41087d4c42_90434511', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569277825662f41087d5d91_76928493', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1122276570662f41087d6af0_24057084', "right_column", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213027181660aee24daa636_52909205', "content_wrapper", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_468251599660aee24dab9a7_35640009', "left_column", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1825917520660aee24dac915_76083778', "right_column", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

							</div>
							<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321853494662f41087d7794_33473516', 'axps_block_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1721225355660aee24dad788_06298085', 'axps_block_container', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

						</div>
					<?php
}
}
/* {/block 'block_full_width'} */
/* {block "footer"} */
<<<<<<< HEAD
class Block_299151968662f41087d8196_07642130 extends Smarty_Internal_Block
=======
class Block_877176415660aee24dae2a9_76308530 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1105139533662f41087d8952_25981932 extends Smarty_Internal_Block
=======
class Block_395494040660aee24daeba2_98685449 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
class Block_1888189327662f41087d9714_60944471 extends Smarty_Internal_Block
=======
class Block_675451693660aee24dafb17_36756017 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'block_modal_checkout'} */
<<<<<<< HEAD
class Block_1049969412662f41087da032_12052114 extends Smarty_Internal_Block
=======
class Block_186566117660aee24db0573_22390546 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'block_modal_checkout'} */
/* {block 'axps_html'} */
<<<<<<< HEAD
class Block_1333642292662f41087c9648_78187924 extends Smarty_Internal_Block
=======
class Block_2012670198660aee24da10e2_81981561 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'axps_html' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1333642292662f41087c9648_78187924',
  ),
  'head' => 
  array (
    0 => 'Block_74367612662f41087ca012_63511833',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_1053615501662f41087d1fb8_22385517',
  ),
  'product_activation' => 
  array (
    0 => 'Block_1410845945662f41087d27d7_17269779',
  ),
  'header' => 
  array (
    0 => 'Block_1982217045662f41087d2f20_03601350',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_850873157662f41087d3ad5_68207848',
  ),
  'notifications' => 
  array (
    0 => 'Block_371167656662f41087d41d0_39464247',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_489041389662f41087d48d2_87627456',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_637375044662f41087d4c42_90434511',
  ),
  'content' => 
  array (
    0 => 'Block_1143677461662f41087d52f6_59359177',
  ),
  'left_column' => 
  array (
    0 => 'Block_1569277825662f41087d5d91_76928493',
  ),
  'left_content' => 
  array (
    0 => 'Block_1098199161662f41087d60f3_41953228',
  ),
  'right_column' => 
  array (
    0 => 'Block_1122276570662f41087d6af0_24057084',
  ),
  'right_content' => 
  array (
    0 => 'Block_569221219662f41087d6e50_75535898',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_1321853494662f41087d7794_33473516',
  ),
  'footer' => 
  array (
    0 => 'Block_299151968662f41087d8196_07642130',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_1105139533662f41087d8952_25981932',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_1888189327662f41087d9714_60944471',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_1049969412662f41087da032_12052114',
=======
    0 => 'Block_2012670198660aee24da10e2_81981561',
  ),
  'head' => 
  array (
    0 => 'Block_777772008660aee24da1c53_62740383',
  ),
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_2042858636660aee24da7524_11998436',
  ),
  'product_activation' => 
  array (
    0 => 'Block_1202165121660aee24da7de9_37030954',
  ),
  'header' => 
  array (
    0 => 'Block_1707146358660aee24da85e9_07373532',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_1186004801660aee24da9290_21824633',
  ),
  'notifications' => 
  array (
    0 => 'Block_332199570660aee24da9a59_13487054',
  ),
  'block_full_width' => 
  array (
    0 => 'Block_1924122711660aee24daa262_95899475',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_213027181660aee24daa636_52909205',
  ),
  'content' => 
  array (
    0 => 'Block_257072299660aee24daad69_05999074',
  ),
  'left_column' => 
  array (
    0 => 'Block_468251599660aee24dab9a7_35640009',
  ),
  'left_content' => 
  array (
    0 => 'Block_563117198660aee24dabd50_70148099',
  ),
  'right_column' => 
  array (
    0 => 'Block_1825917520660aee24dac915_76083778',
  ),
  'right_content' => 
  array (
    0 => 'Block_866485472660aee24daccd8_44907765',
  ),
  'axps_block_container' => 
  array (
    0 => 'Block_1721225355660aee24dad788_06298085',
  ),
  'footer' => 
  array (
    0 => 'Block_877176415660aee24dae2a9_76308530',
  ),
  'javascript_bottom' => 
  array (
    0 => 'Block_395494040660aee24daeba2_98685449',
  ),
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_675451693660aee24dafb17_36756017',
  ),
  'block_modal_checkout' => 
  array (
    0 => 'Block_186566117660aee24db0573_22390546',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!doctype html>
	<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">
		<head>
			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74367612662f41087ca012_63511833', 'head', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_777772008660aee24da1c53_62740383', 'head', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
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
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1053615501662f41087d1fb8_22385517', 'hook_after_body_opening_tag', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2042858636660aee24da7524_11998436', 'hook_after_body_opening_tag', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<main>
				<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1410845945662f41087d27d7_17269779', 'product_activation', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202165121660aee24da7de9_37030954', 'product_activation', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>
      
				<header id="header">
					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1982217045662f41087d2f20_03601350', 'header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1707146358660aee24da85e9_07373532', 'header', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

				</header>
				<section id="wrapper">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_850873157662f41087d3ad5_68207848', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371167656662f41087d41d0_39464247', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489041389662f41087d48d2_87627456', 'block_full_width', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186004801660aee24da9290_21824633', 'breadcrumb', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332199570660aee24da9a59_13487054', 'notifications', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1924122711660aee24daa262_95899475', 'block_full_width', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

				</section>
				<footer id="footer" class="js-footer">
					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299151968662f41087d8196_07642130', "footer", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_877176415660aee24dae2a9_76308530', "footer", $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

				</footer>
			</main>

			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105139533662f41087d8952_25981932', 'javascript_bottom', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395494040660aee24daeba2_98685449', 'javascript_bottom', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1888189327662f41087d9714_60944471', 'hook_before_body_closing_tag', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_675451693660aee24dafb17_36756017', 'hook_before_body_closing_tag', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBodyBottom'),$_smarty_tpl ) );?>


			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1049969412662f41087da032_12052114', 'block_modal_checkout', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186566117660aee24db0573_22390546', 'block_modal_checkout', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

		</body>
	</html>
<?php
}
}
/* {/block 'axps_html'} */
}
