<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php
		$n1=$_GET['n1'];
		$n2=$_GET['n2'];
		$operacion=$_GET['operacion'];
		
		if ($operacion == '+') {
			echo "La suma de $n1 y $n2 es: ",$n1+$n2;
		} elseif ($operacion == '-') {
			echo "La resta de $n1 y $n2 es: ",$n1-$n2;
		} elseif ($operacion == '*') {
			echo "El producto de $n1 y $n2 es: ",$n1*$n2;
		} elseif ($operacion == '/') {
			echo "La división de $n1 y $n2 es: ",$n1/$n2;
		}
		
		
	?>
</body>
</html>