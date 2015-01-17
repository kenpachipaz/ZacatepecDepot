
<!DOCTYPE html>
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
<title>Alta Producto</title>
<link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
<link rel="stylesheet" href="Css/styloCuentas.css" />   
<link rel="stylesheet" href="Css/barramenu.css" /> 
<link rel="stylesheet" href="Css/styleslogin.css" />
<!--<link rel="stylesheet" href="Css/menuDesplegable.css" />-->
<script language="JavaScript" src ="Scripts/validarAlta.js"> </script>
</head>
<body>
<img src="Imagenes/registro.png" style="position: absolute; top: 380px; right: 280px;" alt=""/>
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
	  	 <li><a href="Eliminar.php">Eliminar</a></li>
		   <li><a href="Actualizar.php">Actualizar</a></li>
       <li><a href="bitacora.php">Bitacora</a></li>
       <li><a href="extras.php">Extras</a></li>
		   <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>

  <div id="contenido">
    <h2>Registrar Nuevo Producto</h2>
    <form action="procesarAlta.php" method="post" name="formulario" onSubmit='return valida(this)' enctype="multipart/form-data">
     <div class="tipo">  
      <table>
        <tr>
          <td>ID Producto:</td>
          <td><input type="text" name="idProducto"></td>
          <td id="errorID" style="display:none;"><label style="color: red;">*Ingrese ID</label></td>
        </tr>
        <tr>
          <td>Departamento:</td>
          <td><select name="departamento">
                <option value="nada">--Seleccione Departamento--</option>
                <option value="1">Deportes</option>
                <option value="2">Hogar</option>
                <option value="3">Electrónica</option>
              </select>
          </td>
          <td id="errorDepartamento" style="display:none;"><label style="color: red;">*Seleccione Departamento</label></td>
        </tr>
        <tr>
          <td>Nombre:</td>
          <td><input type="text" name="nombre"></td>
          <td id="errorNombre" style="display:none;"><label style="color: red;">*Ingrese Nombre</label></td>
        </tr>
        <tr>
          <td>Categoría:</td>
          <td><input type="text" name="categoria"></td>
          <td id="errorCategoria" style="display:none;"><label style="color: red;">*Ingrese Categoría</label></td>
        </tr>
        <tr>
          <td>Marca:</td>
          <td><input type="text" name="marca"></td>
          <td id="errorMarca" style="display:none;"><label style="color: red;">*Ingrese Marca</label></td>
        </tr>
        <tr>
          <td>Precio:</td>
          <td><input type="text" name="precio"></td>
          <td>
            <label id="errorPrecio" style="color: red; display:none;">*Ingrese Precio</label>
            <label id="noFlotante" style="color: red; display:none;">*Precio debe ser de tipo float</label>
          </td>
        </tr>
        <tr>
          <td>Peso:</td>
          <td><input type="text" name="peso"></td>
          <td id="errorPeso" style="display:none;"><label style="color: red;">*Ingrese Peso</label></td>
        </tr>
        <tr>
          <td>Existencia:</td>
          <td><input type="text" name="existencia"></td>
          <td id="errorExistencia" style="display:none;"><label style="color: red;">*Ingrese Existencia</label></td>
        </tr>
        <tr>
          <td>Descripción:</td>
          <td><textarea rows="4" cols="40" name="descripcion" placeholder="Breve Descripción..."></textarea></td>
          <td id="errorDescripcion" style="display:none;"><label style="color: red;">*Ingrese una Descripción</label></td>
        </tr>
        <tr>
          <td>Imagen</td>
          <td><input type="file" name="img"></td>
          <td id="errorImg" style="display:none;"><label style="color: red;">*Seleccione una imagen</label></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="registrar" value="Registrar">
          </td>
        </tr>
       </table>
     </div>
    </form>

  </div>
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