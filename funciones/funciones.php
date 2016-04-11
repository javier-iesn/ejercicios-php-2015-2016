<?php
  function ecuacion2($a,$b,$c,$numSol=1) {
   	$raiz=$b*$b-4*$a*$c;
   	if ($raiz < 0) {
   		echo "No hay solución";
   	} else {
   		// (-b+-raiz(b^2-4ac))/(2a)
   		$x1=(-$b+sqrt($raiz))/(2*$a);
   		$x2=(-$b-sqrt($raiz))/(2*$a);
   		if ($numSol==1) {
   			return $x1;
   		} else {
   			return $x2;
   		}
   	}
   }
   function sumaMatrices($a,$b) {
      //$a y $b debería ser matrices bidimensionales
      //......
      for($i=0;$i < count($a); $i++) {
         for($j=0;$j < count($a[0]);$j++)  {
            $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
         }
      }
      return $c;
   }
   function suma($a,$b) {
      return $a+$b;
   }
   $a=array(array(1,2,3),array(4,5,6));
   $b=array(array(7,8,9),array(10,11,12));
   $resultado=sumaMatrices($a,$b);
   
?>
