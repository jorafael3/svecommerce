<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:20
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc054ef3ac7_71139724',
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
function content_662fc054ef3ac7_71139724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179622702662fc054ee2538_04514945', 'notifications');
?>

	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147374051662fc054ee2c96_95315251', 'page_header_title');
?>

	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940842648662fc054ee3766_50395773', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424997225662fc054ef3156_51994370', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_1179622702662fc054ee2538_04514945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1179622702662fc054ee2538_04514945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'page_header_title'} */
class Block_147374051662fc054ee2c96_95315251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_title' => 
  array (
    0 => 'Block_147374051662fc054ee2c96_95315251',
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
class Block_1793437058662fc054eea023_30624840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerAccount'),$_smarty_tpl ) );?>

					  <?php
}
}
/* {/block 'display_customer_account'} */
/* {block 'page_title'} */
class Block_1301082175662fc054eec872_29326647 extends Smarty_Internal_Block
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
class Block_1619130402662fc054eee042_25330051 extends Smarty_Internal_Block
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
class Block_714323118662fc054eedd48_92470298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1619130402662fc054eee042_25330051', 'customer_notifications', $this->tplIndex);
?>

					<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1498285520662fc054ef0fd5_67824745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Page content -->
					<?php
}
}
/* {/block 'page_content'} */
/* {block 'customer_notifications'} */
class Block_1467628641662fc054ef19e5_29270322 extends Smarty_Internal_Block
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
class Block_1967610850662fc054ef1684_24494019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467628641662fc054ef19e5_29270322', 'customer_notifications', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_912561792662fc054ef2406_73953696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Page content -->
				<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1940842648662fc054ee3766_50395773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1940842648662fc054ee3766_50395773',
  ),
  'display_customer_account' => 
  array (
    0 => 'Block_1793437058662fc054eea023_30624840',
  ),
  'page_title' => 
  array (
    0 => 'Block_1301082175662fc054eec872_29326647',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_714323118662fc054eedd48_92470298',
    1 => 'Block_1967610850662fc054ef1684_24494019',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_1619130402662fc054eee042_25330051',
    1 => 'Block_1467628641662fc054ef19e5_29270322',
  ),
  'page_content' => 
  array (
    0 => 'Block_1498285520662fc054ef0fd5_67824745',
    1 => 'Block_912561792662fc054ef2406_73953696',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793437058662fc054eea023_30624840', 'display_customer_account', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1301082175662fc054eec872_29326647', 'page_title', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714323118662fc054eedd48_92470298', 'page_content_top', $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1498285520662fc054ef0fd5_67824745', 'page_content', $this->tplIndex);
?>

				</div>
			<?php } else { ?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1967610850662fc054ef1684_24494019', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_912561792662fc054ef2406_73953696', 'page_content', $this->tplIndex);
?>

			<?php }?>
		</div>
	</section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_1157441689662fc054ef3431_42797791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
	<?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_424997225662fc054ef3156_51994370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_424997225662fc054ef3156_51994370',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_1157441689662fc054ef3431_42797791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1157441689662fc054ef3431_42797791', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
