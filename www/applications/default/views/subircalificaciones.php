<h3>Interfaz para subir las calificaciones de los alumnos.</h3>
<p>&nbsp;</p>
<p>Por favor elija la materia en la que desea editar la calificación. Tome en cuenta que se encuentra en el periodo <?php print $periodo ?></p>
<hr>MATERIA A EVALUAR<br>
<select onchange="location.href='<?php print get("webURL")._sh.'default/subircalificaciones/calif/' ?>'+$(this).val()">
	<option value="0">---Seleccione una----</option>
<?php foreach ($materias as $mat) { ?>
	<option value="<?php print $mat['id_materia'] ?>"  <?php if(isset($materia) && $materia != null) if($materia == $mat['id_materia']) print 'selected="selected"' ?>> <?php print $mat['nombre_materia'] ?> </option>
<?php } ?>
</select>
<hr>
<?php if(isset($materia) && $materia != null) { ?>
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
      <?php if(isset($alumnos) && $alumnos != null) foreach ($alumnos as $al) { ?>
      <tr>
  		<td><?php print $al['id_alumno'] ?></td>
  		<td><?php print $al['ap_alumno'].' '.$al['am_alumno'].' '.$al['nombre_alumno'] ?></td>
  		<td><?php print semestre($al['fecha_inscripcion']) ?></td>
  		<td><input type="text" value="0" class="input-small"></td>
    </tr>
      <?php } ?>
      <tr>
        <td colspan="4"><input type="submit" class="btn btn-success pull-right" value="Guardar calificación"></td>
      </tr>
  	</tbody>
</table>
<?php } ?>