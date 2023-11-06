<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion del estres en el trabajo | Biblioteca de recursos</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/biblio1.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/perfil.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"></span>
                    <span class="profession"><?php echo $_SESSION['nombre']; ?></span>
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
                            <span class="text nav-text">Perfil</span>
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
    </div>

    
        <div class="cont-text">
            <div class="infografia">
                <h1>Manejo del Estrés Diario</h1><br><br>
                
                <section class="info-section">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dswLKHhocxk?si=zf1jqx6U_yWYOg39" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                    encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <br>
                    <div class="img-e">
                        <img src="../assets/img-biblio/pensando-demasiado.png" alt="Imagen relacionada">    
                    </div><br><br>
                    <div class="info-content">
                    <h2>Introducción al estrés</h2> <br>
                    <h4>Entendiendo Nuestro Mecanismo de Alerta</h4>
                    <p>El estrés, a menudo malentendido, es una 
                    compleja respuesta biológica diseñada para 
                    ayudarnos a enfrentar situaciones exigentes 
                    o peligrosas. Es nuestro mecanismo de alerta,
                    una señal que prepara al cuerpo para "luchar
                    o huir".</p> <br>
                    <ul>
                        <li>
                            <b>Estrés Agudo:</b><p>Es una respuesta inmediata 
                            a un desafío o amenaza, como un frenazo brusco
                            en el tráfico o una presentación importante. 
                            Esta reacción puede aumentar nuestra capacidad 
                            de concentración y reacción, siendo en ocasiones
                            beneficioso.</p>
                        </li> <br>
                        <li>
                            <b>Estrés Crónico:</b><p>Surge cuando estas respuestas agudas 
                            se activan repetidamente o persisten en el tiempo, 
                            como enfrentar problemas constantes en el trabajo o 
                            una relación difícil. A largo plazo, este tipo de 
                            estrés puede afectar nuestra salud mental y física, 
                            llevando a problemas como ansiedad, depresión, y 
                            otras enfermedades.</p>
                        </li>
                    </ul><br>
                    <p>Es esencial diferenciar entre estas dos respuestas 
                    para identificar cuándo el estrés se convierte en un 
                    problema y cuándo actúa como un aliado. En nuestra vida 
                    moderna, donde las amenazas ya no son depredadores sino 
                    preocupaciones diarias, es vital aprender a gestionar el 
                    estrés de manera efectiva.</p>
                    </div>
                </section>
                <hr>
                <br><br>
                <section class="info-section">
                    <img src="" alt="Imagen relacionada">
                    <div class="info-content">
                    <h2>Fuentes de estrés</h2>                    
                    <p>Identificar las fuentes de estrés es crucial... </p>
                    </div>
                </section>
                <br><br>
                <section class="info-section">
                    <img src="path_to_image3.jpg" alt="Imagen relacionada">
                    <div class="info-content">
                    <h2>Técnicas de relajación</h2>
                    <p>La respiración profunda y la meditación son...</p>
                    </div>
                </section>

                <!-- Puedes continuar con más secciones según sea necesario -->
            </div>

        </div><br><br>
    

    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>