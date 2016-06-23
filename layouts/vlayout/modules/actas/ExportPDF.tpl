<div style="margin 10 10 10 10">
<br/>
<table id="header" class="table table-bordered blockContainer showInlineTable equalSplit" style="width:100%">
	<tr>
		<td>Fecha:</td>
		<td>{$FECHA}</td>
		<td>Hora:</td>
		<td>{$HORA}</td>
	</tr>
	
	<tr>
		<td>Asistentes:</td>
		<td colspan="3">{$ASISTENTES}</td>
	</tr>
	
	<tr>
		<td>Comentarios:</td>
		<td colspan="3">{$COMENTARIOS}</td>
	</tr>
	
</table>
<hr>PUNTOS TRATADOS:</hr>
{if $PUNTOS|@count gt 0}
<table id="body" class="table table-bordered blockContainer showInlineTable equalSplit" style="width:100%">
	<tr class="listViewHeaders">
		<th nowrap="" class="listViewEntryValue small">
			De
		</th>
		<th nowrap="" class="listViewEntryValue large">
			Asignado a
		</th>
		<th nowrap="" class="listViewEntryValue medium">
			Actividad
		</th>
		<th nowrap="" class="listViewEntryValue medium">
			Estado de la actividad
		</th>
		<th nowrap="" class="listViewEntryValue medium">
			Fecha de realización
		</th>
	</tr>
	{foreach item=mov from=$PUNTOS}
	<tr class="listViewEntries">
		<td nowrap="" class="listViewEntryValue small">{$mov.de}</td>
		<td nowrap="" class="listViewEntryValue large">{$mov.responsable}</td>
		<td nowrap="" class="listViewEntryValue medium">{$mov.actividad}</td>
		<td nowrap="" class="listViewEntryValue medium">{$mov.estadoactividad}</td>
		<td nowrap="" class="listViewEntryValue medium"  style="text-align:center">{$mov.fecha}</td>
	</tr>
	{/foreach}
</table>
{/if}
</div>