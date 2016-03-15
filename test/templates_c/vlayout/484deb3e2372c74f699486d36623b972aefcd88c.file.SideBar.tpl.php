<?php /* Smarty version Smarty-3.1.7, created on 2015-08-20 00:04:01
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24783769555d519714aec17-08801807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '484deb3e2372c74f699486d36623b972aefcd88c' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24783769555d519714aec17-08801807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d519714e3ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d519714e3ba')) {function content_55d519714e3ba($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>