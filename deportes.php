<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<title>Zacatepec Depot</title>
<link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
<link rel="stylesheet" href="Css/styloCuentas.css" />   
<link rel="stylesheet" href="Css/barramenu.css" /> 
<link rel="stylesheet" href="Css/styleslogin.css" />

<!--<link rel="stylesheet" href="Css/menuDesplegable.css" />-->
<style type="text/css">
  #img1{
    position: absolute;
    top: 430px;
    left: 760px;
    z-index: 21;
  }
  #img2{
    position: absolute;
    top: 580px;
    left: 750px;
    z-index: 17;
  }
  #img3{
    position: absolute;
    top: 760px;
    left: 760px;
    z-index: 18;
  }
  #img4{
    position: absolute;
    top: 960px;
    left: 760px;
    z-index: 19;
  }
</style>
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
          <li><a href="index.html">Inicio</a></li>
          <li><a href="#">Departamentos</a>
	      <ul>   
	  	<li><a href="#">Deportes</a>
	  	<li><a href="electronica.php">Electrónica</a>	
	 	<li><a href="hogar.php">Hogar</a>	
	      </ul>
	  </li>
	  <li><a href="#">Nosotros</a></li>		
	  <li><a href="contactanos.html">Contáctanos</a></li>
	  <li><a href="sustentable.html">Un Planeta Sustentable</a></li>
	  <li><a href="login.html">Login</a></li>
      </ul>      
    </div>
 </div>
 <h1 style="color:#BF1301; text-align:center;">Deportes</h1>  
 <?php 
 header("Content-Type: text/html;charset=utf-8");        
       include("acceso.php");
       mysql_query("SET NAMES 'UTF8'");
       	$consulta = mysql_query("SELECT * FROM  Producto where idDepartamento=1");
        
        
        
        while($row = mysql_fetch_array($consulta)) {
          ?>
          <table width='100%'>
              <tr>
                <td colspan="2"><h2 style="color:#8901EF;"><?php echo $row["Nombre"];?></h2></td>
                <td rowspan="6"><img src='<?php echo $row['imagen'];?>' width="210" height="110"></td>
              </tr>
              <tr>
                <td>Categoría:</td>
                <td style="color:#9089DF;"><?php echo $row["Categoria"];?></td>
              </tr>
              <tr>
                <td>Marca:</td>
                <td style="color:#9089DF;"><?php echo $row["Marca"];?></td>
              </tr>           
              <tr>
                <td>Precio:</td>
                <td style="color:#9089DF;"><?php echo $row["Precio"];?></td>
              </tr>
              <tr>
                <td>Descripción:</td>
                <td style="color:#9089DF;"><?php echo $row["Descripcion"];?></td>
              </tr>
              <tr>
                <td colspan="2"><input type="submit" value="Añadir al carro"></td>                
              </tr>       
          </table>
       <?php }?>
 
 </div>
 <br>
  <!--<div id="img1"><img src="Imagenes/depDep02.jpg" width="205" height="100"></div>
 <div id="img2"><img src="Imagenes/depDep01.jpg" width="235" height="120"></div>
 <div id="img3"><img src="Imagenes/depDep03.jpg" width="205" height="120"></div>
 <div id="img4"><img src="Imagenes/depDep04.jpg" width="190" height="100"></div>-->
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


