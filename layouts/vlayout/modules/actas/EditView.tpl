{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{include file="EditViewBlocks.tpl"|@vtemplate_path:$MODULE}
<div id="divInvoiceUnPaid">
</div>
<br/>	
<table id="paymentMethod" class="table table-bordered blockContainer showInlineTable equalSplit">
	<thead>
	<tr>
		<th colspan="5" class="blockHeader">
		<div style="float:left">
		Actividades
		</div>
		<div style="float:right">
		<button type="button" class="btn btn-success" onclick="addPoint();"><strong>Agregar</strong></button>
		</div>
		</th>
	</tr>
	</thead>
	<tr class="listViewHeaders">
		<th nowrap="" style="width:15%">
			De
		</th>
		<th nowrap="" style="width:15%">
			Asignado a:
		</th>
		<th nowrap=""  style="width:50%">
			Actividad
		</th>
		<th nowrap=""  style="width:10%">
			Estado de la actividad
		</th>
		<th nowrap="" style="width:10%">
			Fecha de realización
		</th>
	</tr>
	<tr class="listViewEntries" id="entry0" style="display:none">
		<td nowrap="" class="listViewEntryValue medium">
		<input type="hidden"  value="" class="input-medium" name="puntoid[]">
		<input type="hidden"  value="{$punto.activityid}" name="activityid[]">
		<input type="text"  value="" class="input-medium" name="de[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<select name="responsable[]" class="selectCustom" style="width:200px" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
			<option value="" >Seleccione</option>
			{foreach key=userid item=username from=$LISTUSERS}
				{if $userid neq '1'}
					<option value="{$username}">{$username}</option>
				{/if}
			{/foreach}
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:50%">
		<textarea  name="punto[]" style="width:100%" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"></textarea>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="font-size:90%">
		<select name="estadoactividad[]" style="width:120px;" class="selectCustom">
			<option>Por realizar</option>
			<option>Realizada</option>
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:48%">
		<input type="text"  value="" class="dateField" data-date-format="{$USERDATEFORMAT}" style="width:80px" name="fecha[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><span class="add-on"><i class="icon-calendar"></i></span>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:2%">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	{if $PUNTOS|@count gt 0}
	{foreach item=punto from=$PUNTOS name="headerIterator"}
	{assign var="_COUNTER" value=$smarty.foreach.headerIterator.iteration}
	<tr class="listViewEntries" id="entry{$_COUNTER}">
		<td nowrap="" class="listViewEntryValue medium">
		<input type="hidden"  value="{$punto.id}" name="puntoid[]">
		<input type="hidden"  value="{$punto.activityid}" name="activityid[]">
		<input type="text"  value="{$punto.de}" class="input-medium" name="de[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<select name="responsable[]" class="selectCustom" style="width:200px" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
			<option value="" >Seleccione</option>
			{foreach key=userid item=username from=$LISTUSERS}
				{if $userid neq '1'}
					<option value="{$username}" {if {$punto.responsable} eq $username}selected{/if}>{$username}</option>
				{/if}
			{/foreach}
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:50%">
		<textarea  name="punto[]" style="width:100%" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">{$punto.punto}</textarea>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="font-size:90%">
		<select name="estadoactividad[]" style="width:120px;" class="selectCustom">
			<option{if $punto.estadoactividad eq 'Por realizar'} selected{/if}>Por realizar</option>
			<option{if $punto.estadoactividad eq 'Realizada'} selected{/if}>Realizada</option>
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:48%">
		<input type="text"  value="{$punto.fecha}" class="dateField" data-date-format="{$USERDATEFORMAT}" style="width:80px" name="fecha[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><span class="add-on"><i class="icon-calendar"></i></span>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:2%">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	{/foreach}
	{else}
	<tr class="listViewEntries" id="entry1">
		<td nowrap="" class="listViewEntryValue medium">
		<input type="text"  value="" class="input-medium" name="de[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
		</td>
		<td nowrap="" class="listViewEntryValue medium">
		<select name="responsable[]" class="selectCustom" style="width:200px" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
			<option value="" >Seleccione</option>
			{foreach key=userid item=username from=$LISTUSERS}
				{if $userid neq '1'}
					<option value="{$username}">{$username}</option>
				{/if}
			{/foreach}
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:50%">
		<textarea  name="punto[]" style="width:100%" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"></textarea>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="font-size:90%">
		<select name="estadoactividad[]" style="width:120px;" class="selectCustom">
			<option>Por realizar</option>
			<option>Realizada</option>
		</select>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:48%">
		<input type="text"  value="" class="dateField" data-date-format="{$USERDATEFORMAT}" style="width:80px" name="fecha[]" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><span class="add-on"><i class="icon-calendar"></i></span>
		</td>
		<td nowrap="" class="listViewEntryValue medium" style="width:2%">
		<a class="deleteRecordButton">
		<i class="icon-trash alignMiddle" title="Eliminar" onclick="deleteRow(this);"></i>
		</a>
		</td>
	</tr>
	{/if}
</table>
{include file="EditViewActions.tpl"|@vtemplate_path:$MODULE}