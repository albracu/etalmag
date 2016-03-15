<?php /* Smarty version Smarty-3.1.7, created on 2015-08-20 06:33:19
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/FindDuplicateHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12382481955d574af05c4b2-03653256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136a0f94956e73535e205c05fc3c0ec1cb43f2cc' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/FindDuplicateHeader.tpl',
      1 => 1380782177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12382481955d574af05c4b2-03653256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_LINKS' => 0,
    'MODULE' => 0,
    'LISTVIEW_BASICACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d574af0ee33',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d574af0ee33')) {function content_55d574af0ee33($_smarty_tpl) {?>
<div class='listViewPageDiv'>
	<div class="row-fluid  listViewActionsDiv">
		<span class="btn-toolbar span4">
			<span class="btn-group listViewMassActions">
				<?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?>
					<span class="btn-group">
						<button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel());?>
" class="btn btn-danger" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:')===0){?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }?>><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
					</span>
				<?php } ?>
			</span>
		</span>
		<span class='span4'><div class="textAlignCenter"><h3 style='margin-top:2px'><?php echo vtranslate('LBL_DUPLICATE');?>
  <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div></span>
		<span class="span4 btn-toolbar">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</span>
	</div>
	<div id="listViewContents" class="listViewContentDiv">
<?php }} ?>