<?php
    include "conexion.php";

    if (isset($_POST["crear"])){
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        
        $consulta2 = "SELECT Id_usuarios FROM usuarios WHERE nombre='$nombre' AND contrasena='$contrasena'";
        $resultado = $con->query($consulta2);
        if($resultado->num_rows==1){
            echo "Usuario ya creado, intenta con otro nombre";
        }else{
            $consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
            
            if($con->query($consulta)){
                header("Location:inicio_sesion.php");
            }else{
                echo "Datos no creados";
            }
        }
    }
?>