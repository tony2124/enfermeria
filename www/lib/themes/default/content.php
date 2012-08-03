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
			<img src="<?php print path("www/lib/images/banner.jpg","www"); ?>" width="1000" height="250">
			<a href="<?php print get("webURL")._sh.'default/calificaciones' ?>" class="btn btn-primary">CALIFICACIONES</a>
			<a href="http://escuelaenfermeria.hostzi.com/moodle/login/index.php" class="btn btn-primary">&nbsp;AULA VIRTUAL&nbsp;</a>
			<a href="<?php print get("webURL")._sh.'default/subircalificaciones' ?>" class="btn btn-primary">PROFESORES</a>
			<?php if(SESSION("id_alumno")) { ?>
			<div class="btn-group pull-right">
	          <a class="btn btn-danger" href="#"><i class="icon-user icon-white"></i> <?php print SESSION('nombre_alumno')." ".SESSION("ap_alumno")." ".SESSION("am_alumno") ?> </a>
	          <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php print get("webURL")._sh."default/salir" ?>"><i class="i"></i> Salir sesión</a></li>
	          </ul>
	        </div>
	        <?php } ?>
		</div>
				
		<div class="row">
			<div class="span10" style="width: 1000px;">
				<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
			</div>
			
			<hr>
			<center>
				<a href="">Calificaciones</a> | 
				<a href="">Aula virtual</a> | 
				<a href="">Profesores</a> 

			</center>
		</div>
	</div>

<?php } ?>