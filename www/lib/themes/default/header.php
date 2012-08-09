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
		<link href="<?php print path("vendors/css/frameworks/smoothness/jquery-ui-1.8.21.custom.css", "zan"); ?>" rel="stylesheet">

		<?php print $this->getCSS(); ?>
		<script src="<?php print path("vendors/js/jquery-1.7.2.min.js","zan") ?>"></script>

		<!--Galeria -->
		<script type="text/javascript" src="<?php print path("vendors/js/galeria/lib/jquery.ad-gallery.min.js","zan") ?>"></script>
		<link href="<?php print path("vendors/js/galeria/lib/jquery.ad-gallery.css", "zan"); ?>" rel="stylesheet">
		
		<!--bootstrap -->
		<script src="<?php print path("vendors/css/frameworks/bootstrap/js/bootstrap.min.js", "zan"); ?>"></script>
		
		<!--foundation -->
		<!--<link href="<?php print path("vendors/css/frameworks/foundation/foundation.min.css", "zan"); ?>" rel="stylesheet">-->
		<link href="<?php print path("vendors/css/frameworks/buttons/buttons.css", "zan"); ?>" rel="stylesheet">
		
		<!-- BANNER  -->
		<script type="text/javascript" src="<?php print path("vendors/js/banner/jqFancyTransitions.1.8.min.js","zan") ?>"></script>

		<script src="<?php print path("vendors/js/jquery-ui-1.8.21.custom.min.js","zan") ?>"></script>

		<script type="text/javascript">
		$(document).ready( function(){
		    $('#slideshowHolder').jqFancyTransitions({ 
		    	width: 1000, 
		    	height: 200,
		    	effect: 'zipper',
		    	titleOpacity: 0.7,
		    	navigation: true });

		    var galleries = $('.ad-gallery').adGallery();

		     $( ".selectorFecha" ).datepicker({ 
    			defaultDate: "-1y", 
                
				dateFormat: 'yy-mm-dd',  
				showAnim: 'explode',
				duration: 'normal',
				changeMonth: true,
                changeYear: true });
			   
		});

		</script>

		<style type="text/css">
		@-webkit-keyframes bluePulse {
			from { background-color: #0066FF; -webkit-box-shadow:: 0 0 9px #333; }
			50% { background-color: #ffffff; -webkit-box-shadow:: 0 0 30px #2E2EFE; }
			to { background-color: #0066FF; -webkit-box-shadow:: 0 0 9px #333; }
		}

		a.blue.button {
		-webkit-animation-name: bluePulse;
		-webkit-animation-duration: 2s;
		-webkit-animation-iteration-count: infinite;
		}

		.efect {
			width:35px;
			height:35px;
			-webkit-transition: 0.5s;
		}

		.efect:hover{
			width:50px;
			height:50px;
			-webkit-transition: 0.5s;
			/* Firefox */
			-moz-transform: rotate(360deg);
			/* WebKit */
			-webkit-transform: rotate(360deg);
		}

		.imagen
		{
			opacity: 0.7;
		}

		.imagen:hover
		{
			opacity: 1;
		}

		.ad-gallery {
		  width: 800px;
		}
		.ad-gallery .ad-image-wrapper {
		  height: 650px;
		}

		</style>
		
	</head>

	<body style="background: #CFCFCF ;">
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
				   
				</ul>
              </li>
               <li><a href="<?php print get('webURL'). _sh .'default/infraestructura/'  ?>">Infraestructura</a></li>
				</ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<?php } ?>