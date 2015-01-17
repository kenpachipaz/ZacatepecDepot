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
          <li><a href="principal.php">Inicio</a></li>
          <li><a href="#">Consulta</a>
        <ul>   
      <li><a href="Consulta.php">Producto</a>
      <li><a href="consultaDepartamento.php">Departamento</a> 
    <li><a href="consultaUsuarios.php">Usuarios</a> 
        </ul>
    </li>
          <li><a href="Alta.php">Alta</a></li>      
          <li><a href="Eliminar.php">Eliminar</a></li>
          <li><a href="Actualizar.php">Actualizar</a></li>
      <li><a href="bitacora.php">Bitacora</a></li>
      <li><a href="extras.php">Extras</a></li>
          <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
    <h1 style="color:blue;">Consulta Departamento</h1>
  </div>
 
 
            <div id="divContenedor">
            
            <div id="divTabla">
                <label for="txtBuscar" style="color:#8AA8F9;">Buscar: </label>
                <input type="search" id="txtBuscar" autofocus
                placeholder="Digite el texto que desea encontrar y presione la ENTER. Para cancelar la tecla ESCAPE.">
                
                <table border="1" id="tblTabla" width="100%">
                    <thead>
                        <tr>
                            <th>Id Departamento</th>
                            <th >Departamento</th>
                            </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                            include("acceso.php");
                            mysql_query("SET NAMES 'UTF8'");
                            $consulta = mysql_query("SELECT * FROM Departamento");
                            while($row = mysql_fetch_array($consulta)) {                            
                        ?>
                        <td><?php echo $row["idDepartamento"] ?></td>        
                        <td><?php echo $row["Nombre"] ?></td>            
                    </tr>                                        
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
        
        <script type="text/javascript" src="Scripts/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="Scripts/buscar-en-tabla.js"></script>
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
