<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/content.php";
	} else {
?>
<div class="container" style="width: 1000px;">
	<div class="content" >
		<div class="page-header">
			
			<div id='slideshowHolder' style="border: 1px solid #000000">
			 <img src='<?php print path("www/lib/images/banner1.jpg","www"); ?>' alt='La mejor escuela de enfermería de la región' width="1000" height="200" />
			 <img src='<?php print path("www/lib/images/banner2.jpg","www"); ?>' alt='La mejor educación de enfermería' />
			 <img src='<?php print path("www/lib/images/banner3.jpg","www"); ?>' alt='Estamos incorporados a la UMSNH' />
			 <img src='<?php print path("www/lib/images/banner4.jpg","www"); ?>' alt='Visitanos' />
			</div>

			<?php if(!SESSION("id_profesor")) { ?>
			<a style="font-size: 12px" data-icon="✿" href="<?php print get("webURL")._sh.'default/calificaciones' ?>" class="blue button morph">CALIFICACIONES</a>
			<?php } ?>
			<a style="font-size: 12px" data-icon="✿" href="http://escuelaenfermeria.hostzi.com/moodle/login/index.php" class="blue button morph" style="-webkit-border-radius: 10px; text-decoration:none">&nbsp;AULA VIRTUAL&nbsp;</a>
			<?php if(!SESSION("id_alumno")) { ?>
			<a style="font-size: 12px" data-icon="✿" href="<?php print get("webURL")._sh.'default/subircalificaciones' ?>" class="blue button morph" style="-webkit-border-radius: 10px; text-decoration:none">PROFESORES</a>
			<?php } ?>
			
			<?php if(SESSION("id_alumno")) { ?>

			 <div class="btn-group pull-right">
	            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
	              <i class="icon-user"></i> <?php print SESSION('nombre_alumno')." ".SESSION("ap_alumno")." ".SESSION("am_alumno") ?>  <span class="caret"></span>
	            </a>
	            <ul class="dropdown-menu">
	              <li><a href="<?php print get("webURL")._sh."default/salir" ?>">Salir</a></li>
	            </ul>
	          </div>
  			<?php } ?>
			
			<?php if(SESSION("id_profesor")) { ?>

			 <div class="btn-group pull-right">
	            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
	              <i class="icon-user"></i> <?php print "Prof. ".SESSION('nombre_profesor')." ".SESSION("ap_profesor")." ".SESSION("am_profesor") ?>  <span class="caret"></span>
	            </a>
	            <ul class="dropdown-menu">
	              <li><a href="<?php print get("webURL")._sh."default/salir" ?>">Salir</a></li>
	            </ul>
	          </div>
  			<?php } ?>
	      

		</div>
				
		<div class="row">
			<div class="span10" style="width: 1000px;">
				<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
			</div>
			
			
	</div>

<?php } ?>