<img src="<?php print path("www/lib/images/login_alumnos.jpg","www") ?>" width="400" height="300" style="float:left">
<center><form action="<?php print get("webURL")._sh."default/iniciar_sesion_alumno" ?>" method="post" class="span7">
	<?php if(isset($error)) { ?>
<p>&nbsp;</p>
<div class="alert alert-error"><?php print $error ?><button class="close" data-dismiss="alert">×</button></div>
<?php } ?>
	<div class="alert alert-success">
	<h3>Inicio de sesión | Alumnos</h3>
</div>
  <table width="100%">
  	<tr><td>Matrícula</td>
  	<td>
		<div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span><input name="user" type="text" placeholder="Matrícula">
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
<p>* Este apartado solo es importante para los alumnos de la Escuela de Enfermería, ya que les proporciona sus calificaciones, cabe mencionar que los datos que aquí se presentan no están tomados directamente del control escolar, solo es una copia de ellos, por lo que el sistema no tiene ningún efecto en las calificaciones oficiales.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
