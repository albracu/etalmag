<?php /* Smarty version Smarty-3.1.7, created on 2015-08-20 00:04:01
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130844604955d51971650b38-15459135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee12bc352070bd63496a3dc1bd6727d0f7735d89' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplates.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130844604955d51971650b38-15459135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d5197165db9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d5197165db9')) {function content_55d5197165db9($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMakerActions.js"></script><script type="text/javascript" src="layouts/vlayout/modules/PDFMaker/resources/PDFMaker.js"></script><div class="contentsDiv marginLeftZero"><div class="listViewPageDiv"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFHeader.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="listViewContentDiv" id="listViewContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListPDFTemplatesContents.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>