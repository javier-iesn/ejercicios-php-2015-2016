<?php
   function formulario($campos,$action,$caption="Alta",$method="post",$enctype="multipart/form-data") {
      echo "<form action='$action' method='$method' enctype='$enctype'>
               <table border='1' style='margin: 40px;'>
               <caption>$caption</caption>";
      foreach ($campos as $campo => $long) {
         $ucampo=ucfirst($campo);
         echo "
                  <tr>
                     <td><label for='$campo'>$ucampo:</label></td>
                     <td><input type='text' name='$campo' id='$campo' maxlength='$long'/></td>
                  </tr>";
      }
      echo "
                  <tr><td><input type='submit' value='Enviar'/></td><td><input type='reset' value='Borrar Form'/></td></tr>
               </table>
            </form>";
   }
   $campos=array('movil' => 12,  'telefono' => 12, 'nombre' => 40, 'apellido1' => 25, 'apellido2' => 25, 'email' => 50, 
                 'direccion' => 50, 'cp' => 5, 'ciudad' => 30);
   formulario($campos,"?contenido=amigosFormInserta","Alta de Amigos");
?>
<!--      
<form action="amigosFormInserta.php" method="post" enctype="multipart/form-data">
   <table border="1">
      <tr>
         <td><label for="movil"></label> </td>
         <td><input name="movil" id="movil" type="text" size="12" maxlength="12"/></td>
      </tr>
      <tr>
         <td><label for=""></label> </td>
         <td><input name="telefono" id="telefono" type="text" size="12" maxlength="12"/></td>
      </tr>
      
   </table>
</form>
-->
