<?php /* Smarty version Smarty-3.1.7, created on 2015-08-19 17:32:35
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118806605355d4bdb3960569-66815574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3105f5df211493dffbcfe2c072c997b61ca29e7' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Emails/SendEmailResult.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118806605355d4bdb3960569-66815574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUCCESS' => 0,
    'RELATED_LOAD' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55d4bdb39ab3d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4bdb39ab3d')) {function content_55d4bdb39ab3d($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
<script language="Javascript" type="text/javascript">
	window.close();
	<?php if ($_smarty_tpl->tpl_vars['RELATED_LOAD']->value==true){?>
        window.opener.Vtiger_Detail_Js.reloadRelatedList();
	<?php }else{ ?>
		window.opener.Vtiger_List_Js.clearList();
    <?php }?>
</script>
<?php }else{ ?>
<table border='0' cellpadding='5' cellspacing='0' width='100%' height='600px'>
	<tr>
		<td align='center'>
			<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 75%; position: relative; z-index: 100000020;'>

				<table border='0' cellpadding='5' cellspacing='0' width='98%'>
					<tr>
						<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
						<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
							<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
					</tr>
					<tr>
						<td class='small' align='right' nowrap='nowrap'>
							<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<?php }?><?php }} ?>