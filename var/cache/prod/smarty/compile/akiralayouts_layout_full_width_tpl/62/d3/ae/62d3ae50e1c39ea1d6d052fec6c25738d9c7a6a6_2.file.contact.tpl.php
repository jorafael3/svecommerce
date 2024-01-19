<?php
/* Smarty version 3.1.47, created on 2024-01-19 05:25:42
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa4e26920586_44318937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d3ae50e1c39ea1d6d052fec6c25738d9c7a6a6' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/contact.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa4e26920586_44318937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 	 	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107159571465aa4e26914794_19893192', 'block_full_width');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block "content"} */
class Block_33831941565aa4e26918fa4_33210475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

							<?php
}
}
/* {/block "content"} */
/* {block 'content_wrapper'} */
class Block_147359432665aa4e269175d2_00054690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div id="content-wrapper" class="<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>left-column col-lg-8 <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>right-column col-lg-8 <?php }?>col-xs-12">
					<div id="main-content">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33831941565aa4e26918fa4_33210475', "content", $this->tplIndex);
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

					</div>
				  </div>
				<?php
}
}
/* {/block 'content_wrapper'} */
/* {block "left_content"} */
class Block_210123518365aa4e2691b5f0_05651818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block "left_content"} */
/* {block "left_column"} */
class Block_107821514565aa4e2691b0a0_63125497 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="left-column" class="col-xs-12 col-lg-4">
							<div id="left-content">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210123518365aa4e2691b5f0_05651818', "left_content", $this->tplIndex);
?>

							</div>
						</div>
					<?php
}
}
/* {/block "left_column"} */
/* {block 'right_column'} */
class Block_52094458165aa4e2691c668_33584765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "right_content"} */
class Block_50788675265aa4e2691d816_38475621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block "right_content"} */
/* {block "right_column"} */
class Block_86083029465aa4e2691d2f9_35629497 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div id="right-column" class="col-xs-12 col-lg-4">
							<div id="right-content">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50788675265aa4e2691d816_38475621', "right_content", $this->tplIndex);
?>

							</div>
						</div>
					<?php
}
}
/* {/block "right_column"} */
/* {block 'right_column'} */
class Block_187104039165aa4e2691e797_33243394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "left_column"} */
class Block_53959562565aa4e2691f096_62364421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_109682635765aa4e2691f793_45277964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "right_column"} */
/* {block 'block_full_width'} */
class Block_107159571465aa4e26914794_19893192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_full_width' => 
  array (
    0 => 'Block_107159571465aa4e26914794_19893192',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_147359432665aa4e269175d2_00054690',
  ),
  'content' => 
  array (
    0 => 'Block_33831941565aa4e26918fa4_33210475',
  ),
  'left_column' => 
  array (
    0 => 'Block_107821514565aa4e2691b0a0_63125497',
    1 => 'Block_53959562565aa4e2691f096_62364421',
  ),
  'left_content' => 
  array (
    0 => 'Block_210123518365aa4e2691b5f0_05651818',
  ),
  'right_column' => 
  array (
    0 => 'Block_52094458165aa4e2691c668_33584765',
    1 => 'Block_86083029465aa4e2691d2f9_35629497',
    2 => 'Block_187104039165aa4e2691e797_33243394',
    3 => 'Block_109682635765aa4e2691f793_45277964',
  ),
  'right_content' => 
  array (
    0 => 'Block_50788675265aa4e2691d816_38475621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['contact_override_content_by_hook'])) && $_smarty_tpl->tpl_vars['opThemect']->value['contact_override_content_by_hook']) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactPageBuilder'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<div class="container container-parent">
			<div class="row">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147359432665aa4e269175d2_00054690', 'content_wrapper', $this->tplIndex);
?>

				<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107821514565aa4e2691b0a0_63125497', "left_column", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52094458165aa4e2691c668_33584765', 'right_column', $this->tplIndex);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86083029465aa4e2691d2f9_35629497', "right_column", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187104039165aa4e2691e797_33243394', 'right_column', $this->tplIndex);
?>

				<?php } else { ?>
					 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53959562565aa4e2691f096_62364421', "left_column", $this->tplIndex);
?>

					 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109682635765aa4e2691f793_45277964', "right_column", $this->tplIndex);
?>

				<?php }?> 
			</div>
		</div>
	<?php }?> 
<?php
}
}
/* {/block 'block_full_width'} */
}
