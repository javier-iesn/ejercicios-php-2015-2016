<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php
       $nota=$_GET['nota'];  //$a > 4  && $a < 3 
       //$nota=5.5;
       if ( $nota < 5 ) { // <  <=  >  >= == !=   &&  ||  ! 
       	  echo "Has suspendido pobrecito. Insuficiente.";
       } elseif ( $nota >= 5 && $nota < 6  ) {
       	  echo "Deberías trabajar más. Tu puedes sacar más nota. Suficiente";
       } elseif ( $nota >= 6 && $nota < 7  ) {
       	  echo "No está mal. Pero podrías hacer más. Bien";
       } elseif ( $nota >= 7 && $nota < 9  ) {
       	  echo "Buenooo. Podrías hacer más. Notable.";
       } elseif ( $nota >= 9 && $nota < 10  ) {
       	  echo "No está mal. Sobresaliente.";
       } elseif ( $nota >= 10 ) {
       	  echo "Sigue así, puedes hacer más. Matrícula de Honor.";
       }
       
	?>
</body>
</html>