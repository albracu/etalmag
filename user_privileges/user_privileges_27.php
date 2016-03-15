<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H2';

$current_user_parent_role_seq='H1::H2';

$current_user_profiles=array(1,);

$profileGlobalPermission=array('1'=>0,'2'=>0,);

$profileTabsPermission=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'31'=>0,'32'=>0,'33'=>0,'34'=>0,'35'=>0,'36'=>0,'37'=>0,'38'=>0,'39'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>0,'49'=>0,'50'=>0,'51'=>0,'28'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),4=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>1,10=>0,),6=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>1,10=>0,),7=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>1,9=>1,10=>0,),8=>array(0=>0,1=>0,2=>0,3=>0,4=>0,6=>0,),9=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,),13=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>1,10=>0,),14=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),15=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),16=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),18=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),19=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),20=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,),25=>array(0=>1,1=>1,2=>1,4=>1,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),31=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),33=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),34=>array(0=>0,1=>0,2=>0,3=>0,4=>0,11=>1,12=>1,),40=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),42=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),43=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),45=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),46=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),47=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,10=>0,),);

$current_user_groups=array(3,);

$subordinate_roles=array('H24','H25','H26','H3','H4','H6','H7','H8','H12','H13','H14','H15','H16','H17','H18','H19','H20','H21','H22','H23','H9','H10','H11',);

$parent_roles=array('H1',);

$subordinate_roles_users=array('H24'=>array(),'H25'=>array(37,),'H26'=>array(41,42,44,),'H3'=>array(7,8,9,10,13,16,17,18,19,22,23,31,35,39,40,45,46,47,48,49,50,55,56,57,),'H4'=>array(15,20,21,),'H6'=>array(34,),'H7'=>array(32,),'H8'=>array(38,43,54,),'H12'=>array(24,),'H13'=>array(52,),'H14'=>array(),'H15'=>array(12,25,),'H16'=>array(36,),'H17'=>array(),'H18'=>array(26,),'H19'=>array(53,),'H20'=>array(5,6,),'H21'=>array(33,),'H22'=>array(),'H23'=>array(),'H9'=>array(11,),'H10'=>array(51,),'H11'=>array(),);

$user_info=array('user_name'=>'camilosaenz','is_admin'=>'off','user_password'=>'$1$ca000000$fMWdnKcaSIvqREoXhyVhG/','confirm_password'=>'$1$ca000000$fMWdnKcaSIvqREoXhyVhG/','first_name'=>'Admin','last_name'=>'CRM','roleid'=>'H2','email1'=>'info@platcom.net','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'00:00','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'dd-mm-yyyy','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'q8d0hkw163Kza5uq','time_zone'=>'America/Bogota','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>'.','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>'0','theme'=>'softed','language'=>'es_es','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Monday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'Selecciona una Opci&oacute;n','defaultactivitytype'=>'Selecciona una Opci&oacute;n','hidecompletedevents'=>'0','is_owner'=>'0','currency_name'=>'Colombia, Pesos','currency_code'=>'COP','currency_symbol'=>'&#36;','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'27');
?>