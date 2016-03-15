<?php /* Smarty version Smarty-3.1.7, created on 2015-08-08 12:54:49
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199827023855c5fc1908fe36-63917435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dec0cc343df7117825bee29f46d1149b3eb5cf6' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBar.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199827023855c5fc1908fe36-63917435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c5fc190a996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c5fc190a996')) {function content_55c5fc190a996($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>