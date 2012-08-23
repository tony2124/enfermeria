<script type="text/javascript">
	function numeroControl(id)
	{
		$('#dato').val(id)
	}
</script>
<h2>Materias</h2>
<p>
	<a data-toggle="modal" href="#registroMateria">REGISTRAR UNA NUEVA MATERIA</a>
</p>
<p>A continuación se muestran las materias registradas, por favor realice las operaciones con mucho cuidado ya que pueden ser irreversibles.</p>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<th>ID </th>
		<th>Nombre de la materia</th>

		<th>Operación</th>
	</thead>
	<tbody>
		<?php if($materias != null) foreach ($materias as $mat) { ?>
		<tr>
			<td><?php print $mat['id_materia'] ?></td>
			<td><?php print $mat['nombre_materia'] ?></td>
			<td><?php print $mat['semestre_materia'] ?></td>
			<td>
				<a onclick="numeroControl('<?php print $mat['id_materia'] ?>')" title="Eliminar" data-toggle="modal" href="#asignacion" class="btn btn-danger btn-mini">
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
<div class="modal hide fade" id="registroMateria">
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>MATERIAS</h3>
  </div>
  <div class="modal-body">
    <p>En el siguiente formulario se encuentran los datos que se requieren para el registro de una nueva materia, por favor llénelos todos correctamente.</p>
    <hr>
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraMateria' ?>">
      <div class="control-group">
        <label class="control-label">Nombre de la materia</label>
        <div class="controls">
    <!-- -->  <input type="text" name="nombre" class="input-xlarge" required>
        </div><br>
        <label class="control-label">Semestre en que se imparte</label>
        <div class="controls">
    <!-- -->  <input type="text" name="semestre" class="input-xlarge" required>
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