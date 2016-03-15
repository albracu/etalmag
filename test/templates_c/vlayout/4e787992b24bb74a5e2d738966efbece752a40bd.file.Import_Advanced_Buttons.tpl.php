<?php /* Smarty version Smarty-3.1.7, created on 2015-08-07 22:09:11
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/Import_Advanced_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13657290855c52c87808a25-77642283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e787992b24bb74a5e2d738966efbece752a40bd' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/Import_Advanced_Buttons.tpl',
      1 => 1438554783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13657290855c52c87808a25-77642283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c52c87822fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c52c87822fa')) {function content_55c52c87822fa($_smarty_tpl) {?>

<button type="submit" name="import" id="importButton" class="crmButton big edit btn btn-success"
		><strong><?php echo vtranslate('LBL_IMPORT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
&nbsp;&nbsp;
<a type="button" name="cancel" value="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="cursorPointer cancelLink" onclick="window.history.back()">
	<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</a><?php }} ?>