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
        $idProducto=$_POST['idProductoBox'];
        $campoActualizar=$_POST['campo'];
        
        
        
        $idProductoNuevo=$_POST['nuevoID'];
        $nombreNuevo=$_POST['nuevoNombre'];
        $categoriaNuevo=$_POST['nuevaCategoria'];
        $marcaNuevo=$_POST['nuevaMarca'];
        $precioNuevo=$_POST['nuevoPrecio'];
        $descripcionNuevo=$_POST['nuevaDescripcion'];
        $pesoNuevo=$_POST['nuevoPeso'];
        $existenciaNuevo=$_POST['nuevaExistencia'];
        $departementoNuevo=$_POST['nuevoDepartamento'];
        include("acceso.php");
        
        switch ($campoActualizar) {
          case 1:
            $sql="update Producto set IdProducto='$idProductoNuevo' where IdProducto='$idProducto'";
          break;
          case 2:
            $sql="update Producto set Nombre='$nombreNuevo' where IdProducto='$idProducto'";
          break;
          case 3:
            $sql="update Producto set Categoria='$categoriaNuevo' where IdProducto='$idProducto'";
          break;
          case 4:
            $sql="update Producto set Marca='$marcaNuevo' where IdProducto='$idProducto'";
          break;
          case 5:
            $sql="update Producto set Precio='$precioNuevo' where IdProducto='$idProducto'";
          break;
          case 6:
            $sql="update Producto set Descripcion='$descripcionNuevo' where IdProducto='$idProducto'";
          break;
          case 7:
            $sql="update Producto set Peso='$pesoNuevo' where IdProducto='$idProducto'";
          break;
          case 8:
            $sql="update Producto set Cant_prod_exis='$existenciaNuevo' where IdProducto='$idProducto'";
          break;
          case 9:
            $sql="update Producto set idDepartamento='$departementoNuevo' where IdProducto='$idProducto'";
          break;
          
          
          }
          
       $resultado = mysql_query($sql);
       if($resultado)
        echo "<script>alert ('Dato Actualizado con Exito!!!!');</script>";
        else
          echo "<script>alert ('No se pudo Actualizar el dato!!!!');</script>"; 
       mysql_close($dp);
     ?> 
     <div id = "menu">
      <div class="lavalamp" >
        <ul class="desplegable">            
            <li><a href="Actualizar.php">Regresar</a></li>
        </ul>
        <div id="contenido">
                    <p><img src=""></p>
        </div>     
      </div>
    </div> 
 </body>
</html>
