<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
</head>
<body>
   <table border="1">
	<?php
		$f=$_GET['f'];
		$c=$_GET['c'];
		$op=$_POST['op'];
		for($i=1; $i <= $f; $i++) {
			echo "<tr>";
			for($j=1; $j <= $c; $j++) {
				$parIndices="$i"."_"."$j";// "5_12"
				$ea=$_POST["a$parIndices"];
				$eb=$_POST["b$parIndices"];
				
				if ($op == "+") {
					$ec=$ea+$eb;
				} elseif ($op == "-") {
					$ec=$ea-$eb;
				}
				echo "$i - $j ea: $ea eb: $eb ec: $ec<br/>";
				echo "<td>$ec</td>";
			}
			echo "</tr>";
		}
		
		
	?>
	</table>
</body>
</html>