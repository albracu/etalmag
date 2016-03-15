<?php /* Smarty version Smarty-3.1.7, created on 2015-08-08 12:54:34
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Settings/ExtensionStore/InstallationLog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98108460855c5fc0a93f2b2-56669609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96059cd2eabb4d3b51b21773ba966585da1ba02f' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Settings/ExtensionStore/InstallationLog.tpl',
      1 => 1438554827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98108460855c5fc0a93f2b2-56669609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'QUALIFIED_MODULE' => 0,
    'ERROR_MESSAGE' => 0,
    'MODULE_ACTION' => 0,
    'TARGET_MODULE_INSTANCE' => 0,
    'MODULE_FILE_NAME' => 0,
    'MODULE_PACKAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c5fc0a9b721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c5fc0a9b721')) {function content_55c5fc0a9b721($_smarty_tpl) {?>
<div class='modelContainer'><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?><input type="hidden" name="installationStatus" value="error" /><h3 style="color: red"><?php echo vtranslate('LBL_INSTALLATION_FAILED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><?php }else{ ?><input type="hidden" name="installationStatus" value="success" /><h3 style="color:green;"><?php echo vtranslate('LBL_SUCCESSFULL_INSTALLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><?php }?></div><div class="modal-body" id="installationLog"><?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?><p style="color:red;"><?php echo vtranslate($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><?php }else{ ?><div class="row-fluid"><span class="font-x-x-large"><?php echo vtranslate('LBL_INSTALLATION_LOG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div id="extensionInstallationInfo" class="backgroundImageNone" style="background-color: white;padding: 2%;"><?php if ($_smarty_tpl->tpl_vars['MODULE_ACTION']->value=="Upgrade"){?><?php echo $_smarty_tpl->tpl_vars['MODULE_PACKAGE']->value->update($_smarty_tpl->tpl_vars['TARGET_MODULE_INSTANCE']->value,$_smarty_tpl->tpl_vars['MODULE_FILE_NAME']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['MODULE_PACKAGE']->value->import($_smarty_tpl->tpl_vars['MODULE_FILE_NAME']->value,'false');?>
<?php }?><?php ob_start();?><?php echo unlink($_smarty_tpl->tpl_vars['MODULE_FILE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['UNLINK_RESULT'] = new Smarty_variable($_tmp1, null, 0);?></div><?php }?></div><div class="modal-footer"><span class="pull-right"><button class="btn btn-success" id="importCompleted" onclick="location.reload()"><?php echo vtranslate('LBL_OK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></span></div></div><?php }} ?>