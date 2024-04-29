<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-28 16:38:51
=======
/* Smarty version 3.1.47, created on 2024-04-01 12:21:21
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\_partials\form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_662ec1ebd85e49_01048115',
=======
  'unifunc' => 'content_660aed11515547_81529925',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca24f7a976762ba3131eac6b7cf4b34501bf861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\_partials\\form-fields.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_662ec1ebd85e49_01048115 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_660aed11515547_81529925 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_842498127662ec1ebd67dc9_30759101', 'form_field_item_hidden');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_734312793660aed114f1535_14547433', 'form_field_item_hidden');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required'] && $_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?> required<?php }?>" for="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6 js-input-column<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541448321662ec1ebd6b667_30632441', 'form_field_item_select');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764125140660aed114f73a0_38040613', 'form_field_item_select');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445623430662ec1ebd6e3b2_75307437', 'form_field_item_country');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1703277748660aed114fac87_18030090', 'form_field_item_country');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1537996345662ec1ebd70d90_39266863', 'form_field_item_radio');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552910194660aed114fde84_57441593', 'form_field_item_radio');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1786500776662ec1ebd739b2_12925240', 'form_field_item_checkbox');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_919488310660aed115010e2_40830409', 'form_field_item_checkbox');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1165931927662ec1ebd75946_85621141', 'form_field_item_date');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1842458953660aed11503392_48492910', 'form_field_item_date');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590759692662ec1ebd783b8_95194106', 'form_field_item_birthday');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113174554660aed11506397_01200363', 'form_field_item_birthday');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168971526662ec1ebd7b1a1_17607128', 'form_field_item_password');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1791326373660aed115095d3_89869322', 'form_field_item_password');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php } else { ?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1424790840662ec1ebd7fe43_08407294', 'form_field_item_other');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5386900660aed1150e840_29606833', 'form_field_item_other');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


      <?php }?>

      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_928600816662ec1ebd83b97_36472497', 'form_field_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_803921388660aed11512e31_42875183', 'form_field_errors');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019459138662ec1ebd84555_02620757', 'form_field_comment');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_711395686660aed11513925_84799788', 'form_field_comment');
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
?>

    </div>
  </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
<<<<<<< HEAD
class Block_842498127662ec1ebd67dc9_30759101 extends Smarty_Internal_Block
=======
class Block_734312793660aed114f1535_14547433 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
<<<<<<< HEAD
    0 => 'Block_842498127662ec1ebd67dc9_30759101',
=======
    0 => 'Block_734312793660aed114f1535_14547433',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
<<<<<<< HEAD
class Block_1541448321662ec1ebd6b667_30632441 extends Smarty_Internal_Block
=======
class Block_1764125140660aed114f73a0_38040613 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1541448321662ec1ebd6b667_30632441',
=======
    0 => 'Block_1764125140660aed114f73a0_38040613',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
<<<<<<< HEAD
class Block_1445623430662ec1ebd6e3b2_75307437 extends Smarty_Internal_Block
=======
class Block_1703277748660aed114fac87_18030090 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1445623430662ec1ebd6e3b2_75307437',
=======
    0 => 'Block_1703277748660aed114fac87_18030090',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select
          id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          class="form-control form-control-select js-country"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
<<<<<<< HEAD
class Block_1537996345662ec1ebd70d90_39266863 extends Smarty_Internal_Block
=======
class Block_552910194660aed114fde84_57441593 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1537996345662ec1ebd70d90_39266863',
=======
    0 => 'Block_552910194660aed114fde84_57441593',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
				<label class="wrapper-custom-checkbox custom-radio-inline" for="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">	
					<span class="custom-radio">
                        <input
                        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                        type="radio"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
                        >
						<span></span>
					</span>
					<span class="text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</span>
				</label>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
<<<<<<< HEAD
class Block_1786500776662ec1ebd739b2_12925240 extends Smarty_Internal_Block
=======
class Block_919488310660aed115010e2_40830409 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1786500776662ec1ebd739b2_12925240',
=======
    0 => 'Block_919488310660aed115010e2_40830409',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<label class="wrapper-custom-checkbox<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">	
				<span class="custom-checkbox">
					<input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
					<span><i class="las la-check checkbox-checked"></i></span>
				</span>
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</span>
			</label>
        <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
<<<<<<< HEAD
class Block_1165931927662ec1ebd75946_85621141 extends Smarty_Internal_Block
=======
class Block_1842458953660aed11503392_48492910 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1165931927662ec1ebd75946_85621141',
=======
    0 => 'Block_1842458953660aed11503392_48492910',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control" type="date" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?> placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
<<<<<<< HEAD
class Block_1590759692662ec1ebd783b8_95194106 extends Smarty_Internal_Block
=======
class Block_2113174554660aed11506397_01200363 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1590759692662ec1ebd783b8_95194106',
=======
    0 => 'Block_2113174554660aed11506397_01200363',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\svecommerce\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

          <div class="js-parent-focus">
            <?php ob_start();
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable18 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable19 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable22 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable23 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable24 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable18,'field_array'=>$_prefixVariable19,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable20,'month_empty'=>$_prefixVariable21,'year_empty'=>$_prefixVariable22,'start_year'=>$_prefixVariable23-100,'end_year'=>$_prefixVariable24),$_smarty_tpl);?>

          </div>
        <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
<<<<<<< HEAD
class Block_168971526662ec1ebd7b1a1_17607128 extends Smarty_Internal_Block
=======
class Block_1791326373660aed115095d3_89869322 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
<<<<<<< HEAD
    0 => 'Block_168971526662ec1ebd7b1a1_17607128',
=======
    0 => 'Block_1791326373660aed115095d3_89869322',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="input-group js-parent-focus">
            <input
              id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              class="form-control js-child-focus js-visible-password"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password input','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              type="password"
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length']))) {?>data-minlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length']))) {?>data-maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['maximum_length'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score']))) {?>data-minscore="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['password_policy']['minimum_score'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              value=""
              pattern=".{5,}"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            >
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
          </div>
        <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
<<<<<<< HEAD
class Block_1424790840662ec1ebd7fe43_08407294 extends Smarty_Internal_Block
=======
class Block_5386900660aed1150e840_29606833 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1424790840662ec1ebd7fe43_08407294',
=======
    0 => 'Block_5386900660aed1150e840_29606833',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input
            id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            class="form-control"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
<<<<<<< HEAD
class Block_928600816662ec1ebd83b97_36472497 extends Smarty_Internal_Block
=======
class Block_803921388660aed11512e31_42875183 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_928600816662ec1ebd83b97_36472497',
=======
    0 => 'Block_803921388660aed11512e31_42875183',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
      <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
<<<<<<< HEAD
class Block_2019459138662ec1ebd84555_02620757 extends Smarty_Internal_Block
=======
class Block_711395686660aed11513925_84799788 extends Smarty_Internal_Block
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2019459138662ec1ebd84555_02620757',
=======
    0 => 'Block_711395686660aed11513925_84799788',
>>>>>>> 9a1a6330930ccb4da80431385458d268e69be318
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        <?php }?>
      <?php
}
}
/* {/block 'form_field_comment'} */
}
