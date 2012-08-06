<img src="<?php print path("www/lib/images/login_profesores.jpg","www") ?>" width="350" style="float:left">
<center>
  <form action="<?php print get("webURL")._sh."default/iniciar_sesion_profesor" ?>" method="post" class="span7">
	<?php if(isset($error)) { ?>
<p>&nbsp;</p>
<div class="alert alert-error"><?php print $error ?><button class="close" data-dismiss="alert">×</button></div>
<?php } ?>
  <div class="alert alert-success">
	<h3>Inicio de sesión | Profesores</h3>
</div>
  <table width="100%">
  	<tr><td>Usuario</td>
  	<td>
		<div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span><input name="user" type="text" placeholder="Usuario">
            </div>
          </div>
  		</td>
  </tr>
  <tr>
  <td>Contraseña</td> 
 <td>
 	<div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-qrcode"></i></span><input name="pass" type="password" placeholder="Contraseña">
            </div>
          </div>
 	</td>
</tr>
<tr><td colspan="2" align="center">
  <button type="submit" class="btn btn-success">Iniciar</button></td></tr>
</table>
</form>
</center>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>* Los datos que se instruscan en este formulario se mantienen como confidencial, se le recomiendo que una vez que haya iniciado todos las modificaciones pertinentes cierre la sesión para evitar que un usuario no autorizado tenga acceso al sistema.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
