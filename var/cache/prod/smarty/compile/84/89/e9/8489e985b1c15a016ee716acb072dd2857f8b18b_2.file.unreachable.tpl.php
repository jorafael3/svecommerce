<?php
/* Smarty version 3.1.47, created on 2024-04-29 01:19:02
  from 'C:\xampp\htdocs\svecommerce\themes\akira\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_662f3bd662dcd3_88197387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8489e985b1c15a016ee716acb072dd2857f8b18b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\svecommerce\\themes\\akira\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1711210466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662f3bd662dcd3_88197387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_981375285662f3bd662d045_94522220', 'step');
?>

<?php }
/* {block 'step'} */
class Block_981375285662f3bd662d045_94522220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_981375285662f3bd662d045_94522220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title js-step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
