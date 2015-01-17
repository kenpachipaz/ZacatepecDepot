<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
if($_SESSION['tipo']!="administrador"){
session_start();
     header('Location:advertencia.php');
exit;}
?>
<html>
 <head>
   <title>Actualización</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
      <link rel="stylesheet" href="Css/styloCuentas.css" />   
      <link rel="stylesheet" href="Css/stylo.css" />         
      <link rel="stylesheet" href="Css/barramenu.css" /> 
      <link rel="stylesheet" href="Css/styleslogin.css" />

      <script type="text/javascript">
            function cerrarSesion(){
                if(confirm("¿Estas Seguro de Cerrar la Sesión?"))
                    location.href="principal.html";
            }
      </script>
 </head>
 <body>
      <?php
        include("acceso.php");
        $idProducto=$_POST['eliminar'];
        
        $sql="delete from Producto where IdProducto='$idProducto'";

        $resultado = mysql_query($sql);

       if($resultado)
        echo "<script>alert ('Dato Elininado con Exito!!!!');</script>";
        else
          echo "<script>alert ('No se pudo Eliminar el dato!!!!');</script>"; 
       mysql_close($dp);
     ?> 
     <div id = "menu">
      <div class="lavalamp" >
        <ul class="desplegable">            
            <li><a href="Eliminar.php">Regresar</a></li>
        </ul>
        <div id="contenido">
                    <p><img src=""></p>
        </div>     
      </div>
    </div> 
 </body>
</html>