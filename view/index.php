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
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div><br>

    <!-- Seccion principal para la página de acceder a recursos de bienestar -->
    <div class="infografia">
    <h1>Bienvenido/a a MentalMatters Virtual, <?php echo $usuario ?></h1><br>
                <div class="sub-cont-text">
                    <div class="contextu">
                        <h3>Acceso a recursos de bienestar</h3>
                        <p>Bienvenido/a a MentalMatters Virtual. Has llegado a un refugio digital 
                        especialmente diseñado para quienes buscan equilibrio y bienestar en su vida diaria. 
                        En este mundo, encontrarás un espacio seguro y acogedor donde tu salud mental es nuestra 
                        prioridad. No solo es un sitio para aprender y crecer, sino también un rincón donde te 
                        sentirás entendido y apoyado. Explora nuestra amplia biblioteca de recursos, participa 
                        en cursos de desarrollo personal diseñados por expertos, y descubre ejercicios de 
                        relajación que te ayudarán a encontrar la paz interior. Tu bienestar es nuestro
                        principal objetivo.</p>
                    </div>
                </div><br>
    
                <div class="sub-cont-text">
                    <div class="contextu">
                        <h3>Biblioteca de Bienestar</h3>
                        <p>Descubre nuestra selección especializada de recursos, elegidos pensando en ti y en tu 
                        bienestar integral. Con una combinación de conocimientos científicos y técnicas prácticas, 
                        nuestra colección abarca desde guías detalladas hasta meditaciones envolventes. Cada 
                        lemento ha sido diseñado como una herramienta personalizada para cultivar equilibrio, 
                        armonía y paz en tu rutina cotidiana.</p>
                    </div>
                </div>
    </div><br><br>
            
        
                <!-- Carrusel para frases   -->
                <div class="carousel-container">
                    <p class="carousel-quote" id="quote1">Dentro de cada tormenta, reside una calma esperando ser encontrada</p>
                    <p class="carousel-quote" id="quote2">Nuestro espíritu es inquebrantable; sólo necesita recordarlo.</p>
                    <p class="carousel-quote" id="quote3">Las cicatrices del alma son testigos de su fortaleza</p>
                </div><br><br>

            <div class="cont-recurs">
                <div class="fondo">
                    <div class="cont1">
                        <h3>Cómo Gestionar el Estrés en el Trabajo.</h3> 
                                <span>Las habilidades comunicativas son clave en el día a día. 
                                    Descubre cómo mejorarlas para enriquecer tus interacciones 
                                    personales y avances profesionales con métodos efectivos y 
                                    empatía activa.</span><br>
                                <a href="biblio-bienestar1.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>


                <div class="fondo">
                    <div class="cont2">
                        <h3>Meditación Guiada para la Relajación Profunda.</h3>
                            <span>Sumérgete en un viaje de tranquilidad y paz interior con
                                nuestra meditación guiada. Descubre cómo la respiración 
                                adecuada y la postura correcta pueden llevarte a un estado 
                                de relajación profunda.</span><br>
                                <a href="biblio-bienestar2.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>

                <div class="fondo">
                    <div class="cont3">
                    <h3>Estrategias de Comunicación para Mejorar Relaciones.</h3>
                    <span>Mejora tus relaciones y éxito profesional con nuestras estrategias de 
                        comunicación. Aprende a expresar tus ideas con claridad y a escuchar 
                        activamente para fomentar entendimiento mutuo y colaboración efectiva.</span><br>
                            <a href="biblio-bienestar3.php" class="boton-animado-a">Acceder</a>
                    </div>
                </div>
            </div><br><br><br>

           
                <div class="carousel-container">
                    <p class="carousel-quote" id="quote1">Las cicatrices invisibles son las que más enseñan sobre resiliencia y fortaleza</p>
                    <p class="carousel-quote" id="quote2">El abrazo del alma es aquel que nos reconforta en los momentos de oscuridad y nos recuerda que no estamos solos</p>
                    <p class="carousel-quote" id="quote3">La salud de nuestra mente es el reflejo de cómo nutrimos nuestra esencia y nuestro espíritu</p>
                </div><br><br>
            

            <div class="box-forum">
                <div class="forum-container">
                    <h2>Foros Alterno Recomendados</h2>
                    <p>Descubre y participa en foros externos que recomendamos para enriquecer tu camino hacia el bienestar.</p> <br> <br>

                    <!-- Foro 1 -->
                    <div class="forum-item">
                        <img src="../assets/img/valores.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Nombre del Foro</h3>
                            <p>Descripción breve del foro y su enfoque temático. Por ejemplo: "Foro especializado en terapias grupales y técnicas de relajación".</p>
                            <span>Temas: <strong>#Ansiedad #Depresión #TerapiaGrupal</strong></span>
                        </div>
                        <a href="link-al-foro.com" class="visit-btn">Visitar Foro</a>
                    </div><br>

                    <!-- Foro 2 -->
                    <div class="forum-item">
                        <img src="../assets/img/investigacion.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Nombre del Foro</h3>
                            <p>Descripción breve del foro y su enfoque temático. Por ejemplo: "Foro especializado en terapias grupales y técnicas de relajación".</p>
                            <span>Temas: <strong>#Ansiedad #Depresión #TerapiaGrupal</strong></span>
                        </div>
                        <a href="link-al-foro.com" class="visit-btn">Visitar Foro</a>
                    </div><br>

                    <!-- Foro 3 -->
                    <div class="forum-item">
                        <img src="../assets/img/investigacion.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Nombre del Foro</h3>
                            <p>Descripción breve del foro y su enfoque temático. Por ejemplo: "Foro especializado en terapias grupales y técnicas de relajación".</p>
                            <span>Temas: <strong>#Ansiedad #Depresión #TerapiaGrupal</strong></span>
                        </div>
                        <a href="link-al-foro.com" class="visit-btn">Visitar Foro</a>
                    </div><br>
                    
                    <p><strong>Nota:</strong> Aunque estos foros son recomendados, no tenemos control sobre su contenido. Ejerce juicio propio y consulta a un profesional en caso de necesitar asistencia.</p>
                </div> 
            </div>

<br><br><br>

    <footer>
        <p>&copy;<span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
