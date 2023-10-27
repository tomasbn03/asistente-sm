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
    <title>Meditación Guiada para la Relajación Profunda | Biblioteca de recursos</title>
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
    
        <div class="cont-text">
            <h1>Meditación Guiada para la Relajación Profunda</h1>
            <h3>Video de meditación guiada de 10 minutos</h3>
            <p>Disfruta de una inmersión tranquila en la relajación profunda a través de esta meditación guiada de 10 minutos. 
                Siéntate o acuéstate en un lugar cómodo, cierra los ojos y permite que la voz del guía te lleve a un espacio 
                de paz y serenidad.</p><br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pDigD65kLpE?si=qMNx8YXKXnmzNEaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>

            <h3>Instrucciones paso a paso para la meditación.</h3>
            <ul>
                <li>
                <b>Preparación del ambiente:</b> Elige un lugar tranquilo y libre de interrupciones. Puedes encender una vela o poner aceites esenciales si lo deseas para crear un ambiente calmado.
                </li>
                <li>
                <b>Encuentra tu posición:</b> Siéntate en una silla con los pies apoyados en el suelo o en una postura cómoda en el suelo. Si prefieres, también puedes acostarte.
                </li>
                <li>
                 <b>Cierra los ojos:</b> Esto ayudará a reducir las distracciones y a centrarte en tu experiencia interna.
                </li>
                <li>
                <b>Conciencia del cuerpo:</b> Nota las sensaciones en tu cuerpo, sin juzgarlas. Reconoce cualquier tensión y permite que se disuelva.
                </li>
                <li>
                <b>Enfoque en la respiración:</b> Sin modificarla, presta atención a tu respiración, notando el ritmo natural de tu inhalación y exhalación.
                </li>
                <li>
                <b>Sigue el guía:</b> Escucha atentamente las palabras del guía, permitiendo que te lleven a un estado de relajación profunda.
                </li>
                <li>
               <b> Finaliza suavemente:</b> Al finalizar, toma unos minutos para regresar a tu estado normal. Mueve suavemente tus dedos y estírate si lo sientes necesario.
                </li>
            </ul>
            <h3> Sugerencias para la postura y la respiración adecuadas.</h3>
            <ul>
                <li>Respira de manera natural, no fuerces ni modifiques tu ritmo de respiración.</li>
                <li>Intenta respirar desde el diafragma en lugar de respiraciones superficiales desde el pecho.</li>
                <li>Nota cómo el aire entra frío por las narinas y sale cálido. Esto puede ser un ancla para mantener tu atención.</li>
            </ul><br>
            <p>La meditación es una herramienta poderosa para conectar con nuestro interior, relajarnos y encontrar paz en medio del caos diario. 
                Con la práctica regular, descubrirás un espacio de serenidad que siempre ha estado dentro de ti. Dedica estos momentos para ti y 
                observa los cambios positivos en tu bienestar general.</p>
        </div><br><br>
    
    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="./js/showYear.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>