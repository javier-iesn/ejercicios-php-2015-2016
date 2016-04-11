<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
	.azul { background-color: #8888ff; }
	.verde { background-color: #88ff88; }
</style>
</head>
<body>
	<table border="1">
		<tr><th>Alumno</th><th>Nota Numérica</th><th>Nota</th></tr>
		<?php
			$nAlu=$_GET['nAlu'];
			for($i=1; $i<=$nAlu; $i++) {
				$actual="alumno"."$i"; //"alumno2"
				$notaActual="nota"."$i"; //"nota2"
				$nombre=$_GET[$actual];
				$nota=$_GET[$notaActual];
				if ($nota < 5) {
					$notaSimb="Insuficiente";
				} elseif ($nota < 6 ) {
					$notaSimb="Suficiente";
				} else if ($nota < 7 ) {
					$notaSimb="Bien";
				} else if ($nota < 9 ) {
					$notaSimb="Notable";
				} else if ($nota < 10 ) {
					$notaSimb="Sobresaliente";
				} else {
					$notaSimb="Matrícula de Honor";
				}
				//dividendo=divisor*cociente+resto
				//resto=dividendo-divisor*cociente
				//$resto=$i-2*int($i/2);
				$resto=$i % 2;
				if ($resto == 0) {
					$estilo="azul";
				} else {
					$estilo="verde";
				}
				echo "<tr class='$estilo'><td>$nombre</td><td>$nota</td><td>$notaSimb</td></tr>";
			}
		?>
	</table>
</body>
</html>