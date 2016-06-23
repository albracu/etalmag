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

class hallazgos extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_hallazgos';
	var $table_index= 'hallazgosid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_hallazgoscf', 'hallazgosid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_hallazgos', 'vtiger_hallazgoscf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_hallazgos'   => 'hallazgosid',
	    'vtiger_hallazgoscf' => 'hallazgosid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'No. Hallazgo'=>Array('hallazgos','hallazgosno'),
'Empresa'=>Array('hallazgos','empresa'),
'Creado por'=>Array('hallazgos','creado'),
'Ubicación'=>Array('hallazgos','ubicacion'),
'Detectado por'=>Array('hallazgos','detectado'),
'Caso presentado'=>Array('hallazgos','casopresentado'),
'Detectado Otro ¿Cuál.?'=>Array('hallazgos','detectadootro'),
'Prioridad'=>Array('hallazgos','prioridad'),
'Copia a'=>Array('hallazgos','copiaa'),
'Proceso al que pertenece'=>Array('hallazgos','proceso'),
'Descripción del caso'=>Array('hallazgos','descripcion'),
'Plazo de respuesta'=>Array('hallazgos','fechaposible'),
'Solución al caso [1]'=>Array('hallazgos','solucion1'),
'Fecha de respuesta [1]'=>Array('hallazgos','fecha1'),
'Respuesta aceptada [1]'=>Array('hallazgos','respuesta1'),
'Porqué'=>Array('hallazgos','razon1'),
'Solución al caso [2['=>Array('hallazgos','solucion2'),
'Fecha de respuesta [2]'=>Array('hallazgos','fecha2'),
'Respuesta aceptada [2]'=>Array('hallazgos','respuesta2'),
'Porqué'=>Array('hallazgos','razon2'),
'Responsable'=>Array('hallazgos','responsable'),
'Estado'=>Array('hallazgos','estadohallazgo'),
'Calificacion'=>Array('hallazgos','calificacion'),

		//'Payslip Name'=> Array('payslip', 'payslipname'),
		//'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'No. Hallazgo'=>'hallazgosno',
'Empresa'=>'empresa',
'Creado por'=>'creado',
'Ubicación'=>'ubicacion',
'Detectado por'=>'detectado',
'Caso presentado'=>'casopresentado',
'Detectado Otro ¿Cuál.?'=>'detectadootro',
'Prioridad'=>'prioridad',
'Copia a'=>'copiaa',
'Proceso al que pertenece'=>'proceso',
'Descripción del caso'=>'descripcion',
'Plazo de respuesta'=>'fechaposible',
'Solución al caso [1]'=>'solucion1',
'Fecha de respuesta [1]'=>'fecha1',
'Respuesta aceptada [1]'=>'respuesta1',
'Porqué'=>'razon1',
'Solución al caso [2['=>'solucion2',
'Fecha de respuesta [2]'=>'fecha2',
'Respuesta aceptada [2]'=>'respuesta2',
'Porqué'=>'razon2',
'Responsable'=>'responsable',
'Estado'=>'estadohallazgo',
'Calificacion'=>'calificacion',

		//'Payslip Name'=> 'payslipname',
		//'Assigned To' => 'assigned_user_id'
	);

	// Make the field link to detail view from list view (Fieldname)
	//var $list_link_field = 'payslipname';
	var $list_link_field = 'hallazgosno';

	// For Popup listview and UI type support
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		//'Payslip Name'=> Array('payslip', 'payslipname')
		'No. Hallazgo'=>Array('hallazgos','hallazgosno'),

	);
	var $search_fields_name = Array (
		/* Format: Field Label => fieldname */
		//'Payslip Name'=> 'payslipname'
		'No. Hallazgo'=>'hallazgosno',

	);

	// For Popup window record selection
	//var $popup_fields = Array('payslipname');
	var $popup_fields = Array('hallazgosno');

	// For Alphabetical search
	var $def_basicsearch_col = 'hallazgosno';

	// Column value to use on detail view record text display


	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	//var $mandatory_fields = Array('createdtime', 'modifiedtime', 'payslipname');
	var $mandatory_fields = Array('hallazgosno');

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
		$fecha1 = $_REQUEST['fecha1'];
		
		if (!empty($fecha1)){
			$sql = "UPDATE vtiger_hallazgos SET fecha1 = ? WHERE hallazgosid = ?";
			$adb->pquery($sql,array($fecha1,$this->id));
		}
		
		$fecha2 = $_REQUEST['fecha2'];
		
		if (!empty($fecha2)){
			$sql = "UPDATE vtiger_hallazgos SET fecha2 = ? WHERE hallazgosid = ?";
			$adb->pquery($sql,array($fecha2,$this->id));
		}
		
		if (isset($_REQUEST['template']) && !empty($_REQUEST['template'])) {
			$entities[] = array('id'=>$this->id,'setype'=>'hallazgos');
			$emailData = getEmailContents($_REQUEST['template'],$entities);
			
			$subject = html_entity_decode($emailData['subject']);
			$contents = $emailData['body'];
			
			$recipents = array();
			if ($_REQUEST['template'] == 'HallazgosTicket1' || $_REQUEST['template'] == 'HallazgosTicket3' ||  $_REQUEST['template'] == 'HallazgosTicket4') {
				$objUser = new Users;
				$objUser->retrieve_entity_info($this->column_fields['assigned_user_id'],'Users');
				
				$recipents[] = $objUser->column_fields['email1'];
				$recipents[] = $this->column_fields['copiaa'];
			} elseif ($_REQUEST['template'] == 'HallazgosTicket2') {
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
		if ($this->column_fields['estadohallazgo'] == 'Cerrado' || $this->column_fields['estadohallazgo'] == 'Caso sin justificar') {
			$sql = "SELECT fecha2, fecha1, createdtime FROM vtiger_hallazgos INNER JOIN vtiger_crmentity ON (hallazgosid = crmid) 
						WHERE hallazgosid = ".$this->id;
			$res = $adb->query($sql);
			
			if ($res) {
				$row = $adb->fetchByAssoc($res);
				$fecha2 = $row['fecha2'];
				$fecha1 = $row['fecha1'];
				$createdtime = $row['createdtime'];
				
				if ($fecha2 != '')
					$segundos = strtotime($fecha2) - strtotime($createdtime);
				else
					$segundos = strtotime($fecha1) - strtotime($createdtime);
				
				$difdays = round($segundos/60/60/24);
				
				if ($difdays <= 0)
					$peso = 5;
				elseif ($difdays > 5)
					$peso = 0;
				elseif ($difdays > 4)
					$peso = 1;
				elseif ($difdays > 3)
					$peso = 2;
				elseif ($difdays > 2)
					$peso = 3;
				elseif ($difdays > 1)
					$peso = 4;
			}
		}
		
				
		if ($this->column_fields['estadohallazgo'] == 'Cerrado') {
			$peso2 = 5;
		} elseif ($this->column_fields['estadohallazgo'] == 'Abierto') {
			$peso2 = 3;				
		} elseif ($this->column_fields['estadohallazgo'] == 'Primera Respuesta No justificada') {
			$peso2 = 1;
		} else {
			$peso2 = 0;
		}
		
		$calificacion = $peso*0.3+$peso2*0.7;
		
		$sql = "UPDATE vtiger_hallazgos SET calificacion = ? WHERE hallazgosid = ?";
		$adb->pquery($sql,array($calificacion,$this->id));
	}
	
	function isFieldDataIntern($fieldname) {
		$fields = array('fecha1','fecha2');
		if (in_array($fieldname,$fields))
			return true;
		
		return false;
	}
}