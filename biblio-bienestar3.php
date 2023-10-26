<?php
session_start();

if (!isset($_SESSION['correo'])) { // Cambia 'correo' al nombre de la variable de sesión que utilizas para el inicio de sesión
    header("Location: login-register.php");
    exit();
}
$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Completa para el Manejo del Estrés Diario | Biblioteca de recursos</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/perfil.png" alt="">
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
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
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>          
            </div>
        </div>
    </nav>
    <section class="home"><br>
        <div class="text">
            <h1>Guía Completa para el Manejo del Estrés Diario</h1>
            <h3>Introducción al estrés y su impacto en la salud mental</h3>
            <p>El estrés es una reacción natural del cuerpo ante situaciones que percibe como amenazantes o desafiantes. 
                A corto plazo, el estrés puede ser beneficioso, preparando al cuerpo para enfrentar o huir de una amenaza. 
                 Sin embargo, el estrés crónico, aquel que persiste por períodos prolongados, puede tener efectos 
                  perjudiciales para la salud mental y física. Problemas como la ansiedad, la depresión, problemas de 
                   sueño y enfermedades cardíacas se han relacionado con altos niveles de estrés sostenido. Es esencial, 
                   por tanto, reconocer y abordar el estrés para mantener un estado de bienestar integral.</p>
            <h3>Identificación de las fuentes de estrés</h3>
            <ul>
                <li>
                <b>Diario de estrés:</b> Mantener un registro diario de tus actividades y emociones puede ayudarte a identificar patrones y situaciones que desencadenan el estrés.
                </li>
                <li>
                <b>Autoevaluación:</b> Reflexiona sobre áreas de tu vida como el trabajo, las relaciones y las obligaciones personales. ¿Hay algún aspecto que te cause más tensión?
                </li>
                <li>
               <b> Pide retroalimentación:</b> A veces, amigos o familiares pueden ofrecer una perspectiva externa sobre lo que podría estar causando estrés en tu vida.
                </li>
            </ul>
            <h3>Técnicas de relajación, como la respiración profunda y la meditación:</h3>
            <p><b>Respiración Profunda:</b> </p>
            <ul>
                <li>Siéntate o acuéstate cómodamente.</li>
                <li>Inhala lentamente por la nariz, sintiendo cómo se expande tu abdomen.</li>
                <li>Mantén la respiración durante unos segundos.</li>
                <li>Exhala lentamente por la boca o nariz, sintiendo cómo se contrae tu abdomen.</li>
                <li>Repite varias veces, centrándote en la sensación de la respiración.</li>
            </ul>
<br><br>
            <p><b>Meditación:</b></p>
            <ul>
                <li>Elige un lugar tranquilo y libre de distracciones.  </li>
                <li>Adopta una postura cómoda, ya sea sentado o acostado.</li>
                <li>Cierra los ojos y enfoca tu atención en tu respiración, un mantra o simplemente en las sensaciones de tu cuerpo.</li>
                <li>Cuando tu mente divague, reconoce el pensamiento y regresa suavemente a tu punto de enfoque.</li>
                
            </ul>
            <h3>Desarrollo de un plan de manejo del estrés personalizado.</h3>
            <ul>
                <li><b>Establece objetivos claros:</b> Determina lo que deseas lograr en términos de manejo del estrés. </li>
                <li><b>Incorpora técnicas de relajación:</b> Reserva momentos diarios para prácticas como la meditación o el yoga.</li>
                <li><b>Planifica descansos:</b> Durante el día, tómate pequeños descansos para alejarte de las tareas y recargar energías.</li>
                <li><b>Establece límites:</b> Aprende a decir no y asegúrate de no sobrecargar tu agenda.</li>
                <li><b>Busca apoyo:</b> Comparte tus preocupaciones con amigos, familiares o considera la posibilidad de acudir a un profesional.</li>
            </ul>
            <h3>Recomendaciones para mantener un estilo de vida equilibrado.</h3>
            <ul>
                <li><b>limentación saludable:</b> Una dieta equilibrada puede ayudarte a sentirte mejor física y mentalmente.</li>
                <li><b>Ejercicio regular:</b> La actividad física libera endorfinas, que son químicos naturales del cuerpo que promueven el bienestar.</li>
                <li><b>Sueño adecuado: </b>Procura dormir entre 7-9 horas cada noche para garantizar un descanso reparador.</li>
                <li><b>Conexión social:</b> Mantente en contacto con seres queridos y busca actividades que fomenten la conexión con otros.</li>
                <li><b>Tiempo para ti:</b> Dedica momentos para actividades que te apasionen y te permitan desconectar.</li>
            </ul><br>
            <p>El estrés diario puede ser abrumador, pero con las herramientas y técnicas adecuadas, es posible gestionarlo y mantener una vida equilibrada y saludable. La clave está en el autoconocimiento y la adaptabilidad, permitiendo que cada persona desarrolle un plan personalizado que se ajuste a sus necesidades y realidades.</p>
        </div><br><br><br>
    </section>
    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="./js/showYear.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>