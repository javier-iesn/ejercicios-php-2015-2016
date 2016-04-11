<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
</head>
<body>
	<form action="opMatrices.php?f=<?php echo $_GET['f'];?>&c=<?php echo $_GET['c'];?>" method="post" enctype="multipart/form-data">
		<table border="1">
			<?php
				$f=$_GET['f'];
				$c=$_GET['c'];
				for($fila=1; $fila <= $f; $fila++) {
					echo "<tr>\n";
					for($cols=1; $cols <= $c; $cols++) {
						echo "<td>\n";
						echo "<input type='text' name='a$fila","_","$cols' id='a$fila","_","$cols' size='4' maxlength='10'/>\n";
						echo "</td>\n";
					}
					echo "</tr>";
				}
			?>
		</table>
		<select name='op'>
			<option>+</option>
			<option>-</option>
		</select>
		<table border="1">
			<?php
				$n=$_GET['n'];
				for($fila=1; $fila <= $f; $fila++) {
					echo "<tr>\n";
					for($cols=1; $cols <= $c; $cols++) {
						echo "<td>\n";
						echo "<input type='text' name='b$fila","_","$cols' id='b$fila","_","$cols' size='4' maxlength='10'/>\n";
						echo "</td>\n";
					}
					echo "</tr>";
				}
				echo "<input type='hidden' name='orden' value='$f' id='orden'/>";
				echo "<input type='hidden' name='orden' value='$c' id='orden'/>";
				
			?>
		</table>
		<table border="1">
			<tr>
				<td><input type="submit" value="Calcular"/></td>
				<td><input type="reset" value="Borrar Formulario"/></td>
			</tr>
		</table>
	</form>
</body>
</html>