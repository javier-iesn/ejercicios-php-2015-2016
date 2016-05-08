<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Alta de Amigos en la Agenda</title>
</head>
<body>
<?php
   function mensajeError($mensaje) {
      echo "<span style='color: red;'>$mensaje</span>";
   }
   function enlaceAtras($textoDelEnlace="Voler Atrás") {
      echo "<a href='javascript:window.history.back();'>$textoDelEnlace</a>";
   }
   $movil=$_POST['movil']; $telefono=$_POST['telefono']; $nombre=$_POST['nombre']; $apellido1=$_POST['apellido1'];
   $apellido2=$_POST['apellido2'];$email=$_POST['email'];$direccion=$_POST['direccion'];$cp=$_POST['cp'];
   $ciudad=$_POST['ciudad'];
   
   
   //626123459 Antonio López
   //INSERT INTO agenda.amigos VALUES ('626123459',null,'Antonio','López',null,null,null,null,null)
   if ($movil=="" || $nombre=="" || $apellido1=="" ) {
      mensajeError("Los campos movil, nombre y apellido 1 son obligatorios, no pueden quedar en blanco");
      enlace("Volver al formulario");
      
   }
   
   //            '626123459','',  'Antonio','López',   ''.       '',      ''     ,'' , '' 
   $values=array($movil,$telefono,$nombre,$apellido1,$apellido2,$email,$direccion,$cp,$ciudad);
   $campos=array('movil','telefono','nombre','apellido1','apepplido2','email','direccion','cp','ciudad');
   $consulta="INSERT INTO agenda.amigos (";
   $parteAnteValues=""; // "movil,"
   $parteTrasValues=""; // "'626123459',"
   //INSERT INTO agenda.amigos (movil,nombre,apellido1) VALUES('626123459','Antonio','López')
   for($i=0;$i<count($values);$i++) { //i=3
      if ($values[$i]!="") { //$values[0] <- 'López'
         $parteAnteValues.=$campos[$i].","; // $parteAnteValues <- "movil,nombre,apellido1,"
         $parteTrasValues.="'".$values[$i]."',"; // $pateTrasValues <- "'626123459','Antonio','López',"
      }
   }
   $parteAnteValues=substr($parteAnteValues,0,strlen($parteAnteValues)-1);
   $parteTrasValues=substr($parteTrasValues,0,strlen($parteTrasValues)-1);
   $consulta=$consulta.$parteAnteValues.") VALUES (".$parteTrasValues.")";
   echo $consulta;
   enlaceAtras();
   
   //chequear validez de los datos
   
?>
</body>
</html>