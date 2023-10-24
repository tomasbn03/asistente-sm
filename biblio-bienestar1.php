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
    <title>Gestion del estres en el trabajo | Biblioteca de recursos</title>
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


    <section class="home">
        <div class="text">
            <h1>¿Cómo Gestionar el Estrés en el Trabajo?</h1>
            <h3>Introducción al estrés en el trabajo.</h3>
            <p>El estrés laboral es una de las principales causas de problemas de salud 
                entre los profesionales de hoy debido a la creciente complejidad y ritmo 
                acelerado de las tareas en el entorno laboral moderno. El mundo laboral 
                actual está plagado de expectativas cambiantes, tecnología en constante 
                evolución y demandas de multitarea. Aunque impulsa la innovación y el 
                crecimiento, ha elevado los niveles de estrés. Sin embargo, con una c
                omprensión adecuada y estrategias efectivas, es posible mantener un 
                estado mental saludable.</p> 

            <h3>Consejos para identificar y reducir el estrés:</h3>
            <ul>
                <li>
                    <b>Reflexiona sobre tus emociones:</b> Evalúa cómo te sientes respecto a tu trabajo.
                     Estas reflexiones pueden ayudarte a identificar fuentes ocultas de estrés.
                </li>
                <li>
                    <b>Optimiza tu ambiente de trabajo:</b> Un espacio adecuadamente iluminado y ergonómico reduce el estrés.
                </li>
                <li>
                    <b>stablece expectativas claras:</b> Asegúrate de que comprendes lo que se espera de ti y viceversa.
                </li>
                <li>
                    <b>Busca capacitaciones y cursos:</b> La formación continua puede aliviar la sensación de incompetencia.
                </li>
                <li>
                    <b>Utiliza la tecnología a tu favor:</b> Aplicaciones como *Moodpath* o *Daylio* pueden ayudarte a 
                    rastrear tu bienestar.
                </li>
                <li>
                    <b>Mantén tu espacio organizado:</b> Un entorno ordenado reduce la sensación de caos.
                </li>
                <li>
                    <b>Evita el multitasking:</b> Enfócate en una tarea a la vez para mantener la calidad del trabajo.
                </li>
            </ul>
            <h3>Ejercicios de respiración y relajación.</h3>
            <ul>
                <li>
                    <b>Agrupa tareas similares:</b> Realiza tareas similares juntas para aprovechar el flujo de trabajo.
                </li>
                <li>
                    <b> Establece recompensas:</b> Date un pequeño descanso después de completar tareas intensas.
                </li>
                <li>
                    <b>Delega cuando sea necesario:</b> Concentra tu atención en las tareas críticas.
                </li>
                <li>
                    <b>Usa la regla del 2 minutos:</b> Si una tarea te llevará menos de dos minutos, hazla inmediatamente.
                </li>
            </ul>
            <h3>Recursos adicionales.</h3>
            <ul>
                <li>
                    <p>[The Muse](<a href="https://www.themuse.com/advice">https://www.themuse.com/advice</a>) : Artículos y recursos sobre bienestar en el trabajo.</p>
                </li>
                <li>
                    <p>[Insight Timer](<a href="https://insighttimer.com/">https://insighttimer.com/</a>): Meditaciones guiadas gratuitas.</p>
                </li>
                <li>
                    [RescueTime](<a href="https://www.rescuetime.com/">https://www.rescuetime.com/</a>): Herramienta para mejorar la productividad.
                </li>
                <li>
                    [Workplace Strategies for Mental Health](<a href="https://www.workplacestrategiesformentalhealth.com/">https://www.workplacestrategiesformentalhealth.com/</a>): Herramientas y recursos para el bienestar mental.
                </li>
                <li>
                    [TED Talks on Work-Life Balance](<a href="https://www.ted.com/topics/work-life+balance">https://www.ted.com/topics/work-life+balance</a>): Charlas inspiradoras sobre equilibrio entre trabajo y vida personal.
                </li>
            </ul>

        </div><br><br>
    </section>

    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="./js/showYear.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>