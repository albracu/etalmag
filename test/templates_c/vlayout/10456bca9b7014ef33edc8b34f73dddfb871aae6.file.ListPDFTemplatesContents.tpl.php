<?php /* Smarty version Smarty-3.1.7, created on 2015-08-20 00:04:01
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplatesContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43047652155d519716b4457-79100918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10456bca9b7014ef33edc8b34f73dddfb871aae6' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ListPDFTemplatesContents.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43047652155d519716b4457-79100918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PDFTEMPLATES' => 0,
    'template' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d519716dbd0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d519716dbd0')) {function content_55d519716dbd0($_smarty_tpl) {?>
<div class="listViewEntriesDiv contents-bottomscroll"><div class="bottomscroll-div"><table border=0 cellspacing=0 cellpadding=5 width=100% class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="2%" class="narrowWidthType">#</td><th width="78%" class="narrowWidthType"><?php echo vtranslate("LBL_MODULENAMES","PDFMaker");?>
</td><th width="20%" class="narrowWidthType"><?php echo vtranslate("LBL_ACTION","PDFMaker");?>
</td></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PDFTEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mailmerge']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mailmerge']['iteration']++;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
" data-recordurl="index.php?module=PDFMaker&view=Detail&templateid=<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
" id="PDFMaker_listView_row_<?php echo $_smarty_tpl->tpl_vars['template']->value['templateid'];?>
"><td class="narrowWidthType" valign=top><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mailmerge']['iteration'];?>
</td><td class="narrowWidthType" valign=top><?php echo $_smarty_tpl->tpl_vars['template']->value['module'];?>
</a></td><td class="narrowWidthType" valign=top nowrap><?php echo $_smarty_tpl->tpl_vars['template']->value['edit'];?>
</td></tr><?php } ?></tbody></table></div></div><br><div align="center" class="small" style="color: rgb(153, 153, 153);"><?php echo vtranslate("PDF_MAKER","PDFMaker");?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 <?php echo vtranslate("COPYRIGHT","PDFMaker");?>
</div><?php }} ?>