<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
</head>
<body>
	<?php
	    //1234 - 1234 - 16 - 1234567890
		$e=$_GET['entidad'];
		$o=$_GET['oficina'];
		$c=$_GET['cuenta'];
		// 1,2,4,8,5,10,9,7,3,6
		$d1=$e[0]*4+$e[1]*8+$e[2]*5+$e[3]*10+$o[0]*9+$o[1]*7+$o[2]*3+$o[3]*6;
		$d2=$c[0]*1+$c[1]*2+$c[2]*4+$c[3]*8+$c[4]*5+$c[5]*10+$c[6]*9+$c[7]*7+$c[8]*3+$c[9]*6;
		$r1=$d1%11;
		$r2=$d2%11;
		$d1=11-$r1;
		$d2=11-$r2;
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
		echo "$e-$o-$d1$d2-$c";
	?>
</body>
</html>