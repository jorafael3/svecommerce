<?php
/* Smarty version 3.1.47, created on 2024-04-29 12:54:11
  from 'module:nrtproductslinknavviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fdec3a30ef2_86429654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441ccd3de47ca083dd538370aa47c3524a505692' => 
    array (
      0 => 'module:nrtproductslinknavviewste',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fdec3a30ef2_86429654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('imageType', 'cart_default');?>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']) {?>
	<?php $_smarty_tpl->_assignInScope('imageType', $_smarty_tpl->tpl_vars['opThemect']->value['general_product_image_type_small']);
}?>	

<div class="axps-products-nav">
    <?php if ((isset($_smarty_tpl->tpl_vars['prev']->value))) {?>
		<div class="product-btn product-prev">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous product','mod'=>'nrtproductslinknav'),$_smarty_tpl ) );?>

				<span class="product-btn-icon"></span>
			</a>
			<div class="wrapper-short">
				<div class="product-short">
					<div class="product-short-image">
						<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php if ($_smarty_tpl->tpl_vars['prev']->value['default_image']) {?>
								<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['prev']->value['default_image']);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
							<?php }?>
							<img
								class="img-loader lazy-load" 
								data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
								src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" 
								alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
								title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" 
								width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"
								height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"
							>
						</div>
					</div>
					<div class="product-short-description">
						<a class="product-title" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['prev']->value['show_price']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['prev']->value['has_discount']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['prev']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                            <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['prev']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                            <span class="price">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['prev']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value['price'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </span>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['prev']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['prev']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                        <?php }?>
					</div>
				</div>
			</div>
		</div>
    <?php }?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="axps-back-btn" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to home','mod'=>'nrtproductslinknav'),$_smarty_tpl ) );?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to home','mod'=>'nrtproductslinknav'),$_smarty_tpl ) );?>

	</a>
    <?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>
		<div class="product-btn product-next">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next product','mod'=>'nrtproductslinknav'),$_smarty_tpl ) );?>

				<span class="product-btn-icon"></span>
			</a>
			<div class="wrapper-short">
				<div class="product-short">
					<div class="product-short-image">
						<div class="img-placeholder <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imageType']->value, ENT_QUOTES, 'UTF-8');?>
">
							<?php if ($_smarty_tpl->tpl_vars['next']->value['default_image']) {?>
								<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['next']->value['default_image']);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']);?>
							<?php }?>
							<img
								class="img-loader lazy-load" 
								data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"
								src="<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['opThemect']->value['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" 
								alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
								title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" 
								width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['width'], ENT_QUOTES, 'UTF-8');?>
"
								height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['imageType']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"
							>
						</div>
					</div>
					<div class="product-short-description">
						<a class="product-title" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['next']->value['show_price']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['next']->value['has_discount']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['next']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                            <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['next']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                            <span class="price">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['next']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['price'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </span>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['next']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['next']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                        <?php }?>
					</div>
				</div>
			</div>
		</div>
    <?php }?>
</div>


<?php }
}
