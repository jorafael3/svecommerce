<?php
/* Smarty version 3.1.47, created on 2023-05-25 08:37:40
  from '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/adminthemecustomizer/views/templates/admin/admin_theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_646f64a4c34378_80518544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175670c72ac5b26b7cdfa4456b7f45d8a0f9384c' => 
    array (
      0 => '/home/u672279739/domains/salvacerohomecenter.com/public_html/modules/adminthemecustomizer/views/templates/admin/admin_theme.tpl',
      1 => 1685021482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646f64a4c34378_80518544 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">

/*header logo*/
<?php if ((isset($_smarty_tpl->tpl_vars['header_logo']->value)) && $_smarty_tpl->tpl_vars['header_logo']->value) {?>
#header_shopversion, #header_logo {background: rgba(0, 0, 0, 0) url("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['header_logo']->value,'htmlall','UTF-8' ));?>
") no-repeat scroll left top / auto 36px !important;}
<?php }?>

/*main BG color*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MAINBG'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MAINBG']) {?>
#main,
/*1.7.7.x*/
#main-div .content-div {background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MAINBG'],'htmlall','UTF-8' ));?>
;}
<?php }?>

/*top bar*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TOPBG'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TOPBG']) {?>
#header #header_infos {background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TOPBG'],'htmlall','UTF-8' ));?>
;}
<?php }?>

/*left navigation*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_NAVBG'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_NAVBG']) {?>
#nav-sidebar,
#nav-sidebar ul.menu li.maintab > a.title,
body:not(.page-sidebar-closed) #nav-sidebar ul.menu li.maintab > a.title,
/*1.7.7.x*/
.nav-bar
	{background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_NAVBG'],'htmlall','UTF-8' ));?>
;}

#nav-sidebar ul.menu li.searchtab .form-group.focus-search,
#nav-sidebar ul.menu li.searchtab
	{background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_NAVBG'],'htmlall','UTF-8' ));?>
;}
<?php }?>

/*left navigation font*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUTXT'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUTXT']) {?>
#nav-sidebar ul.menu li.maintab > a.title,
#nav-sidebar ul.menu li.maintab > a.title,
/*1.7.7.x*/
 .main-menu .link-levelone.-active > .link, .main-menu .link-levelone.ul-open > .link
	{ color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUTXT'],'htmlall','UTF-8' ));?>
!important; }
<?php }?>

/*left navigation active menu*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUACT'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUACT']) {?>
#nav-sidebar ul.menu li.maintab.active a.title, #nav-sidebar ul.menu li.maintab.active li.active a.title,
#nav-sidebar ul.menu li.maintab.active a:hover,
#nav-sidebar ul.menu li.maintab.active li.active a:hover,
#nav-sidebar ul.menu li.maintab > a:hover,
#nav-sidebar ul.menu li.maintab ul.submenu li a:hover,
.bootstrap .dropdown-menu > .active > a,
.bootstrap .dropdown-menu > .active > a:hover,
.bootstrap .dropdown-menu > .active > a:focus,
.bootstrap .dropdown-menu > li a:hover,

.bootstrap .navbar-inverse .navbar-nav > .open > a,
.bootstrap #header_infos .navbar-nav > .open > a,
.bootstrap .navbar-inverse #header_notifs_icon_wrapper > .open > a,
.bootstrap #header_infos #header_notifs_icon_wrapper > .open > a,
.bootstrap .navbar-inverse #header_employee_box > .open > a,
.bootstrap #header_infos #header_employee_box > .open > a,
.bootstrap .navbar-inverse #header_quick > .open > a,
.bootstrap #header_infos #header_quick > .open > a,
.bootstrap .navbar-inverse #header_shop > .open > a,
.bootstrap #header_infos #header_shop > .open > a,
.bootstrap .navbar-inverse .navbar-nav > .open > a:hover,
.bootstrap #header_infos .navbar-nav > .open > a:hover,
.bootstrap .navbar-inverse #header_notifs_icon_wrapper > .open > a:hover,
.bootstrap #header_infos #header_notifs_icon_wrapper > .open > a:hover,
.bootstrap .navbar-inverse #header_employee_box > .open > a:hover,
.bootstrap #header_infos #header_employee_box > .open > a:hover,
.bootstrap .navbar-inverse #header_quick > .open > a:hover,
.bootstrap #header_infos #header_quick > .open > a:hover,
.bootstrap .navbar-inverse #header_shop > .open > a:hover,
.bootstrap #header_infos #header_shop > .open > a:hover,
.bootstrap .navbar-inverse .navbar-nav > .open > a:focus,
.bootstrap #header_infos .navbar-nav > .open > a:focus,
.bootstrap .navbar-inverse #header_notifs_icon_wrapper > .open > a:focus,
.bootstrap #header_infos #header_notifs_icon_wrapper > .open > a:focus,
.bootstrap .navbar-inverse #header_employee_box > .open > a:focus,
.bootstrap #header_infos #header_employee_box > .open > a:focus,
.bootstrap .navbar-inverse #header_quick > .open > a:focus,
.bootstrap #header_infos #header_quick > .open > a:focus,
.bootstrap .navbar-inverse #header_shop > .open > a:focus,
.bootstrap #header_infos #header_shop > .open > a:focus,
/*1.7.7.x*/
.main-menu .link-levelone.-active > .link, .main-menu .link-levelone.ul-open > .link
	{background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_MENUACT'],'htmlall','UTF-8' ));?>
!important;}
<?php }?>

