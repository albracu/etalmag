<?php /* Smarty version Smarty-3.1.7, created on 2015-08-08 12:54:49
         compiled from "/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/PDFMaker/Install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172394447655c5fc19218a12-02784878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b075187e8b974ac110378b66f419167808e4cee' => 
    array (
      0 => '/var/www/html/etalmag/includes/runtime/../../layouts/vlayout/modules/PDFMaker/Install.tpl',
      1 => 1439038474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172394447655c5fc19218a12-02784878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_STEP' => 0,
    'TOTAL_STEPS' => 0,
    'MB_STRING_EXISTS' => 0,
    'STEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c5fc19286d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c5fc19286d8')) {function content_55c5fc19286d8($_smarty_tpl) {?>
<div class="contentsDiv marginLeftZero" >
    <div class="padding1per">
        <div class="editContainer" style="padding-left: 3%;padding-right: 3%"><h3><?php echo vtranslate('LBL_MODULE_NAME','PDFMaker');?>
 <?php echo vtranslate('LBL_INSTALL','PDFMaker');?>
</h3>    
            <hr>
            <div id="breadcrumb">             
                <ul class="crumbs marginLeftZero">
                    <li class="first step active" style="z-index:9;"  id="steplabel1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_DOWNLOAD','PDFMaker');?>
</span></a></li>    

                    <li class="last step <?php if ($_smarty_tpl->tpl_vars['CURRENT_STEP']->value==$_smarty_tpl->tpl_vars['TOTAL_STEPS']->value){?>active<?php }?>" style="z-index:7;"  id="steplabel<?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
"><a><span class="stepNum"><?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
</span><span class="stepText"><?php echo vtranslate('LBL_FINISH','PDFMaker');?>
</span></a></li>
                </ul>
            </div>
            <div class="clearfix">
            </div>
            <form name="install" id="editLicense"  method="POST" action="index.php" class="form-horizontal">
                <input type="hidden" name="module" value="PDFMaker"/>
                <input type="hidden" name="view" value="List"/>

                <div id="step1" class="padding1per" style="border:1px solid #ccc;" >     
                    <input type="hidden" name="installtype" value="download_src"/>                                      
                    <div class="controls">
                        <div>
                            <strong><?php echo vtranslate('LBL_DOWNLOAD_SRC','PDFMaker');?>
</strong>
                        </div>
                        <br>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="controls">
                        <div>
                            <?php echo vtranslate('LBL_DOWNLOAD_SRC_DESC','PDFMaker');?>

                            <?php if ($_smarty_tpl->tpl_vars['MB_STRING_EXISTS']->value=='false'){?>
                                <br><?php echo vtranslate('LBL_MB_STRING_ERROR','PDFMaker');?>

                            <?php }?>
                        </div>
                        <br>
                        <div class="clearfix">
                        </div>
                    </div>          
                    <div class="controls">
                        <button type="button" id="download_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_DOWNLOAD','PDFMaker');?>
</strong></button>&nbsp;&nbsp;  
                    </div>
                </div>
                <div id="step<?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
" class="padding1per" style="border:1px solid #ccc; <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="2"){?>display:none;<?php }?>" >
                    <input type="hidden" name="installtype" value="redirect_recalculate" />
                    <div class="controls">
                        <div><?php echo vtranslate('LBL_INSTALL_SUCCESS','PDFMaker');?>
</div>
                        <div class="clearfix">
                        </div>
                    </div> 
                    <br>
                    <div class="controls">
                        <button type="button" id="next_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_FINISH','PDFMaker');?>
</strong></button>&nbsp;&nbsp;
                    </div>
                </div>
            </form> 
        </div> 
    </div>
</div>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function() {
    PDFMaker_FreeLicense_Js.registerInstallEvents();
});
</script>			<?php }} ?>