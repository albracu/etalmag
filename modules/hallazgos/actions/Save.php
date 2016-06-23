<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class hallazgos_Save_Action extends Vtiger_Save_Action {


	public function process(Vtiger_Request $request) {
		if ($request->get('estadohallazgo') == 'Primera Respuesta No justificada') {
			$resAceptada2 = $request->get('respuesta2');
			
			if (!empty($resAceptada2)) {
				if ($resAceptada2 == 'No') {
					$request->set('estadohallazgo','Caso sin justificar');
					$_REQUEST['template'] = 'HallazgosTicket3';
				}
				elseif ($resAceptada2 == 'Si') {
					$request->set('estadohallazgo','Cerrado');
					$_REQUEST['template'] = 'HallazgosTicket4';
				}
			} else {
				$solucion2 = $request->get('solucion2');
				if ($solucion2 != '') {
					$_REQUEST['template'] = 'HallazgosTicket2';
					$_REQUEST['fecha2'] = date('Y-m-d H:i:s');
				}
			}
		}
		if ($request->get('estadohallazgo') == 'Abierto') {
			$resAceptada = $request->get('respuesta1');
			if (!empty($resAceptada)) {
				if ($resAceptada == 'No') {
					$request->set('estadohallazgo','Primera Respuesta No justificada');
					$_REQUEST['template'] = 'HallazgosTicket3';
				}
				elseif ($resAceptada == 'Si') {
					$request->set('estadohallazgo','Cerrado');
					$_REQUEST['template'] = 'HallazgosTicket4';
				}
			} else {
				$solucion1 = $request->get('solucion1');
				if ($solucion1 != '') {
					$_REQUEST['template'] = 'HallazgosTicket2';
					$_REQUEST['fecha1'] = date('Y-m-d H:i:s');
				} else {
					//Obtengo los destinatarios
					$_REQUEST['template'] = 'HallazgosTicket1';
				}
			}
		}
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
	 * Function to save record
	 * @param <Vtiger_Request> $request - values of the record
	 * @return <RecordModel> - record Model of saved record
	 */
	public function saveRecord($request) {
		$recordModel = $this->getRecordModelFromRequest($request);
		$recordModel->save();
		if($request->get('relationOperation')) {
			$parentModuleName = $request->get('sourceModule');
			$parentModuleModel = Vtiger_Module_Model::getInstance($parentModuleName);
			$parentRecordId = $request->get('sourceRecord');
			$relatedModule = $recordModel->getModule();
			$relatedRecordId = $recordModel->getId();

			$relationModel = Vtiger_Relation_Model::getInstance($parentModuleModel, $relatedModule);
			$relationModel->addRelation($parentRecordId, $relatedRecordId);
		}
        if($request->get('imgDeleted')) {
            $imageIds = $request->get('imageid');
            foreach($imageIds as $imageId) {
                $status = $recordModel->deleteImage($imageId);
            }
        }
		return $recordModel;
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
		foreach ($fieldModelList as $fieldName => $fieldModel) {
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
        
        public function validateRequest(Vtiger_Request $request) { 
            return $request->validateWriteAccess(); 
        } 
}
