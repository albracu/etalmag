<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

require_once('libraries/mpdf/mpdf.php');

class actas_ExportPDF_Action extends Vtiger_Action_Controller {
	
	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		if(!Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $recordId)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED', $moduleName));
		}
	}
	
	public function process(Vtiger_Request $request) {
		$viewer = new Vtiger_Viewer;
		global $current_user;
		$current_user->time_zone = 'UTC';
		
		$moduleName = $request->getModule();
		$record = $request->get('record');
		$sourceRecord = $request->get('sourceRecord');
		$sourceModule = $request->get('sourceModule');
		
		if (!empty($record)) {

			$recordModel = Vtiger_Record_Model::getInstanceById($record);
			$recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
			$structuredValues = $recordStrucure->getStructure();
			
			$fecha =  $recordModel->get('fechahora');
			$hora = new DateTimeField($recordModel->get('time_start'));
			$horafin = new DateTimeField($recordModel->get('time_end'));
			
			$viewer->assign('FECHA',  DateTimeField::convertToUserFormat($fecha));
			$viewer->assign('HORA', $hora->getDisplayTime().'-'.$horafin->getDisplayTime());
			$viewer->assign('ASISTENTES', actas_Multipicklist_UIType::getDisplayValuePDF($recordModel->get('asistentes')));
			$viewer->assign('COMENTARIOS',$recordModel->get('comentarios'));
			$viewer->assign('PUNTOS',$recordModel->getPuntosActa());
			
			$buffer = $viewer->view('ExportPDF.tpl', 'actas',true);
			
			$header = '<table style="width:100%">
						<tr><td style="text-align:right">
							<img src="test/logo/logoetalmag.jpg" />
							</td>
						</tr>
					
						<tr><td>
							<h3>Acta Nro: '.$recordModel->get('acta_no').'</h3>
							
							</td>
						</tr>
					</table>';
		} 
		$footer = '<div style="text-align:right;width:100%;border-top:1px solid #000000;">Impreso el: '.date('d-m-Y').'</div>';
		
		
		$mpdf=new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9);
		$mpdf->useSubstitutions = true; // optional - just as an example
		$mpdf->setAutoTopMargin = 'stretch'; 
		$mpdf->setAutoBottomMargin = 'stretch'; 
		$mpdf->SetHTMLHeader ($header);  // optional - just as an example
		$mpdf->SetHTMLFooter ($footer);
		$mpdf->setBasePath($url);
		$mpdf->WriteHTML($buffer);
		$mpdf->Output();
		exit;
	}
}
