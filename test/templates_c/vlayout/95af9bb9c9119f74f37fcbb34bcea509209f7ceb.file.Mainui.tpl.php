<?php /* Smarty version Smarty-3.1.7, created on 2015-10-21 19:54:09
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7586550605627ed6114ac94-30865049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95af9bb9c9119f74f37fcbb34bcea509209f7ceb' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1438554774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7586550605627ed6114ac94-30865049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5627ed6116c9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627ed6116c9e')) {function content_5627ed6116c9e($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>