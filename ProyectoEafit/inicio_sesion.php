<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="inicio_sesion.css">
</head>
<body id="principal">
    
    <div id="texto_principal">
        <h1>Nombre Proyecto</h1>
        <p id="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio cum molestiae voluptatem dicta ipsum animi odit, quas dolores maiores minima quod nulla? Quis necessitatibus ratione omnis reiciendis perferendis dolorum laudantium!</p>
    </div>
    <div id="cuadro1">
        <form action="inicio_sesion.php" method="get">
            <input class="input" placeholder ="Usuario" type="text" onfocus="this.placeholder=''" name="nombre"
            onblur="this.placeholder='Usuario'">
            <input class="input" placeholder ="Contraseña" type="password" name="contrasena" id="" onfocus="this.placeholder=''" 
            onblur="this.placeholder='Contraseña'">
            <p id="p1"  class="texto"><a href="Crearcuenta2.php">¿No tienes cuenta?</a></p>
            <input type="submit" class="boton" value="Iniciar Sesion" name="iniciar">
            <br><br>
            <center>
                <?php
                    include "conexion.php";

                    if(isset($_GET["iniciar"])){
                        $nombre = $_GET["nombre"];
                        $contrasena = $_GET["contrasena"];

                        $consulta = "SELECT Id_usuarios FROM usuarios WHERE nombre='$nombre' AND contrasena='$contrasena'";
                        $resultado = $con->query($consulta);

                        if($resultado->num_rows==1){
                            header("Location:error_page.html");
                        } else{
                            echo "Usuario incorrecto";
                        }
                    }
                ?>
            </center>
        </form>

        

    </div>
    
    
</body>
</html>