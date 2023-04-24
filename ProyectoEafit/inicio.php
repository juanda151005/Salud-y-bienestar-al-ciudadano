<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca tu EPS</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="inicio.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <nav>
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
                        }else if ($eps=="NUEVA EPS") {
                            header("Location:mapa_nuevaeps.html");
                        }
                    }
            ?>
        </form>
        </nav>
        <section class="textos-header">
            <h1>Busca un hospital o centro de salud disponible para tu EPS</h1>
            <h2>Selecciona entre SURA, NUEVA EPS y SAVIASALUD</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestra Pagina Web</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Consiste en:</h3>
                    <p>Nuesta pagina connsiste en un sistema de informacion web donde tu podras encontrar hospitales o centro de salud disponibles segun tu EPS.</p>
                    <h3><span>2</span>¿Como usarla?</h3>
                    <p>Primero que todo tienes que crear una cuenta, despues de ello, inicia sesión y en nuestra pagina principal en la parte suerior derecha podras buscar tu eps. Hasta el momento solo hay siponibles 3 eps diferentes (SURA, SAVIA SALUD Y NUEVA EPS). Para que la busqueda sea satisfactoria debes de digitar el nombre de tu eps en letra mayusculas.</p>
                </div>
            </div>
        </section>
        
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestro Aporte a la sociedad</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/salvarvidas.jpg" alt="">
                        <h3>Ayudamos a salvar vidas</h3>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/accesoinfo.png" alt="">
                        <h3>Facilitamos el acceso a la informacion</h3>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/atencion.jpg" alt="">
                        <h3>Las personas pueden ir a los hospitales sin temor a que no los atiendan</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Juan@gmail.com</h4>
                <p>Juan David</p>
            </div>
            <div class="content-foo">
                <h4>Jean@gmail.com</h4>
                <p>Jean Paul</p>
            </div>
            <div class="content-foo">
                <h4>Esteban@gmail.com</h4>
                <p>Esteban</p>
            </div>
        </div>
        <h2 class="titulo-final"> Salud y bienestar al ciudadano</h2>
    </footer>
</body>

</html>