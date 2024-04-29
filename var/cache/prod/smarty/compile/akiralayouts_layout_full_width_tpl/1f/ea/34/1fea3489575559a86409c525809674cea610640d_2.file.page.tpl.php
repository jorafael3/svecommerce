<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:21
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc05527edd6_14645711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fea3489575559a86409c525809674cea610640d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\page.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fc05527edd6_14645711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1953287048662fc05527b402_40897237', 'page_header_title');
?>

	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302844580662fc05527cf06_54258886', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1516326241662fc05527bcc2_17729508 extends Smarty_Internal_Block
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
class Block_657744526662fc05527b858_86472445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1516326241662fc05527bcc2_17729508', 'page_title', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_title'} */
class Block_1953287048662fc05527b402_40897237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_1953287048662fc05527b402_40897237',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_657744526662fc05527b858_86472445',
  ),
  'page_title' => 
  array (
    0 => 'Block_1516326241662fc05527bcc2_17729508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_657744526662fc05527b858_86472445', 'page_header_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'page_content_top'} */
class Block_1519306443662fc05527d600_17970088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1295036623662fc05527daf1_14785364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_452001770662fc05527d2e2_30930207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519306443662fc05527d600_17970088', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1295036623662fc05527daf1_14785364', 'page_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11357272662fc05527e4c5_79220301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Footer content -->
				<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1006686670662fc05527e1f1_24293094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<footer class="page-footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11357272662fc05527e4c5_79220301', 'page_footer', $this->tplIndex);
?>

			</footer>
		<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1302844580662fc05527cf06_54258886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1302844580662fc05527cf06_54258886',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_452001770662fc05527d2e2_30930207',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1519306443662fc05527d600_17970088',
  ),
  'page_content' => 
  array (
    0 => 'Block_1295036623662fc05527daf1_14785364',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1006686670662fc05527e1f1_24293094',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11357272662fc05527e4c5_79220301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452001770662fc05527d2e2_30930207', 'page_content_container', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1006686670662fc05527e1f1_24293094', 'page_footer_container', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
