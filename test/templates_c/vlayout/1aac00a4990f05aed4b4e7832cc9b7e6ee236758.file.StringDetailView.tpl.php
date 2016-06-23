<?php /* Smarty version Smarty-3.1.7, created on 2016-03-16 03:10:38
         compiled from "C:\wamp\www\vtigercolombia\etalmag\etalmag\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765456e8ceaed999b0-73692018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aac00a4990f05aed4b4e7832cc9b7e6ee236758' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\etalmag\\etalmag\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\StringDetailView.tpl',
      1 => 1458075217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765456e8ceaed999b0-73692018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56e8ceaee57d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e8ceaee57d4')) {function content_56e8ceaee57d4($_smarty_tpl) {?>



<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>