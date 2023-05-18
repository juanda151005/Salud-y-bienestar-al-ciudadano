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
        <h1>Busca tu hospital mas cercano</h1>
        <p id="p">Inicia sesión para que pruebes todas las funcionalidades de nuestra pagina web</p>
    </div>
    <div id="cuadro1">
        <form action="inicio_sesion.php" method="get">
            <input class="input" placeholder ="Usuario" type="text"  name="nombre">
            <input class="input" placeholder ="Contraseña" type="password" name="contrasena" id="" >
            <p id="p1"  class="texto"><a href="Crearcuenta2.html">¿No tienes cuenta?</a></p>
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
                            header("Location:inicio.html");
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