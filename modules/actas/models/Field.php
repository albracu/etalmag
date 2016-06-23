<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
include_once 'vtlib/Vtiger/Field.php';

/**
 * Vtiger Field Model Class
 */
class actas_Field_Model extends Vtiger_Field_Model {

	/**
	 * Function to get all the available picklist values for the current field
	 * @return <Array> List of picklist values if the field is of type picklist or multipicklist, null otherwise.
	 */
	public function getPicklistValues() {
        $fieldDataType = $this->getFieldDataType();
		if($this->getName() == 'asistentes') {
			$currentUser = Users_Record_Model::getCurrentUserModel();
			$userList = $currentUser->getAccessibleUsers();
			foreach($userList as $key=>$value) {
				$fieldPickListValues[$key] = vtranslate($value,$this->getModuleName());
			}
			return $fieldPickListValues;
		} else {

			if($fieldDataType == 'picklist' || $fieldDataType == 'multipicklist') {
				if($this->isRoleBased()) {
					$userModel = Users_Record_Model::getCurrentUserModel();
					$picklistValues = Vtiger_Util_Helper::getRoleBasedPicklistValues($this->getName(), $userModel->get('roleid'));
				}else{
					$picklistValues = Vtiger_Util_Helper::getPickListValues($this->getName());
				}
				foreach($picklistValues as $value) {
					$fieldPickListValues[$value] = vtranslate($value,$this->getModuleName());
				}
				return $fieldPickListValues;
			}
		}
		return null;
    }

	
}