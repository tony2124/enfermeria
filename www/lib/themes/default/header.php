<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<link href="<?php print path("vendors/css/frameworks/bootstrap/css/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<?php print $this->getCSS(); ?>
		<script src="<?php print path("vendors/js/jquery-1.7.2.min.js","zan") ?>"></script>
		<script src="<?php print path("vendors/css/frameworks/bootstrap/js/bootstrap.min.js", "zan"); ?>"></script>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php print get('webURL')._sh.'enfermeria' ?>">Escuela de enfermería</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="dropdown" id="menu1">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
              	Quiénes somos<b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="<?php print get('webURL'). _sh .'default/antecedentes/'  ?>">Antecedentes</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/mision/' ?>">Misión</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/vision/'  ?>">Visión</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/directorio/'  ?>">Directorio</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/filosofia/'  ?>">Filosofía institucional</a></li>
				</ul>
              </li>
               <li class="dropdown" id="menu2">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">
              	Oferta educativa<b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="<?php print get('webURL'). _sh .'default/perfilingreso/'  ?>">Perfil de ingreso</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/perfilegreso/' ?>">Perfil de egreso</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/requisitosegreso/'  ?>">Requisitos de egreso</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/titulacion/'  ?>">Opción de titulación</a></li>
				</ul>
              </li>
               <li class="dropdown" id="menu3">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">
              	Convocatoria<b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="<?php print get('webURL'). _sh .'default/nuevoingreso/'  ?>">Nuevo ingreso</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/servicio/' ?>">Servicio social</a></li>			
				</ul>
              </li>
              <li class="dropdown" id="menu4">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
              	Normatividad<b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="<?php print get('webURL'). _sh .'default/marco/'  ?>">Marco jurídico</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/reginterno/' ?>">Reglamento interno</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/regbiblioteca/'  ?>">Reglamento biblioteca</a></li>
				    <li><a href="<?php print get('webURL'). _sh .'default/horarios/'  ?>">Horarios de servicio</a></li>
				</ul>
              </li>
               <li><a href="#menu5">Infraestructura</a></li>
				</ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<?php } ?>