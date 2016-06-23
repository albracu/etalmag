<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class gestioninformatica_Save_Action extends Vtiger_Save_Action {


	public function process(Vtiger_Request $request) {
		if ($request->get('sgiestado') == 'Abierto') {
			$solucion1 = $request->get('sgisolucion1');
			$respuesta1 = $request->get('sgirespuesta1');
			if ($solucion1 != '' && $respuesta1 == '') {
				$_REQUEST['sgifecha1'] = date('Y-m-d H:i:s');
				$request->set('sgiestado','Pendiente');
				$_REQUEST['template'] = 'GestionInformatica2';
			} else {
				$_REQUEST['template'] = 'GestionInformatica1';
			}
		}
		elseif ($request->get('sgiestado') == 'Pendiente') {
			$solucion2 = $request->get('sgisolucion2');
			$respuesta1 = $request->get('sgirespuesta1');
			$respuesta2 = $request->get('sgirespuesta2');
			
			$sgiservicioexterno = $request->get('sgiservicioexterno');
			if ($solucion2 == '' && $respuesta2 == '') {
				$_REQUEST['sgifechaaceptada1'] = date('Y-m-d H:i:s');
			} elseif ($solucion2 != '' && $respuesta2 == '') {
				$_REQUEST['template'] = 'GestionInformatica2';
				$_REQUEST['sgifecha2'] = date('Y-m-d H:i:s');
			} elseif ($respuesta2 != '' && $sgiservicioexterno == '') {
				$_REQUEST['sgifechaaceptada2'] = date('Y-m-d H:i:s');
			} elseif ($sgiservicioexterno != '') {
				$_REQUEST['sgifechaaceptada3'] = date('Y-m-d H:i:s');
				$request->set('sgiestado','Cerrado');
			}
			
			if ($respuesta1 == 'Si' || $respuesta2 == 'Si') {
				$request->set('sgiestado','Cerrado');
				$_REQUEST['template'] = 'GestionInformatica3';
			}
		} 
		
		if ($request->get('assigned_user_id') == '')
			$request->set('assigned_user_id','1');
		
		$recordModel = $this->saveRecord($request);
		if($request->get('relationOperation')) {
			$parentModuleName = $request->get('sourceModule');
			$parentRecordId = $request->get('sourceRecord');
			$parentRecordModel = Vtiger_Record_Model::getInstanceById($parentRecordId, $parentModuleName);
			//TODO : Url should load the related list instead of detail view of record
			$loadUrl = $parentRecordModel->getDetailViewUrl();
		} else if ($request->get('returnToList')) {
			$loadUrl = $recordModel->getModule()->getListViewUrl();
		} else {
			$loadUrl = $recordModel->getDetailViewUrl();
		}
		header("Location: $loadUrl");
	}
	
	/**
	 * Function to get the record model based on the request parameters
	 * @param Vtiger_Request $request
	 * @return Vtiger_Record_Model or Module specific Record Model instance
	 */
	protected function getRecordModelFromRequest(Vtiger_Request $request) {

		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		if(!empty($recordId)) {
			$recordModel = Vtiger_Record_Model::getInstanceById($recordId, $moduleName);
			$modelData = $recordModel->getData();
			$recordModel->set('id', $recordId);
			$recordModel->set('mode', 'edit');
		} else {
			$recordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
			$modelData = $recordModel->getData();
			$recordModel->set('mode', '');
		}

		$fieldModelList = $moduleModel->getFields();
		$fields = array('sgifecha1','sgifechaaceptada1');
		foreach ($fieldModelList as $fieldName => $fieldModel) {
			if (in_array($fieldName,$fields)) {
				//$dateTime = new DateTimeField($recordModel->get($fieldName));
				//$fieldValue = $dateTime->getDisplayDateTimeValue();
				$fieldValue = $recordModel->get($fieldName);
			}
			else
				$fieldValue = $request->get($fieldName, null);
			$fieldDataType = $fieldModel->getFieldDataType();
			if($fieldDataType == 'time'){
				$fieldValue = Vtiger_Time_UIType::getTimeValueWithSeconds($fieldValue);
			}
			if($fieldValue !== null) {
				if(!is_array($fieldValue)) {
					$fieldValue = trim($fieldValue);
				}
				$recordModel->set($fieldName, $fieldValue);
			}
		}
		return $recordModel;
	}
}
