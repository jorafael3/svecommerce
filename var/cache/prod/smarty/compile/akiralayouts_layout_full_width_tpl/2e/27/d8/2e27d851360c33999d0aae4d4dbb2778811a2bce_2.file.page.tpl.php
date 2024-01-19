<?php
/* Smarty version 3.1.47, created on 2024-01-19 05:25:42
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa4e2600a123_89403594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e27d851360c33999d0aae4d4dbb2778811a2bce' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/cms/page.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa4e2600a123_89403594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205718818165aa4e26003fc0_15827374', 'block_full_width');
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'cms_content'} */
class Block_85514254365aa4e26006281_78157956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

				<?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_45599912365aa4e260076e2_58225013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_155760860765aa4e260086e2_39755557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'block_full_width'} */
class Block_205718818165aa4e26003fc0_15827374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_205718818165aa4e26003fc0_15827374',
  ),
  'cms_content' => 
  array (
    0 => 'Block_85514254365aa4e26006281_78157956',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_45599912365aa4e260076e2_58225013',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_155760860765aa4e260086e2_39755557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="content-wrapper">
		<div id="main-content">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

			<div id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85514254365aa4e26006281_78157956', 'cms_content', $this->tplIndex);
?>

				<div class="container container-parent">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45599912365aa4e260076e2_58225013', 'hook_cms_dispute_information', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155760860765aa4e260086e2_39755557', 'hook_cms_print_button', $this->tplIndex);
?>

				</div> 
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

		</div>
	</div>
<?php
}
}
/* {/block 'block_full_width'} */
}
