<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
   <title> </title>
   </head>
   <body>
      <form action="opMatrices.php" method="post" enctype="multipart/form-data">
         
         <?php
            //función que agrega a un formulario cuadros de texto para introducir los valores de la mariz $name de $fx$c
            //
            function formMatriz($name,$f,$c) {
               echo "<table border='1'>";
               for($i=0;$i<$f;$i++) {
                  echo "<tr>";
                  for($j=0;$j<$c;$j++) {
                     echo "<td><input type='text' name='$name","[$i][]' size='4' maxlength='10'/></td>";
                  }
                  echo "</tr>";
               }
               echo "</table>";
            }
            $f=$_GET['c'];
            $c=$_GET['f'];
            formMatriz("a",$f,$c);
         ?>
            <select name='op'>
               <option>+</option>
               <option>-</option>
               <option>*</option>
            </select>
         <?php
            formMatriz("b",$f,$c);
         ?>
         <table border='1'>
            <tr>
               <td><input type='submit' value='Calcular'/></td>
               <td><input type='reset' value='Borrar Formulario'/></td>
            </tr>
         </table>
      </form>
   </body>
</html>