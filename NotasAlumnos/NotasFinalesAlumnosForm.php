<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="NotasFinalesAlumnos.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
			   <th>Alumno</th><th>Nota</th>
			</tr>
			<?php
			   $numAlumnos=$_GET['numAlumnos'];
			   for($i=1; $i<=$numAlumnos; $i++) {
			   	  echo "<tr>
							<td><input type='text' name='alumnos[]' id='alumno$i' size='50' maxlength='50'/></td>
							<td><input type='text' name='notas[]' id='nota$i' size='7' maxlength='5'/></td>
						</tr>";
			   }
			   //echo "<input type='hidden' name='nAlu' id='nAlu' value='$numAlumnos' />";
			?>
			
			<tr>
				<td><input type="submit" value="Enviar Datos"/></td>
				<td><input type="reset"  value="Borrar Formulario"/></td>
			</tr>
			
		</table>
	</form>
</body>
</html>