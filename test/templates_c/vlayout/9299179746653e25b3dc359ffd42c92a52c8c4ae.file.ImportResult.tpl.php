<?php /* Smarty version Smarty-3.1.7, created on 2015-08-07 22:47:31
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/ImportResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45540973755c5358311d2c7-07197675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9299179746653e25b3dc359ffd42c92a52c8c4ae' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/ImportResult.tpl',
      1 => 1438554783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45540973755c5358311d2c7-07197675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEFTPANELHIDE' => 0,
    'FOR_MODULE' => 0,
    'MODULE' => 0,
    'ERROR_MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c5358317dfa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c5358317dfa')) {function content_55c5358317dfa($_smarty_tpl) {?>
<div id="toggleButton" class="toggleButton" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
"><i id="tButtonImage" class="<?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value!='1'){?>icon-chevron-left<?php }else{ ?>icon-chevron-right<?php }?>"></i></div>&nbsp<div style="padding-left: 15px;"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><table style=" width:90%;margin-left: 5% " cellpadding="5" class="searchUIBasic well"><tr><td class="font-x-large" align="left" colspan="2"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
 - <?php echo vtranslate('LBL_RESULT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td></tr><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value!=''){?><tr><td class="style1" align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td valign="top"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Result_Details.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><tr><td align="right" colspan="2"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Import_Finish_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table></div><?php }} ?>