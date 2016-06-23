<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

include_once 'modules/Vtiger/CRMEntity.php';
include_once("modules/Emails/mail.php");

class gestioninformatica extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_gestioninformatica';
	var $table_index= 'gestioninformaticaid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_gestioninformaticacf', 'gestioninformaticaid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_gestioninformatica', 'vtiger_gestioninformaticacf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_gestioninformatica'   => 'gestioninformaticaid',
	    'vtiger_gestioninformaticacf' => 'gestioninformaticaid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'No. Solicitud'=>Array('gestioninformatica','solicitud_no'),
'Empresa'=>Array('gestioninformatica','sgiempresa'),
'Ubicación'=>Array('gestioninformatica','sgiubicacion'),
'Cargo'=>Array('gestioninformatica','sgicargo'),
'Nombre del solicitante'=>Array('gestioninformatica','sginombre'),
'Motivo'=>Array('gestioninformatica','sgimotivo'),
'Razón del motivo'=>Array('gestioninformatica','sgirazon'),
'Otro ¿Cuál?'=>Array('gestioninformatica','sgirazonotro'),
'Descripción'=>Array('gestioninformatica','sgidescripcion'),
'Proceso'=>Array('gestioninformatica','sgiproceso'),
'Estado'=>Array('gestioninformatica','sgiestado'),
'Diagnóstico'=>Array('gestioninformatica','sgidiagnostico'),
'Solución [1]'=>Array('gestioninformatica','sgisolucion1'),
'Fecha de solución [1]'=>Array('gestioninformatica','sgifecha1'),
'Solución aceptada [1]'=>Array('gestioninformatica','sgirespuesta1'),
'Fecha de solución aceptada [1]'=>Array('gestioninformatica','sgifechaaceptada1'),
'Solución [2]'=>Array('gestioninformatica','sgisolucion2'),
'Fecha de solución [2]'=>Array('gestioninformatica','sgifecha2'),
'Solución aceptada [2]'=>Array('gestioninformatica','sgirespuesta2'),
'Fecha de solución aceptada [2]'=>Array('gestioninformatica','sgifechaaceptada2'),
'Requiere Servicio Externo'=>Array('gestioninformatica','sgiservicioexterno'),
'Entidad que prestó le servicio'=>Array('gestioninformatica','sgientidadexterna'),
'Informe del servicio prestado'=>Array('gestioninformatica','sgiinforme'),
'Fecha de solución aceptada'=>Array('gestioninformatica','sgifechaaceptada3'),
'Satisfacción del servicio'=>Array('gestioninformatica','sgisatisfaccion'),
'Calificación'=>Array('gestioninformatica','sgicalificacion'),

		//'Payslip Name'=> Array('payslip', 'payslipname'),
		//'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'No. Solicitud'=>'solicitud_no',
