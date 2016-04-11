<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
   <title> </title>
   </head>
   <body>
      <?php
         include("funciones/funciones.php");
         $a=1;$b=-3;$c=2;
         $x1=ecuacion2(1,-3,2);
         $x2=ecuacion2(1,-3,2,2);
         echo "Las soluciones son x1: $x1 y x2: $x2.<br/>\n" ;
         
      ?>

   </body>
</html>