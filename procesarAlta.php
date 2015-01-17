<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
if($_SESSION['tipo']!="administrador"){
session_start();
     header('Location:advertencia.php');
exit;
}

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Alta</title>
<link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
<link rel="stylesheet" href="Css/styloCuentas.css" />   
<link rel="stylesheet" href="Css/barramenu.css" /> 
<link rel="stylesheet" href="Css/styleslogin.css" />

<!--<link rel="stylesheet" href="Css/menuDesplegable.css" />-->
</head>
<body>
<div id="fondo">
 <div id="global">
  <div id="cabecera">
   </div>
  </div>
 <div id = "menu">
    <div class="lavalamp" >
      <ul class="desplegable">    
      <li><a href="Alta.php">Regresar</a></li>
      </ul>      
    </div>
  </div>  
      <?php
        $idProducto=$_POST['idProducto'];
        $departamento=$_POST['departamento'];
        $nombre=$_POST['nombre'];
        $categoria=$_POST['categoria'];
        $marca=$_POST['marca'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $existencia=$_POST['existencia'];
        $descripcion=$_POST['descripcion'];
        $archivo=$_FILES['img']['tmp_name'];
        $destino="Imagenes/".$_FILES['img']['name'];
        move_uploaded_file($archivo, $destino);
        
        include("acceso.php");
        
        $sql="insert into Producto values('$idProducto','$nombre','$categoria','$marca','$precio','$descripcion',
                                          '$peso','$existencia','$departamento','$destino')";
       $resultado = mysql_query($sql);
       if($resultado){
        echo "<h1><label style='color:red;'>¡Producto dado de Alta con Éxito!</label></h1><br>";
        echo "<img src='Imagenes/megusta.jpg'>";
      }
        else{
          echo "<h1><label style='color:red;'>¡Fallo en la Alta del Producto :(!</label></h1><br>";
          echo "<img src='Imagenes/nolike.jpg'>";
        }
       mysql_close($dp);
     ?>
En la madrugada de este día se ha suscitado un gran eclipse lunar.
 
  </div> 
 <br>
</div>
<div class ="pie">
    <ul align="center">
  <li>Copyright&copy; 2014, Adminstración de Base de Datos.</li><br>
       <!-- <li>Desarrollador:</li>
        <li>I.S.C. Paz Flores Manuel</li>-->
    </ul>
 </div>
</body> 
</html> 
