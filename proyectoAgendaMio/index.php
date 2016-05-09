<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Agenda</title>
      <style>
         table { margin: 0px; border: 3px solid black; border-left: 1px solid black; border-top: 1px solid black;  }
         tr:nth-child(even) {background: #ddd}
         tr:nth-child(odd) {background: #fff}
         td,th { padding: 1px; text-decoration: underline; border-right: 2px solid black; border-bottom: 2px solid black;}
         input:focus { background-color: #eee; }
         th, caption {text-align: left; }
         td { text-decoration: none; border-left: none; border-top:none }
         caption { text-decoration: underline; font-weight: bold; }
         h1 { padding: 0px; margin: 0px auto; text-align: center; }
         div { margin: 0px; padding: 0px; }
         #cabecera {height: 4vh;}
         #menu { float: left; overflow: auto; width: 14%; height: 98vh; margin-top: 30vh;}
         #contenido { margin-left: 14%; height: 98vh; border: 1px solid red;}
         #marco { width: 100%; height: 100%;}         
         #pie { clear: both; height: 5vh; }
         iframe { margin: 0px; padding: 0px; width: 100%; height: 100%; border: 1px solid red;}
      </style>
      <script type="text/javascript">
         function cargaContenido(cont) { document.getElementById('marco').src=cont; }
      </script>
   </head>
   <body>
      <div id="menu">
         <table>
            <tr style="background-color: lightgreen;">
               <td><a title="Alta Amigos" href="index.php?contenido=amigosForm">Alta de Amigos</a></td>
            </tr>
            <tr style="background-color: lightgreen;">
               <td><a title="Listado Amigos" href="index.php?contenido=listaAmigos">Listado de Amigos</a></td>
            </tr>
            <tr style="background-color: lightgreen;">
               <td><a title="Búsqueda Amigos" href="?contenido=buscaAmigosForm">Búsqueda de Amigos</a></td>
            </tr>
         </table>
      </div>
      <div id="contenido">
      <?php
         if ($_GET && $_GET['contenido']!="") {
            $contenido=$_GET['contenido'].".php";
            require($contenido);
         }
         //<div id="contenido"><iframe id="marco" src="">Tu Navegador no soporta iframes</iframe></div>
      ?>
      </div>
   </body>
</html>