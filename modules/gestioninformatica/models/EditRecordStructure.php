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
 * Vtiger Record Structure Model
 */
class gestioninformatica_EditRecordStructure_Model extends Vtiger_EditRecordStructure_Model {

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
		$sgiestado = $recordModel->get('sgiestado');
		Vtiger_Session::set('sgiestado',$sgiestado);
		$recordId = $recordModel->getId();
		$moduleModel = $this->getModule();
		$blockModelList = $moduleModel->getBlocks();
		foreach($blockModelList as $blockLabel=>$blockModel) {
			$bBlock = false;
			if ($sgiestado == '') {
				if ($blockLabel == 'Datos Generales')
					$bBlock = true;
			}
			elseif ($sgiestado == 'Abierto') {
				if ($blockLabel == 'Datos Generales' || html_entity_decode($blockLabel) == 'Informe del Dpto. de Gestión de Informática')
					$bBlock = true;
			}
			elseif ($sgiestado == 'Pendiente') {
				if ($blockLabel == 'Datos Generales' || html_entity_decode($blockLabel) == 'Informe del Dpto. de Gestión de Informática')
					$bBlock = true;
			}
				
			if ($bBlock) {
				$fieldModelList = $blockModel->getFields();
				if (!empty ($fieldModelList)) {
					$values[$blockLabel] = array();
					foreach($fieldModelList as $fieldName=>$fieldModel) {
						$bField = true;
						if ($sgiestado == 'Abierto') {
							if (html_entity_decode($blockLabel) == 'Informe del Dpto. de Gestión de Informática') {
								$fields = array('sgidiagnostico','sgisolucion1');
								if (!in_array($fieldName,$fields))
									$bField = false;
							}
						} elseif ($sgiestado == 'Pendiente') {
							if (html_entity_decode($blockLabel) == 'Informe del Dpto. de Gestión de Informática') {
								$fields = array('sgidiagnostico','sgisolucion1');
								$sgiestadoex =  Vtiger_Session::get('sgiestadoex');
								if ($sgiestadoex == 'EsperandoRespuesta1')
									$fields = array('sgidiagnostico','sgisolucion1','sgirespuesta1');
								elseif ($sgiestadoex == 'EsperandoSolucion2')
									$fields = array('sgidiagnostico','sgisolucion1','sgirespuesta1','sgisolucion2');
								elseif ($sgiestadoex == 'EsperandoRespuesta2')
									$fields = array('sgidiagnostico','sgisolucion1','sgirespuesta1','sgisolucion2','sgirespuesta2');
								elseif ($sgiestadoex == 'EsperandoSolucion3')
									$fields = array('sgidiagnostico','sgisolucion1','sgirespuesta1','sgisolucion2','sgirespuesta2','sgiservicioexterno','sgientidadexterna','sgiinforme');
								if (!in_array($fieldName,$fields))
									$bField = false;
							}
						}
						
						if ($bField) {
							if($fieldModel->isEditable()) {
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