<?php /* Smarty version Smarty-3.1.7, created on 2015-10-21 22:39:29
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/VGSHideAds/IndexVGSHideAds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12601022375628142118d612-15851665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72553c46af035722819d80c13fc1964a00167cf5' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/VGSHideAds/IndexVGSHideAds.tpl',
      1 => 1438555832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12601022375628142118d612-15851665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ENABLED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_562814211c03a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562814211c03a')) {function content_562814211c03a($_smarty_tpl) {?>

<script type="text/javascript" src="layouts/vlayout/modules/VGSHideAds/resources/VGSHideAds.js"></script>

<div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;">
    <h3 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('vgs_hide_ads',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
   
    <div>

        <p><?php echo vtranslate('vgs_hide_ads_explain',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p>
        <table class="table table-bordered table-condensed themeTableColor" style="margin-top: 1em;">
            <thead>
                <tr class="blockHeader">
                    <th colspan="4" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('vgs_hide_ads',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('hide_banners',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                    <td colspan="2" style="border-left: none;">
                        <input type="checkbox" id="vgshideads_enable" name="vgshideads_enable" <?php if ($_smarty_tpl->tpl_vars['ENABLED']->value=='1'){?> checked <?php }?> />
                    </td>
                </tr>

            </tbody>
        </table>
        <br><br>
        <div class="alert alert-error notices" id="error_notice" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('fail',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
        <div class="alert alert-success notices" id="success_message" style="display:none;float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            <?php echo vtranslate('works',$_smarty_tpl->tpl_vars['MODULE']->value);?>

        </div>
        
        <button class="btn pull-right" style="margin-bottom: 0.5em;" id="vgs_save_hideads_settigns"><?php echo vtranslate('save',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>

    </div>
    
</div>
<div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;"><p><?php echo vtranslate('vgs_hide_ads_powerby',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></div><?php }} ?>