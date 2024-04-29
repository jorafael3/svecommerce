<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-29 01:41:14
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:25:59
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662f410aa96695_47236439',
=======
  'unifunc' => 'content_660aee27553be4_16334912',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de63092e847f5b8f6657eb447f08d49d0d45bb8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\breadcrumb.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_662f410aa96695_47236439 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aee27553be4_16334912 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (count($_smarty_tpl->tpl_vars['breadcrumb']->value['links']) == 1 || !$_smarty_tpl->tpl_vars['breadcrumb']->value['links'][1]) {?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'checkout') {?>
		<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Axon'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['links'][1]['title'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('breadcrumb', $_tmp_array);?>
	<?php } else { ?>
		<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['links'][1]['title'] = $_prefixVariable2;
$_smarty_tpl->_assignInScope('breadcrumb', $_tmp_array);?>
	<?php }?>
	<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['links'][1]['url'] = $_prefixVariable3;
$_smarty_tpl->_assignInScope('breadcrumb', $_tmp_array);
}?>
	 
<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_513583401662f410aa8fc23_26196312', 'bg_page_header_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426809045660aee2754c835_42642166', 'bg_page_header_title');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['page_title_layout'])) && $_smarty_tpl->tpl_vars['opThemect']->value['page_title_layout']) {?>
	<div class="page-title page-title-layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['page_title_layout'], ENT_QUOTES, 'UTF-8');?>
 title-text-color-<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['page_title_color'])) && $_smarty_tpl->tpl_vars['opThemect']->value['page_title_color']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['page_title_color'], ENT_QUOTES, 'UTF-8');
} else { ?>default<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['bg_page_title_img'])) && $_smarty_tpl->tpl_vars['opThemect']->value['bg_page_title_img']) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['bg_page_title_img'], ENT_QUOTES, 'UTF-8');?>
')"<?php }?>>
		<div class="container container-parent">
			<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009001550662f410aa92b93_20619930', 'wrapper_page_header_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1663302544660aee2754f665_41395046', 'wrapper_page_header_title');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

			<nav class="axps-breadcrumb" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['path']->value['title']) {?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
                        <?php } else { ?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                    <?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</nav>				
		</div>
	</div>
<?php }
}
/* {block 'bg_page_header_title'} */
<<<<<<< HEAD
class Block_513583401662f410aa8fc23_26196312 extends Smarty_Internal_Block
=======
class Block_1426809045660aee2754c835_42642166 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'bg_page_header_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_513583401662f410aa8fc23_26196312',
=======
    0 => 'Block_1426809045660aee2754c835_42642166',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bg_page_header_title'} */
/* {block 'page_header_title'} */
<<<<<<< HEAD
class Block_1567480362662f410aa92e73_04951527 extends Smarty_Internal_Block
=======
class Block_31904813660aee2754f957_54950377 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][count($_smarty_tpl->tpl_vars['breadcrumb']->value['links'])-1]['title'], ENT_QUOTES, 'UTF-8');?>

					<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'wrapper_page_header_title'} */
<<<<<<< HEAD
class Block_1009001550662f410aa92b93_20619930 extends Smarty_Internal_Block
=======
class Block_1663302544660aee2754f665_41395046 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'wrapper_page_header_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1009001550662f410aa92b93_20619930',
  ),
  'page_header_title' => 
  array (
    0 => 'Block_1567480362662f410aa92e73_04951527',
=======
    0 => 'Block_1663302544660aee2754f665_41395046',
  ),
  'page_header_title' => 
  array (
    0 => 'Block_31904813660aee2754f957_54950377',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<h1 class="h1">
					<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1567480362662f410aa92e73_04951527', 'page_header_title', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31904813660aee2754f957_54950377', 'page_header_title', $this->tplIndex);
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

				</h1>
			<?php
}
}
/* {/block 'wrapper_page_header_title'} */
}
