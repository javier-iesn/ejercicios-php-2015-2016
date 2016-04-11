<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
</head>
<body>
	<?php
		if ( $_GET ) {
			echo "La Letra es: ","TRWAGMYFPDXBNJZSQVHLCKE"[$_GET['dni'] % 23];
		} else {
			//Mostrar Formulario
			?>
			<form action="?" method="get" enctype="multipart/form-data">
				<table>
					<tr>
						<td><label for="dni">Introduce el dni (sin la letra):</label></td>
						<td><input name="dni" id="dni" type="text" size="8" maxlength="8" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Calcular Letra"/></td>
						<td><input type="reset" value="Borrar Formulario"/></td>
					</tr>
				</table>
			</form>
			<?php 
		}
	?>
</body>
</html>