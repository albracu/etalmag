<div id="divPuntos">
<table id="puntos" class="table table-bordered blockContainer showInlineTable equalSplit">
	<thead>
	<tr>
		<th colspan="10" class="blockHeader">Actividades</th>
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
	{foreach item=punto from=$PUNTOS}
	<tr class="listViewEntries">
		<td nowrap="" class="listViewEntryValue medium">{$punto.de}</td>
		<td nowrap="" class="listViewEntryValue medium">{$punto.responsable}</td>
		<td nowrap="" class="listViewEntryValue">{$punto.punto}</td>
		<td nowrap="" class="listViewEntryValue medium">{$punto.estadoactividad}</td>
		<td nowrap="" class="listViewEntryValue medium"><a href="index.php?module=Calendar&view=Detail&record={$punto.activityid}">{$punto.fecha}</a></td>
	</tr>
	{/foreach}
</table>
</div>
</br>