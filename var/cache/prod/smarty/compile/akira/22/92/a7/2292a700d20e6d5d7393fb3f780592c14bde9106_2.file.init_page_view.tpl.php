<?php
/* Smarty version 3.1.47, created on 2024-01-19 10:16:35
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/fabfacebookpixel/views/templates/hook/init_page_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65aa92538eaad1_71899718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2292a700d20e6d5d7393fb3f780592c14bde9106' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/fabfacebookpixel/views/templates/hook/init_page_view.tpl',
      1 => 1685021480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65aa92538eaad1_71899718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u672279739/domains/salvacerohomecenter.com/public_html/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>


<?php echo '<script'; ?>
 id="fabfacebookpixel_script" type="application/json">
	{
		"fabFacebookPixelAddToCartUrl": "<?php echo $_smarty_tpl->tpl_vars['addToCartUrl']->value;?>
",
		"fabFacebookPixelExecutorUrl": "<?php echo $_smarty_tpl->tpl_vars['executorUrl']->value;?>
",
		"facebookPixelId": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookPixelId']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		"isPixelEnabled": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_pixel_enabled']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		"customerGroups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		"defaultCustomerGroup": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
		"events": [
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersData']->value, 'orderData');
$_smarty_tpl->tpl_vars['orderData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderData']->value) {
$_smarty_tpl->tpl_vars['orderData']->do_else = false;
?>
			{
				"type": "Purchase",
				"params": {
					"customer_groups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"default_customer_group": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"value": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderData']->value['content']['total_paid'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"currency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderData']->value['content']['currency_code'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"canonical_url": "<?php echo $_smarty_tpl->tpl_vars['orderData']->value['content']['canonical_url'];?>
",
					"content_type": "product",
					"eventID": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderData']->value['event_id'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"content_ids": [<?php $_smarty_tpl->_assignInScope('total', count($_smarty_tpl->tpl_vars['orderData']->value['content']['product_list']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderData']->value['content']['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
echo smarty_function_counter(array('assign'=>"count"),$_smarty_tpl);?>
"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['count']->value < $_smarty_tpl->tpl_vars['total']->value) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
				}
			},
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['specific_event_data']->value) > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'Search') {?>
			{
				"type": "Search",
				"params": {
					"search_string": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['search_string'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customerGroups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"defaultCustomerGroup": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'ViewContent') {?>
			{
				"type": "ViewContent",
				"params": {
					"content_type": "product",
					"id_product": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['id_product'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"content_ids": ["<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['id_product'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"],
					"content_name": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_name'];?>
",
					"content_category": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_category'];?>
",
					"value": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_price'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"canonical_url": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['canonical_url'];?>
",
					"description": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['description'];?>
",
					"product_price": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_price'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"currency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['currency_code'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customer_groups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"default_customer_group": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'ViewCategory') {?>
			{
				"type": "ViewCategory",
				"params": {
					"content_name": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_name'];?>
",
					"content_category": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_category'];?>
",
					"content_ids": [<?php $_smarty_tpl->_assignInScope('total', count($_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_ids']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_ids'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
echo smarty_function_counter(array('assign'=>"count"),$_smarty_tpl);?>
"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['count']->value < $_smarty_tpl->tpl_vars['total']->value) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
					"canonical_url": "<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['canonical_url'];?>
",
					"content_type": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_type'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customer_groups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"default_customer_group": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'AddToCart') {?>
			{
				"type": "AddToCart",
				"params": {
					"content_ids": ["<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_ids'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"],
					"content_type": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_type'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"currency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['currency'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"value": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['value'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"eventID": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['eventID'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customer_groups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"default_customer_group": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'InitiateCheckout') {?>
			{
				"type": "InitiateCheckout",
				"params": {
					"content_ids": [<?php $_smarty_tpl->_assignInScope('total', count($_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_ids']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_ids'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
echo smarty_function_counter(array('assign'=>"count"),$_smarty_tpl);?>
"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['count']->value < $_smarty_tpl->tpl_vars['total']->value) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
					"value": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['value'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"content_type": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['content_type'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"currency": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['currency_code'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
				    "canonical_url": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['canonical_url'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customerGroups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"defaultCustomerGroup": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['customerAdded']->value == "true") {?>
			{
				"type": "CompleteRegistration",
				"params": {
					"value": 1.0,
					"currency": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8');?>
",
					"eventID": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['event_id']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"customer_groups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"default_customer_group": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			},
			<?php }?>
			{
				"type": "PageView",
				"params": {
					"customerGroups": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_groups']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"defaultCustomerGroup": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_customer_group']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
				}
			}
			]
	}
<?php echo '</script'; ?>
>

<?php if (count($_smarty_tpl->tpl_vars['specific_event_data']->value) > 0) {?>
	<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['type'] == 'ViewContent') {?>
		<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['has_microdata']) {?>
		<?php echo '<script'; ?>
 type="application/ld+json">
		{
			"@context":"https://schema.org",
			"@type":"Product",
			"productID":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['id_product'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			"name":"<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_name'];?>
",
			"description":"<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['description'];?>
",
			"category":"<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['google_category'];?>
",
			"url":"<?php echo $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['canonical_url'];?>
",
			"image":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['image_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			"brand":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['brand'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			"gtin":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['gtin'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			"mpn":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['mpn'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			"offers": [
				{
					"@type": "Offer",
					"price": "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['product_price'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					"priceCurrency":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_event_data']->value['data']['currency_code'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['data']['condition'] == 'used') {?>"itemCondition": "https://schema.org/UsedCondition",
					<?php } elseif ($_smarty_tpl->tpl_vars['specific_event_data']->value['data']['condition'] == 'refurbished') {?>"itemCondition": "https://schema.org/RefurbishedCondition",
					<?php } else { ?>"itemCondition": "https://schema.org/NewCondition",<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['specific_event_data']->value['data']['availability'] == 1) {?>"availability": "https://schema.org/InStock"
					<?php } else { ?>"availability": "https://schema.org/OutOfStock"
					<?php }?>
				}
			]
		}
	<?php echo '</script'; ?>
>
		<?php }?>
	<?php }
}
}
}