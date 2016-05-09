<?php
   global $__mysqlErno, $__mysqlError;
   
   function mensajeError($mensaje) {
      echo "<span style='color: red;'>$mensaje</span><br/>";
   }
   function mensajeInfo($mensaje) {
      echo "<span style='color: blue;'>$mensaje</span><br/>";
   }
   function getCampos($tabla) {
      $campos=array();
      $result=lanzarConsulta("SHOW FIELDS from $tabla");
      if ($result) {
         //array('movil','telefono','nombre','apellido1','apellido2','email','direccion','cp','ciudad');
         while ($reg = mysqli_fetch_assoc($result)) {
            $campos[]=$reg['Field'];
         }
      }
      return $campos;
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
      global $__mysqlErno, $__mysqlError;
      // Crear Conexión
      $conn = mysqli_connect($server, $user, $pass, $bd);
      // Comprobar la conexión
      if (!$conn) { return false;  }
      mysqli_set_charset($conn,"utf8");
      $result = mysqli_query($conn, $consulta);
      if (!$result) {
         $__mysqlErno=mysqli_errno($conn);
         $__mysqlError=mysqli_error($conn);
         mysqli_close($conn);
         return false;
      } else {
         return $result;
         //$row = mysqli_fetch_assoc($result));
      } 
   }
   //lanzarConsulta($consulta);
   
?>