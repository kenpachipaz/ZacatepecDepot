<html>
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

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Administrador Total</title>
<link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
<link rel="stylesheet" type="text/css" href="Css/buscar-en-tabla.css">
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
          <li><a href="extras.php">Regresar</a></li>
      </ul>      
    </div>
    <?php
		//ruta archivo de salida   
		//(el nombre lo componemos con Y_m_d_H_i_s para que sea diferente en cada backup)  
		$RUTA_ARCHIVO = '/var/www/ZacatepecDepot/RespaldosBD/respaldo'.date("Y_m_d_H_i_s").'.sql';  
		//comando  
		$command = "mysqldump -u root -ppaz13 Zacatepec_Depot < \"".$RUTA_ARCHIVO."\" ";   
		//ejecutamos  
		//system($command);
		echo "<br><h1 style='color:#9023FE'>Recuperación de la Base de datos con EXITO!</h1>"; 
		echo "<center><img src='Imagenes/backup.jpg'></center>";
    ?>
  </div>
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
