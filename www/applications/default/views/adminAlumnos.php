<script type="text/javascript">
	function numeroControl(id)
	{
		$('#dato').val(id)
	}
</script>
<h2>Alumnos</h2>
<p>
	<a data-toggle="modal" href="#registroAlumno">REGISTRAR UN NUEVO ALUMNO</a>
</p>
<p>A continuación se muestran los alumnos inscritos, por favor realice las operaciones con mucho cuidado ya que pueden ser irreversibles.</p>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<th>N. control</th>
		<th>Nombre del alumno</th>
		<th>Semestre</th>
		<th>Operación</th>
	</thead>
	<tbody>
		<?php if($alumnos != null) foreach ($alumnos as $al) { ?>
		<tr>
			<td><?php print $al['id_alumno'] ?></td>
			<td><?php print $al['ap_alumno'].' '.$al['am_alumno'].' '.$al['nombre_alumno'] ?></td>
			<td><?php print semestre($al['fecha_inscripcion']) ?></td>
			<td>
				<a title="Eliminar" data-toggle="modal" href="#asignacion" class="btn btn-danger btn-mini" onclick="numeroControl('<?php print $al['id_alumno'] ?>')">
					<i class="icon-trash icon-white"></i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<!-- CONFIRMACION -->
<div class="modal hide fade" id="asignacion">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>PREGUNTA</h3>
  </div>
  <form id="confirmacion" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/eliminarAlumno' ?>">
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


<!-- REGISTRO DE ALUMNOS -->
<div class="modal hide fade" id="registroAlumno">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>ALUMNOS</h3>
  </div>
  <div class="modal-body">
    <p>En el siguiente formulario se encuentran los datos que se requieren para el registro de un nuevo alumno, por favor llénelos todos correctamente.</p>
    <hr>
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraAlumno' ?>">
      <div class="control-group">
        <label class="control-label" >Matrícula</label>
        <div class="controls">
    <!-- -->  <input type="text" name="matricula" class="input-xlarge" required>
        </div><br>
        <label class="control-label">Nombre(s)</label>
        <div class="controls">
    <!-- -->  <input type="text" name="nombre" class="input-xlarge" required>
        </div><br>
        <label class="control-label">Apellido paterno</label>
        <div class="controls">
    <!-- -->  <input type="text" required name="ap" class="input-xlarge">
        </div><br>
        <label class="control-label">Apellido materno</label>
        <div class="controls">
    <!-- -->  <input type="text" name="am" class="input-xlarge" required>
        </div><br>
        <label class="control-label">Fecha de inscripción</label>
        <div class="controls">
    <!-- -->  <input type="text" name="fecha" class="input-xlarge selectorFecha" required>
        </div><hr>      
      </div>
  </div>
  <div class="modal-footer">
      <a class="btn" data-dismiss="modal">Cerrar</a>
      <input type="submit" value="Guardar cambios" name="guardarCambios" class="btn btn-primary" id="guardarCambios">
    </form>
  </div>
</div>