'Empresa'=>'sgiempresa',
'Ubicación'=>'sgiubicacion',
'Cargo'=>'sgicargo',
'Nombre del solicitante'=>'sginombre',
'Motivo'=>'sgimotivo',
'Razón del motivo'=>'sgirazon',
'Otro ¿Cuál?'=>'sgirazonotro',
'Descripción'=>'sgidescripcion',
'Proceso'=>'sgiproceso',
'Estado'=>'sgiestado',
'Diagnóstico'=>'sgidiagnostico',
'Solución [1]'=>'sgisolucion1',
'Fecha de solución [1]'=>'sgifecha1',
'Solución aceptada [1]'=>'sgirespuesta1',
'Fecha de solución aceptada [1]'=>'sgifechaaceptada1',
'Solución [2]'=>'sgisolucion2',
'Fecha de solución [2]'=>'sgifecha2',
'Solución aceptada [2]'=>'sgirespuesta2',
'Fecha de solución aceptada [2]'=>'sgifechaaceptada2',
'Requiere Servicio Externo'=>'sgiservicioexterno',
'Entidad que prestó le servicio'=>'sgientidadexterna',
'Informe del servicio prestado'=>'sgiinforme',
'Fecha de solución aceptada'=>'sgifechaaceptada3',
'Satisfacción del servicio'=>'sgisatisfaccion',
'Calificación'=>'sgicalificacion',

		//'Payslip Name'=> 'payslipname',
		//'Assigned To' => 'assigned_user_id'
	);

	// Make the field link to detail view from list view (Fieldname)
	//var $list_link_field = 'payslipname';
	var $list_link_field = 'solicitud_no';

	// For Popup listview and UI type support
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		//'Payslip Name'=> Array('payslip', 'payslipname')
		'No. Solicitud'=>Array('gestioninformatica','solicitud_no'),

	);
	var $search_fields_name = Array (
		/* Format: Field Label => fieldname */
		//'Payslip Name'=> 'payslipname'
		'No. Solicitud'=>'solicitud_no',

	);

	// For Popup window record selection
	//var $popup_fields = Array('payslipname');
	var $popup_fields = Array('solicitud_no');

	// For Alphabetical search
	var $def_basicsearch_col = 'solicitud_no';

	// Column value to use on detail view record text display


	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	//var $mandatory_fields = Array('createdtime', 'modifiedtime', 'payslipname');
	var $mandatory_fields = Array('solicitud_no');

	var $default_order_by = '<entityfieldname>';
	var $default_sort_order='ASC';

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler($moduleName, $eventType) {
		global $adb;
 		if($eventType == 'module.postinstall') {
			// TODO Handle actions after this module is installed.
		} else if($eventType == 'module.disabled') {
			// TODO Handle actions before this module is being uninstalled.
		} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
		}
 	}
	
	function save_module() {
		global $adb;
		$sgifecha1 = $_REQUEST['sgifecha1'];
		
		if (!empty($sgifecha1)){
			$sql = "UPDATE vtiger_gestioninformatica SET sgifecha1 = ? WHERE gestioninformaticaid = ?";
			$adb->pquery($sql,array($sgifecha1,$this->id));
		}
		
		$sgifechaaceptada1 = $_REQUEST['sgifechaaceptada1'];
		
		if (!empty($sgifechaaceptada1)){
			$sql = "UPDATE vtiger_gestioninformatica SET sgifechaaceptada1 = ? WHERE gestioninformaticaid = ?";
			$adb->pquery($sql,array($sgifechaaceptada1,$this->id));
		}
		
		$sgifecha2 = $_REQUEST['sgifecha2'];
		
		if (!empty($sgifecha2)){
			$sql = "UPDATE vtiger_gestioninformatica SET sgifecha2 = ? WHERE gestioninformaticaid = ?";
			$adb->pquery($sql,array($sgifecha2,$this->id));
		}
		
		$sgifechaaceptada2 = $_REQUEST['sgifechaaceptada2'];
		
		if (!empty($sgifechaaceptada2)){
			$sql = "UPDATE vtiger_gestioninformatica SET sgifechaaceptada2 = ? WHERE gestioninformaticaid = ?";
			$adb->pquery($sql,array($sgifechaaceptada2,$this->id));
		}	

		$sgifechaaceptada3 = $_REQUEST['sgifechaaceptada3'];
		
		if (!empty($sgifechaaceptada3)){
			$sql = "UPDATE vtiger_gestioninformatica SET sgifechaaceptada3 = ? WHERE gestioninformaticaid = ?";
			$adb->pquery($sql,array($sgifechaaceptada3,$this->id));
		}	

		if (isset($_REQUEST['template']) && !empty($_REQUEST['template'])) {
			$entities[] = array('id'=>$this->id,'setype'=>'gestioninformatica');
			$emailData = getEmailContents($_REQUEST['template'],$entities);
			
			$subject = html_entity_decode($emailData['subject']);
			$contents = $emailData['body'];
			
			$recipents = array();
			if ($_REQUEST['template'] == 'GestionInformatica1' || $_REQUEST['template'] == 'GestionInformatica3') {
				//$recipents[] = 'gestioninformatica@flm.com.co';
				$recipents[] = 'leonardo@odin.mx';
			} elseif ($_REQUEST['template'] == 'GestionInformatica2') {
				$sql = "SELECT email1 FROM vtiger_users INNER JOIN vtiger_crmentity ON (smcreatorid = id) WHERE crmid = ?";
				$res = $adb->pquery($sql,array($this->id));
				
				$row = $adb->fetchByAssoc($res);
				
				$recipents[] = $row['email1']; 
			} 

			foreach($recipents as $mail) {
				$mail_status = send_mail('Users',$mail,'CRM - Etalmag',"crm@etalmag.com",$subject,$contents);
			}
		}
		
		$peso = 0;
		if ($this->column_fields['sgiestado'] == 'Cerrado' || $this->column_fields['sgiestado'] == 'Pendiente') {
			$sql = "SELECT sgifecha2, sgifecha1, createdtime FROM vtiger_gestioninformatica INNER JOIN vtiger_crmentity ON (gestioninformaticaid = crmid) 
						WHERE gestioninformaticaid = ".$this->id;
			$res = $adb->query($sql);
			
			if ($res) {
				$row = $adb->fetchByAssoc($res);
				$fecha2 = $row['sgifecha2'];
				$fecha1 = $row['sgifecha1'];
				$createdtime = $row['createdtime'];
				
				if ($fecha2 != '')
					$segundos = strtotime($fecha2) - strtotime($createdtime);
				else
					$segundos = strtotime($fecha1) - strtotime($createdtime);
				
				$difdays = round($segundos/60/60/24);
				
				if ($difdays <= 1)
					$peso = 5;
				elseif ($difdays > 4)
					$peso = 0;
				elseif ($difdays > 3)
					$peso = 1;
				elseif ($difdays > 2)
					$peso = 3;
			}
		}
		
				
		if ($this->column_fields['sgisatisfaccion'] == 'Buena') {
			$peso2 = 5;
		} elseif ($this->column_fields['sgisatisfaccion'] == 'Regular') {
			$peso2 = 3;				
		} elseif ($this->column_fields['sgisatisfaccion'] == 'Mala') {
			$peso2 = 1;
		} else {
			$peso2 = 5;
		}
		
		$calificacion = $peso*0.5+$peso2*0.5;
		
		$sql = "UPDATE vtiger_gestioninformatica SET sgicalificacion = ? WHERE gestioninformaticaid = ?";
		$adb->pquery($sql,array($calificacion,$this->id));
	}
	
	function isFieldDataIntern($fieldname) {
		$fields = array('sgifecha1','sgifechaaceptada1','sgifecha2','sgifechaaceptada2');
		if (in_array($fieldname,$fields))
			return true;
		
		return false;
	}
}