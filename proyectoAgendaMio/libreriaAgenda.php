<?php
   function mensajeError($mensaje) {
      echo "<span style='color: red;'>$mensaje</span><br/>";
   }
   function enlaceAtras($textoDelEnlace="Volver Atrás",$href="javascript:window.history.back();") {
      //echo "<a href='$href'>$textoDelEnlace</a>";
      echo "<a href=\"$href\">$textoDelEnlace</a>";
   }
   function chequeaNumero($numero,$long=9) {
      if (strlen($numero)!=$long) {
         return false;
      }
      for($i=0;$i<$long;$i++) {
         $digito=$numero[$i];
         if ($digito<'0' || $digito>'9') {
            return false;
         }
      }
      return true;
   }
   function lanzarConsulta($consulta,$user="agenda",$pass="agenda2016",$bd="agenda",$server="localhost") {
      // Crear Conexión
      $conn = mysqli_connect($server, $user, $pass, $bd);
      // Comprobar la conexión
      if (!$conn) { return false;  }
      $result = mysqli_query($conn, $consulta);
      if ($result==true || mysqli_num_rows($result) > 0) {//hay resultado
          return $result;
          //$row = mysqli_fetch_assoc($result));
      } else{ 
          mysqli_close($conn);
          return false;
      }
   }
   
   //lanzarConsulta($consulta);
   
?>