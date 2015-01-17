<html>
<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
?>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Advertencia</title>
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
      <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>
  <h1><label style="color:red;">¡ADVERTENCIA!</label></h1>
 <img src="Imagenes/advertencia.jpg">
 <h2>Usted está tratando de acceder a páginas que no le corresponde. 
  Cierre Sesión e Inicie una nueva Sesión para poder acceder a la página correspondiente.  
 </h2>
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
