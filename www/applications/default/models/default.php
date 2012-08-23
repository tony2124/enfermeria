<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "contacts";
	}

	public function obtenerAlumno($user)
	{
		return $this->Db->query("select * from alumnos where id_alumno = '$user'");
	}
	
	public function obtenerProfesor($user)
	{
		return $this->Db->query("select * from profesores where usuario_profesor = '$user'");
	}
	
	public function obtenerMaterias($semestre, $nc)
	{
		return $this->Db->query("select * from materias natural join inscripciones where semestre_materia <= '$semestre' and id_alumno = '$nc'");
	}

	public function obtenerTodasMaterias()
	{
		return $this->Db->query("select * from materias");
	}

	public function obtenerTodosProfesores()
	{
		return $this->Db->query("select * from profesores where id_profesor != 1 order by ap_profesor asc, am_profesor asc, nombre_profesor asc");
	}

	public function obtenerMateriasProfesor($prof, $periodo)
	{
		
		return $this->Db->query("select * from profesores_materias natural join materias where id_profesor = '$prof' and periodo ='$periodo'");
	}

	public function obtenerMateria($mat)
	{
		return $this->Db->query("select * from materias where id_materia = '$mat'");
	}

	public function obtenerMateriaNoApartada()
	{
		return $this->Db->query("select * from materias");
	}

	public function obtenerAlumnos()
	{
		return $this->Db->query("select * from alumnos order by ap_alumno asc, am_alumno asc, nombre_alumno asc");
	}

	public function obtenerCalificacion($mat, $nc)
	{
		return $this->Db->query("select * from inscripciones where id_alumno = '$nc' and id_materia='$mat'");
	}

	public function guardarCalificacion($folio, $cal)
	{
		return $this->Db->query("update inscripciones set calificacion = '$cal' where folio='$folio'");
	}

	public function registroAlumno($matricula, $nombre, $ap, $am, $fecha)
	{
		return $this->Db->query("insert into alumnos values('$matricula', '$nombre', '$ap', '$am', '$fecha','$matricula')");
	}

	public function registroProfesor($usuario, $pass, $nombre, $ap, $am)
	{
		$this->Db->query("insert into profesores (usuario_profesor, password_profesor, nombre_profesor, ap_profesor, am_profesor) values('$usuario', '$pass', '$nombre', '$ap', '$am')");

	}

	public function registroMateria($nombre, $sem)
	{
		$this->Db->query("insert into materias (nombre_materia, semestre_materia) values('$nombre', '$sem')");
	}

	public function registroAsignacion($profesor, $materia, $periodo)
	{
		$this->Db->query("insert into profesores_materias values('$profesor', '$materia', '$periodo')");
	}

	public function inscribir($nc, $mat)
	{
		$folio = uniqid();
		return $this->Db->query("insert into inscripciones values('$folio', '$nc', '$mat', '0')");
	}

	public function eliminarAlumno($id)
	{
		return $this->Db->query("delete from alumnos where id_alumno = '$id'");
	}

	public function eliminarProfesor($id)
	{
		return $this->Db->query("delete from profesores where id_profesor = '$id'");
	}
	public function eliminarMateria($id)
	{
		return $this->Db->query("delete from materias where id_materia = '$id'");
	}

	public function eliminarRelacion($id)
	{
		return $this->Db->query("delete from materias where id_materia = '$id'");
	}

	public function obtenerRelaciones($periodo)
	{
		return $this->Db->query("select * from profesores_materias natural join materias natural join profesores where periodo = '$id'");
	}
}