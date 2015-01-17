
<html>
<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
if($_SESSION['tipo']!="gerente electronica"){
session_start();
     header('Location:advertencia.php');
exit;}
?>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Gerente de Electrónica</title>
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
          <li><a href="consultaElectronica.php">Consulta</a></li>
	  	  <li><a href="estadisticasElectronica.php">Estadísticas</a></li>		
		  <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>
 <h2 style="color:#8978DA;"><?php session_start(); 
          echo "Bienvenido " ;
          echo $_SESSION['nombre']; echo " ";
          echo $_SESSION['tipo'];?></h2> 
 <img src="Imagenes/bienvenido.png">
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
