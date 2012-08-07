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
<?php if(isset($materia) && $materia != null) if(isset($alumnos) && $alumnos != null){ ?>
<form action="<?php print get('webURL')._sh.'default/guardarCalificacion' ?>" method="post">
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
        <?php  foreach ($alumnos as $al) { ?>
        <tr>
    		<td><?php print $al['id_alumno'] ?></td>
    		<td><?php print $al['ap_alumno'].' '.$al['am_alumno'].' '.$al['nombre_alumno'] ?></td>
    		<td><?php print semestre($al['fecha_inscripcion']) ?></td>
    		<td>
          <input name="calificacion[]" type="text" value="<?php print $al['calificacion'] ?>" class="input-small">
          <input type="hidden" name="folio[]" value="<?php print $al['folio'] ?>"> 
        </td>
      </tr>
        <?php } ?>
        <tr>
          <td colspan="4"><input type="submit" class="btn btn-success pull-right" value="Guardar calificación">
          <input type="hidden" name="id_materia" value="<?php print $materia ?>">
          </td>
        </tr>
    	</tbody>
  </table>
</form>
<?php } else {  ?>
<div class="alert alert-error">
  <h2>Error</h2>
<p>No se ha encontrado ningún alumno inscrito en esta materia, por favor póngase en contacto con el administrador del sitio para verificar si es un error.</p>
</div>
<?php } ?>