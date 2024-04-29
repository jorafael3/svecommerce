<?php
/* Smarty version 3.1.47, created on 2024-04-29 10:44:41
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662fc069e50402_30170901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1711123680,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662fc069e50402_30170901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
	<div id="search_filters" class="js-search-filters">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet', false, NULL, 'facet', array (
));
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?>
			<div class="widget widget-facet-search widget-facet-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['widgetType'], ENT_QUOTES, 'UTF-8');?>
 facet">  
				<div class="widget-content">
					<?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
					<div class="widget-title h3"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></div>
					<?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1322780975662fc069e31570_90288295', 'facet_item_other');
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1930434240662fc069e40350_44481418', 'facet_item_dropdown');
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_998263698662fc069e494b5_18775407', 'facet_item_slider');
?>

					<?php }?>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php }
}
/* {block 'facet_item_other'} */
class Block_1322780975662fc069e31570_90288295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_1322780975662fc069e31570_90288295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="wrapper-scroll facet-wrapper-content">
								<div class="<?php if ((isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['color'])) || (isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['texture']))) {?>wrapper-no-scroll<?php } else { ?>wrapper-scroll-content<?php }?>">
									<ul class="facet-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['widgetType'], ENT_QUOTES, 'UTF-8');?>
">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key', 'filter_name', array (
));
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
											<?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
												<?php continue 1;?>
											<?php }?>
											<li <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) || (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?> class="facet_color"<?php }?>>
												<label<?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) && !(isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?> class="wrapper-custom-checkbox <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?> has-magnitude<?php }?>"<?php }?>>
													<?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
														<span class="custom-checkbox">
															<input data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> checked <?php }?>>
															<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
																<span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)">
																	<span class="corlor-tooltip">
																		<span class="bg-tooltip" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
																		<span class="name-tooltip"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
																	</span>
																</span>
															<?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>
																<span class="color" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
">
																   <span class="corlor-tooltip">
																		<span class="bg-tooltip" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
																		<span class="name-tooltip"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
																   </span>
																</span>
															<?php } else { ?>
																<span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>>
																	<i class="las la-check checkbox-checked"></i>
																</span>
															<?php }?>
														</span>
													<?php } else { ?>
														<span class="custom-radio">
															<input data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" type="radio" name="filter_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>>
															<span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js"<?php }?>></span>
														</span>
													<?php }?>
													<?php if (!(isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) && !(isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
														<span class="text">
															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

															<?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
																<span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
															<?php }?>
														</span>
													<?php }?>
												</label>
											</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							</div>
						<?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_1930434240662fc069e40350_44481418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_1930434240662fc069e40350_44481418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="facet-dropdown facet-wrapper-content dropdown">
								<a class="select-title" href="#" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php $_smarty_tpl->_assignInScope('active_found', false);?>
									<span>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

												<?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
													(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
												<?php }?>
												<?php $_smarty_tpl->_assignInScope('active_found', true);?>
											<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

										<?php }?>
									</span>
									<i class="las la-angle-down"></i>
								</a>
								<div class="dropdown-menu">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
										<a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
" class="select-list js-search-link<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> current<?php }?>">
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

											<?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
												(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
											<?php }?>
										</a>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						<?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_998263698662fc069e494b5_18775407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_998263698662fc069e494b5_18775407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\svecommerce\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('_nextEncodedFacetsURL', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'],"/page=\d+/","page=1"));?>
								<div
									class="faceted-slider facet-wrapper-content"
									data-slider-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
									data-slider-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
									data-slider-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
									data-slider-values="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
									data-slider-unit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
									data-slider-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
									data-slider-specifications="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
									data-slider-encoded-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_nextEncodedFacetsURL']->value, ENT_QUOTES, 'UTF-8');?>
"
								>
									<p id="facet_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

									</p>
									<div id="slider-range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
}
/* {/block 'facet_item_slider'} */
}
