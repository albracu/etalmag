<?php /* Smarty version Smarty-3.1.7, created on 2015-08-10 16:24:59
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129087506155c8d05b5458e8-59213764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06140ae9c55545f4685351aa0c55d754e879f2ba' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1438554774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129087506155c8d05b5458e8-59213764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c8d05b57687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8d05b57687')) {function content_55c8d05b57687($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>