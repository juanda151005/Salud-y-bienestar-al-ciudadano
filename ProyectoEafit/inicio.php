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
    
    <div id="cuadro1">
        <form action="inicio.php" method="get">
            <input name="eps" class="input" placeholder ="EPS" type="text" onfocus="this.placeholder=''" onblur="this.placeholder='EPS'">
            <input type="submit" class="boton" value="Buscar" name="buscar">
            <?php
                if (isset($_GET["buscar"])) {
                    $eps = $_GET["eps"];
                    if ($eps=="SURA") {
                        header("Location:mapa_sura.html");
                    }else if ($eps=="SAVIASALUD") {
                        header("Location:mapa_saviasalud.html");
                    }
                }
            ?>
        </form>
    </div>
   
</body>
</html>