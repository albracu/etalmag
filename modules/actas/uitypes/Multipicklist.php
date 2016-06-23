<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class actas_Multipicklist_UIType extends Vtiger_Multipicklist_UIType {


	/**
	 * Function to get the Display Value, for the current field type with given DB Insert Value
	 * @param <Object> $value
	 * @return <Object>
	 */
	public function getDisplayValue($value) {
		$values = explode(' |##| ', $value);
		$i = 0;
		foreach($values as $value) {
			global $adb;
			$sql = "SELECT concat(first_name,' ',last_name) as user FROM vtiger_users WHERE id  = ?";
			$res = $adb->pquery($sql,array($value));
			$row = $adb->fetchByAssoc($res);
			$values[$i] = $row['user'];
			$i++;
		}
		 if(is_array($values)){
            $value = implode(' |##| ', $values);
        }
		return str_ireplace(' |##| ', ', ', $value);
	}
    
    
	public static function getDisplayValuePDF($value) {
		$values = explode(' |##| ', $value);
		$i = 0;
		foreach($values as $value) {
			global $adb;
			$sql = "SELECT concat(first_name,' ',last_name) as user FROM vtiger_users WHERE id  = ?";
			$res = $adb->pquery($sql,array($value));
			$row = $adb->fetchByAssoc($res);
			$values[$i] = $row['user'];
			$i++;
		}
		 if(is_array($values)){
            $value = implode(' |##| ', $values);
        }
		return str_ireplace(' |##| ', ', ', $value);
	}
    
}