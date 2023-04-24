<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <center>
    <h2>Selecciona tu eps a continuacion y mira que lugar te queda mas favorable para atender tu emergencia:</h2>
    <h3>Seleciona entre SURA, SAVIASALUD y NUEVA EPS.</h3>
    <div id="cuadro1">
        <form action="inicio.php" method="get">
            <input name="eps" class="input" placeholder ="EPS" type="text" onfocus="this.placeholder=''" onblur="this.placeholder='EPS'">
            <br><br>
            <input type="submit" class="boton" value="Buscar" name="buscar">
            <?php
                if (isset($_GET["buscar"])) {
                    $eps = $_GET["eps"];
                    if ($eps=="SURA") {
                        header("Location:mapa_sura.html");
                    }else if ($eps=="SAVIASALUD") {
                        header("Location:mapa_saviasalud.html");
                    }else if ($eps=="NUEVA EPS") {
                        header("Location:mapa_nuevaeps.html");
                    }
                }
            ?>
        </form>
    </div>
    </center>   
</body>
</html>