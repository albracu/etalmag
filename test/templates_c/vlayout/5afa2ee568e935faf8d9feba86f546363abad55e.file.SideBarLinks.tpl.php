<?php /* Smarty version Smarty-3.1.7, created on 2015-08-06 20:11:00
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Rss/SideBarLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103448995355c3bf542df005-19872435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5afa2ee568e935faf8d9feba86f546363abad55e' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Rss/SideBarLinks.tpl',
      1 => 1399895722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103448995355c3bf542df005-19872435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUICK_LINKS' => 0,
    'SIDEBARLINK' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c3bf5437246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c3bf5437246')) {function content_55c3bf5437246($_smarty_tpl) {?>
<div class="quickLinksDiv"><?php $_smarty_tpl->tpl_vars['SIDEBARLINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'][0], null, 0);?><div style="margin-bottom: 5px" class="btn-group row-fluid"><button id="rssAddButton" class="btn addButton span12 rssAddButton" data-href="<?php echo $_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getUrl();?>
"><img src="layouts/vlayout/skins/images/rss_add.png" /><strong>&nbsp;&nbsp; <?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="rssAddFormContainer hide"></div></div><?php }} ?>