<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Agenda</title>
   </head>
   <body>
<?php
   require("libreriaAgenda.php");
   $movil=$_POST['movil']; $telefono=$_POST['telefono']; $nombre=$_POST['nombre']; $apellido1=$_POST['apellido1'];
   $apellido2=$_POST['apellido2'];$email=$_POST['email'];$direccion=$_POST['direccion'];$cp=$_POST['cp'];
   $ciudad=$_POST['ciudad'];
   if ($movil=="" || $nombre=="" || $apellido1=="" ) {
      mensajeError("Los campos movil, nombre y apellido1 son obligatorios, no pueden quedar en blanco");
      //enlaceAtras("javascript:parent.cargaContenido('amigosForm.php');","Volver al formulario");
      enlaceAtras();
   } elseif (!chequeaNumero($movil)) {
      mensajeError("El móvil no es correcto.");
      //enlaceAtras("javascript:parent.cargaContenido('amigosForm.php');","Volver al formulario");
      enlaceAtras();
   } elseif ($telefono!="" && !chequeaNumero($telefono)) {
      mensajeError("El teléfono no es correcto.");
      enlaceAtras();
   } elseif ($email!="" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensajeError("Email no válido");
      enlaceAtras();
   } elseif ($cp!="" && !chequeaNumero($cp,5)) {
      mensajeError("El Código Postal no es correcto.");
      enlaceAtras();
   } else {
      //            '626123459','',  'Antonio','López',   ''.       '',      ''     ,'' , '' 
      $values=array($movil,$telefono,$nombre,$apellido1,$apellido2,$email,$direccion,$cp,$ciudad);
      $campos=array('movil','telefono','nombre','apellido1','apellido2','email','direccion','cp','ciudad');
      $consulta="INSERT INTO agenda.amigos (";
      $parteAnteValues=""; 
      $parteTrasValues=""; 
      //INSERT INTO agenda.amigos (movil,nombre,apellido1) VALUES('626123459','Antonio','López')
      for($i=0;$i<count($values);$i++) { 
         if ($values[$i]!="") { 
            $parteAnteValues.=$campos[$i].",";
            $parteTrasValues.="'".$values[$i]."',";
         }
      }
      $parteAnteValues=substr($parteAnteValues,0,strlen($parteAnteValues)-1); //quitamos la última coma de sobra
      $parteTrasValues=substr($parteTrasValues,0,strlen($parteTrasValues)-1); //ídem
      $consulta=$consulta.$parteAnteValues.") VALUES (".$parteTrasValues.")";
      echo $consulta;
   }
?>
   </body>
</html>