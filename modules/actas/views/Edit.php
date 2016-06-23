<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Class actas_Edit_View extends Vtiger_Edit_View {

	public function process(Vtiger_Request $request) {
		global $current_user;
		$viewer = $this->getViewer ($request);
		$moduleName = $request->getModule();
		$record = $request->get('record');
        if(!empty($record)) {
            $recordModel = $this->record?$this->record:Vtiger_Record_Model::getInstanceById($record, $moduleName);
            $viewer->assign('RECORD_ID', $record);
            $viewer->assign('MODE', 'edit');
			$recordModel->set('mode','edit');
        } else {
            $recordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
            $viewer->assign('MODE', '');
        }
        if(!$this->record){
            $this->record = $recordModel;
        }
		
		$viewer->assign("LISTUSERS",getAllUserName());
		$viewer->assign('PUNTOS', $recordModel->getPuntosActa());
		$viewer->assign('USERDATEFORMAT', $current_user->column_fields['date_format']);
		
		parent::process($request);
	}
}