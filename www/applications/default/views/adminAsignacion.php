<script type="text/javascript">
	function numeroControl(id)
	{
		$('#dato').val(id)
	}
</script>
<h2>Materias</h2>
<p>
	<a data-toggle="modal" href="#asignacion">REGISTRAR UNA NUEVA RELACIÓN MATERIA - PROFESOR</a>
</p>
<p>A continuación se muestran las relaciones de los profesores con las materias del periodo actual.</p>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<th>Nombre del profesor</th>
		<th>Nombre de la materia</th>
    <th>Periodo</th>
    <th>Operación</th>
	</thead>
	<tbody>
		<?php if($relaciones != null) foreach ($relaciones as $rel) { ?>
		<tr>
			<td><?php print $rel['ap_profesor'].' '.$rel['am_profesor'].' '.$rel['nombre_profesor'] ?></td>
			<td><?php print $rel['nombre_materia'] ?></td>
			<td><?php print $rel['semestre_materia'] ?></td>
			<td>
				<a onclick="numeroControl('<?php print $rel['id_materia'] ?>')" title="Eliminar" data-toggle="modal" href="#conf" class="btn btn-danger btn-mini">
					<i class="icon-trash icon-white"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<!-- CONFIRMACION -->
<div class="modal hide fade" id="conf">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>PREGUNTA</h3>
  </div>
  <form id="confirmacion" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/eliminarMateria' ?>">
  <div class="modal-body">
    <p>¿Está seguro que desea eliminar este registro?.</p>
    <input type="hidden" name="dato" id="dato" value="">
    <hr>
  </div>
  <div class="modal-footer">
      <a class="btn" data-dismiss="modal">Cerrar</a>
      <input type="submit" value="Eliminar" class="btn btn-danger">
    
  </div>
  </form>
</div>

<!-- REGISTRO DE MATERIAS -->
<div class="modal hide fade" id="asignacion">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>ASIGNACIÓN MATERIA - PROFESOR</h3>
  </div>
  <div class="modal-body">
    <p>En el siguiente formulario se encuentran los datos que se requieren para la asignación de una materia a un profesor, por favor llénelos todos correctamente.</p>
    <hr>
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/asignacion' ?>">
      <div class="control-group">
        <label class="control-label">Profesor</label>
        <div class="controls">
    <!-- -->  <select name="profesor">
          <?php
            foreach ($profesores as $profesor) { ?>
            <option value="<?php  print $profesor['id_profesor'] ?>"><?php print $profesor['nombre_profesor'] ?></option>
          <?php }
          ?>
        </select>
        </div><br>
        <label class="control-label">Materia</label>
        <div class="controls">
     <!-- -->   <select name="materia">
          <?php
            foreach ($materias as $materia) { ?>
            <option value="<?php  print $materia['id_materia'] ?>"><?php print $materia['nombre_materia'] ?></option>
          <?php }
          ?>
        </select>
        </div><br>
        <label class="control-label">Periodo</label>
        <div class="controls">
    <!-- -->  <input type="text" disabled class="input-xlarge" value="<?php print $periodo ?>">
         <input type="hidden" name="periodo" value="<?php print $periodo ?>">
        </div><br>
       <hr>      
      </div>
  </div>
  <div class="modal-footer">
      <a class="btn" data-dismiss="modal">Cerrar</a>
      <input type="submit" value="Guardar cambios" name="guardarCambios" class="btn btn-primary" id="guardarCambios">
    </form>
  </div>
</div>