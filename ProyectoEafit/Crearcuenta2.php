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
    <link rel="stylesheet" href="Crearcuenta.css">
</head>
<body id="principal">
    <div id="cuadro1">
        <form action="Crearcuenta2.php" method="post">
            <input class="input" placeholder ="Nombre" type="text" onfocus="this.placeholder=''" name="nombre"
            onblur="this.placeholder='Nombre'" required>
            <input class="input" placeholder ="Correo" type="text" name="correo" id="" onfocus="this.placeholder=''" 
            onblur="this.placeholder='Correo'" required>
            <input class="input" placeholder ="Contraseña" type="password" onfocus="this.placeholder=''" name="contrasena"
            onblur="this.placeholder='Contraseña'" required>
            <input name="crear" class="boton" type="submit" value="Crear cuenta">
            <br><br>
            <?php
                include "conexion.php";

                if (isset($_POST["crear"])){
                    $nombre = $_POST["nombre"];
                    $correo = $_POST["correo"];
                    $contrasena = $_POST["contrasena"];

                    $consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

                    if($con->query($consulta)){
                        header("Location:inicio_sesion.php");
                    }else{
                        echo "Datos no creados";
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>