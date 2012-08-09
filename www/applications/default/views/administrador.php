<table align="center">
  <tr align="center">
    <td>
      <a data-toggle="modal" href="#registroAlumno">
        <img class="imagen" src="<?php print path("www/lib/images/alumno.jpg","www"); ?>" width="300" /><br>
        Registrar Alumno</a> 
    </td>
    <td>
      <a data-toggle="modal" href="#registroProfesor">
        <img class="imagen" src="<?php print path("www/lib/images/profesores.gif","www"); ?>" width="300" /><br>
        Registrar Profesor</a>
    </td>
    <td>
      <a data-toggle="modal" href="#registroMateria">
        <img class="imagen" src="<?php print path("www/lib/images/materias.jpg","www"); ?>" width="300" /><br>
        Registrar Materia</a> 
    </td>
  </tr>
  <tr align="center">
    <td colspan="3">
      <a data-toggle="modal" href="#asignacion">
     <img class="imagen" src="<?php print path("www/lib/images/asignacion.jpg","www"); ?>" width="300" /><br>
     Asignar Materia a Profesor</a>
 </td>
  </tr>
</table>
 




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