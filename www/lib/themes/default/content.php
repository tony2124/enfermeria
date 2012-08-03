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
			
<ul id="grid" class="methods">
				<li><a href="#drawLeft">drawLeft</a></li>
				<li><a href="#drawRight">drawRight</a></li>
				<li><a href="#drawTop">drawTop</a></li>
				<li><a href="#drawBottom">drawBottom</a></li>
			</ul>
<div class="drawer"></div>
<!--			<img src="<?php print path("www/lib/images/banner.jpg","www"); ?>" width="1000" height="250">-->
			<div id="gallery" class="gradually">
			    <ul class="graduallyImages">
			        <li><img title="image1 title" alt="image1 discription" src="<?php print path("www/lib/images/banner.jpg","www"); ?>" width="650" height="275" /></li>
			        <li><img title="image3 title" alt="image3 discription" src="<?php print path("www/lib/images/banner2.jpg","www"); ?>" width="650" height="275" /></li>
			        <li><img title="image4 title" alt="image4 discription" src="<?php print path("www/lib/images/banner3.jpg","www"); ?>" width="650" height="275" /></li>
			    </ul>
			    <p class="titlebar">
			        <strong class="title"></strong>
			        <span class="current"></span> / <span class="total"></span>
			    </p>
			</div>


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