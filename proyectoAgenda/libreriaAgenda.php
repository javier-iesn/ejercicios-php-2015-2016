<?php
   function lanzarConsulta($consulta,$user="agenda",$pass="agenda2016",$bd="agenda",$server="localhost") {
      // Crear Conexión
      $conn = mysqli_connect($server, $user, $pass, $bd);
      // Comprobar la conexión
      if (!$conn) { return false;  }
      $result = mysqli_query($conn, $consulta);
      if ($result==true || mysqli_num_rows($result) > 0) {//hay resultado
          return $result;
          //$row = mysqli_fetch_assoc($result));
      } else {
          mysqli_close($conn);
          return false;
      }
      
   }
   
   function getEstruct($bd,$tabla,$user,$pass,$server="localhost") {
      $res=lanzarConsulta("SHOW FIELDS FROM $tabla",$user,$pass,$bd);
      $campo=mysqli_fetch_assoc($result);
      $estruct[]=array($campo['Field'] => array());
      
   }
   $consulta="INSERT INTO amigos (movil,nombre,apellido1) VALUES (626123457,'Luis','Rodríguez');"; 
   lanzarConsulta($consulta);
   
?>