/*sub menu BG*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENU'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENU']) {?>
#nav-sidebar ul.menu li.maintab ul.submenu li a,
#nav-sidebar ul.menu li.maintab ul.submenu,
.main-menu .link-levelone > .submenu, .main-menu .link-levelone.-active .link, .main-menu .link-levelone.ul-open .link
	{background-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENU'],'htmlall','UTF-8' ));?>
; }

<?php }?>

/*fonts color for admin sub menu*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENUTXT'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENUTXT']) {?>
#nav-sidebar ul.menu li.maintab ul.submenu li a,
/*1.7.7.x*/
.main-menu .link-leveltwo > .link
	{color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SUBMENUTXT'],'htmlall','UTF-8' ));?>
; }
<?php }?>

/*dashboard section header*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SECHDBG'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SECHDBG']) {?>
.bootstrap #dashboard section > section header
	{background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_SECHDBG'],'htmlall','UTF-8' ));?>
; }
<?php }?>

/*Anchor Links*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_LINK'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_LINK']) {?>
.bootstrap a,
/*1.7.x.x*/
#main-div a
{color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_LINK'],'htmlall','UTF-8' ));?>
; }
<?php }?>


/*Anchor Links*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_HLINK'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_HLINK']) {?>
.bootstrap a:hover,
/*1.7.x.x*/
#main-div a:hover {color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_HLINK'],'htmlall','UTF-8' ));?>
!important; }
<?php }?>

/*dashboard active trend*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TRENDBG'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TRENDBG']) {?>
.bootstrap .nav-pills > li.active > a, .bootstrap .nav-pills > li.active > a:hover, .bootstrap .nav-pills > li.active > a:focus,
.bootstrap .list-group-item.active,
.bootstrap #dashboard .data_list li.active,
.bootstrap .list-group-item.active:hover,
.bootstrap #dashboard .data_list li.active:hover,
.bootstrap .list-group-item.active:focus,
.bootstrap #dashboard .data_list li.active:focus,
#dashtrends_toolbar .active
	{background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_TRENDBG'],'htmlall','UTF-8' ));?>
!important; }
<?php }?>

/*default btn color*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTN'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTN']) {?>
.bootstrap .btn-default,
/*1.7.x.x*/
#main-div .btn.btn-primary {
	background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTN'],'htmlall','UTF-8' ));?>
;
	border-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTN'],'htmlall','UTF-8' ));?>
;
}
<?php }?>

/*default btn color on hover*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTNHOVER'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTNHOVER']) {?>
.bootstrap .btn.btn-default:hover,
/*1.7.x.x*/
#main-div .btn.btn-primary:hover {
	background: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTNHOVER'],'htmlall','UTF-8' ));?>
;
	border-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_BTNHOVER'],'htmlall','UTF-8' ));?>
;
}
<?php }?>

/*toolbar icons*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICON'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICON']) {?>
.bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i,
/*1.7.x.x*/
#main-div .toolbar a {
	color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICON'],'htmlall','UTF-8' ));?>
!important;
}
<?php }?>

/*toolbar icons hover*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICONHOVER'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICONHOVER']) {?>
.bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i:hover,
/*1.7.x.x*/
#main-div .toolbar a:hover {
	color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_ICONHOVER'],'htmlall','UTF-8' ));?>
!important;
}
<?php }?>

/*custom css code*/
<?php if ((isset($_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_CUSTCSS'])) && $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_CUSTCSS']) {?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field_values']->value['ADMINTHEME_DASHBOARD_CUSTCSS'],'htmlall','UTF-8' ));?>

<?php }?>

</style>
<?php }
}
