<html>
<?php
session_start();
if ($_SESSION["sesionOK"]!="si"){
header('Location:login.html');
exit;
} 
if($_SESSION['tipo']!="Gerente General"){
session_start();
     header('Location:advertencia.php');
exit;}
?>


<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Gerente General</title>
<link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
<link rel="stylesheet" href="Css/styloCuentas.css" />   
<link rel="stylesheet" href="Css/barramenu.css" /> 
<link rel="stylesheet" href="Css/styleslogin.css" />

<!--<link rel="stylesheet" href="Css/menuDesplegable.css" />-->
<script type="text/javascript">
function mostrar(formulario){
  var marcado=formulario.opcion.selectedIndex;
  <?php $var="<script>document.write(marcado)</script>"?>
  switch(marcado){
    case 1:
    document.getElementById('enero').style.display='block';
    
    document.getElementById('febrero').style.display='none';
    document.getElementById('marzo').style.display='none';
    document.getElementById('abril').style.display='none';
    document.getElementById('mayo').style.display='none';
    document.getElementById('junio').style.display='none';
    break;
    case 2:
    document.getElementById('febrero').style.display='block';
    
    document.getElementById('enero').style.display='none';
    document.getElementById('marzo').style.display='none';
    document.getElementById('abril').style.display='none';
    document.getElementById('mayo').style.display='none';
    document.getElementById('junio').style.display='none';
    break;    
    case 3:
    document.getElementById('marzo').style.display='block';
    
    document.getElementById('enero').style.display='none';
    document.getElementById('febrero').style.display='none';
    document.getElementById('abril').style.display='none';
    document.getElementById('mayo').style.display='none';
    document.getElementById('junio').style.display='none';
    break;
    case 4:
    document.getElementById('abril').style.display='block';
    
    document.getElementById('enero').style.display='none';
    document.getElementById('febrero').style.display='none';
    document.getElementById('marzo').style.display='none';
    document.getElementById('mayo').style.display='none';
    document.getElementById('junio').style.display='none';
    break;
    case 5:
    document.getElementById('mayo').style.display='block';
    
    document.getElementById('enero').style.display='none';
    document.getElementById('febrero').style.display='none';
    document.getElementById('abril').style.display='none';
    document.getElementById('marzo').style.display='none';
    document.getElementById('junio').style.display='none';
    break;
    case 6:
    document.getElementById('junio').style.display='block';
    
    document.getElementById('enero').style.display='none';
    document.getElementById('febrero').style.display='none';
    document.getElementById('abril').style.display='none';
    document.getElementById('mayo').style.display='none';
    document.getElementById('marzo').style.display='none';
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
          <li><a href="bienvenidoGeneral.php">Bienvenida</a></li>
        <li><a href="consultaGeneral.php">Consulta</a></li>    
      <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
      </ul>      
    </div>
  </div>
  <div id="contenido">
    <h2>Estadísticas</h2>
    <form name="menu" method="POST">
      <div class="tipo"> 
        <table align="center">
          <tr>
            <td>Mes:</td>
            <td><select name="opcion" onChange='mostrar(this.form)'>
                <option value="nada">--Seleccione Campo--</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
              </select>
            </td>              
          </tr>
        </table>
    </form> 

 <!--   MES DE ENERO   -->   
<div id="enero" style="display: none">


<?php
 include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-01-01' and '2014-01-31'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-01-01' and '2014-01-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-01-01' and '2014-01-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaEnero($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaEnero($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<!-- MES DE FEBRERO -->
<div id="febrero" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-02-01' and '2014-02-29'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-02-01' and '2014-02-29' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-02-01' and '2014-02-29' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaFebrero($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaFebrero($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<!--  MES DE MARZO  -->
<div id="marzo" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-03-01' and '2014-03-31'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-03-01' and '2014-03-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-03-01' and '2014-03-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaMarzo($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaMarzo($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<!--  MES DE ABRIL -->
<div id="abril" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-04-01' and '2014-04-30'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-04-01' and '2014-04-30' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-04-01' and '2014-04-30' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaAbril($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaAbril($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<!--  MES DE MAYO  -->
<div id="mayo" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-05-01' and '2014-05-31'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-05-01' and '2014-05-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-05-01' and '2014-05-31' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaMayo($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaMayo($ancho,$alto,$valores);
 mysql_close();
?>
</div >
<!--   MES DE JUNIO  -->
<div id="junio" style="display: none">
  <?php
   include("acceso.php");
 mysql_query("SET NAMES 'UTF8'");
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=1 and fecha BETWEEN '2014-06-01' and '2014-06-30'and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $deportes=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=2 and fecha BETWEEN '2014-06-01' and '2014-06-30' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $hogar=$row[0];
 $consulta = mysql_query("SELECT SUM(V.cantidad) from ventas V INNER JOIN Producto P where V.idDepartamento=3 and fecha BETWEEN '2014-06-01' and '2014-06-30' and V.IdProducto=P.IdProducto");
 $row = mysql_fetch_array($consulta);
 $electronica=$row[0];
 
 function DesplegarGraficaJunio($ancho,$alto,$valores)
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
 $valores=array('Deportes'=>$deportes, 
                'Hogar'=>$hogar,
                'Electrónica'=>$electronica,
               );

 echo " <h2 style='color:#45FF90'>Venta por Departamento</h2>  <br>";
 DesplegarGraficaJunio($ancho,$alto,$valores);
 mysql_close();
?>
</div >
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
