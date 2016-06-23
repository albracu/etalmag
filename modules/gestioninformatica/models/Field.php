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
 * User Field Model Class
 */
class gestioninformatica_Field_Model extends Vtiger_Field_Model {

    /**
	 * Function to check whether the current field is read-only
	 * @return <Boolean> - true/false
	 */
	public function isReadOnly() {
		$bReadOnly = false;
		$sgiestado = Vtiger_Session::get('sgiestado');
		$fieldName = $this->get('name');
		if ($sgiestado == '') {
			if ($this->get('name') == 'sgiestado') {
				$this->set('defaultvalue','Abierto');
				return true;
			}
		} elseif ($sgiestado == 'Abierto') {
			$fields = array('sgidiagnostico','sgisolucion1');
			
			if (!in_array($fieldName,$fields))
				$bReadOnly = true;
		} elseif ($sgiestado == 'Pendiente') {
			$fields = array('sgirespuesta1');
			$sgiestadoex =  Vtiger_Session::get('sgiestadoex');
			if ($sgiestadoex == 'EsperandoSolucion2')
				$fields = array('sgisolucion2');
			if ($sgiestadoex == 'EsperandoRespuesta2')
				$fields = array('sgirespuesta2');
			if ($sgiestadoex == 'EsperandoSolucion3')
				$fields = array('sgiservicioexterno','sgientidadexterna','sgiinforme');
			if (!in_array($fieldName,$fields))
				$bReadOnly = true;
		} elseif  ($sgiestado == 'Cerrado') {
			$fields = array('sgisatisfaccion');
		}
		if (!$bReadOnly) {
			$bReadOnly = !$this->getProfileReadWritePermission();
		}
		
		return $bReadOnly;
	}


	/**
	 * Function to check if the field is shown in detail view
	 * @return <Boolean> - true/false
	 */
	public function isViewEnabled() {
		if($this->getDisplayType() == '4' || in_array($this->get('presence'), array(1,3))) {
			return false;
		}
		return true;
	}


    /**
	 * Function to get the Webservice Field data type
	 * @return <String> Data type of the field
	 */
	public function getFieldDataType() {
		return parent::getFieldDataType();
    }

    /**
	 * Function to check whether field is ajax editable'
	 * @return <Boolean>
	 */
	public function isAjaxEditable() {
		
		if ($this->get('name') == 'sgisatisfaccion' && $this->fieldvalue == '') {
			return true;
		}
			
		return false;
	}

	/**
	 * Function to get all the available picklist values for the current field
	 * @return <Array> List of picklist values if the field is of type picklist or multipicklist, null otherwise.
	 */
	public function getPicklistValues() {
		if($this->get('uitype') == 32) {
			return Vtiger_Language_Handler::getAllLanguages();
		}
        else if ($this->get('uitype') == '115') {
            $db = PearDatabase::getInstance();
            
            $query = 'SELECT '.$this->getFieldName().' FROM vtiger_'.$this->getFieldName();
            $result = $db->pquery($query, array());
            $num_rows = $db->num_rows($result);
            $fieldPickListValues = array();
            for($i=0; $i<$num_rows; $i++) {
                $picklistValue = $db->query_result($result,$i,$this->getFieldName());
                $fieldPickListValues[$picklistValue] = vtranslate($picklistValue,$this->getModuleName());
            }
            return $fieldPickListValues;
        }
		return parent::getPicklistValues();
	}

    /**
     * Function to returns all skins(themes)
     * @return <Array>
     */
    public function getAllSkins(){
        return Vtiger_Theme::getAllSkins();
    }

    /**
	 * Function to retieve display value for a value
	 * @param <String> $value - value which need to be converted to display value
	 * @return <String> - converted display value
	 */
    public function getDisplayValue($value, $recordId = false) {
        
		 if($this->get('uitype') == 32){
			return Vtiger_Language_Handler::getLanguageLabel($value);
		 }
          
         $fieldName = $this->getFieldName();
         if(($fieldName == 'currency_decimal_separator' || $fieldName == 'currency_grouping_separator') && ($value == '&nbsp;')) {
             return vtranslate('LBL_Space', 'Users');
         }
        return parent::getDisplayValue($value, $recordId);
    }

	/**
	 * Function to check whether this field editable or not
	 * return <boolen> true/false
	 */
	public function isEditable() {
		if(!$this->isEditEnabled()
				|| !$this->isViewable() ||
				((int)$this->get('displaytype')) != 1 ||
				$this->get('uitype') ==  4) {

			return false;
		}
		//if ($this->isReadOnly() == true && $this->get('uitype') !=  1)
		//	$this->set('uitype',1);
			
		return true;
	}
	
	/**
     * Function which will check if empty piclist option should be given
     */
    public function isEmptyPicklistOptionAllowed() {
		if($this->getFieldName() == 'reminder_interval') {
			return true;
		}
        return true;
    }
	
	/**
	 * Function to get the Webservice Field Object for the current Field Object
	 * @return WebserviceField instance
	 */
	public function getWebserviceFieldObject() {
		if($this->webserviceField == false) {
			$db = PearDatabase::getInstance();

			$row = array();
			
			$row['uitype'] = $this->get('uitype');
			if ($this->isReadOnly() && $this->get('name') != 'assigned_user_id') {
				$row['uitype'] = '1';
			}
			
			$row['block'] = $this->get('block');
			$row['tablename'] = $this->get('table');
			$row['columnname'] = $this->get('column');
			$row['fieldname'] = $this->get('name');
			$row['fieldlabel'] = $this->get('label');
			$row['displaytype'] = $this->get('displaytype');
			$row['masseditable'] = $this->get('masseditable');
			$row['typeofdata'] = $this->get('typeofdata');
			$row['presence'] = $this->get('presence');
			$row['tabid'] = $this->getModuleId();
			$row['fieldid'] = $this->get('id');
			$row['readonly'] = !$this->getProfileReadWritePermission();
			$row['defaultvalue'] = $this->get('defaultvalue');

			$this->webserviceField = WebserviceField::fromArray($db, $row);
		}
		return $this->webserviceField;
	}
}
