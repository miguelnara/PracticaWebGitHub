<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Javascript</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <?php
            include "cabecera.inc";
        ?>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="miCarousel" class="carousel slide center-block" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#miCarousel" data-slide-to="1"></li>
                        <li data-target="#miCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/carouselJavascript1.jpg" alt="javascript1">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="item">
                            <img src="img/carouselJavascript2.jpg" alt="javascript2">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="item">
                            <img src="img/carouselJavascript3.jpg" alt="javascript3">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                </div>

                <div class="contenido">
                    <div class="container-fluid text-justify texto">
                        <h1 class="text-center">JAVASCRIPT</h1>
                        <p>
                        JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se 
                        define como orientado a objetos,3​ basado en prototipos, imperativo, débilmente tipado y dinámico.<br><br>
                        Se utiliza principalmente en su forma del lado del cliente (client-side), implementado como parte de un navegador web 
                        permitiendo mejoras en la interfaz de usuario y páginas web dinámicas4​ aunque existe una forma de JavaScript del lado del 
                        servidor (Server-side JavaScript o SSJS). Su uso en aplicaciones externas a la web, por ejemplo en documentos PDF, 
                        aplicaciones de escritorio (mayoritariamente widgets) es también significativo.<br><br>
                        Desde el 2012, todos los navegadores modernos soportan completamente ECMAScript 5.1, una versión de javascript. Los 
                        navegadores más antiguos soportan por lo menos ECMAScript 3. La sexta edición se liberó en julio del 2015.5<br><br>
                        JavaScript se diseñó con una sintaxis similar a C, aunque adopta nombres y convenciones del lenguaje de programación Java. 
                        Sin embargo, Java y JavaScript tienen semánticas y propósitos diferentes.<br><br>
                        Todos los navegadores modernos interpretan el código JavaScript integrado en las páginas web. Para interactuar con una 
                        página web se provee al lenguaje JavaScript de una implementación del Document Object Model (DOM).<br><br>
                        Tradicionalmente se venía utilizando en páginas web HTML para realizar operaciones y únicamente en el marco de la aplicación 
                        cliente, sin acceso a funciones del servidor. Actualmente es ampliamente utilizado para enviar y recibir información del servidor 
                        junto con ayuda de otras tecnologías como AJAX. JavaScript se interpreta en el agente de usuario al mismo tiempo que las sentencias 
                        van descargándose junto con el código HTML.<br><br>
                        Desde el lanzamiento en junio de 1997 del estándar ECMAScript 1, han existido las versiones 2, 3 y 5, que es la más usada 
                        actualmente (la 4 se abandonó6​). En junio de 2015 se cerró y publicó la versión ECMAScript 6.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <?php
            include "pie.inc";
        ?>
        
    </div>
</body>


</html>