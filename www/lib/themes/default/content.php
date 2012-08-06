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

			<a style="font-size: 12px" data-icon="✿" href="<?php print get("webURL")._sh.'default/calificaciones' ?>" class="blue button morph">CALIFICACIONES</a>
			<a style="font-size: 12px" data-icon="✿" href="http://escuelaenfermeria.hostzi.com/moodle/login/index.php" class="blue button morph" style="-webkit-border-radius: 10px; text-decoration:none">&nbsp;AULA VIRTUAL&nbsp;</a>
			<a style="font-size: 12px" data-icon="✿" href="<?php print get("webURL")._sh.'default/subircalificaciones' ?>" class="blue button morph" style="-webkit-border-radius: 10px; text-decoration:none">PROFESORES</a>
			
			
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
				<a href="<?php print get("webURL")._sh.'default/calificaciones' ?>">Calificaciones</a> | 
				<a href="http://escuelaenfermeria.hostzi.com/moodle/login/index.php">Aula virtual</a> | 
				<a href="<?php print get("webURL")._sh.'default/subircalificaciones' ?>">Profesores</a> 
			
			<div class="widget HTML" id="HTML9">
				<hr>
				
				<div class="widget-content">
					<div style="float:left; padding-left:30px">
						<a target="_blank" href="http://www.umich.mx/">
							<img src="<?php print path("www/lib/images/logo.jpg","www") ?>" width="100" height="100" title="UMSNH"></a>
					</div>
					<div style="float:right; padding-right:30px; width: 100px; height:100px">
						Este sitio trabaja mucho mejor con <br><br>
						<a target="_blank" href="https://www.google.com.mx/chrome/" rel="alternate" title="Descargar Google Chrome">
							<img src="<?php print path("www/lib/images/google.jpg","www") ?>" >
						</a>
					</div>
					<div class="msociales" style="text-align:center;">
						<h3 class="title">¡Suscríbete!</h3>
						<a class="feed" target="_blank" href="#" rel="alternate" title="Suscribirse a las entradas" type="application/rss+xml">
							<img class="efect" alt="rss" src="<?php print path("www/lib/images/redessociales/feed.png","www") ?>">
						</a>
						<a class="twitter" target="_blank" href="http://twitter.com/enfermeriaapatzingan" title="Síguenos en Twitter">
							<img class="efect" alt="Twitter" src="<?php print path("www/lib/images/redessociales/twitter2.png","www") ?>">
						</a>
						<a class="facebook" target="_blank" href="http://www.facebook.com/pages/enfermeriaapatzingan" title="Facebook">
							<img class="efect" alt=" Facebook" src="<?php print path("www/lib/images/redessociales/face.png","www") ?>">
						</a>
						<a class="youtube" target="_blank" href="http://www.youtube.com/user/enfermeriaapatzingan" title="Suscríbete a YouTube">
							<img class="efect" alt="YouTube" src="<?php print path("www/lib/images/redessociales/youtube2.png","www") ?>"> 
						</a>

					</div>
					
					

			
			</div>
		</div>
		</center>
	</div>

<?php } ?>