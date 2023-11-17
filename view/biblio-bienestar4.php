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
    <title>Guía Completa para el Manejo del Estrés Diario | Biblioteca de recursos</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/chatbot.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/biblio4.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php
        require("components/menu.php")
    ?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div>
<br>
    <div class="container-bl">
        <h1>Técnicas para Manejar la Ansiedad Diaria 🧠⛈️</h1>
        <div class="container-scnd">
            <section>
                <p>La ansiedad es una respuesta natural al estrés pero puede volverse abrumadora. 
                Aquí te presentamos algunas técnicas efectivas para ayudarte a manejarla en tu vida diaria.</p>
            </section>

            <div class="margen-box">
                <section>
                    <h2>Respiración Consciente</h2>
                    <p>La respiración consciente es una práctica simple pero poderosa que ayuda a calmar la mente y reducir la ansiedad.</p><br>

                    <h3>¿Cómo practicarla?</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Encuentra un lugar tranquilo y siéntate cómodamente.</li>
                            <li>Cierra los ojos y toma lentamente una respiración profunda por la nariz, contando hasta cuatro.</li>
                            <li>Mantén la respiración durante un conteo de cuatro.</li>
                            <li>Exhala suavemente por la boca durante otro conteo de cuatro.</li>
                            <li>Repite este ciclo durante varios minutos.</li>
                        </ol>
                    </p>
                </section>
            </div><br>



            <div class="margen-box">
                <section>
                    <h2>Mindfulness y Meditación</h2>
                    <p>El mindfulness te enseña a estar presente en el momento, reduciendo la preocupación por el futuro o el pasado.</p><br>

                    <h3>Iniciando la práctica de mindfulness:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Dedica unos minutos al día para sentarte en silencio y enfocarte en tu respiración.</li>
                            <li>Cuando te distraigas, reconoce tus pensamientos y luego vuelve suavemente a enfocarte en la respiración.</li>
                            <li>Con el tiempo, aumenta la duración de tus sesiones de meditación.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Ejercicio Físico</h2>
                    <p>El ejercicio regular puede ser tan efectivo como los medicamentos para reducir la ansiedad en algunas personas.</p><br>

                    <h3>Ideas para incorporar ejercicio:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Caminatas diarias de 30 minutos.</li>
                            <li>Clases de yoga o tai chi.</li>
                            <li>Rutinas de ejercicio en casa o en el gimnasio.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Escritura Terapéutica</h2>
                    <p>Escribir tus pensamientos y preocupaciones puede ayudarte a entender y manejar tu ansiedad.</p><br>

                    <h3>Consejos para la escritura terapéutica:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Dedica un tiempo cada día para escribir en un diario.</li>
                            <li>No te preocupes por la gramática o el estilo; enfócate en expresar tus pensamientos y emociones libremente.</li>
                            <li>Escribe sobre tus preocupaciones y luego sobre posibles soluciones o pasos a seguir para resolverlas.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Técnicas de Relajación Muscular</h2>
                    <p>La relajación muscular progresiva reduce la tensión física y mental al tensar y relajar deliberadamente diferentes grupos musculares.</p><br>
                
                    <h3>Pasos para la relajación muscular progresiva:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Encuentra un lugar cómodo para sentarte o acostarte.</li>
                            <li>Comienza con los pies y sube gradualmente por el cuerpo, tensando cada grupo muscular durante cinco segundos y luego relajándolo.</li>
                            <li>Concéntrate en la diferencia entre la tensión y la relajación.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Establecimiento de Rutinas</h2>
                    <p>La ansiedad puede alimentarse de la incertidumbre, por lo que establecer una rutina diaria puede proporcionar estructura y una sensación de normalidad.</p><br>
                
                    <h3>Sugerencias para crear rutinas:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Levántate y acuéstate a la misma hora todos los días.</li>
                            <li>Planifica tus comidas, tiempo de trabajo y tiempo de descanso.</li>
                            <li>Incorpora períodos de actividad física en tu horario diario.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Conexión Social</h2>
                    <p>El apoyo social es vital para manejar la ansiedad. Conectar con otros puede proporcionar un sentido de pertenencia y alivio.</p><br>
                    
                    <h3>Ideas para fomentar la conexión social:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Programa llamadas o videoconferencias regulares con amigos o familiares.</li>
                            <li>Únete a grupos de interés común o clases que te permitan conocer nuevas personas.</li>
                            <li>Considera el apoyo de un profesional si sientes que tu ansiedad es abrumadora.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Reflexión Personal y Metas a Pequeña Escala</h2>
                    <p>Establecer metas realistas y alcanzables puede ayudarte a enfocarte y a reducir la ansiedad causada por objetivos demasiado grandes o vagos.</p><br>

                    <h3>Tips para establecer metas pequeñas:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Define metas claras y específicas para cada día o semana.</li>
                            <li>Celebra los pequeños logros; cada paso cuenta.</li>
                            <li>Ajusta tus metas conforme avanzas, siendo flexible y amable contigo mismo.</li>
                        </ol>
                    </p>
                </section>
            </div><br>

            <div class="margen-box">
                <section>
                    <h2>Consideraciones Finales</h2>
                    <p>Si bien estas técnicas pueden ser muy útiles, es importante recordar que la ansiedad severa o prolongada puede requerir la atención de un profesional. No dudes en buscar ayuda si sientes que la ansiedad interfiere con tu vida diaria de forma significativa.</p><br>
                
                    <h3>Buscando apoyo profesional:</h3>
                    <p>
                        <ol class="lista-box">
                            <li>Consulta con un terapeuta o consejero especializado en trastornos de ansiedad.</li>
                            <li>Explora la posibilidad de terapia cognitivo-conductual, que es altamente efectiva para tratar la ansiedad.</li>
                            <li>Considera un chequeo médico para descartar condiciones que puedan causar o empeorar la ansiedad.</li>
                        </ol>
                    </p><br>
                    <p>El camino hacia la gestión de la ansiedad es personal y único para cada individuo. 
                    Mientras que algunas personas encuentran alivio a través de métodos de autocuidado, 
                    otras pueden necesitar diferentes formas de apoyo. Lo importante es recordar que no 
                    estás solo y que hay recursos y estrategias disponibles para ayudarte a vivir una 
                    vida más tranquila y plena.</p>
                </section>
            </div><br>


            <section class="recurs-ad">
                <h2>Recursos adicionales:</h2>
                <p>
                    <ul class="lista-box">
                        <li>Aplicaciones de meditación y mindfulness.</li>
                        <li>Grupos de apoyo en línea o en tu comunidad.</li>
                        <li>Libros y podcasts sobre manejo de la ansiedad.</li>
                    </ul>
                </p>
            </section>
        </div><br>

        <section>
            <h2>Actúa Ahora</h2>
            <p>Si te sientes listo para dar el siguiente paso hacia el manejo de tu ansiedad, 
            comienza explorando una o más de las técnicas que hemos compartido. Si la ansiedad te está impidiendo vivir la vida que deseas, considera buscar ayuda profesional. Recuerda, tomar acción es el primer paso hacia el cambio.</p>
        </section>
    </div><br><br>

    <?php
        require("components/ai.php");
    ?>
<br><br><br>
    <?php require("components/footer.php") ?>

    <script src="../assets/js/chatbot.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>