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
			<a href="" class="btn btn-primary">CALIFICACIONES</a>
			<a href="" class="btn btn-primary">&nbsp;AULA VIRTUAL&nbsp;</a>
			<a href="" class="btn btn-primary">PROFESORES</a>
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