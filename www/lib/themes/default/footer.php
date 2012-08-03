<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/footer.php";
	} else {
?>
		
		<footer>
			<center><p>&copy; <?php print __("All rights reserved"); ?> - Escuela de Enfermería Apatzingán AC</p></center>
		</footer>
	  
	</div>
	</body>
</html>
<?php } ?>