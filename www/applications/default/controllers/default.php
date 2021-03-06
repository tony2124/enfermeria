<?php
/**
 * Access from index.php:
 */

function semestre($fecha)
	{
		
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

function periodo_actual()
{
		$nombremes1= "";
		list($anio,$mes) = explode("-",date("Y-m"));
		
		if($mes >= 8 || $mes == 1)
		{
			$nombremes1 = "AGO";
			$nombremes2 = "ENE";
		}
		else
		{
			$nombremes1 = "FEB";
			$nombremes2 = "JUL";
		}
		
		if($mes == 1)
		{
			$nombremes1 = $nombremes1."".($anio-1);
		}
		else
		{
			$nombremes1 = $nombremes1."".($anio);
		}
		
		if($nombremes2 == 'ENE' && $mes!=1)
			$anio = $anio + 1;
			
		$nombremes1.="-".$nombremes2."".$anio;

		return $nombremes1;	
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
			$sem = semestre(SESSION("fecha_inscripcion"));
			$vars['materias'] = $this->Default_Model->obtenerMaterias($sem, SESSION("id_alumno"));
			$vars['semestre'] = $sem;

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

	public function iniciar_sesion_profesor()
	{
		$user = POST('user');
		$pass = POST('pass');
		$datos = $this->Default_Model->obtenerProfesor($user);

		if($datos != NULL)
		{
			if($pass != $datos[0]['password_profesor'])
				redirect(get("webURL")._sh."default/subircalificaciones/1");				
			else
			{
				SESSION("id_profesor",$datos[0]['id_profesor']);
				SESSION("usuario_profesor",$datos[0]['usuario_profesor']);
				SESSION("nombre_profesor",$datos[0]['nombre_profesor']);
				SESSION("ap_profesor",$datos[0]['ap_profesor']);
				SESSION("am_profesor",$datos[0]['am_profesor']);
				
				redirect(get("webURL")._sh."default/subircalificaciones");
			}
		}
		else
			redirect(get("webURL")._sh."default/subircalificaciones/2");
	}

	public function subircalificaciones($error = NULL, $mat = NULL)
	{
		if(!SESSION('id_profesor'))
		{
			if(isset($error))
			{
				if($error == '2') $vars['error'] = "No existe el usuario, por favor ingrese los datos correctamente.";
				else if($error == '1') $vars['error'] = "La contraseña no coincide, intente de nuevo por favor";
			}
				
			$vars['view'] = $this->view("login_profesor", true);
		}
		else if(strcmp(SESSION('id_profesor'),'1')==0)
		{
			$vars['profesores'] = $this->Default_Model->obtenerTodosProfesores();
			$vars['materias'] = $this->Default_Model->obtenerTodasMaterias();
			$vars['periodo'] =  periodo_actual();
			$vars['view'] = $this->view("administrador", true);
		}
		else
		{

			$vars['periodo'] = periodo_actual();
			if($mat!=NULL)
			{
				$vars['materia'] = $mat;
				$materiasDelProfesor = $this->Default_Model->obtenerMateria($mat);
				$alumnos = $this->Default_Model->obtenerAlumnos();
				$i = 0;$nicodemo = null;
				foreach ($alumnos as $al ) {
					if(strcmp(semestre($al['fecha_inscripcion']), $materiasDelProfesor[0]['semestre_materia']) == 0)
					{
						$data = $this->Default_Model->obtenerCalificacion($mat, $al['id_alumno']);
						if($data)
						{
							$al['calificacion'] = $data[0]['calificacion'];
							$al['folio'] = $data[0]['folio'];
							$nicodemo[$i++] = $al;
						}	
					}
						
				}
			$vars['alumnos'] = $nicodemo;
			}
			
			$vars['materias'] = $this->Default_Model->obtenerMateriasProfesor(SESSION('id_profesor'), periodo_actual());

			$vars['view'] = $this->view("subircalificaciones", true);

		}
		$this->render("content", $vars);
	}

	public function guardarCalificacion()
	{
		$calif = POST('calificacion');
		$folio = POST('folio');
		$materia = POST('id_materia');
		for($i = 0; $i < sizeof($folio); $i++)
			$this->Default_Model->guardarCalificacion($folio[$i], $calif[$i]);
		redirect(get('webURL')._sh.'default/subircalificaciones/calif/'.$materia);
	}

	public function registraAlumno()
	{
		$matricula = POST('matricula');
		$nombre = POST('nombre');
		$ap = POST('ap');
		$am = POST('am');
		$fecha = POST('fecha');

		$this->Default_Model->registroAlumno($matricula, $nombre, $ap, $am, $fecha);

		$materias = $this->Default_Model->obtenerTodasMaterias();

		foreach ($materias as $mat) {
			$this->Default_Model->inscribir($matricula, $mat['id_materia']);
		}
		redirect(get('webURL')._sh.'default/adminAlumnos');
	}

	public function registraProfesor()
	{
		$usuario = POST('usuario');
		$nombre = POST('nombre');
		$ap = POST('ap');
		$am = POST('am');
		$pass = POST('pass');

		$this->Default_Model->registroProfesor($usuario, $pass, $nombre, $ap, $am);

		redirect(get('webURL')._sh.'default/adminProfesores');
	}

	public function registraMateria()
	{
		
		$nombre = POST('nombre');
		$sem = POST('semestre');

		$this->Default_Model->registroMateria($nombre, $sem);

		redirect(get('webURL')._sh.'default/adminMaterias');
	}

	public function asignacion()
	{
		
		$profesor = POST('profesor');
		$materia = POST('materia');
		$periodo = POST('periodo');

		$this->Default_Model->registroAsignacion($profesor, $materia, $periodo);

		redirect(get('webURL')._sh.'default/adminAsignacion');
	}

	public function adminAlumnos()
	{
		$vars['alumnos'] = $this->Default_Model->obtenerAlumnos();
		$vars['view'] = $this->view("adminAlumnos", true);
		$this->render("content", $vars);
	}

	public function adminProfesores()
	{
		$vars['profesores'] = $this->Default_Model->obtenerTodosProfesores();
		$vars['view'] = $this->view("adminProfesores", true);
		$this->render("content", $vars);
	}


	public function adminMaterias()
	{
		$vars['materias'] = $this->Default_Model->obtenerTodasMaterias();
		$vars['view'] = $this->view("adminMaterias", true);
		$this->render("content", $vars);
	}

	public function adminAsignacion()
	{
		$vars['relaciones'] = $this->Default_Model->obtenerRelaciones(periodo_actual());
		$vars['view'] = $this->view("adminAsignacion", true);
		$this->render("content", $vars);
	}

	public function eliminarAlumno()
	{
		$id = POST('dato');
		$this->Default_Model->eliminarAlumno($id);
		redirect(get("webURL")._sh."default/adminAlumnos");
	}

	public function eliminarProfesor()
	{
		$id = POST('dato');
		$this->Default_Model->eliminarProfesor($id);
		redirect(get("webURL")._sh."default/adminProfesores");
	}

	public function eliminarMateria()
	{
		$id = POST('dato');
		$this->Default_Model->eliminarMateria($id);
		redirect(get("webURL")._sh."default/adminMaterias");
	}

	public function eliminarRelacion()
	{
		$id = POST('dato');
		$this->Default_Model->eliminarRelacion($id);
		redirect(get("webURL")._sh."default/adminAsignacion");
	}

	public function salir()
	{
		unsetsessions();
		redirect(get("webURL"));
	}


	

}
