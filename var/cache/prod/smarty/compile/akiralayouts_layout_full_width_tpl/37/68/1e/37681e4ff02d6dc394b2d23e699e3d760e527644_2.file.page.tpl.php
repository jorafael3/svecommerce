<?php
/* Smarty version 3.1.47, created on 2024-01-18 21:24:46
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a9dd6ec43e90_38590462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37681e4ff02d6dc394b2d23e699e3d760e527644' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/page.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a9dd6ec43e90_38590462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16508248665a9dd6ec3a269_22288314', 'page_header_title');
?>

	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131234821465a9dd6ec403b8_72850381', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_72681928365a9dd6ec3b0a8_94599003 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

		<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_51834484365a9dd6ec3a8b7_42225222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72681928365a9dd6ec3b0a8_94599003', 'page_title', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_title'} */
class Block_16508248665a9dd6ec3a269_22288314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_16508248665a9dd6ec3a269_22288314',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_51834484365a9dd6ec3a8b7_42225222',
  ),
  'page_title' => 
  array (
    0 => 'Block_72681928365a9dd6ec3b0a8_94599003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51834484365a9dd6ec3a8b7_42225222', 'page_header_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'page_content_top'} */
class Block_67808302165a9dd6ec40f96_59135307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_161281151965a9dd6ec41aa1_25842079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_77381257665a9dd6ec409d5_76745188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67808302165a9dd6ec40f96_59135307', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161281151965a9dd6ec41aa1_25842079', 'page_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_63995188665a9dd6ec42e58_12647744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Footer content -->
				<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_80703987065a9dd6ec42870_03824076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<footer class="page-footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63995188665a9dd6ec42e58_12647744', 'page_footer', $this->tplIndex);
?>

			</footer>
		<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_131234821465a9dd6ec403b8_72850381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131234821465a9dd6ec403b8_72850381',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_77381257665a9dd6ec409d5_76745188',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_67808302165a9dd6ec40f96_59135307',
  ),
  'page_content' => 
  array (
    0 => 'Block_161281151965a9dd6ec41aa1_25842079',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_80703987065a9dd6ec42870_03824076',
  ),
  'page_footer' => 
  array (
    0 => 'Block_63995188665a9dd6ec42e58_12647744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77381257665a9dd6ec409d5_76745188', 'page_content_container', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80703987065a9dd6ec42870_03824076', 'page_footer_container', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
