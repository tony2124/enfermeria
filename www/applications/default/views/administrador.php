<a data-toggle="modal" href="#registroAlumno">Registrar Alumno</a> | 
<a data-toggle="modal" href="#registroProfesor">Registrar Profesor</a> |
<a data-toggle="modal" href="#registroMateria">Registrar Materia</a> |
<a data-toggle="modal" href="#asignacion">Asignar Materia a Profesor</a>


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
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraAlumno' ?>">
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
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraAlumno' ?>">
      <div class="control-group">
        <label class="control-label" >Nombre de la materia</label>
        <div class="controls">
    <!-- -->  <input type="text" name="usuario" class="input-xlarge" required>
        </div><br>
        <label class="control-label" >Semestre en que se imparte</label>
        <div class="controls">
    <!-- -->  <input type="password" name="pass" class="input-xlarge" required>
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
    <form id="editarAdmin" class="form-horizontal" method="POST" action="<?php print get('webURL')._sh.'default/registraAlumno' ?>">
      <div class="control-group">
        <label class="control-label">Materia</label>
        <div class="controls">
    <!-- -->  <select>
    		<option>ASJKD</option>
				</select>
        </div><br>
        <label class="control-label" >Profesor</label>
        <div class="controls">
     <!-- -->  <select>
    		<option>ASJKD</option>
				</select>
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