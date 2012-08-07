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

	public function obtenerMateriasProfesor($prof, $periodo)
	{
		return $this->Db->query("select * from profesores_materias natural join materias natural join profesores where id_profesor = '$prof' and periodo ='$periodo'");
	}

	public function obtenerMateria($mat)
	{
		return $this->Db->query("select * from materias where id_materia = '$mat'");
	}

	public function obtenerAlumnos()
	{
		return $this->Db->query("select * from alumnos");
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

	public function inscribir($nc, $mat)
	{
		$folio = uniqid();
		return $this->Db->query("insert into inscripciones values('$folio', '$nc', '$mat', '0')");
	}

}