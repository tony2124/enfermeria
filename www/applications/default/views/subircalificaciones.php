<h3>Interfaz para subir las calificaciones de los alumnos.</h3>
<p>&nbsp;</p>
<p>Por favor elija la materia en la que desea editar la calificación. Tome en cuenta que se encuentra en el periodo <?php print $periodo ?></p>
<hr>MATERIA A EVALUAR<br>
<select onchange="location.href='<?php print get("webURL")._sh.'default/subircalificaciones/calif/' ?>'+$(this).val()">
	<option value="0">---Seleccione una----</option>
<?php foreach ($materias as $mat) { ?>
	<option value="<?php print $mat['id_materia'] ?>"  <?php if($materia != null) if($materia == $mat['id_materia']) print 'selected="selected"' ?>> <?php print $mat['nombre_materia'] ?> </option>
<?php } ?>
</select>
<hr>
<table width="600" class = "table table-striped table-bordered table-condensed">
	<thead>
     	<tr>
     		<th>N. CONTROL</th>
     		<th>NOMBRE DEL ALUMNO</th>
        	<th>SEMESTRE</th>
		    <th>CALIFICACIÓN</th>
    	</tr>
  	</thead>
  	<tbody>
  		<td>08020196</td>
  		<td></td>
  		<td></td>
  		<td><input type="text" value="0" class="input-small"></td>
  	</tbody>
</table>