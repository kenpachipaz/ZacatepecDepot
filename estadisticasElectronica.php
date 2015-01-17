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
<script type="text/javascript">
function mostrar(formulario){
  var marcado=formulario.opcion.selectedIndex;
  switch(marcado){
    case 1:
    document.getElementById('meses').style.display='block';
    
    document.getElementById('categoria').style.display='none';
    document.getElementById('marca').style.display='none';
    break;
    case 2:
    document.getElementById('categoria').style.display='block';

    document.getElementById('meses').style.display='none';
    document.getElementById('marca').style.display='none';
    break;    
    case 3:
    document.getElementById('marca').style.display='block';

    document.getElementById('meses').style.display='none';
    document.getElementById('categoria').style.display='none';
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
          <li><a href="consultaDeportes.php">Consulta</a></li>
        <li><a href="estadisticasDeportes.php">Estadísticas</a></li>    
      <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>
  <div id="contenido">
    <h2>Estadísticas</h2>
    <form name="menu">
      <div class="tipo"> 
        <table align="center">
          <tr>
            <td>Por:</td>
            <td><select name="opcion" onChange="mostrar(this.form);">
                <option value="nada">--Seleccione Campo--</option>
                <option value="1">Meses</option>
                <option value="2">Categoría</option>
                <option value="2">Marca</option>
              </select>
            </td>                
          </tr>
        </table>
    </form> 

  <div id="meses" style="display: none;">
 <?php
 include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-01-01' and '2014-01-31'");
 $enero=mysql_num_rows($consulta);
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-02-01' and '2014-02-29'");
 $febrero=mysql_num_rows($consulta);
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-03-01' and '2014-03-31'");
 $marzo=mysql_num_rows($consulta);
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-04-01' and '2014-04-30'");
 $abril=mysql_num_rows($consulta);
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-05-01' and '2014-05-31'");
 $mayo=mysql_num_rows($consulta);
 $consulta = mysql_query("SELECT * FROM  ventas where idDepartamento='3' and fecha BETWEEN '2014-06-01' and '2014-06-30'");
 $junio=mysql_num_rows($consulta);
 function DesplegarGrafica($ancho,$alto,$valores)
 {
// Fonde de las Barras
  
   echo "<div style='background-color:#F8E6E0; 
                     border-style:solid; 
                     border-width:1px; 
                     border-color:#E0F8E0; 
                     position: relative;  
                     width:$ancho; 
                     height:$alto;
                     top:50%;
                     left:13%;'>\n";
   
   $maximovalor=0.0;                          //
   $nbarras=0;                                //
   foreach($valores as $nom => $val)          // <-- En este ciclo  
   {                                          //     buscamos el
     if($val>$maximovalor) $maximovalor=$val; //   numero de barras  
     $nbarras++;                              //  y el máximo valor.
   }                                          // 
   
   $alturatexto = 20;
   $anchobarra=$ancho / $nbarras;
   $escala=($alto-$alturatexto)/$maximovalor;   
   $i=0;
// Ciclo que imprime cada una de las barras   
   foreach($valores as $nom => $val)
   {
     $leftB= intval($i*$anchobarra);
     $widthB=$anchobarra-25;    
     $topB=($alto-$alturatexto) - ($val * $escala);
     $heightB=($alto-$alturatexto)-$topB;   
     // Aquí se pintan las barras
     echo "<div style=' 
   background: -webkit-linear-gradient(orange, pink);
   background: -moz-linear-gradient(orange, pink);
   background: -o-linear-gradient(orange, pink);;
                       border-style:solid; 
                       border-width:1px;
                       border-color:black;
                       position:absolute;
                       width:$widthB;
                       height:$heightB;
                       left:$leftB;
                       top:$topB'>\n";    
     // Colocamos el valor dentro de la barra                  
     echo "<center><b><label style='color:#A45FA1'>$val </label></b></center>"; 
     echo "</div>";
     $topT=($alto-$alturatexto);
     // Definimos un area transparente que contendrá la leyenda de abajo
     echo "<div style='position:absolute;
                       width:$widthB;
                       height:$alturatexto;
                       left:$leftB;
                       top:$topT'>\n";    
     echo "<center> <label style='color:blue'>$nom</label> </center>";
     echo "</div>";    
     $i++;
   }   
   echo "</div>";  
 }
 $ancho = 600;
 $alto = 300; 
 $valores=array('Enero'=>$enero, 
                'Febrero'=>$febrero,
                'Marzo'=>$marzo,
                'Abril'=>$abril,
                'Mayo'=>$mayo,
                'Junio'=>$junio,
               );

 echo " <h2 style='color:#45FF90'>Venta por Meses</h2>  <br>";
 DesplegarGrafica($ancho,$alto,$valores);
 mysql_close();
?>
</div>

<div id="categoria" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Categoria='Laptops' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Laptops=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Categoria='Tablets' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Tablets=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Categoria='Pantallas' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Pantallas=$row[0];
 function DesplegarGraficaCategoria($ancho,$alto,$valores)
 {
// Fondo de las Barras
  
   echo "<div style='background-color:#F8E6E0; 
                     border-style:solid; 
                     border-width:1px; 
                     border-color:#E0F8E0; 
                     position: relative;  
                     width:$ancho; 
                     height:$alto;
                     top:50%;
                     left:13%;'>\n";
   echo $Zapatos;
   $maximovalor=0.0;                          //
   $nbarras=0;                                //
   foreach($valores as $nom => $val)          // <-- En este ciclo  
   {                                          //     buscamos el
     if($val>$maximovalor) $maximovalor=$val; //   numero de barras  
     $nbarras++;                              //  y el máximo valor.
   }                                          // 
   
   $alturatexto = 20;
   $anchobarra=$ancho / $nbarras;
   $escala=($alto-$alturatexto)/$maximovalor;   
   $i=0;
// Ciclo que imprime cada una de las barras   
   foreach($valores as $nom => $val)
   {
     $leftB= intval($i*$anchobarra);
     $widthB=$anchobarra-25;    
     $topB=($alto-$alturatexto) - ($val * $escala);
     $heightB=($alto-$alturatexto)-$topB;   
     // Aquí se pintan las barras
     echo "<div style=' 
   background: -webkit-linear-gradient(orange, pink);
   background: -moz-linear-gradient(orange, pink);
   background: -o-linear-gradient(orange, pink);;
                       border-style:solid; 
                       border-width:1px;
                       border-color:black;
                       position:absolute;
                       width:$widthB;
                       height:$heightB;
                       left:$leftB;
                       top:$topB'>\n";    
     // Colocamos el valor dentro de la barra                  
     echo "<center><b><label style='color:#A45FA1'>$val </label></b></center>"; 
     echo "</div>";
     $topT=($alto-$alturatexto);
     // Definimos un area transparente que contendrá la leyenda de abajo
     echo "<div style='position:absolute;
                       width:$widthB;
                       height:$alturatexto;
                       left:$leftB;
                       top:$topT'>\n";    
     echo "<center> <label style='color:blue'>$nom</label> </center>";
     echo "</div>";    
     $i++;
   }   
   echo "</div>";  
 }
 $ancho = 600;
 $alto = 300; 
 $valores=array('Laptops'=>$Laptops, 
                'Tablets'=>$Tablets,
                'Pantallas'=>$Pantallas,
               );

 echo " <h2 style='color:#45FF90'>Venta por Categoría</h2>  <br>";
 DesplegarGraficaCategoria($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<div id="marca" style="display:none">
    <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Marca='Dell' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Dell=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Marca='Acer' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Acer=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Marca='Samsung' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $Samsung=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and P.Marca='LG' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $LG=$row[0];
 function DesplegarGraficaMarca($ancho,$alto,$valores)
 {
// Fondo de las Barras
  
   echo "<div style='background-color:#F8E6E0; 
                     border-style:solid; 
                     border-width:1px; 
                     border-color:#E0F8E0; 
                     position: relative;  
                     width:$ancho; 
                     height:$alto;
                     top:50%;
                     left:13%;'>\n";
   echo $Zapatos;
   $maximovalor=0.0;                          //
   $nbarras=0;                                //
   foreach($valores as $nom => $val)          // <-- En este ciclo  
   {                                          //     buscamos el
     if($val>$maximovalor) $maximovalor=$val; //   numero de barras  
     $nbarras++;                              //  y el máximo valor.
   }                                          // 
   
   $alturatexto = 20;
   $anchobarra=$ancho / $nbarras;
   $escala=($alto-$alturatexto)/$maximovalor;   
   $i=0;
// Ciclo que imprime cada una de las barras   
   foreach($valores as $nom => $val)
   {
     $leftB= intval($i*$anchobarra);
     $widthB=$anchobarra-25;    
     $topB=($alto-$alturatexto) - ($val * $escala);
     $heightB=($alto-$alturatexto)-$topB;   
     // Aquí se pintan las barras
     echo "<div style=' 
   background: -webkit-linear-gradient(orange, pink);
   background: -moz-linear-gradient(orange, pink);
   background: -o-linear-gradient(orange, pink);;
                       border-style:solid; 
                       border-width:1px;
                       border-color:black;
                       position:absolute;
                       width:$widthB;
                       height:$heightB;
                       left:$leftB;
                       top:$topB'>\n";    
     // Colocamos el valor dentro de la barra                  
     echo "<center><b><label style='color:#A45FA1'>$val </label></b></center>"; 
     echo "</div>";
     $topT=($alto-$alturatexto);
     // Definimos un area transparente que contendrá la leyenda de abajo
     echo "<div style='position:absolute;
                       width:$widthB;
                       height:$alturatexto;
                       left:$leftB;
                       top:$topT'>\n";    
     echo "<center> <label style='color:blue'>$nom</label> </center>";
     echo "</div>";    
     $i++;
   }   
   echo "</div>";  
 }
 $ancho = 600;
 $alto = 300; 
 $valores=array('Dell'=>$Dell, 
                'Acer'=>$Acer,
                'Samsung'=>$Samsung,
                'LG'=>$LG,
               );

 echo " <h2 style='color:#45FF90'>Venta por Marca</h2>  <br>";
 DesplegarGraficaMarca($ancho,$alto,$valores);
 mysql_close();
?>
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
