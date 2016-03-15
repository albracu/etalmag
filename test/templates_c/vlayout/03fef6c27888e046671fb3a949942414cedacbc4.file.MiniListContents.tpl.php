<?php /* Smarty version Smarty-3.1.7, created on 2016-01-17 14:50:35
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/MiniListContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390901087569baa3b03fb84-25764271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03fef6c27888e046671fb3a949942414cedacbc4' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/MiniListContents.tpl',
      1 => 1407160393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390901087569baa3b03fb84-25764271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MINILIST_WIDGET_MODEL' => 0,
    'SPANSIZE' => 0,
    'FIELD' => 0,
    'BASE_MODULE' => 0,
    'MINILIST_WIDGET_RECORDS' => 0,
    'RECORD' => 0,
    'MODULE_NAME' => 0,
    'WIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_569baa3b0b07f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569baa3b0b07f')) {function content_569baa3b0b07f($_smarty_tpl) {?>
<div style='padding:4%;padding-top: 0;margin-bottom: 2%'>

	
	<?php $_smarty_tpl->tpl_vars["SPANSIZE"] = new Smarty_variable(12, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getHeaderCount()){?>
		<?php $_smarty_tpl->tpl_vars["SPANSIZE"] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getHeaderCount(), null, 0);?>
	<?php }?>

	<div class="row-fluid" style="padding:5px">
		<?php  $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->key => $_smarty_tpl->tpl_vars['FIELD']->value){
$_smarty_tpl->tpl_vars['FIELD']->_loop = true;
?>
		<div class="span<?php echo $_smarty_tpl->tpl_vars['SPANSIZE']->value;?>
"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['BASE_MODULE']->value);?>
</strong></div>
		<?php } ?>
	</div>

	<?php $_smarty_tpl->tpl_vars["MINILIST_WIDGET_RECORDS"] = new Smarty_variable($_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getRecords(), null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MINILIST_WIDGET_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
?>
	<div class="row-fluid" style="padding:5px">
		<?php  $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['FIELD']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['FIELD']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->key => $_smarty_tpl->tpl_vars['FIELD']->value){
$_smarty_tpl->tpl_vars['FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD']->iteration++;
 $_smarty_tpl->tpl_vars['FIELD']->last = $_smarty_tpl->tpl_vars['FIELD']->iteration === $_smarty_tpl->tpl_vars['FIELD']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["minilistWidgetModelRowHeaders"]['last'] = $_smarty_tpl->tpl_vars['FIELD']->last;
?>
			<div class="span<?php echo $_smarty_tpl->tpl_vars['SPANSIZE']->value;?>
 textOverflowEllipsis" title="<?php echo strip_tags($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD']->value->get('name')));?>
">
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['minilistWidgetModelRowHeaders']['last']){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" class="pull-right"><i title="<?php echo vtranslate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="icon-th-list alignMiddle"></i></a>
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD']->value->get('name'));?>
&nbsp;
			</div>
		<?php } ?>
	</div>
	<?php } ?>

	<?php if (count($_smarty_tpl->tpl_vars['MINILIST_WIDGET_RECORDS']->value)>=$_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getRecordLimit()){?>
	<div class="row-fluid" style="padding:5px;padding-bottom:10px;">
		<a class="pull-right" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MINILIST_WIDGET_MODEL']->value->getTargetModule();?>
&view=List&mode=showListViewRecords&viewname=<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('filterid');?>
"><?php echo vtranslate('LBL_MORE');?>
</a>
	</div>
	<?php }?>

</div><?php }} ?>