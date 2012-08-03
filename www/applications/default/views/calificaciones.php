
<table width="600" class = "table table-striped table-bordered table-condensed">
	<thead>
     	<tr>
     		<th>NOMBRE DE LA MATERIA</th>
		    <th>SEMESTRE</th>
		    <th>CALIFICACIÓN</th>
    	</tr>
  	</thead>
  	<tbody>
  		<?php foreach ($materias as $materia) { ?>
  		<tr>
  			<td><?php print $materia['nombre_materia'] ?></td>
  			<td><?php print $materia['semestre_materia'] ?></td>
  			<td></td>
  		</tr>
  		<?php } ?>
  	</tbody>
</table>
