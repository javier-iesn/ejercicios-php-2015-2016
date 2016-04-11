<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insertar título aquí</title>
</head>
<body>
	<form action="matricesForm.php" enctype="multipart/form-data" method="post">
	<?php
	   if ($_POST) {
			$a=$_POST['a'];
			$b=$_POST['b'];
			foreach($_POST as $val) {
				echo "$val,";
			}
			echo "tipo a: ",gettype($a);
			echo "hola";
			for($i=1;$i<=count($a);$i++) {
				for($j=1;$j<=count($a[1]);$j++) {
					echo "a[$i][$j]=",$a[$i][$j],"<br/>";
				}
				echo '<br/>';
			}
			print_array($a);
			print_array($b);
				
		} else {
			function tabla($nombre,$estilo,$numFilas,$numCols) {
				echo "<table border='1' style='$estilo'>\n";
				for($i=1;$i<=$numFilas;$i++) {
					echo "<tr>\n";
					for($j=1;$j<=$numCols;$j++) {
						echo "<td><input type='text' name='$nombre","[",$i,"][",$j,"]' size='4' maxlength='10'/>\n";
					}
					echo "</tr>\n";
				}
				echo "</table>\n";
			}
			$n=$_GET['n'];
			$n=2;
			tabla("a","float: left; margin-left: 10%;",$n,$n);
		?>
		   <select name="operacion" style="display:inline; float: left;">
		   	<option>+</option>
		   	<option>-</option>
		   </select>
		<?php 
			tabla("b","float: left; martgin-right: auto;",$n,$n);
		} 
		?>
		<table border="1" style="clear: both; margin-left: 12%;"><tr><td><input type="submit" value="Calcular"/></td><td><input type="reset" value="Borrar Formulario"/></td></tr></table>
	</form>
</body>
</html>