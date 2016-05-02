<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
   <title> </title>
   </head>
   <body>
		<?php
		   $diasSem=array("lunes",'martes',"miércoles","jueves","viernes","sábado","domingo");
		   $meses=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
		   $dia=$_GET['dia']; // 7
		   $dias=$_GET['diasem']; //7.5
		   $mes=$_GET['mes'];
		   $anio=$_GET['anio'];
		   $a=(3>5 || 2<3);
		   
		   $c=5;
		   $d=6;
		   $b=($d<7 && $c>2);//true
		   
		   $nota=8.9;
		   
		   if ($nota < 5) {
		   	  echo "Insu";
		   } elseif ($nota < 6) {
		   	  echo "Sufi";
		   } elseif ($nota < 7) {
		   	  echo "bien";
		   } elseif ($nota < 9) {
		   	  echo "notable";
		   } elseif ($nota < 10) {
		   	  echo "sobre";
		   } else {
		   	  echo "Matrícula";
		   }
		   
		   //tipos de variables
		   //numéricos:
		   $a=5;
		   $b=5.5;
		   //cadenas de carácteres
		   /*cadenas
		    * de caracteres
		    */
		   $c="hola";
		   $d='adiós';
		   
		   echo "$c, que tal estás. $d"; // hola, que tal estás. adiós
		   echo '$c, que tal estás. $d'; // $c, que tal estás. $d
		   //booleanos
		   $a=(5>4 || 3<2 && 2<5); // true
		   
		   //array, matriz o vector
		   
		   $d=array(1,2,3,4,5,6); //[0-5]
		   count($d); //6
		   $f=( count($d) == 6 );
		   
		   $a[0]=1;
		   $a[1]=2;
		   
		   count($a); //2
		   
		   $b[15]="hola";
		   count($b); //1
		   
		   $c=array("a","b","c");
		   //| 1 2 |
		   //| 3 4 |
		   
		   $b=array(array(1,2),array(3,4));
		   $b[0]; // [ 1 , 2 ]
		   $b[0][0]; // 1
		   
		   $a[0][0]=1;
		   $a[0][1]=2;
		   $a[0][2]=9;
		   $a[1][0]=3;
		   $a[1][1]=4;
		   $a[1][2]=10;
		   // | 1 2 9  |
		   // | 3 4 10 1
		   $b[0][0]=5;
		   $b[0][1]=6;
		   $b[0][2]=11;
		   $b[1][0]=7;
		   $b[1][1]=8;
		   $b[1][2]=12;
		   // | 5 6 11 |
		   // | 7 8 12 |
		   
   
		   
		   for($i=0; $i < count($a); $i++) {
		   	  for($j=0; $j < count($a[0]); $j++) {
		   	  	  $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
		   	  }
		   }
		   echo "<table border='1'>";
		   for($i=0; $i < count($a); $i++) {
			   	echo "<tr>";
			   	for($j=0; $j < count($a[0]); $j++) {
			   		echo "<td>",$c[$i][$j],"</td>";
			   	}
			    echo "</tr>"; 
		   }
		   echo "</table>";
		   
		   function construirMatriz($valor,$inc=2) {
		   	  $m=array();
		      for($i=0;$i<10;$i++) {
			     for($j=0;$j<10;$j++) {
			   	    $m[$i][$j]=$valor;
			   		$valor+=$inc;
			   	 }
			  }
			  return $m;
		   }
		   
		   
		   function suma($a,$b) {
		   	  $c=$a+$b;
		   	  return $c; //devolver un valor 
		   }
		   function resta($a,$b) {
		   	  return $a-$b;  
		   }
		   function producto($a,$b=5) {
		      return $a*$b;	  
		   }
		   
		   // 3x^2-2x+1=0
		   $a=3; $b=-2; $c=1;
		   $x1=ecuacion2($a,$b,$c);
		   $x2=ecuacion2neg($a,$b,$c);
		   
		   $f=producto(5,4);
		   
		   $g=producto(3);
		   
		   $c=5;
		   $a=suma(5,6);
		   $d=suma($c,$c+3);
		   
		   
		   
		   $a=construirMatriz(0);
		   $b=construirMatriz(0,5);
		   $c=array();
		   $d=array();
		   
		   $e=suma(5,6);
		   $f=suma($e,3);
		   
		   
		   construirMatriz($a,0);
		   construirMatriz($b,1,5);
		   construirMatriz($c,2,6);
		   construirMatriz($d,3,7);
		    
		   $valor=1;
		   for($i=0;$i<10;$i++) {
		   	for($j=0;$j<10;$j++) {
		   		$a[$i][$j]=$valor;
		   		$valor+=2;
		   	}
		   }
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   //echo "Hoy es lunes, 14 de marzo de 2016";
		   echo "Hoy es ",$diasSem[$dias-1],", $dia de ",$meses[$mes-1]," de $anio";
		   $a="lunes";
		   
		?>
   </body>
</html>