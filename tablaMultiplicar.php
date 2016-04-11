<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cálculo de la letra de NIF</title>
<style>
	table { margin: 0px auto; background-color: blue; }
	.grisClaro { background-color: #ccc;}
	.grisOscuro {background-color: #666;}
</style>
</head>
<body>
	<?php
	    $n=$_GET['n'];
	    /*if ($n <1 || $n >10) {
	    	echo "Debes elegir un número entre 1 y diez.";
	    } else {*/
	    	//echo "<h4>Tabla del $n</h4>";
	    	echo "<table border='1'>";
	    	echo "<caption> Tabla del $n</caption>";
	    	$i=1;
	    	$j=1;
	    	for($i=1,$j=1 ; $i<=10 ; $i++,$j++) {
	    		//si es par gris claro
	    		if ( $i % 2 == 0 ) {
	    			$estilo="grisClaro";
	    		} else { //if ($i % 2 == 1) {
	    			$estilo="grisOscuro";
	    		}
	    		echo "<tr class='$estilo'><td>$n</td><td> * </td><td>$i</td><td> = </td><td>",$n*$i,'</td>';
	    	}
	    	echo "</table>";
	    	
	    //}
	    
	    
	?>
</body>
</html>