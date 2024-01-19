<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa9253ae50a9_71523071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8409ba8bffa967bcc8d4a4c101b89b5fd14cdb81' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/_partials/header.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa9253ae50a9_71523071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202001688365aa9253ae2ea1_38738630', 'header_banner');
?>

<nav class="header-nav">
	<div class="container container-parent">
		<div class="row">
			<div class="col-xs-12">
				<div id="site_width"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-xs-12 left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			<div class="col-md-7 col-xs-12 right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73081400465aa9253ae4389_50306292', 'header_top');
}
/* {block 'header_banner'} */
class Block_202001688365aa9253ae2ea1_38738630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_202001688365aa9253ae2ea1_38738630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-banner">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

	</div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_top'} */
class Block_73081400465aa9253ae4389_50306292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_73081400465aa9253ae4389_50306292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
		<div class="container container-parent">
			<div class="row">
				<div class="col-xs-12">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

				</div>
			</div>
		</div>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
