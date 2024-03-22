<?php
/* Smarty version 3.1.47, created on 2024-03-22 14:36:06
  from 'module:nrtsocialloginviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65fddda6550e11_01752489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '132ccadc36cfb5759e2704d482e80a064a7f02ac' => 
    array (
      0 => 'module:nrtsocialloginviewstempla',
      1 => 1711123671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fddda6550e11_01752489 (Smarty_Internal_Template $_smarty_tpl) {
if (!Context::getContext()->customer->isLogged() && (((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['facebook']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['facebook']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['gplus']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['gplus']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['insta']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['insta']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['twitter']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['twitter']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['linked']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['linked']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['yahoo']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['yahoo']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['live']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['live']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['foursquare']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['foursquare']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['amazon']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['amazon']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['pay']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['pay']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['github']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['github']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['disqus']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['disqus']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['vk']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['vk']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['wordpress']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['wordpress']['enable'] == 1) || ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['dropbox']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['dropbox']['enable'] == 1))) {?>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or sign in with:','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</p>
<ul class="social_login <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 0) {?>small-button<?php }?>">
<?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['facebook']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['facebook']['enable'] == 1) {?>
    <li>                
        <a  class="js-social-login button-social-login facebook" 
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'facebook'),$_smarty_tpl ) );?>
?type=fb" title="Facebook" rel="nofollow">
            <i class="lab la-facebook-f"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['gplus']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['gplus']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login google"   
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'google'),$_smarty_tpl ) );?>
?type=google" title="Google" rel="nofollow">
            <i class="lab la-google"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['insta']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['insta']['enable'] == 1) {?>
    <li>                
        <a  class="js-social-login button-social-login instagram" 
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'instagram'),$_smarty_tpl ) );?>
?type=insta" title="Instagram" rel="nofollow">
            <i class="lab la-instagram"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['twitter']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['twitter']['enable'] == 1) {?>
    <li>                
        <a  class="js-social-login button-social-login twitter" 
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'twitter'),$_smarty_tpl ) );?>
?type=tweet" title="Twitter" rel="nofollow">
            <i class="lab la-twitter"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['linked']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['linked']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login linked"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'linkedin'),$_smarty_tpl ) );?>
?type=linked" title="Linkedin" rel="nofollow">
            <i class="lab la-linkedin-in"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Linkedin','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['yahoo']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['yahoo']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login yahoo"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'ylogin'),$_smarty_tpl ) );?>
?type=yahoo" title="Yahoo" rel="nofollow">
            <i class="lab la-yahoo"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yahoo','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['live']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['live']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login live"   
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'live'),$_smarty_tpl ) );?>
?type=live" title="Live" rel="nofollow">
            <i class="lab la-windows"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['foursquare']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['foursquare']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login foursquare"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'foursquare'),$_smarty_tpl ) );?>
?type=foursquare" title="Foursquare" rel="nofollow">
            <i class="lab la-foursquare"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Foursquare','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['amazon']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['amazon']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login amazon"   
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'amazon'),$_smarty_tpl ) );?>
?type=amazon" title="Amazon" rel="nofollow">
            <i class="lab la-amazon"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amazon','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['pay']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['pay']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login paypal"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'paypal'),$_smarty_tpl ) );?>
?type=pay" title="Paypal" rel="nofollow">
            <i class="lab la-paypal"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Paypal','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['github']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['github']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login github"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'github'),$_smarty_tpl ) );?>
?type=github" title="Github" rel="nofollow">
            <i class="lab la-github-alt"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Github','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['disqus']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['disqus']['enable'] == 1) {?> 
    <li>                
        <a 	class="js-social-login button-social-login disqus" 
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'disqus'),$_smarty_tpl ) );?>
?type=disqus" title="Disqus" rel="nofollow">
            <i class="las la-play"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disqus','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['vk']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['vk']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login vk"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'vk'),$_smarty_tpl ) );?>
?type=vk" title="Vk" rel="nofollow">
            <i class="lab la-vk"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vk','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['wordpress']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['wordpress']['enable'] == 1) {?>
    <li>                
        <a 	class="js-social-login button-social-login wordpress"   
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'wordpress'),$_smarty_tpl ) );?>
?type=wordpress" title="Wordpress" rel="nofollow">
            <i class="lab la-wordpress"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wordpress','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }
if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['dropbox']['enable'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['dropbox']['enable'] == 1) {?>
    <li>                
        <a  class="js-social-login button-social-login dropbox"  
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'nrtsociallogin','controller'=>'dropbox'),$_smarty_tpl ) );?>
?type=dropbox" title="Dropbox" rel="nofollow">
            <i class="lab la-dropbox"></i>
            <?php if ((isset($_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'])) && $_smarty_tpl->tpl_vars['loginizer_data']->value['display_button'] == 1) {?>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dropbox','mod'=>'nrtsociallogin'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </a>
    </li>
<?php }?>
</ul>
<?php }
}
}
