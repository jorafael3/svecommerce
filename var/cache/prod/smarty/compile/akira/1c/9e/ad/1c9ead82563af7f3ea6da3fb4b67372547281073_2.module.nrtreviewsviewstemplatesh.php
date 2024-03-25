<?php
/* Smarty version 3.1.47, created on 2024-03-24 12:58:46
  from 'module:nrtreviewsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660069d6d21f42_91864476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9ead82563af7f3ea6da3fb4b67372547281073' => 
    array (
      0 => 'module:nrtreviewsviewstemplatesh',
      1 => 1711210455,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:nrtreviews/views/templates/hook/display-list-comments.tpl' => 1,
  ),
),false)) {
function content_660069d6d21f42_91864476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">	
	<div class="col-xs-12 col-lg-12 col-my-reviews">
		<div id="my_reviews">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Reviews",'mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
				<div class="reviews-top">
					<span class="reviews_note">
						<span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item Rating: ','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</span>
						<span class="star_content star_content_avg"><span style="width:<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['avgReviews']->value['avg']/5)*100, ENT_QUOTES, 'UTF-8');?>
%"></span></span>
					</span>
					<div class="nbr_reviews"> 
						<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['avgReviews']->value['avg'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'average based on','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
 
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['avgReviews']->value['nbr'], ENT_QUOTES, 'UTF-8');?>

						<span>
							<?php if (($_smarty_tpl->tpl_vars['avgReviews']->value['nbr']) > 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ratings.','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
 
							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rating.','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
 
							<?php }?>
						</span>
					</div>
				</div>
				<hr/>
				<div id="reviews-list-comments" class="reviews-list">
					<?php $_smarty_tpl->_subTemplateRender('module:nrtreviews/views/templates/hook/display-list-comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			<?php } else { ?>
				<p class="align_center">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'nrtreviews'),$_smarty_tpl ) );?>

				</p>
			<?php }?>
		</div>
	</div>
	<div class="col-xs-12 col-lg-12 col-reviews-form">
		<div id="reviews_form">
            <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value && !$_smarty_tpl->tpl_vars['allowGuests']->value) {?>
                <p class="alert alert-warning">
                    <?php echo $_smarty_tpl->tpl_vars['logginText']->value;?>

                </p>
            <?php } else { ?>
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You're reviewing",'mod'=>'nrtreviews'),$_smarty_tpl ) );?>
 “<?php echo $_smarty_tpl->tpl_vars['nameProduct']->value;?>
”</h3> 
                <form class="row" action="#">   
                    <div class="col-xs-12">
                        <label class="label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your rating",'mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</label>
                        <span class="star_content">
                            <input id="rating_value_1" class="hidden" type="radio" name="rating" value="1"/>
                            <label class="star-label" for="rating_value_1">
                                <span class="star star_on"></span>
                            </label>
                            <input id="rating_value_2" class="hidden" type="radio" name="rating" value="2"/>
                            <label class="star-label" for="rating_value_2">
                                <span class="star star_on"></span>
                            </label>
                            <input id="rating_value_3" class="hidden" type="radio" name="rating" value="3"/>
                            <label class="star-label" for="rating_value_3">
                                <span class="star star_on"></span>
                            </label>
                            <input id="rating_value_4" class="hidden" type="radio" name="rating" value="4"/>
                            <label class="star-label" for="rating_value_4">
                                <span class="star star_on"></span>
                            </label>
                            <input id="rating_value_5" class="hidden" type="radio" name="rating" value="5" checked/>
                            <label class="star-label" for="rating_value_5">
                                <span class="star star_on"></span>
                            </label>
                        </span>
                        <hr/>
                    </div>
                    <div class="form-group col-xs-12<?php if (!$_smarty_tpl->tpl_vars['isLogged']->value) {?> col-md-6<?php }?>">
                        <label class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</label>
                        <input name="title" class="form-control" type="text" value="" required/>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value) {?>
                        <div class="form-group col-xs-12 col-md-6">
                            <label class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</label>
                            <input class="form-control" name="customer_name" type="text" value="" required/>
                        </div>
                    <?php }?>
                    <div class="form-group col-xs-12">
                        <label class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</label>
                        <textarea name="comment" class="form-control" rows="10" required></textarea>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['allowUpload']->value) {?>
                        <div class="form-group col-xs-12">
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'nrtreviews'),$_smarty_tpl ) );?>
</label>
                            <div class="group-file-style">
                                <input type="file" name="image[]" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" multiple>
                            </div>
                            <small class="float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'.png .jpg .gif','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>
                        </div>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                        <div class="form-group col-xs-12">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNrtCaptcha','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                        </div>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                        <div class="form-group col-xs-12">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                        </div>
                    <?php }?>
                    <div class="form-group col-xs-12">
                        <input class="form-control" name="id_product" type="hidden" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idProduct']->value, ENT_QUOTES, 'UTF-8');?>
'/>
                        <div id="reviews_form_error" class="alert alert-danger" style="display:none;"></div>
                    </div>
                    <div id="reviews_form_btn" class="col-xs-12">
                        <button class="btn btn-primary" type="submit">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'nrtreviews'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </form>
            <?php }?>
		</div>	
	</div>
</div><?php }
}
