<?php
/**
 * Access from index.php:
 */

function semestre($fecha)
	{
			$fec = substr($fecha,1,2);
			if($fec < 90)
				$fecha = "20".$fec."-08-24";
			else 
				$fecha = "19".$fec."-08-24";
			
			list($anio,$mes,$dia) = explode("-",$fecha);
			$anio_dif = date("Y") - $anio;
			$mes_dif = date("m") - $mes;

			if ($mes_dif < 0)
			{
				$mes_dif = $anio_dif * 12 + $mes_dif; 
			}
			else
				$mes_dif = $anio_dif * 12 + $mes_dif; 
			
			if($mes_dif%6==0)
				$mes_dif++;
			return ceil($mes_dif/6);
	}

class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {	
		redirect(get("webURL")._sh."default/avisos");
	}

	public function avisos()
	{
		$vars['view'] = $this->view("avisos", true);
		$this->render("content", $vars);
	}

	public function antecedentes()
	{
		$vars['view'] = $this->view("antecedentes", true);
		$this->render("content", $vars);
	}


	public function mision()
	{
		$vars['view'] = $this->view("mision", true);
		$this->render("content", $vars);
	}


	public function vision()
	{
		$vars['view'] = $this->view("vision", true);
		$this->render("content", $vars);
	}


	public function directorio()
	{
		$vars['view'] = $this->view("directorio", true);
		$this->render("content", $vars);
	}


	public function filosofia()
	{
		$vars['view'] = $this->view("filosofia", true);
		$this->render("content", $vars);
	}

	public function perfilingreso()
	{
		$vars['view'] = $this->view("perfilingreso", true);
		$this->render("content", $vars);
	}

	public function perfilegreso()
	{
		$vars['view'] = $this->view("perfilegreso", true);
		$this->render("content", $vars);
	}

	public function requisitosegreso()
	{
		$vars['view'] = $this->view("requisitosegreso", true);
		$this->render("content", $vars);
	}

	public function titulacion()
	{
		$vars['view'] = $this->view("titulacion", true);
		$this->render("content", $vars);
	}

	public function nuevoingreso()
	{
		$vars['view'] = $this->view("nuevoingreso", true);
		$this->render("content", $vars);
	}

	public function servicio()
	{
		$vars['view'] = $this->view("serviciosocial", true);
		$this->render("content", $vars);
	}

	public function marco()
	{
		$vars['view'] = $this->view("marco", true);
		$this->render("content", $vars);
	}

	public function reginterno()
	{
		$vars['view'] = $this->view("reginterno", true);
		$this->render("content", $vars);
	}

	public function regbiblioteca()
	{
		$vars['view'] = $this->view("regbiblioteca", true);
		$this->render("content", $vars);
	}

	public function horarios()
	{
		$vars['view'] = $this->view("horarios", true);
		$this->render("content", $vars);
	}

	public function infraestructura()
	{
		$vars['view'] = $this->view("infraestructura", true);
		$this->render("content", $vars);
	}

	public function calificaciones($error = NULL)
	{
		if(!SESSION('id_alumno'))
		{
			if(isset($error))
			{
				if($error == '2') $vars['error'] = "No existe el usuario, por favor ingrese los datos correctamente.";
				else if($error == '1') $vars['error'] = "La contraseña no coincide, intente de nuevo por favor";
			}
				
			$vars['view'] = $this->view("login_alumno", true);
		}
		else
		{
			$vars['view'] = $this->view("calificaciones", true);
			$vars['materias'] = $this->Default_Model->obtenerMaterias(semestre(SESSION("fecha_inscripcion")));

		}
		$this->render("content", $vars);
	}

	public function iniciar_sesion_alumno()
	{
		$user = POST('user');
		$pass = POST('pass');
		$datos = $this->Default_Model->obtenerAlumno($user);

		if($datos != NULL)
		{
			if($pass != $datos[0]['password'])
				redirect(get("webURL")._sh."default/calificaciones/1");				
			else
			{
				SESSION("id_alumno",$datos[0]['id_alumno']);
				SESSION("nombre_alumno",$datos[0]['nombre_alumno']);
				SESSION("ap_alumno",$datos[0]['ap_alumno']);
				SESSION("am_alumno",$datos[0]['am_alumno']);
				SESSION("fecha_inscripcion",$datos[0]['fecha_inscripcion']);
				redirect(get("webURL")._sh."default/calificaciones");
			}
		}
		else
			redirect(get("webURL")._sh."default/calificaciones/2");
	}
	public function subircalificaciones()
	{
		if(!SESSION('id_profesor'))
			$vars['view'] = $this->view("login_profesor", true);
		else
			$vars['view'] = $this->view("subircalificaciones", true);
		$this->render("content", $vars);
	}

	public function salir()
	{
		unsetsessions();
		redirect(get("webURL")._sh."default/calificaciones");
	}

	

}
