<?php
/* Smarty version 3.1.47, created on 2024-03-24 15:40:23
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66008fb7759199_12112105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fea3489575559a86409c525809674cea610640d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\page.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66008fb7759199_12112105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188433919666008fb7754f28_75245564', 'page_header_title');
?>

	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208449793866008fb77575d4_48977052', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_166300277166008fb77559e8_55974591 extends Smarty_Internal_Block
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
class Block_115392503466008fb77553f2_82490143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166300277166008fb77559e8_55974591', 'page_title', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_title'} */
class Block_188433919666008fb7754f28_75245564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_188433919666008fb7754f28_75245564',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_115392503466008fb77553f2_82490143',
  ),
  'page_title' => 
  array (
    0 => 'Block_166300277166008fb77559e8_55974591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115392503466008fb77553f2_82490143', 'page_header_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'page_content_top'} */
class Block_27930966566008fb7757bb0_12824332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14161948866008fb7758030_26944413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_65389226666008fb77578e0_70113150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27930966566008fb7757bb0_12824332', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14161948866008fb7758030_26944413', 'page_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_43457359966008fb7758989_17918297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Footer content -->
				<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_179874385966008fb77586d8_50270951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<footer class="page-footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43457359966008fb7758989_17918297', 'page_footer', $this->tplIndex);
?>

			</footer>
		<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_208449793866008fb77575d4_48977052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_208449793866008fb77575d4_48977052',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_65389226666008fb77578e0_70113150',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_27930966566008fb7757bb0_12824332',
  ),
  'page_content' => 
  array (
    0 => 'Block_14161948866008fb7758030_26944413',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_179874385966008fb77586d8_50270951',
  ),
  'page_footer' => 
  array (
    0 => 'Block_43457359966008fb7758989_17918297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65389226666008fb77578e0_70113150', 'page_content_container', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179874385966008fb77586d8_50270951', 'page_footer_container', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
