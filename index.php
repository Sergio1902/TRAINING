<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Coca Cola es la bebiba mas refrescante del planeta">
    <meta name="keywords" content="bebida, gaceosa, cola">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca Cola</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png">
    
    <script src="https://kit.fontawesome.com/0f83311815.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div class="main-container">
            <a href="index.html" class="logo">
                <img class="logo" src="img/logo.svg" alt="COCA - COLA">
            </a>
            <nav id="menu">
                <a href="#Inicio">Inicio</a>
                <a href="#Nosotros">Nosotros</a>
                <a href="#Servicios">Servicios</a>
                <a href="#Galeria">Galería</a>  
                <a href="#Contactenos">Contáctenos</a> 
            </nav>
            <div class="hamburguesa">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section id="Inicio">
            <!-- <img src="img/bannerprincipal.jpg" alt="banner_principal"> -->
            <div class="bloque-inicio">
                <h1>Bienvenidos</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <a href="#Nosotros" class="boton-inicio">Ver más</a>
            </div>
        </section>
        <section id="Nosotros" class="section">
            <div class="main-container">
                <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </section>
        <section id="Servicios" class="section">
            <div class="main-container">
                <div class="card-global-servicios">
                    <div class="card-servicios">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio">
                                <img src="img/servicio1.png" alt="servicio1">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 1</h3>
                                <p>Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                            </div>
                            <a href="#">Ver más...</a>
                        </div>
                    </div>
                    <div class="card-servicios">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio">
                                <img src="img/servicio2.png" alt="servicio2">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 2</h3>
                                <p>Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                                
                            </div>
                            <a href="#">Ver más...</a>
                        </div>
                    </div>
                    <div class="card-servicios">
                        <div class="bloque-servicio">
                            <div class="bloque-img-servicio">
                                <img src="img/servicio3.png" alt="servicio3">
                            </div>
                            <div class="bloque-contenido-servicio">
                                <h3>Servicio 3</h3>
                                <p>Type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                                
                            </div>
                            <a href="#">Ver más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Galeria">
            <div class="main-container-fluid">
                <div class="card-global-galeria">
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery1.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery3.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery2.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery4.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery2.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                    <div class="card-galeria">
                        <div class="cuadrado-perfecto">
                            <img src="img/galery1.jpg" alt="galeria">
                            <h4>Imagen I</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Contactenos" >       
            <iframe  frameBorder="0" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Lima+(peru)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <div class="contactos-form">
                <form action="index.php" method="POST">
                    <div class="form-block">
                        <input type="text" name="nombre" placeholder="Apellidos y Nombres" class="from-control">
                    </div>
                    <div class="form-block">
                        <input type="email" name="email" placeholder="Correo Electrónico" class="from-control">
                    </div>
                    <div class="form-block">
                        <textarea name="mensaje" placeholder="Comentario"></textarea>
                    </div>
                    <div class="form-block">
                        <input class="boton" type="submit" value="ENVIAR">
                    </div>
  
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            $nombre = $_POST["nombre"];
                            $email = $_POST["email"];
                            $mensaje = $_POST["mensaje"];

                            if(isset($nombre)){
                                if(isset($email)){
                                    if(isset($mensaje)){
                                        $para = "ser19car@gmail.com";
                                        $asunto = "esto es una prueba";
                                        $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                        $adicional = "From: sergio_mcr19@hotmail.com";  

                                        mail($para,$asunto,$cuerpo,$adicional);
                                        ?>

                                        <p>Envio Exitoso</p>

                                        <?php


                                    
                                    }
                                }
                            }


                        }
                    
                    ?>




                </form>
            </div>
                   
        </section>
    </main>
    <footer>
        <div class="main-container">
            <div class="row">
                <div class="colum-25">
                    <img src="img/logo-blanco.png" alt="logo-blanco" class="logo-footer">
                    <p>Type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                </div>
                <div class="colum-25">
                    <h3>Temas relacionados</h3>
                    <ul class="temas">
                        <li><a href="#">Tema 1</a></li>
                        <li><a href="#">Tema 2</a></li>
                        <li><a href="#">Tema 3</a></li>
                        <li><a href="#">Tema 4</a></li>
                    </ul>
                </div>
                <div class="colum-25">
                    <h3>Datos de contacto</h3>
                    <ul>
                        <li>ser19car@gmail.com</li>
                        <li>+51 966464770</li>
                        <li>Jr. Los Angeles #166 <br> Santa María<br>Perú </li>
                    </ul>
                </div>
                <div class="colum-25">
                    <h3>Redes Sociales</h3>
                    <ul class="RRSS">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="barra-footer">
            &copy; Derechos Reservados - 2020
        </div>       
    </footer>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>


    <script src="js/funciones.js"></script>
 
</body>
</html>