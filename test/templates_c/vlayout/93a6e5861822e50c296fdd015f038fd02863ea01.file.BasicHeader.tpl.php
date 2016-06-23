<?php /* Smarty version Smarty-3.1.7, created on 2016-03-16 03:10:15
         compiled from "C:\wamp\www\vtigercolombia\etalmag\etalmag\includes\runtime/../../layouts/vlayout\modules\Vtiger\BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1878456e8ce97f37a71-11267742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a6e5861822e50c296fdd015f038fd02863ea01' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\etalmag\\etalmag\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\BasicHeader.tpl',
      1 => 1458075217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1878456e8ce97f37a71-11267742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56e8ce980aa0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e8ce980aa0b')) {function content_56e8ce980aa0b($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>