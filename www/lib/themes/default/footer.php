<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/footer.php";
	} else {
?>
		
		<footer style="background:whiteSmoke; border-radius: 10px">

			<center><p>&nbsp;</p>
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
					<div class="msociales" style="text-align:center; height: 80px;">
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
		
		<hr>
			<p>&copy; <?php print __("All rights reserved"); ?> - Escuela de Enfermería Apatzingán AC</p></center>
		</footer>
	  
	</div>
	</body>
</html>
<?php } ?>