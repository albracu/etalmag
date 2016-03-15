<?php /* Smarty version Smarty-3.1.7, created on 2015-08-07 22:47:17
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/Import_Done_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104369765555c5357502da32-27397208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed735ff88798bed7baac37cdd53807a15fe2a999' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/Import/Import_Done_Buttons.tpl',
      1 => 1438554783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104369765555c5357502da32-27397208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c5357503610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c5357503610')) {function content_55c5357503610($_smarty_tpl) {?>

<button class="btn btn-success" name="ok"
		onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import'"><strong><?php echo vtranslate('LBL_OK_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }} ?>