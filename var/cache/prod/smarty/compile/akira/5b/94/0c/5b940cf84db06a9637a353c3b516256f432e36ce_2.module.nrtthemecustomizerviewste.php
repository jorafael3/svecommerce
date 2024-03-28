<?php
/* Smarty version 3.1.47, created on 2024-03-28 14:38:52
  from 'module:nrtthemecustomizerviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6605c74c7d0834_57111940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b940cf84db06a9637a353c3b516256f432e36ce' => 
    array (
      0 => 'module:nrtthemecustomizerviewste',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/canvas/account.tpl' => 1,
    'file:_partials/canvas/facets.tpl' => 1,
  ),
),false)) {
function content_6605c74c7d0834_57111940 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close (Esc)','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
                <button class="pswp__button pswp__button--share" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
                <button class="pswp__button pswp__button--fs" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle fullscreen','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
                <button class="pswp__button pswp__button--zoom" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zoom in/out','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
            <button class="pswp__button pswp__button--arrow--right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'nrtthemecustomizer'),$_smarty_tpl ) );?>
"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
	
<div id="modal-iframe-popup" class="modal" tabindex="-1" role="dialog"><div class="modal-dialog modal-iframe-wrapper popup-wrapper" role="document"><div class="modal-content"><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><span aria-hidden="true">×</span></button><div id="modal-iframe-content" class="modal-body"></div></div></div></div>

<div id="axps_loading" class=""><div class="axps_loading_inner"><span class="spinner"></span></div></div>

<?php $_smarty_tpl->_subTemplateRender("file:_partials/canvas/account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender("file:_partials/canvas/facets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

<div class="canvas-widget-backdrop" data-dismiss="canvas-widget"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['opThemect']->value['general_back_top'])) && $_smarty_tpl->tpl_vars['opThemect']->value['general_back_top']) {?>
    <button id="back-top">
        <i class="las la-angle-up"></i>
    </button>
<?php }
}
}
