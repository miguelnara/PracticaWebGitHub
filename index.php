<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Inicio</title>
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
                            <img src="img/carousel1.jpg" alt="programacion1">
                            <div class="carousel-caption">APRENDE</div>
                        </div>

                        <div class="item">
                            <img src="img/carousel2.jpg" alt="programacion2">
                            <div class="carousel-caption">PRACTICA</div>
                        </div>

                        <div class="item">
                            <img src="img/carousel3.jpg" alt="programacion3">
                            <div class="carousel-caption">PROGRAMA</div>
                        </div>
                    </div>
                </div>

                <div class="contenido">
                    <div class="container-fluid text-center">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h2 class="display-4">¡BIENVENIDO A MI PAGINA!</h2>
                                <p class="lead">CONOCE ALGUNOS DE LOS LENGUAJES DE PROGRAMACION <span class="negrita">MAS
                                        USADOS</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid center-block">
                        <video controls preload>
                            <source src="vid/video.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="container-fluid text-justify texto">
                        <h1 class="text-center">INTRODUCCION</h1>
                        <p>
                            Un lenguaje de programación es un lenguaje formal que especifica una serie de instrucciones
                            para que una computadora produzca diversas clases de datos. Los lenguajes de programación
                            pueden usarse para crear programas que pongan en práctica algoritmos específicos los cuales
                            controlan el comportamiento físico y lógico de una computadora.
                            <br /><br />
                            Está formado por un conjunto de símbolos y reglas sintácticas y semánticas que definen su
                            estructura y el significado de sus elementos y expresiones. Al proceso por el cual se
                            escribe, se prueba, se depura, se compila (de ser necesario) y se mantiene el código fuente
                            de un programa informático se le llama programación.
                            <br /><br />
                            También la palabra programación se define como el proceso de creación de un programa de
                            computadora, mediante la aplicación de procedimientos lógicos, a través de los siguientes
                            pasos:
                            <ul>
                                <li>El desarrollo lógico del programa para resolver un problema en particular.</li>
                                <li>Escritura de la lógica del programa empleando un lenguaje de programación
                                    específico (codificación del programa).</li>
                                <li>Escritura de la lógica del programa empleando un lenguaje de programación
                                    específico (codificación del programa).</li>
                                <li>Ensamblaje o compilación del programa hasta convertirlo en lenguaje de máquina.</li>
                                <li>Prueba y depuración del programa.</li>
                                <li>Desarrollo de la documentación.</li>
                            </ul><br />
                            Existe un error común que trata por sinónimos los términos 'lenguaje de programación' y
                            'lenguaje informático'. Los lenguajes informáticos engloban a los lenguajes de programación
                            y a otros más, como por ejemplo HTML (lenguaje para el marcado de páginas web que no es
                            propiamente un lenguaje de programación, sino un conjunto de instrucciones que permiten
                            estructurar el contenido de los documentos).
                            <br /><br />
                            Permite especificar de manera precisa sobre qué datos debe operar una computadora, cómo
                            deben ser almacenados o transmitidos y qué acciones debe tomar bajo una variada gama de
                            circunstancias. Todo esto, a través de un lenguaje que intenta estar relativamente próximo
                            al lenguaje humano o natural. Una característica relevante de los lenguajes de programación
                            es precisamente que más de un programador pueda usar un conjunto común de instrucciones que
                            sean comprendidas entre ellos para realizar la construcción de un programa de forma
                            colaborativa.
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