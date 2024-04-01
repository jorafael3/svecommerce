<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:32:10
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0e9a6b3b90_84399796',
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
function content_660a0e9a6b3b90_84399796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140601318660a0e9a6b1104_32720680', 'page_header_title');
?>

	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1786442439660a0e9a6b2228_28730676', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1227079730660a0e9a6b1789_46515354 extends Smarty_Internal_Block
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
class Block_27824413660a0e9a6b1412_14341764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1227079730660a0e9a6b1789_46515354', 'page_title', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_title'} */
class Block_2140601318660a0e9a6b1104_32720680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_2140601318660a0e9a6b1104_32720680',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_27824413660a0e9a6b1412_14341764',
  ),
  'page_title' => 
  array (
    0 => 'Block_1227079730660a0e9a6b1789_46515354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27824413660a0e9a6b1412_14341764', 'page_header_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'page_content_top'} */
class Block_34935315660a0e9a6b2778_91711447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_528480894660a0e9a6b2b87_58267980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1768233202660a0e9a6b24e3_63493481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34935315660a0e9a6b2778_91711447', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528480894660a0e9a6b2b87_58267980', 'page_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1916074271660a0e9a6b3446_86618235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Footer content -->
				<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_873243063660a0e9a6b31a1_20422185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<footer class="page-footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1916074271660a0e9a6b3446_86618235', 'page_footer', $this->tplIndex);
?>

			</footer>
		<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1786442439660a0e9a6b2228_28730676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1786442439660a0e9a6b2228_28730676',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1768233202660a0e9a6b24e3_63493481',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_34935315660a0e9a6b2778_91711447',
  ),
  'page_content' => 
  array (
    0 => 'Block_528480894660a0e9a6b2b87_58267980',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_873243063660a0e9a6b31a1_20422185',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1916074271660a0e9a6b3446_86618235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768233202660a0e9a6b24e3_63493481', 'page_content_container', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_873243063660a0e9a6b31a1_20422185', 'page_footer_container', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
