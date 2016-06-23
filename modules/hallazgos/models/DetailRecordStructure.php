<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/**
 * Vtiger Detail View Record Structure Model
 */
class hallazgos_DetailRecordStructure_Model extends Vtiger_DetailRecordStructure_Model {

	/**
	 * Function to get the values in stuctured format
	 * @return <array> - values in structure array('block'=>array(fieldinfo));
	 */
	public function getStructure() {
		if(!empty($this->structuredValues)) {
			return $this->structuredValues;
		}

		$values = array();
		$recordModel = $this->getRecord();
		$estadohallazgo = $recordModel->get('estadohallazgo');
		Vtiger_Session::set('estadohallazgo',$estadohallazgo);
		$recordId = $recordModel->getId();
		$moduleModel = $this->getModule();
		$blockModelList = $moduleModel->getBlocks();
		foreach($blockModelList as $blockLabel=>$blockModel) {
			$bBlock = false;
			if ($estadohallazgo == '') {
				if ($blockLabel == 'Informe de Incidencia' || $blockLabel == 'Caso presentado')
					$bBlock = true;
			}
			elseif ($estadohallazgo == 'Abierto') {
				if ($blockLabel == 'Informe de Incidencia' || $blockLabel == 'Caso presentado')
					$bBlock = true;
			}
			elseif ($estadohallazgo == 'Primera Respuesta No justificada') {
				if ($blockLabel == 'Informe de Incidencia' || $blockLabel == 'Caso presentado')
					$bBlock = true;
			}
			elseif ($estadohallazgo == 'Caso sin justificar' || $estadohallazgo == 'Cerrado') {
				if ($blockLabel == 'Informe de Incidencia' || $blockLabel == 'Caso presentado' || $blockLabel == 'Cierre del Caso')
					$bBlock = true;
			}
				
			if ($bBlock) {
				$fieldModelList = $blockModel->getFields();
				if (!empty ($fieldModelList)) {
					$values[$blockLabel] = array();
					foreach($fieldModelList as $fieldName=>$fieldModel) {
						$bField = true;
						if ($estadohallazgo == '') {
							if ($blockLabel == 'Caso presentado') {
								$fields = array('descripcion','fechaposible');
								if (!in_array($fieldName,$fields))
									$bField = false;
							}
						} elseif ($estadohallazgo == 'Abierto') {
							if ($blockLabel == 'Caso presentado') {
								$fields = array('descripcion','fechaposible','solucion1','fecha1');
								if (!in_array($fieldName,$fields))
									$bField = false;
							}
						} elseif ($estadohallazgo == 'Primera Respuesta No justificada') {
							if ($blockLabel == 'Caso presentado') {
								$fields = array('descripcion','fechaposible','solucion1','fecha1','razon1','respuesta1','solucion2','fecha2');
								if (!in_array($fieldName,$fields))
									$bField = false;
							}
						} 
						
						if ($bField) {
							if($fieldModel->isEditable()) {
								$fields = array('solucion1','fecha1','solucion2','fecha2');
								
								if (in_array($fieldName,$fields)) {
									if ($recordModel->get($fieldName) == '')
										continue;
								}
								
								if($recordModel->get($fieldName) != '') {
									$fieldModel->set('fieldvalue', $recordModel->get($fieldName));
								}else{
									$defaultValue = $fieldModel->getDefaultFieldValue();
									if(!empty($defaultValue) && !$recordId)
										$fieldModel->set('fieldvalue', $defaultValue);
								}
								
								$values[$blockLabel][$fieldName] = $fieldModel;
							}
						}
					}
				}
			}
		}
		$this->structuredValues = $values;
		return $values;
	}
}