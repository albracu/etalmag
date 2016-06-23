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

class actas extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_actas';
	var $table_index= 'actasid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_actascf', 'actasid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_actas', 'vtiger_actascf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_actas'   => 'actasid',
	    'vtiger_actascf' => 'actasid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'Acta No.'=>Array('actas','acta_no'),
'Fecha Inicio'=>Array('actas','fechahora'),
'Lugar'=>Array('actas','lugar'),
'Asistentes'=>Array('actas','asistentes'),
'Comentarios'=>Array('actas','comentarios'),

		//'Payslip Name'=> Array('payslip', 'payslipname'),
		//'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'Acta No.'=>'acta_no',
'Fecha Inicio'=>'fechahora',
'Lugar'=>'lugar',
'Asistentes'=>'asistentes',
'Comentarios'=>'comentarios',

		//'Payslip Name'=> 'payslipname',
		//'Assigned To' => 'assigned_user_id'
	);

	// Make the field link to detail view from list view (Fieldname)
	//var $list_link_field = 'payslipname';
	var $list_link_field = 'acta_no';

	// For Popup listview and UI type support
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		//'Payslip Name'=> Array('payslip', 'payslipname')
		'Acta No.'=>Array('actas','acta_no'),

	);
	var $search_fields_name = Array (
		/* Format: Field Label => fieldname */
		//'Payslip Name'=> 'payslipname'
		'Acta No.'=>'acta_no',

	);

	// For Popup window record selection
	//var $popup_fields = Array('payslipname');
	var $popup_fields = Array('acta_no');

	// For Alphabetical search
	var $def_basicsearch_col = 'acta_no';

	// Column value to use on detail view record text display


	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	//var $mandatory_fields = Array('createdtime', 'modifiedtime', 'payslipname');
	var $mandatory_fields = Array('acta_no');

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

		$this->registerActividades($this->id);
		
	}
	
	function registerActividades($id) {
		global $adb;

		$de = $_REQUEST['de'];
		$responsable = $_REQUEST['responsable'];
		$actividad = $_REQUEST['punto'];
		$estadoactividad = $_REQUEST['estadoactividad'];
		$fecha = $_REQUEST['fecha'];
		$i = 0;
		
		$puntoid = $_REQUEST['puntoid'];
		$activityid = $_REQUEST['activityid'];
		$sql = "DELETE FROM vtiger_actasactividades WHERE actasid = ? AND id NOT IN (".generateQuestionMarks($puntoid).")";
		$result = $adb->pquery($sql,array($id,$puntoid));
		
		foreach($de as $dee) {
			$fecha[$i] = getValidDBInsertDateValue($fecha[$i]);
			if (($dee != '' || $responsable[$i] != '' || $actividad[$i] != '') && $puntoid[$i] == '') {
				$new_focus = new Activity();
				$new_focus->column_fields['date_start'] = $fecha[$i];
				$new_focus->column_fields['due_date'] = $fecha[$i];
				$new_focus->column_fields['subject'] = $actividad[$i];
				$new_focus->column_fields['assigned_user_id'] = $this->getUserIdByName($responsable[$i]);
				$new_focus->column_fields['sendnotification'] = '1';
				$new_focus->column_fields['activitytype'] = 'Task';
				$new_focus->column_fields['taskstatus'] = 'Planned';
				$new_focus->column_fields['visibility'] = 'Public';
				$new_focus->column_fields['parent_id'] = $id;
				$new_focus->save('Calendar');
				
				$sql = "INSERT INTO vtiger_actasactividades VALUES(NULL,?,?,?,?,?,?,?)";
				$adb->pquery($sql,array($id,$dee,$responsable[$i],$actividad[$i],$estadoactividad[$i],$fecha[$i],$new_focus->id));
			} else {
				$sql = "UPDATE vtiger_actasactividades SET de = ?, responsable = ?, actividad = ?, estadoactividad = ?, fecha = ? WHERE actasid = ? and id = ?";
				$adb->pquery($sql,array($dee,$responsable[$i],$actividad[$i],$estadoactividad[$i],$fecha[$i],$id,$puntoid[$i]));
				
				if ($activityid[$i] != '') {
					$new_focus = new Activity();
					$new_focus->id = $activityid[$i];
					$new_focus->retrieve_entity_info($activityid[$i]);
					$new_focus->mode = 'edit';
					
					$new_focus->column_fields['date_start'] = $fecha[$i];
					$new_focus->column_fields['due_date'] = $fecha[$i];
					$new_focus->column_fields['assigned_user_id'] = $this->getUserIdByName($responsable[$i]);
					$new_focus->column_fields['sendnotification'] = '1';
					$new_focus->save('Calendar');
				}
			}
			$i++;
		}
	}
	
	function getPuntosActa($id) {
		global $adb;
		
		$sql = "SELECT vtiger_actasactividades.* FROM vtiger_actasactividades  WHERE actasid = ?";
		
		$result = $adb->pquery($sql,array($id));
		
		$lst = array();
		while ($row = $adb->fetchByAssoc($result)) {
			$row['fecha'] = DateTimeField::convertToUserFormat($row['fecha']);
			$row['punto'] = $row['actividad'];
			$lst[] = $row;
		}
		return $lst;
	}
	
	function getUserIdByName($username) {
		global $adb;
		$sql = "SELECT id FROM vtiger_users WHERE concat(first_name,' ',last_name) = ?";
		$res = $adb->pquery($sql,array($username));
		
		return $adb->query_result($res,0,'id');
	}
}