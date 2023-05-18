<?php
    if (isset($_GET["buscar"])) {
        $eps = $_GET["eps"];
        if ($eps=="SURA") {
            header("Location:mapa_sura.html");
        }else if ($eps=="SAVIASALUD") {
            header("Location:mapa_saviasalud.html");
        }else if ($eps=="NUEVA EPS") {
            header("Location:mapa_nuevaeps.html");
        }else if ($eps=="SALUD TOTAL") {
            header("Location:mapa_saludtotal.html");
        }
    }
?>