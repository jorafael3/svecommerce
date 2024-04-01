<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:36:02
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f828becd6_11392741',
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
function content_660a0f828becd6_11392741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609825491660a0f828bbec3_30591995', 'page_header_title');
?>

	 	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1170043107660a0f828bd0a1_05703701', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1021132636660a0f828bc5a7_09153994 extends Smarty_Internal_Block
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
class Block_1998597409660a0f828bc205_70331977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1021132636660a0f828bc5a7_09153994', 'page_title', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_header_title'} */
class Block_609825491660a0f828bbec3_30591995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_609825491660a0f828bbec3_30591995',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1998597409660a0f828bc205_70331977',
  ),
  'page_title' => 
  array (
    0 => 'Block_1021132636660a0f828bc5a7_09153994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998597409660a0f828bc205_70331977', 'page_header_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'page_content_top'} */
class Block_201042093660a0f828bd5c9_84613651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2122282419660a0f828bd9c3_92111167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_672049758660a0f828bd341_40412614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="content" class="page-content">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201042093660a0f828bd5c9_84613651', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122282419660a0f828bd9c3_92111167', 'page_content', $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_531592133660a0f828be254_05782849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Footer content -->
				<?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1684933459660a0f828bdfd7_48702413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<footer class="page-footer">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531592133660a0f828be254_05782849', 'page_footer', $this->tplIndex);
?>

			</footer>
		<?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1170043107660a0f828bd0a1_05703701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1170043107660a0f828bd0a1_05703701',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_672049758660a0f828bd341_40412614',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_201042093660a0f828bd5c9_84613651',
  ),
  'page_content' => 
  array (
    0 => 'Block_2122282419660a0f828bd9c3_92111167',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1684933459660a0f828bdfd7_48702413',
  ),
  'page_footer' => 
  array (
    0 => 'Block_531592133660a0f828be254_05782849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_672049758660a0f828bd341_40412614', 'page_content_container', $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1684933459660a0f828bdfd7_48702413', 'page_footer_container', $this->tplIndex);
?>

	</section>
<?php
}
}
/* {/block 'content'} */
}
