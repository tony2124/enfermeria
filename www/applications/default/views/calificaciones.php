
En la siguiente tabla se muestra una relación de las materias que se han cursado desde el primer semestre. 
<br><br>
<?php $i=0; while($i++ < $semestre) { ?>
<div class="alert alert-success">
  <h3>SEMESTRE <?php print $i ?></h3>
</div>
<table width="600" class = "table table-striped table-bordered table-condensed">
	<thead>
     	<tr>
     		<th width="800">NOMBRE DE LA MATERIA</th>
        <th>SEMESTRE</th>
		    <th>CALIFICACIÓN</th>
    	</tr>
  	</thead>
  	<tbody>
  		<?php foreach ($materias as $materia) if(strcmp($materia['semestre_materia'], $i) == 0) { ?>
  		<tr>
  			<td><?php print $materia['nombre_materia'] ?></td>
        <td><?php print $materia['semestre_materia'] ?></td>
  			<td><?php print $materia['calificacion'] ?></td>
  		</tr>
  		<?php } ?>
  	</tbody>
</table>
<?php } ?>
