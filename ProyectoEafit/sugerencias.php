<?php
    include "conexion.php";
    
    if(isset($_POST["enviar"])){
        $sugerencia=$_POST["sugerencia"];

        $consulta = "INSERT INTO sugerencias (sugerencia) VALUES ('$sugerencia')";

        if($con->query($consulta)){
            echo "Gracias por tu sugerencia, la tendremos en cuenta";
        }
    }
    if (isset($_POST["volver"])) {
        header("Location:inicio.html");
    }
    ?>