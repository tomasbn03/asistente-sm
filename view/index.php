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
    <link rel="stylesheet" href="../assets/css/chatbot.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="" />
</head>
<title>Sistema de Salud Mental</title>
<body>

<!-- Menu -->
<?php
    require("components/menu.php")
?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div><br>

    <!-- Seccion principal para la página de acceder a recursos de bienestar -->
    <div class="infografia-main">
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

        <!-- Tres recursos en la parte superior -->
        <div class="cont-recurs">
                <div class="fondo">
                    <div class="cont1">
                        <h3>Cómo Gestionar el Estrés en el Trabajo.</h3><br>
                        <span>Descubre cómo mejorarlas para enriquecer tus interacciones 
                            personales y avances profesionales con métodos efectivos y 
                            empatía activa.</span><br>
                            <a href="biblio-bienestar1.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>


                <div class="fondo">
                    <div class="cont2">
                        <h3>Meditación Guiada para la Relajación Profunda.</h3><br>
                        <span>Descubre cómo la respiración 
                            adecuada y la postura correcta pueden llevarte a un estado 
                            de relajación profunda.</span><br>
                            <a href="biblio-bienestar2.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>

                <div class="fondo">
                    <div class="cont3">
                        <h3>Estrategias de Comunicación para Mejorar Relaciones.</h3><br>
                        <span> Aprende a expresar tus ideas con claridad y a escuchar 
                            activamente para fomentar entendimiento mutuo y colaboración efectiva.</span><br>
                            <a href="biblio-bienestar3.php" class="boton-animado-a">Acceder</a>
                    </div>
                </div>
        </div><br>


                <!-- Tres recursos en la parte inferior -->
                <div class="cont-recurs">
                <div class="fondo">
                    <div class="cont1">
                        <h3>Técnicas para Manejar la Ansiedad Diaria.</h3><br>
                    <span>Aprende métodos prácticos para reducir la ansiedad y mejorar tu calidad de 
                        vida a través de estrategias de mindfulness y autogestión emocional.</span><br>
                        <a href="biblio-bienestar4.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>


                <div class="fondo">
                    <div class="cont2">
                        <h3>Construyendo una Autoestima Sólida.</h3><br>
                        <span>Explora técnicas para reforzar tu confianza, reconocer tus valores 
                        y promover un diálogo interno positivo para una vida más plena.</span><br>
                            <a href="biblio-bienestar5.php" class="boton-animado">Acceder</a>
                    </div>
                </div><br>

                <div class="fondo">
                    <div class="cont3">
                        <h3>Claves para un Equilibrio Vida-Trabajo Saludable.</h3><br>
                        <span>Encuentra el balance perfecto entre tus responsabilidades laborales
                        y tu tiempo personal con estrategias efectivas de manejo del tiempo y priorización.</span><br>
                            <a href="biblio-bienestar6.php" class="boton-animado-a">Acceder</a>
                    </div>
                </div>
                </div><br><br>

           
                <div class="carousel-container">
                    <p class="carousel-quote" id="quote1">Las cicatrices invisibles son las que más enseñan sobre resiliencia y fortaleza</p>
                    <p class="carousel-quote" id="quote2">El abrazo del alma es aquel que nos reconforta en los momentos de oscuridad y nos recuerda que no estamos solos</p>
                    <p class="carousel-quote" id="quote3">La salud de nuestra mente es el reflejo de cómo nutrimos nuestra esencia y nuestro espíritu</p>
                </div><br><br>
            

            <div class="box-forum">
                <div class="forum-container">
                    <h1>Foros Alternos Recomendados</h1><br>
                    <p>Descubre y participa en foros externos que recomendamos para enriquecer tu camino hacia el bienestar.</p> <br> <br>

                    <!-- Foro 1 -->
                    <div class="forum-item">
                        <img src="../assets/img/gaceta-medica.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Gaceta Médica</h3>
                            <p>Foro Afectivo y Efectivo </p>
                            <span>Temas: <strong>Hablar sobre salud mental para romper el estigma</strong></span>
                        </div><br>
                        <a href="https://gacetamedica.com/mas/rsc/foro-afectivo-efectivo-salud-mental-estigma-prevencion/" target="_blank" class="visit-btn">Visitar Foro</a>
                    </div><br>

                    <!-- Foro 2 -->
                    <div class="forum-item">
                        <img src="../assets/img/bancos-salud.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Foro de Ideas para el Abordaje de la Salud Mental con Adolescentes y Jóvenes</h3>
                            <p>Este documento sistematiza experiencias y testimonios a partir del primer encuentro del Foro de Ideas que 
                            se llevó a cabo en diciembre de 2022. Expone las principales problemáticas planteadas y 10 ideas como resultado del foro.</p>
                            <span>Temas: <strong>#Adolecencia #DerechoALaSalud #ServiciosDeSalud</strong></span>
                        </div><br>
                        <a href="https://bancos.salud.gob.ar/recurso/foro-de-ideas-para-el-abordaje-de-la-salud-mental-con-adolescentes-y-jovenes" target="_blank" class="visit-btn">Visitar Foro</a>
                    </div><br>

                    <!-- Foro 3 -->
                    <div class="forum-item">
                        <img src="../assets/img/foro-sm.png" alt="Logo del foro" class="forum-logo">
                        <div class="forum-description">
                            <h3>Foro Salud Mental</h3>
                            <p>Guía de estilo sobre salud mental para medios de comunicación. Las palabras si importan.</p>
                            <span>Temas: <strong>#Ansiedad #Depresión #TerapiaGrupal</strong></span>
                        </div><br>
                        <a href="http://www.forosaludmental.com" target="_blank" class="visit-btn">Visitar Foro</a>
                    </div><br>
                    
                    <p><strong>Nota:</strong> Aunque estos foros son recomendados, no tenemos control sobre su contenido. Ejerce juicio propio y consulta a un profesional en caso de necesitar asistencia.</p>
                </div> 
            </div>

            <?php
                require("components/ai.php");
            ?>
<br><br><br>
<?php
    require("components/footer.php");
?>
    <script src="../assets/js/chatbot.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
