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
<html>
    <head>
        <title>Consulta De Libros</title>
        <link rel="shortcut icon" href="Imagenes/logo.ico" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="Css/demo_table.css" />
        <link rel="stylesheet" type="text/css" href="Css/buscar-en-tabla.css">
        <link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
        <link rel="stylesheet" href="Css/styloCuentas.css" />    
        <!--<link rel="stylesheet" href="Css/stylo.css" />         -->
        <link rel="stylesheet" href="Css/barramenu.css" /> 
        <link rel="stylesheet" href="Css/styleslogin.css" />         
        <script language="JavaScript" src ="Scripts/jquery.js"> </script>
        <script language="JavaScript" src ="Scripts/jquery.dataTables.js"> </script>
        <!--<script language="JavaScript" src="http://cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">-->
        <script type="text/javascript" charset="utf-8">
C
            $(document).ready(function() {
                $('#example').dataTable({
                    "oLanguage": {
                        "sUrl": "media/js/datatable.spanish.txt"
                    }
                });
            });


        </script>
        <style type="text/css">
            th{
                color:black;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body bgcolor="gray">
    <div id = "menu">
        <div class="lavalamp" >
            <ul class="desplegable">
                <li><a href="Consulta.php">Regresar</a></li>
            </ul>      
        </div>
    </div>
        <h1 style="color:blue;">Consulta de Productos Existentes</h1>
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
                            $consulta = mysql_query("SELECT * FROM Producto");
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
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
        
        <script type="text/javascript" src="Scripts/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="Scripts/buscar-en-tabla.js"></script>
        <div class="pie">
             <ul align="center">
                <li>Copyright&copy; 2014, Adminstración de Base de Datos.</li><br>
            </ul>
        </div>
    </body>
</html>