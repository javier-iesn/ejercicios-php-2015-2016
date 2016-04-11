<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
   <title> </title>
   </head>
   <body>
      <?php
         //funciones auxiliares
         function mensaError($mensa) {
            echo "<span style='color: red; font-size=14;'>$mensa</span>";
         }
         function sumables($a,$b) {
            if (count($a)!=count($b)) {
               mensaError("El número de fias de las matrices no coincide");
               return false;
            }
            if (count($a[0])!=count($b[0])) {
               mensaError("El número de columnas de las matrices no coincide");
               return false;
            }
            return true;
         }
         function sumaResta($a,$b,$op="+") {
            if (!sumables($a,$b)) {
               return;
            }
            $c=array();
            for($i=0;$i<count($a);$i++) {
               for($j=0;$j<count($a[0]);$j++) {
                  if ($op == "+") {
                     $c[$i][$j]=$a[$i][$j]+$b[$i][$j];
                  } else {
                     $c[$i][$j]=$a[$i][$j]-$b[$i][$j];
                  }
               }
            }
            return $c;
         }
         function productoMat($a,$b) {
            if (count($a[0])!=count($b)) {
               mensaError("Las Matrices no se pueden multiplicar número de cols no igual a núm. de fias");
            }
            $c=array();
            for($i=0;$i<count($a);$i++) {
               for($j=0;$j<count($b);$j++) {
                  $c[$i][$j]=0;
                  for($k=0;$k<count($b);$k++) {
                     $c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
                  }
               }
            }
            return $c;
         }
         function imprimeMatriz($a,$border=1) {
            echo "<table border='$border'>\n";
            for($i=0;$i<count($a);$i++) {
               echo "   <tr>\n";
               for($j=0;$j<count($a[0]);$j++) {
                  echo "<td>",$a[$i][$j],"</td>";
               }
               echo "   </tr>\n";
            }
            echo "</table>\n";
         }
         $op=$_POST['op'];
         if ($op == '+' || $op == '-') {
            $c=sumaResta($_POST['a'],$_POST['b'],$_POST['op']);
         } else {
            $c=productoMat($_POST['a'],$_POST['b']);
         }
         if (count($c)>0) {
            imprimeMatriz($c);
         }
         
      ?>
   </body>
</html>