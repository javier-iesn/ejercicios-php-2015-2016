<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php 
		$n=$_GET['n']; // $a = $a+5; $i=$i+1; $i++; $i+=2; $i=$i+2;
		//$n=2;
		$suma=0;
		for($i=1; $i <= $n ; $i+=2) {
			$suma=$suma+$i;
		}
		echo "La suma desde 1 hasta $n es: ",$suma;
    ?>
</body>
</html>