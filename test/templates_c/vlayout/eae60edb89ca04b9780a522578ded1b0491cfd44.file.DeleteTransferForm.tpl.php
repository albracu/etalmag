<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 17:58:25
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/DeleteTransferForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13560948755c794c1acf657-32141892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae60edb89ca04b9780a522578ded1b0491cfd44' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Settings/Roles/DeleteTransferForm.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13560948755c794c1acf657-32141892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c794c1b7d14',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c794c1b7d14')) {function content_55c794c1b7d14($_smarty_tpl) {?>
<div class="modelContainer"><div class="modal-header"><button class="close vtButton" data-dismiss="modal">×</button><h3><?php echo vtranslate('LBL_DELETE_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</h3></div><form class="form-horizontal" id="roleDeleteForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Delete" /><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><div class="modal-body"><h5><?php echo vtranslate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><div class="control-group"><div class="control-label"><span class="redColor">*</span><?php echo vtranslate('LBL_TO_OTHER_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><input id="transfer_record" name="transfer_record" type="hidden" value="" class="sourceField"><div class="input-prepend input-append"><span class="add-on cursorPointer" id="clearRole"><i class="icon-remove-sign"></i></span><input id="transfer_record_display" data-validation-engine='validate[required]' name="transfer_record_display" readonly type="text" class="input-medium" required value=""><span class="add-on cursorPointer relatedPopup" data-field="transfer_record" data-action="popup" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getPopupWindowUrl();?>
&type=Transfer"><i class="icon-search"></i></span></div></div></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" data-dismiss="modal" type="reset">Cancel</a></div><button class="btn btn-success pull-right" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div><?php }} ?>