
<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
if($_SESSION['tipo']!="gerente hogar"){
session_start();
     header('Location:advertencia.php');
exit;}
?>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Gerente de Hogar</title>
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
          <li><a href="bienvenidaRocio.php">Bienvenida</a></li>
          <li><a href="estadisticaHogar.php">Estadísticas</a></li>     
          <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
    <h1 style="color:blue;">Consulta de Productos Existentes en el Departamento de Hogar</h1>
  </div>
 
 
            <div id="divContenedor">
            
            <div id="divTabla">
                <label for="txtBuscar" style="color:#8AA8F9;">Buscar: </label>
                <input type="search" id="txtBuscar" autofocus
                placeholder="Digite el texto que desea encontrar y presione la ENTER. Para cancelar la tecla ESCAPE.">
                
                <table border="1" id="tblTabla" width="100%">
                    <thead>
                        <tr>
                            <th>ID Producto</th>
                            <th >Nombre</th>
                            <th>Categoria</th>
                            <th>Marca</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Peso</th>
                            <th>Existencia</th>
                            <th>ID Departamento</th>
                            </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                            include("acceso.php");
                            mysql_query("SET NAMES 'UTF8'");
                            $consulta = mysql_query("SELECT * FROM Producto where idDepartamento=2");
                            while($row = mysql_fetch_array($consulta)) {     
                                                 
                        ?>

                        <td><?php echo $row["IdProducto"] ?></td>        
                        <td><?php echo $row["Nombre"] ?></td>            
                        <td><?php echo $row["Categoria"]?></td>          
                        <td><?php echo $row["Marca"]?></td>
                        <td><?php echo $row["Precio"]?></td>             
                        <td><?php echo $row["Descripcion"]?></td>
                        <td><?php echo $row["Peso"]?></td>
                        <td><?php echo $row["Cant_prod_exis"]?></td>
                        <td><?php echo $row["idDepartamento"]?></td>

                    </tr>                                        
                        <?php 
                    } ?>
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
