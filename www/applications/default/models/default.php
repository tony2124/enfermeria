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
	
	public function obtenerMaterias($semestre)
	{
		return $this->Db->query("select * from materias where semestre_materia <= '$semestre'");
	}
}