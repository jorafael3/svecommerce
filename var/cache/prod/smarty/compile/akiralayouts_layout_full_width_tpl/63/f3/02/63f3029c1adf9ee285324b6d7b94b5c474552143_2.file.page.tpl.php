<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:36:02
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660a0f828b0f88_46818256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f3029c1adf9ee285324b6d7b94b5c474552143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\customer\\page.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 2,
  ),
),false)) {
function content_660a0f828b0f88_46818256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1862821451660a0f828a1921_07641550', 'notifications');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836911861660a0f828a1ec8_12844892', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1628517680660a0f828a2771_53662684', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960982936660a0f828b0709_25156335', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_1862821451660a0f828a1921_07641550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1862821451660a0f828a1921_07641550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'page_header_title'} */
class Block_836911861660a0f828a1ec8_12844892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_836911861660a0f828a1ec8_12844892',
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
class Block_1263892573660a0f828a8549_70726228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

					  <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_title'} */
class Block_805833600660a0f828aaa65_30031164 extends Smarty_Internal_Block
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
class Block_169039668660a0f828ac136_90937222 extends Smarty_Internal_Block
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
class Block_315347788660a0f828abe35_49790832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169039668660a0f828ac136_90937222', 'customer_notifications', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_491529516660a0f828ae8f2_58908991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
					<?php
}
}
/* {/block 'page_content'} */
/* {block 'customer_notifications'} */
class Block_335787350660a0f828af281_09592601 extends Smarty_Internal_Block
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
class Block_1140253841660a0f828aefe2_80228169 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_335787350660a0f828af281_09592601', 'customer_notifications', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_396323883660a0f828afb77_66580186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1628517680660a0f828a2771_53662684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1628517680660a0f828a2771_53662684',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_1263892573660a0f828a8549_70726228',
  ),
  'page_title' => 
  array (
    0 => 'Block_805833600660a0f828aaa65_30031164',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_315347788660a0f828abe35_49790832',
    1 => 'Block_1140253841660a0f828aefe2_80228169',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_169039668660a0f828ac136_90937222',
    1 => 'Block_335787350660a0f828af281_09592601',
  ),
  'page_content' => 
  array (
    0 => 'Block_491529516660a0f828ae8f2_58908991',
    1 => 'Block_396323883660a0f828afb77_66580186',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263892573660a0f828a8549_70726228', 'display_customer_account', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_805833600660a0f828aaa65_30031164', 'page_title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315347788660a0f828abe35_49790832', 'page_content_top', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_491529516660a0f828ae8f2_58908991', 'page_content', $this->tplIndex);
?>

				</div>
			<?php } else { ?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1140253841660a0f828aefe2_80228169', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396323883660a0f828afb77_66580186', 'page_content', $this->tplIndex);
?>

			<?php }?>
		</div>
	</section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_460872446660a0f828b09a0_65966061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
	<?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_1960982936660a0f828b0709_25156335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_1960982936660a0f828b0709_25156335',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_460872446660a0f828b09a0_65966061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460872446660a0f828b09a0_65966061', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
