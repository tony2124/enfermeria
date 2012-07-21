<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		#$this->Default_Model = $this->model("Default_Model");
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


}
