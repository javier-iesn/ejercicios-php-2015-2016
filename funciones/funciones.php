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
   function sumaRestaMatrices($a,$b,$op=1) {
   	  //Esta función suma o resta las matrices $a y $b en funcioón del tercer parámetro opcional
   	  //$op que si vale 1 se haría la suma y sino la resta
   	  //en el caso de que la matriz $c devuelta sea vacía una de dos o $a y $b eran matrices vacías
   	  //o algo ha ido mal
   	  $c=array();
   	  
   	  if (gettype($a) != "array" || gettype($b) != "array") {	
   	     return $c; 	  
   	  }
   	  if (count($a)!=count($b) or count($a[0])!=count($b[0])) {
   	  	 return $c;
   	  }
   	  
   	  for($i=0;$i<count($a);$i++) {
   	  	 for($j=0; $j < count($a[0]); $j++) {
   	  	 	if ($op == 1 ) { // sumar
   	  	 		$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
   	  	 	} else {
   	  	 		$c[$i][$j]=$a[$i][$j]-$b[$i][$j];
   	  	 	}
   	  	 }
   	  }
   	  return $c;
   }
   function letraNif($ndni) {
   	  $letras=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
   	  return $letras[$ndni % 23];
   }
   function digitosControl($entidad,$oficina,$cuenta) {
        //entidad, oficina y cuenta pueden ser números enteros o cadenas de caracteres
        // representando un  número de cuenta bancaria válido
        
   	  $pesos=array(1,2,4,8,5,10,9,7,3,6);
   	  $entidadOficina="00"."$entidad"."$oficina";
   	  $cuenta="$cuenta";

   	  $suma1=$suma2=0;
   	  for($i=0;$i < count($pesos); $i++) {
   	  	  $suma1=$suma1+$pesos[$i]*$entidadOficina[$i];
   	  	  $suma2=$suma2+$pesos[$i]*$cuenta[$i];
   	  }
   	  $resto1=11-$suma1 % 11;
   	  $resto2=11-$suma2 % 11;
   	  if ($resto1 == 10) {
   	     $resto1=1;
   	  }  elseif ( $resto1 == 11 ) {
   	     $resto1=0;
   	  }
   	  if ($resto2 == 10) {
   	     $resto2=1;
   	  }  elseif ( $resto2 == 11 ) {
   	     $resto2=0;
   	  }
   	  return "$resto1"."$resto2";
   }
   
   function cuentaLetra($cadena,$letra) {
      $n=0; // al final tendrá el número de apariciones de $letra dentro de $cadena
      for($i=0;$i<strlen($cadena);$i++) {
         if ($cadena[$i]==$letra) {
            $n++; //$n=$n+1;
         }
      }
      return $n;
   }
   
   function posCad($donde,$que) {
      for($i=0;$i<strlen($donde);$i++) {
         if ($donde[$i]==$que[0]) {
            for($j=0;$j<strlen($que) && $donde[$i+$j]==$que[$j] && $i+$j<strlen($donde);$j++);
            if ($j>=strlen($que)) {
               return $i;
            }
            //el break saltaría aquí
         }
      }
      return -1;
   }
   
   //$cadena="hola queso tal"; 
   $buscada="que";
   //$cadena="que pasa";
   //$cadena="hola que";
   //$cadena="hola, hasta luego";
   $cadena="hola qu";   
   $p=posCad($cadena,$buscada);
   
   
   
   $a=5;
   echo $a[0];
   
   
   
   $d=array(array(1,2),array(3,4));
   $e=array(array(5,6),array(7,8));
   $suma=sumaRestaMatrices($d,$e);
   $resta=sumaRestaMatrices($d,$e,0);
   if (count($suma) == 0) {
   	 echo "ha habido un error sumando las matries.";
   }
   
   
?>
