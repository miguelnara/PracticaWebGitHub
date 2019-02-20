<?php
    include('Config.php');
    include('Conexion.php');
    $operaciones = new Conectar(Config::$server, Config::$usuario, Config::$password, Config::$db);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <title>Java</title>
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
                            <img src="img/carouselJava1.png" alt="java1">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="item">
                            <img src="img/carouselJava2.png" alt="java2">
                            <div class="carousel-caption"></div>
                        </div>

                        <div class="item">
                            <img src="img/carouselJava3.png" alt="java3">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                </div>

                <div class="contenido">
                    <div class="container-fluid text-justify texto">
                        <h1 class="text-center">JAVA</h1>
                        <p>
                        Java es un lenguaje de programación de propósito general, concurrente, orientado a objetos, que fue diseñado específicamente para tener tan pocas 
                        dependencias de implementación como fuera posible. Su intención es permitir que los desarrolladores de aplicaciones escriban el programa una vez y lo 
                        ejecuten en cualquier dispositivo (conocido en inglés como WORA, o "write once, run anywhere"), lo que quiere decir que el código que es ejecutado en 
                        una plataforma no tiene que ser recompilado para correr en otra. Java es, a partir de 2012, uno de los lenguajes de programación más populares en uso, 
                        particularmente para aplicaciones de cliente-servidor de web, con unos diez millones de usuarios reportados.2<br><br>
                        El lenguaje de programación Java fue originalmente desarrollado por James Gosling, de Sun Microsystems (constituida en 1982 y posteriormente adquirida 
                        el 27 de enero de 2010 por la compañía Oracle),4​ y publicado en 1995 como un componente fundamental de la plataforma Java de Sun Microsystems. Su 
                        sintaxis deriva en gran medida de C y C++, pero tiene menos utilidades de bajo nivel que cualquiera de ellos. Las aplicaciones de Java son compiladas 
                        a bytecode (clase Java), que puede ejecutarse en cualquier máquina virtual Java (JVM) sin importar la arquitectura de la computadora subyacente.<br><br>
                        La compañía Sun desarrolló la implementación de referencia original para los compiladores de Java, máquinas virtuales y librerías de clases en 1991, y 
                        las publicó por primera vez en 1995. A partir de mayo de 2007, en cumplimiento de las especificaciones del Proceso de la Comunidad Java, Sun volvió a 
                        licenciar la mayoría de sus tecnologías de Java bajo la Licencia Pública General de GNU. Otros también han desarrollado implementaciones alternas a 
                        estas tecnologías de Sun, tales como el Compilador de Java de GNU y el GNU Classpath.
                        </p>
                    </div>
                    <div>
            <h1>COMENTARIOS</h1>
            <form action="#" method="post" onsubmit="">
                <label>Nombre</label><br>
                <input type="text" name="nombre">
                <br>
                <label>Comentario</label><br>
                <textarea name="comentario" rows="10" cols="120"></textarea>
                <br>
                <input type="submit" value="Aceptar">
            </form>
            <?php
                if($_POST){
                    $nombre=$_POST['nombre'];
                    $comentario=$_POST['comentario'];
                    $resultado=$operaciones->añadir_comentario($nombre, $comentario);
                }
                echo "</div>";
                $mostrar=$operaciones->mostrar_comentarios();
                while($row=mysqli_fetch_array($mostrar)){
                    echo "<div>";
						echo "<h3>".$row[1]."  dijo:</h3>";
						echo "<h3><span>".$row[2]."</span></h3>";
				    echo "</div>";
                }
            ?>
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