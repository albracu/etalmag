<?php /* Smarty version Smarty-3.1.7, created on 2015-08-25 15:59:47
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Emails/EmailPreviewPrint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213150775455dc90f3d90eb1-60755811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8058b1b0a24496b6ac89d15d5cf102f93e08c0f' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Emails/EmailPreviewPrint.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213150775455dc90f3d90eb1-60755811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'TO_EMAILS' => 0,
    'TO_EMAIL' => 0,
    'USER_MODEL' => 0,
    'MODULE' => 0,
    'FROM' => 0,
    'TO' => 0,
    'CC' => 0,
    'BCC' => 0,
    'ATTACHMENT_DETAILS' => 0,
    'ATTACHMENT_DETAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55dc90f3f18c2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc90f3f18c2')) {function content_55dc90f3f18c2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/crm/libraries/Smarty/libs/plugins/modifier.replace.php';
?>
<!DOCTYPE><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body onLoad="javascript:window.print()" style="padding:3% 5%;"><?php $_smarty_tpl->tpl_vars["TO_EMAILS"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['RECORD']->value->get('saved_toid'),']',''), null, 0);?><?php $_smarty_tpl->tpl_vars["TO_EMAIL"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['TO_EMAILS']->value,'[',''), null, 0);?><?php $_smarty_tpl->tpl_vars["TO_EMAIL_VALUE"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['TO_EMAIL']->value,'&quot;',''), null, 0);?><span style="position:absolute;right:6%;top:3%;font-family:'Lucida Grande';font-size:15px"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name');?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('email1');?>
&gt;</span><hr/><span style="font-family:'Lucida Grande';font-size:15px"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
</span><hr/><div><div style="width:100%;text-align: right;font-family:'Lucida Grande';font-size:15px"><span><?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['RECORD']->value->get('createdtime'));?>
</span></div></div><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php echo $_smarty_tpl->tpl_vars['FROM']->value;?>
</span></div><div class="clear-both"></div></div><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;font-family:'Lucida Grande';font-size:15px"><?php $_smarty_tpl->tpl_vars['TO_EMAILS'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['TO']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['TO_EMAILS']->value;?>
</span></div><div class="clear-both"></div></div><?php if (!empty($_smarty_tpl->tpl_vars['CC']->value)){?><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php if (!empty($_smarty_tpl->tpl_vars['CC']->value)){?><?php echo $_smarty_tpl->tpl_vars['CC']->value;?>
<?php }?></span></div><div class="clear-both"></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['BCC']->value)){?><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php if (!empty($_smarty_tpl->tpl_vars['BCC']->value)){?><?php echo $_smarty_tpl->tpl_vars['BCC']->value;?>
<?php }?></span></div><div class="clear-both"></div></div><?php }?><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
</span></div><div class="clear-both"></div></div><?php $_smarty_tpl->tpl_vars["ATTACHMENT_DETAILS"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getAttachmentDetails(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value)){?><div><div style="float:left;width:10%;text-align: right;font-family:'Lucida Grande';font-size:15px"><?php echo vtranslate('LBL_ATTACHMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div style="width:90%;text-align: left;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php  $_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ATTACHMENT_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL']->key => $_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL']->value){
$_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL']->_loop = true;
?><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['ATTACHMENT_DETAIL']->value['attachment'];?>
</a>&nbsp;&nbsp;<?php } ?></span></div><div class="clear-both"></div></div><?php }?><div><div style="width:90%;text-align: left;margin-left:7%;font-family:'Lucida Grande';font-size:15px"><span style="margin-left:7%;"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('description'));?>
</span></div><div class="clear-both"></div></div></body></html>
<?php }} ?>