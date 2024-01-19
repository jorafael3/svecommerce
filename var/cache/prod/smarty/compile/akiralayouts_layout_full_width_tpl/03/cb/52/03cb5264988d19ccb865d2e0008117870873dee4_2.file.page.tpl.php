<?php
/* Smarty version 3.1.47, created on 2024-01-11 23:25:41
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/customer/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65a0bf45d9a672_84391105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03cb5264988d19ccb865d2e0008117870873dee4' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/themes/akira/templates/customer/page.tpl',
      1 => 1685021478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 2,
  ),
),false)) {
function content_65a0bf45d9a672_84391105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174280327165a0bf45d843e5_38624645', 'notifications');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57011145865a0bf45d84dd7_36646918', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16574103865a0bf45d85e15_59005525', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178846295865a0bf45d997b3_86329133', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_174280327165a0bf45d843e5_38624645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_174280327165a0bf45d843e5_38624645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'page_header_title'} */
class Block_57011145865a0bf45d84dd7_36646918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_57011145865a0bf45d84dd7_36646918',
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
class Block_138087544365a0bf45d90d83_77561341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

					  <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_title'} */
class Block_15950644665a0bf45d93756_41702949 extends Smarty_Internal_Block
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
class Block_42422429265a0bf45d94fa1_64066606 extends Smarty_Internal_Block
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
class Block_145749261265a0bf45d94ad4_63073545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42422429265a0bf45d94fa1_64066606', 'customer_notifications', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_153138088665a0bf45d966f8_92153074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
					<?php
}
}
/* {/block 'page_content'} */
/* {block 'customer_notifications'} */
class Block_142865863765a0bf45d97442_25225162 extends Smarty_Internal_Block
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
class Block_1018251465a0bf45d96fd0_20953802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142865863765a0bf45d97442_25225162', 'customer_notifications', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_65945940365a0bf45d98509_62264767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16574103865a0bf45d85e15_59005525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16574103865a0bf45d85e15_59005525',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_138087544365a0bf45d90d83_77561341',
  ),
  'page_title' => 
  array (
    0 => 'Block_15950644665a0bf45d93756_41702949',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_145749261265a0bf45d94ad4_63073545',
    1 => 'Block_1018251465a0bf45d96fd0_20953802',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_42422429265a0bf45d94fa1_64066606',
    1 => 'Block_142865863765a0bf45d97442_25225162',
  ),
  'page_content' => 
  array (
    0 => 'Block_153138088665a0bf45d966f8_92153074',
    1 => 'Block_65945940365a0bf45d98509_62264767',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138087544365a0bf45d90d83_77561341', 'display_customer_account', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15950644665a0bf45d93756_41702949', 'page_title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145749261265a0bf45d94ad4_63073545', 'page_content_top', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153138088665a0bf45d966f8_92153074', 'page_content', $this->tplIndex);
?>

				</div>
			<?php } else { ?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1018251465a0bf45d96fd0_20953802', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65945940365a0bf45d98509_62264767', 'page_content', $this->tplIndex);
?>

			<?php }?>
		</div>
	</section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_98065557365a0bf45d99bc7_58166952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
	<?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_178846295865a0bf45d997b3_86329133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_178846295865a0bf45d997b3_86329133',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_98065557365a0bf45d99bc7_58166952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98065557365a0bf45d99bc7_58166952', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
