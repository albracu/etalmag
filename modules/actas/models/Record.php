<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class actas_Record_Model extends Vtiger_Record_Model {

	/**
	 * Function returns the details of Accounts Hierarchy
	 * @return <Array>
	 */

	public function getPuntosActa() {
		$focus = CRMEntity::getInstance($this->getModuleName());
		return $focus->getPuntosActa($this->getId());
	}
	
}
