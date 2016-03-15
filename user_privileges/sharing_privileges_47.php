<?php


//This is the sharing access privilege file
$defaultOrgSharingPermission=array('2'=>3,'4'=>3,'6'=>3,'7'=>3,'9'=>3,'13'=>1,'16'=>3,'20'=>3,'21'=>2,'22'=>3,'23'=>3,'26'=>2,'8'=>2,'14'=>2,'31'=>2,'33'=>2,'34'=>3,'40'=>2,'42'=>2,'43'=>0,'45'=>2,'46'=>2,'47'=>1,'18'=>2,'10'=>1,'51'=>2,);

$related_module_share=array(2=>array(6,),13=>array(6,),20=>array(6,2,),22=>array(6,2,20,),23=>array(6,22,),);

$Leads_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Leads_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Leads_Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Leads_Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Accounts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Contacts_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Contacts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Potentials_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Accounts_Potentials_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_HelpDesk_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_HelpDesk_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Quotes_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Accounts_Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_SalesOrder_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Accounts_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Accounts_Invoice_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Accounts_Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_Quotes_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Potentials_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$HelpDesk_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$HelpDesk_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Emails_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Emails_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Campaigns_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Campaigns_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Quotes_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Quotes_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Quotes_SalesOrder_share_read_permission=array('ROLE'=>array('H6'=>array(34,58,),'H7'=>array(32,42,),'H24'=>array(),'H27'=>array(64,),'H28'=>array(65,),'H8'=>array(17,38,40,43,44,50,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(59,),'H15'=>array(25,),'H16'=>array(36,57,),'H17'=>array(60,63,),'H18'=>array(26,),'H19'=>array(7,53,),'H20'=>array(5,6,66,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,12,),'H10'=>array(51,56,),'H11'=>array(55,),),'GROUP'=>array());

$Quotes_SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$PurchaseOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$PurchaseOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$SalesOrder_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$SalesOrder_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$SalesOrder_Invoice_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$SalesOrder_Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Invoice_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Invoice_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Documents_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Documents_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Products_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Products_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Services_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Services_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$ServiceContracts_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$ServiceContracts_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Assets_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Assets_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$ModComments_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$ModComments_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$ProjectMilestone_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$ProjectMilestone_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$ProjectTask_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$ProjectTask_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

$Project_share_read_permission=array('ROLE'=>array(),'GROUP'=>array());

$Project_share_write_permission=array('ROLE'=>array(),'GROUP'=>array());

?>