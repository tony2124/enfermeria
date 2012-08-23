<script type="text/javascript">
	function numeroControl(id)
	{
		$('#dato').val(id)
	}
</script>
<h2>Profesores</h2>
<p>
	<a data-toggle="modal" href="#registroProfesor">REGISTRAR UN NUEVO PROFESOR</a>
</p>
<p>A continuación se muestran los profesores inscritos, por favor realice las operaciones con mucho cuidado ya que pueden ser irreversibles.</p>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<th>ID </th>
		<th>Nombre del profesor</th>

		<th>Operación</th>
	</thead>
	<tbody>
		<?php if($profesores != null) foreach ($profesores as $prof) { ?>
		<tr>
			<td><?php print $prof['id_profesor'] ?></td>
			<td><?php print $prof['ap_profesor'].' '.$prof['am_profesor'].' '.$prof['nombre_profesor'] ?></td>
			
			<td>
				<a onclick="numeroControl('<?php print $prof['id_profesor'] ?>')" title="Eliminar" data-toggle="modal" href="#asignacion" class="btn btn-danger btn-mini">
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
  <form id="confirmacion" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/eliminarProfesor' ?>">
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



<!-- REGISTRO DE PROFESORES -->
<div class="modal hide fade" id="registroProfesor">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>PROFESORES</h3>
  </div>
  <div class="modal-body">
    <p>En el siguiente formulario se encuentran los datos que se requieren para el registro de un nuevo profesor, por favor llénelos todos correctamente.</p>
    <hr>
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraProfesor' ?>">
      <div class="control-group">
        <label class="control-label" >Usuario</label>
        <div class="controls">
    <!-- -->  <input type="text" name="usuario" class="input-xlarge" required>
        </div><br>
        <label class="control-label" >Contraseña</label>
        <div class="controls">
    <!-- -->  <input type="password" name="pass" class="input-xlarge" required>
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
       <hr>      
      </div>
  </div>
  <div class="modal-footer">
      <a class="btn" data-dismiss="modal">Cerrar</a>
      <input type="submit" value="Guardar cambios" name="guardarCambios" class="btn btn-primary" id="guardarCambios">
    </form>
  </div>
</div>
