<html>
    <head>
        <title>Logeo</title>
        <link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
        <link rel="stylesheet" href="Css/styloCuentas.css" />   
        <link rel="stylesheet" href="Css/barramenu.css" /> 
        <link rel="stylesheet" href="Css/styleslogin.css" />

        <script>
            function cerrarSesion(){
                if(confirm("¿Estas Seguro de Cerrar la Sesión?"))
                    location.href="principal.html";
                else
                    location.href="welcomeUser.html";
            }
        </script>
    </head>
    <body>
        <?php
            $Usuario=$_POST['login'];
            $pass=$_POST['pass'];
            include("acceso.php");
            

            $sql="select Nombre, Password, Tipo_usuario from usuarios where Nombre ='$Usuario'";
            $resultado=mysql_query($sql);
            $row=mysql_fetch_array($resultado);
            $tipo=$row['Tipo_usuario'];
            
            

            if($row['Password']==$pass && $Usuario=='admin'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION['tipo']=$row['Tipo_usuario'];
                header('Location:principal.php');
            }
            if($row['Password']==$pass && $Usuario=='paz'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION['tipo']=$row['Tipo_usuario'];
                $_SESSION['nombre']=$row['Nombre'];
                header('Location:bienvenidoPaz.php');

            }
            if($row['Password']==$pass && $Usuario=='rocio'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION['tipo']=$row['Tipo_usuario'];
                $_SESSION['nombre']=$row['Nombre'];
                header('Location:bienvenidaRocio.php');
            }
            if($row['Password']==$pass && $Usuario=='jesus'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION['tipo']=$row['Tipo_usuario'];
                $_SESSION['nombre']=$row['Nombre'];
                header('Location:bienvenidoJesus.php');
            }
            if($row['Password']==$pass && $Usuario=='general'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION['tipo']=$row['Tipo_usuario'];
                header('Location:bienvenidoGeneral.php');
            }
            /*
            if($row['Password']==$pass && $tipo=='Usuario'){
                session_start();
                $_SESSION["sesionOK"]="si";
                $_SESSION["usuario"]=$row['Nombre'];
                $_SESSION["RFC"]=$row['Rfc'];
                $_SESSION['tipo']=$row['Tipo'];
                header('Location: user.php');
            }*/else {?>
              <script>alert ('Datos Incorrectos...');</script>
                      <div id = "menu">
      <div class="lavalamp" >
        <ul class="desplegable">
                <li><a href="login.html">Login</a></li>
            </ul>    
      </div>
    </div>
            <?php } 
        ?>
        
    </body>
</html>