<?php
/* Smarty version 3.1.47, created on 2024-04-30 11:34:30
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_66311d96c1f0e7_76290030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f3029c1adf9ee285324b6d7b94b5c474552143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\customer\\page.tpl',
      1 => 1711123680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 2,
  ),
),false)) {
function content_66311d96c1f0e7_76290030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198703080566311d96c0bd03_95879095', 'notifications');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97043033066311d96c0c568_75210405', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159333420166311d96c0d212_49463868', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175948651366311d96c1e6e1_30817909', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_198703080566311d96c0bd03_95879095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_198703080566311d96c0bd03_95879095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'page_header_title'} */
class Block_97043033066311d96c0c568_75210405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_97043033066311d96c0c568_75210405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_header_title'} */
/* {block 'display_customer_account'} */
class Block_182117308966311d96c141f7_00656840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

					  <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_title'} */
class Block_139412141666311d96c17586_75499583 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<h4><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h4>
					<?php
}
}
/* {/block 'page_title'} */
/* {block 'customer_notifications'} */
class Block_99788853366311d96c190e5_02795428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						<?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_38077736966311d96c18db0_79512416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99788853366311d96c190e5_02795428', 'customer_notifications', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_21250430166311d96c1bdc2_24586445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
					<?php
}
}
/* {/block 'page_content'} */
/* {block 'customer_notifications'} */
class Block_200360717866311d96c1c710_87701860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					<?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_115993442266311d96c1c457_50787464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200360717866311d96c1c710_87701860', 'customer_notifications', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_42126417866311d96c1d675_89245119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_159333420166311d96c0d212_49463868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_159333420166311d96c0d212_49463868',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_182117308966311d96c141f7_00656840',
  ),
  'page_title' => 
  array (
    0 => 'Block_139412141666311d96c17586_75499583',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_38077736966311d96c18db0_79512416',
    1 => 'Block_115993442266311d96c1c457_50787464',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_99788853366311d96c190e5_02795428',
    1 => 'Block_200360717866311d96c1c710_87701860',
  ),
  'page_content' => 
  array (
    0 => 'Block_21250430166311d96c1bdc2_24586445',
    1 => 'Block_42126417866311d96c1d675_89245119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="content" class="page-content">
		<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
			<div class="row my-account-page-content">
				<div class="col-lg-3 my-account-links">
					  <a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
						<span class="link-item">
						  <i class="las la-user-circle"></i>
						  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						</span>
					  </a>

					  <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="addresses-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-map-signs"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php } else { ?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="address-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-map-signs"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php }?>

					  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="history-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-calendar"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php }?>

					  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="order-slips-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-receipt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php }?>

					  <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="discounts-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-tags"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php }?>

					  <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" id="returns-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
						  <span class="link-item">
							<i class="las la-reply"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

						  </span>
						</a>
					  <?php }?>

					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182117308966311d96c141f7_00656840', 'display_customer_account', $this->tplIndex);
?>


					  <a class="col-lg-3 col-md-4 col-sm-6 col-xs-6" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
						  <span class="link-item">
							<i class="las la-sign-out-alt"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

						  </span>
					  </a>
				</div>
				<div class="col-lg-9 my-account-content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139412141666311d96c17586_75499583', 'page_title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38077736966311d96c18db0_79512416', 'page_content_top', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21250430166311d96c1bdc2_24586445', 'page_content', $this->tplIndex);
?>

				</div>
			<?php } else { ?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115993442266311d96c1c457_50787464', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42126417866311d96c1d675_89245119', 'page_content', $this->tplIndex);
?>

			<?php }?>
		</div>
	</section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_14509953366311d96c1ea09_30905685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
	<?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_175948651366311d96c1e6e1_30817909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_175948651366311d96c1e6e1_30817909',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_14509953366311d96c1ea09_30905685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14509953366311d96c1ea09_30905685', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
