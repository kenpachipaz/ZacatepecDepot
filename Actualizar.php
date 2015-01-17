

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
<script language="JavaScript">
 
function mostrar(formulario){
  /*for(i=0; i < document.menu.opcion.length; i++){
    if(document.menu.opcion[i].checked){
      marcado=i;
    }
  }*/
   var marcado=formulario.opcion.selectedIndex;
  switch(marcado){
    case 1:
    document.getElementById('divIDProducto').style.display='block';
    
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;
    
    case 2:
    document.getElementById('divNombre').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;

    case 3:
    document.getElementById('divCategoria').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;
    
    case 4:
    document.getElementById('divMarca').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;

    case 5:
    document.getElementById('divPrecio').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;
    
    case 6:
    document.getElementById('divDescripcion').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;
    
    case 7:
    document.getElementById('divPeso').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;

    case 8:
    document.getElementById('divExistencia').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divDepartamento').style.display='none';
    break;

    case 9:
    document.getElementById('divDepartamento').style.display='block';
    
    document.getElementById('divIDProducto').style.display='none';
    document.getElementById('divCategoria').style.display='none';
    document.getElementById('divMarca').style.display='none';
    document.getElementById('divPeso').style.display='none';
    document.getElementById('divPrecio').style.display='none';
    document.getElementById('divDescripcion').style.display='none';
    document.getElementById('divNombre').style.display='none';
    document.getElementById('divExistencia').style.display='none';
    break;
  }
 }
</script>
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
       <li><a href="Eliminar.php">Eliminar</a></li>
       <li><a href="Alta.php">Alta</a></li>
       <li><a href="bitacora.php">Bitacora</a></li>
       <li><a href="extras.php">Extras</a></li>
       <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>

  <div id="contenido">
    <h2>Actualizar Producto</h2>
    <form name="menu">
      <div class="tipo"> 
        <table>
          <tr>
            <td>Nueva Actualización del Producto:</td>
            <td><select name="opcion" onChange="mostrar(this.form);">
                <option value="nada">--Seleccione Campo--</option>
                <option value="2">Nombre</option>
                <option value="3">Categoría</option>
                <option value="4">Marca</option>
                <option value="5">Precio</option>
                <option value="6">Descripción</option>
                <option value="7">Peso</option>
                <option value="8">Existencia</option>
              </select>
            </td>                
          </tr>
        </table>
    </form> 
      <!-- Actualizar ID Producto-->
  <div id="divIDProducto" style="display: none;">
   <form action="procesarActualizar.php" name="nombreForm" method="post">
    <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="1">Actualizar ID</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nuevo ID del Producto:</td>
            <td><input type="text" name="nuevoID"/></td>                
          <tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
          </tr>
      </table>
    </form>
  </div>
  <!-- Actualizar Nombre-->
  <div id="divNombre" style="display: none;">
    <form action="procesarActualizar.php" name="nombreForm" method="post">
    <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="2">Actualizar Nombre</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nuevo Nombre del Producto:</td>
            <td><input type="text" name="nuevoNombre"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>            </tr>
        </table>
      </form>
  </div>  
  <!-- Actualizar Categoría -->
  <div id="divCategoria" style="display: none;">
    <form action="procesarActualizar.php" name="nombreForm" method="post">
    <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="3">Actualizar Categoría</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nueva Categoría del Producto:</td>
            <td><input type="text" name="nuevaCategoria"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
    </table>
    </form>
  </div>
  <!-- Actualizar Marca -->
  <div id="divMarca" style="display: none;">
    <form action="procesarActualizar.php" name="nombreForm" method="post">
    <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="4">Actualizar Marca</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nueva Marca del Producto:</td>
            <td><input type="text" name="nuevaMarca"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Actualizar Precio -->
    <div id="divPrecio" style="display: none;">
      <form action="procesarActualizar.php" name="nombreForm" method="post">
      <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="5">Actualizar Precio</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nuevo Precio del Producto:</td>
            <td><input type="text" name="nuevoPrecio"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Actualizar Descripción -->
    <div id="divDescripcion" style="display: none;">
      <form action="procesarActualizar.php" name="nombreForm" method="post">
      <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="6">Actualizar Descripción</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nueva Descripcion del Producto:</td>
            <td><textarea rows="4" cols="40" name="nuevaDescripcion" onclick="hacer_click()"></textarea>
            </td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Actualizar Peso -->
    <div id="divPeso" style="display: none;">
      <form action="procesarActualizar.php" name="nombreForm" method="post">
      <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="7">Actualizar Peso</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nuevo Peso del Producto:</td>
            <td><input type="text" name="nuevoPeso"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Actualizar Existencia -->
    <div id="divExistencia" style="display: none;">
      <form action="procesarActualizar.php" name="nombreForm" method="post">
      <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="8">Actualizar Existencia</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nueva Existencia del Producto:</td>
            <td><input type="text" name="nuevaExistencia"/></td>                
          <tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>
        </table>
      </form>
    </div>
    <!-- Actualizar Departamento -->
    <div id="divDepartamento" style="display: none;">
      <form action="procesarActualizar.php" name="nombreForm" method="post">
      <table >
          <tr> 
            <td>
              <select name="campo">
                <option value="9">Actualizar Departamento</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Producto:</td>
            <td><input type="text" name="idProductoBox"/></td>                
          <tr>
          <tr>
            <td>Nuevo Departemento del Producto:</td>
            <td><select name="nuevoDepartamento">
                <option value="nada">--Seleccione Departamento--</option>
                <option value="1">Deportes</option>
                <option value="2">Hogar</option>
                <option value="3">Electrónica</option>
              </select>
            </td>                
          <tr>   
          <tr>
                <td colspan="2" align="center"><input type="submit" name="actualizar" value="Actualizar"></td>
            </tr>         
        </table>
      </form>
    </div>
   <div> 
    <!--
        <tr>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >ID Producto</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Nombre</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Categoría</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Marca</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Precio</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Descripción</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Peso</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >Existencia</td>
          <td><input type="radio" name="opcion"  onClick="mostrar();" >ID Departamento</td>
        </tr>
        </table>
     </div>-->
  </div>
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