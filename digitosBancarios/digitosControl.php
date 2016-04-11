<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
</head>
<body>
	<?php
	    //1234 - 1234 - 16 - 1234567890
		$entidad=$_GET['entidad'];
		$oficina=$_GET['oficina'];
		$cuenta=$_GET['cuenta'];
		// 1,2,4,8,5,10,9,7,3,6
		$entidad="1234";$oficina="1234";$cuenta="1234567890";
		$pesos=array(1,2,4,8,5,10,9,7,3,6);
		$entidadOficina="00".$entidad.$oficina;
		$d1=$d2=0;
		for($i=0;$i<count($pesos);$i++) {
			$d1+=$pesos[$i]*$entidadOficina[$i];
			$d2+=$pesos[$i]*$cuenta[$i];
		}
		$d1=11-$d1%11; $d2=11-$d2%11;
		if ($d1 == 11) {
			$d1=0;
		} elseif($d1 == 10) {
			$d1=1;
		}
		if ($d2 == 11) {
			$d2=0;
		} elseif($d2 == 10) {
			$d2=1;
		}
		echo "$entidad-$oficina-$d1$d2-$cuenta";
	?>
</body>
</html>