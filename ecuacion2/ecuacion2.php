<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
   <?php
	   /* 2*x²+3*x-5=0
	    1) pedir a,b,c
	    2) x1=(-b+sqrt(b^2-4*a*c))/(2*a)
	    x2=(-b-sqrt(b^2-4*a*c))/(2*a)
	    3) mostrar x1,x2
	    */
      //Entrada de datos
      $a=$_GET['a'];
      $b=$_GET['b'];
      $c=$_GET['c'];
      /* x1=(-b+sqrt(b^2-4*a*c))/(2*a) */
      //Proceso de los datos y obtención de la información
      if ($a == 0 ) {
      	echo "<span style='color:red;'>La ecuación que has introducido no es de segundo grado.</span>";
      } else if ($b*$b-4*$a*$c < 0) {
      	echo "<span style='color:red;'>La ecuación que has introducido no tiene solución.</span>";
      } else if ($b*$b-4*$a*$c == 0) {
      	$x1=(-$b)/(2*$a);
      	echo "<span style='color:red;'>La ecuación que has introducido tiene una única solución y es $x1.</span>";
      } else { //if ( $b*$b-4*$a*$c > 0){
	      $x1=(-$b-sqrt($b*$b-4*$a*$c))/(2*$a);
	      $x2=(-$b+sqrt($b*$b-4*$a*$c))/(2*$a);
	      //Presentación de resultados al usuario
	      echo "<span style='color:red;'>Las soluciones son: ",$x1," y ",$x2,".</span>";
      }
   ?>
</body>
</html>
