<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<title>Sistema de Salud Mental</title>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/perfil.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"></span>
                    <span class="profession"><?php echo $usuario; ?></span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">

              

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-leaf icon'></i>
                            <span class="text nav-text">Recursos Bienestar</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="psicologo.php">
                            <i class='bx bx-group icon' ></i>
                            <span class="text nav-text">Psicologo</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="evaluacion-clinica.php">
                            <i class="bx bxs-brain icon"></i>
                            <span class="text nav-text">Evaluación Clínica</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="settings.php">
                            <i class='bx bxs-cog icon'></i>
                            <span class="text nav-text">Configuraciones</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../controller/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>          
            </div>
        </div>
    </nav>
    <img src="../assets/img/portada.png" id="portada">
    <!-- Seccion principal para la página de acceder a recursos de bienestar -->
    
    

    <div class="cont-text">
    <h1>Acceso a recursos de bienestar</h1><br>
                <div class="sub-cont-text">
                        <div class="contextu">
                            <h3>Bienvenido/a a MentalMatters Virtual <?php echo $usuario ?></h3>
                            <p>En este mundo, encontrarás un espacio seguro y acogedor donde tu salud mental es nuestra prioridad. 
                            Explora nuestra biblioteca de recursos, participa en cursos de desarrollo personal, y descubre ejercicios 
                            de relajación que te ayudarán a encontrar la paz interior.</p>
                        </div>
                </div>
            </div><br>
            <div class="cont-text">
                        <div class="sub-cont-text">
                            <div class="contextu">
                                <h3>Biblioteca de Bienestar</h3>
                                <p>Explora nuestra colección cuidadosamente seleccionada de recursos diseñados para promover tu bienestar 
                                físico, mental y emocional. Desde guías prácticas hasta meditaciones guiadas, cada recurso es una 
                                herramienta para ayudarte a encontrar equilibrio y serenidad en tu vida diaria.</p>
                            </div>
                        </div>
            </div><br>
            
            <div class="cont-text">
                <!-- Carrusel para frases   -->
                <div class="carousel-container">
                    <p class="carousel-quote" id="quote1">Dentro de cada tormenta, reside una calma esperando ser encontrada</p>
                    <p class="carousel-quote" id="quote2">Nuestro espíritu es inquebrantable; sólo necesita recordarlo.</p>
                    <p class="carousel-quote" id="quote3">Las cicatrices del alma son testigos de su fortaleza</p>
                </div>
            </div><br>

            <div class="cont-text">
                <div class="fondo">
                    <div class="cont1">
                        <h3>Cómo Gestionar el Estrés en el Trabajo</h3> 
                                <span>El estrés laboral es una realidad en la vida moderna.
                                Aprende a identificar y reducir su impacto con consejos 
                                prácticos y técnicas de relajación.</span><br>
                                <a href="biblio-bienestar1.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>



                <div class="fondo">
                    <div class="cont2">
                        <h3>Meditación Guiada para la Relajación Profunda</h3>
                            <span>Sumérgete en un viaje de tranquilidad y paz interior con
                                nuestra meditación guiada. Descubre cómo la respiración 
                                adecuada y la postura correcta pueden llevarte a un estado 
                                de relajación profunda.</span><br>
                                <a href="biblio-bienestar2.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>

                <div class="fondo">
                    <div class="cont3">
                        <h3>Guía Completa para el Manejo del Estrés Diario</h3>
                            <span>Enfrenta los desafíos diarios con serenidad y confianza. 
                                Esta guía te ofrece herramientas prácticas para identificar las fuentes 
                                de estrés y técnicas efectivas para mitigar sus efectos. Descubre un camino
                                hacia un estilo de vida equilibrado y empoderado. </span><br>
                                <a href="biblio-bienestar3.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>
                 <br>
                 <div class="carousel-container">
                    <p class="carousel-quote" id="quote1">Las cicatrices invisibles son las que más enseñan sobre resiliencia y fortaleza</p>
                    <p class="carousel-quote" id="quote2">El abrazo del alma es aquel que nos reconforta en los momentos de oscuridad y nos recuerda que no estamos solos</p>
                    <p class="carousel-quote" id="quote3">La salud de nuestra mente es el reflejo de cómo nutrimos nuestra esencia y nuestro espíritu</p>
                </div>
            </div><br><br><br><br>

    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>