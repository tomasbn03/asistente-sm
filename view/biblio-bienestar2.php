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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditación Guiada para la Relajación Profunda | Biblioteca de recursos</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/chatbot.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/biblio2.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/mascota.png">
</head>
<body>
    <?php require("components/menu.php") ?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    
        <div class="infografia">
            <h1>Meditación Guiada para la Relajación Profunda</h1><br>
            <p>La meditación es una práctica milenaria que se ha utilizado para conectar con el ser interno, 
            encontrar la paz interior y desarrollar una mayor conciencia de uno mismo y del entorno. En el mundo 
            acelerado de hoy, la meditación guiada se ha convertido en una herramienta esencial para manejar el 
            estrés, mejorar la concentración y fomentar el bienestar general.</p><br>
            
            <h2>Video de meditación guiada de 10 minutos</h2>
            
            <p>Disfruta de una inmersión tranquila en la relajación profunda a través de esta meditación guiada 
            de 10 minutos. Siéntate o acuéstate en un lugar cómodo, cierra los ojos y permite que la voz del 
            guía te lleve a un espacio de paz y serenidad.</p><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9svic7ldL2w?si=ifAdFjnt15S6cscq" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <br> <br>
            <section class="info-section">
                <div class="info-content">
                <h3>Instrucciones paso a paso para la meditación: .</h3>
                <div class="lista-comp">
                    <ol>
                        <li><b>Preparación del ambiente:</b>
                            <div class="lista-pequ">
                                <ul>
                                    <li><b>Iluminación:</b> Una luz tenue puede ayudar a crear un ambiente de calma. Si puedes, utiliza luz natural o velas.</li>
                                    <li><b>Sonido:</b> Considera poner música suave de fondo, como sonidos de la naturaleza o melodías tranquilas.</li>
                                    <li><b>Objetos:</b> Algunas personas encuentran útil tener un objeto de enfoque, como una imagen inspiradora o una estatua.</li>
                                </ul>
                            </div>
                        </li><br>

                        <li><b>Elige tu posición:</b><br>
                            <div class="lista-pequ">
                                <ul>
                                    <li><b>Sentado:</b> Asegúrate de que tu espalda esté recta para permitir una respiración adecuada.</li>
                                    <li><b>Acostado:</b> Evita cruzar las piernas o los brazos para permitir una circulación adecuada.</li>
                                </ul>
                            </div>
                        </li><br>
                        
                        <li><b>Centra tu atención:</b>
                            <div class="lista-pequ">
                                <ul>
                                    <li><b>Respiración abdominal:</b> Esta técnica te ayuda a respirar profundamente desde el diafragma, proporcionando oxígeno óptimo al cuerpo.</li>
                                    <li><b>Respiración de cuatro partes:</b> Inhala durante cuatro segundos, mantén durante cuatro segundos, exhala durante cuatro segundos y espera otros cuatro antes de inhalar nuevamente.</li>
                                </ul>
                            </div>
                        </li>

                        <li><b>Conciencia corporal:</b> 
                            <div class="lista-pequ">
                                    <ul>
                                        <li>Siente la conexión de tu cuerpo con la silla o el suelo. Nota las 
                                        sensaciones en cada parte de tu cuerpo, desde la cabeza hasta los pies.</li>
                                    </ul>
                            </div>
                        </li>
                        
                        <li><b>Enfoque en la respiración:</b>
                            <div class="lista-pequ">
                                    <ul>
                                        <li>Observa cómo el aire entra y sale de tu cuerpo. Si tu mente 
                                        comienza a divagar, regresa suavemente tu atención a la respiración.</li>
                                    </ul>
                            </div>
                        </li>

                        <li><b>Deja que el guía te conduzca:</b> 
                            <div class="lista-pequ">
                                <ul>
                                    <li>Escucha con atención cada palabra y visualización 
                                    propuesta por el guía.</li>
                                </ul>
                            </div>
                        </li>
                    
                        <li><b>Termina con gratitud:</b> 
                            <div class="lista-pequ">
                                <ul>
                                    <li>Al finalizar, agradece por el momento de paz y serenidad que has experimentado.</li>
                                </ul>
                            </div>
                        </li>
                
                    </ol>
                </div>
            </div>
            </section>
            
            <section class="info-section">
                <div class="info-content">
                <h3>Sugerencias para una experiencia óptima:</h3>
                <div class="lista-comp">
                    <div class="lista-pequ">
                        <ol>
                            <li><b>Consistencia:</b> La meditación es más efectiva cuando se practica regularmente. Intenta establecer un horario diario.</li>
                            <li><b>Postura:</b> Tu postura puede influir en tu experiencia meditativa. Asegúrate de estar cómodo pero alerta.</li>
                            <li><b>Aplicaciones:</b> Considera usar aplicaciones de meditación guiada que te ayuden a mantener la consistencia y explorar diferentes técnicas.</li>
                        </ol>
                    </div>
                </div>

                </div>
            </section>

            <section class="info-section">                
                <div class="info-content">
                <h2>Reflexión Final</h2>               
                <p>La meditación no solo es una técnica de relajación, sino también una puerta hacia el autoconocimiento 
                y la expansión de la conciencia. A través de una práctica dedicada, la meditación nos permite explorar 
                las profundidades de nuestra mente y espíritu, dándonos claridad y serenidad para vivir una vida más 
                equilibrada y armoniosa. Invitamos a los usuarios a abrazar esta práctica ancestral y descubrir los 
                tesoros que se encuentran en la quietud de su ser interior.</p>
                </div><br><br>
                <h3>Video para reflexionar:</h3><br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HnXDG070R6I?si=by72ya6eoqA4pYOu" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>
    </div><br><br><br><br>


    <?php
        require("components/ai.php");
    ?>
    <br><br>
    <?php
        require("components/footer.php")
    ?>

    <script src="../assets/js/chatbot.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>