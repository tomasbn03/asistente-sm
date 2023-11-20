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
    <link rel="icon" type="image/x-icon" href="../assets/img/mascota.png">
    <link rel="stylesheet" href="../assets/css/chatbot.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/biblio1.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/mascota.png">
</head>
<body>
<?php
    require("components/menu.php")
?>
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
                    <img src="../assets/img-biblio/fuentes-estres.png" alt="Imagen relacionada">
                    <div class="info-content">
                    <h2>Fuentes de estrés</h2>                    
                    <p>Identificar las fuentes de tu estrés es el primer paso 
                    hacia el manejo efectivo y la creación de un equilibrio en 
                    tu vida. Veamos algunos de los estresores más comunes y cómo 
                    pueden afectarnos: </p>
                    </div><br>
                    <h3>Estresores Externos 🏢</h3>
                    <div class="info-content-li">
                        <ul>
                            <li><b>Presión en el Trabajo o Escuela:</b><br> Sobrecarga de tareas o plazos ajustados. Mudanzas, cambios de trabajo o pérdida de un ser querido.</li><br>
                            <li><b>Conflictos Interpersonales:</b><br> Desacuerdos con seres queridos o colegas.</li><br>
                            <li><b>Presión en el Trabajo o Escuela:</b><br> Sobrecarga de tareas o plazos ajustados.</li>
                        </ul> <br>
                    </div>
                    <span><em>"Más del 40% de los adultos afirman que su trabajo es muy o extremadamente estresante."</em> <br> - Instituto Nacional del Estrés</span><br>
                    <h3>Estresores Internos 🧠</h3>
                    <div class="info-content-li">
                        <ul>
                            <li><b>Pensamientos Autocríticos:</b><br> Dudas sobre uno mismo o autoexigencia excesiva.</li><br>
                            <li><b>Expectativas Irreales:</b><br> Querer que todo sea perfecto o no aceptar menos del 100%.</li><br>
                            <li><b>Ansiedades y Miedos:</b><br> Preocupaciones constantes sobre el futuro o situaciones hipotéticas.</li><br>
                        </ul>
                    </div>
                    <span><em>"Tus pensamientos tienen el poder de moldear tu realidad. La autocrítica constante puede magnificar el estrés."</em><br> - Dra. Elaine Aron, Psicóloga</span><br>
                    <h3>Estresores Fisiológicos 💓</h3>
                    <div class="info-content-li">
                        <ul>
                            <li><b>Enfermedades o Afecciones:</b><br> Diagnósticos médicos o dolencias crónicas.</li><br>
                            <li><b>Desbalance Hormonal:</b><br> Cambios hormonales debidos a situaciones como el embarazo o menopausia.</li><br>
                            <li><b>Falta de Sueño:</b><br> No descansar lo suficiente o insomnio.</li><br>
                        </ul>
                    </div>
                    <span><em>"El cuerpo y la mente están intrínsecamente conectados. Un desequilibrio en uno puede afectar al otro."</em><br>- Dr. Herbert Benson, Cardiólogo</span><br>
                        <p>¿Quieres saber más sobre cómo afectan estos estresores?<br> <a href="https://www.youtube.com/watch?v=r0mQj2Y_sqI&pp=ygUYRXN0cmVzb3JlcyBGaXNpb2zDs2dpY29z">Haz clic aquí para ver un video explicativo.</a></p>
                </section>
                <hr>
                <br><br>

                
                <section class="info-section">
                    <img src="../assets/img-biblio/meditacion.png" alt="Imagen relacionada">
                    <div class="info-content">
                    <h2>Técnicas de relajación</h2>
                    <p>Las técnicas de relajación son herramientas efectivas para 
                    reducir el estrés y mejorar la salud mental y física. Estas 
                    técnicas activan la respuesta de relajación del cuerpo, un estado
                    en el que la respiración y el pulso cardíaco disminuyen, reduciendo 
                    la tensión muscular y promoviendo el bienestar.</p>
                    </div><br>
                    <h3>Respiración Profunda 🫁</h3>
                    <p>Sumérgete en el poder curativo de tu propia respiración. 
                    Esta técnica te ayuda a centrarte en el momento presente y a oxigenar tu cerebro.</p>
                    <div class="lista-comp">
                    <p>Pasos:</p>
                        <ol>
                            <li>Siéntate o acuéstate en un lugar tranquilo.</li>
                            <li>Inhala lentamente por la nariz, llenando tus pulmones completamente.</li>
                            <li>Mantén la respiración unos segundos.</li>
                            <li>Exhala lentamente, liberando todo el aire.</li>
                            <li>Repite varias veces, enfocándote en cada inhalación y exhalación.</li>
                        </ol>
                    </div>
                    <span><em>"La respiración es el puente que conecta la vida con la conciencia, y une tu cuerpo con tus pensamientos."</em><br> - Thich Nhat Hanh</span><br>
                    <h3>Meditación Guiada 🧘‍♂️</h3>
                    <p>La meditación te permite conectar con tu interior, calmarte y cultivar la atención plena.</p>
                    <div class="lista-comp">
                    <p>Pasos:</p>
                        <ol>
                            <li>Encuentra un lugar silencioso.</li>
                            <li>Adopta una postura cómoda.</li>
                            <li>Cierra los ojos y enfócate en tu respiración o sigue una guía de meditación.</li>
                            <li>Deja que los pensamientos fluyan sin juzgarlos, volviendo siempre a tu punto de enfoque.</li>
                        </ol>
                    </div>
                    <span><em>"La meditación no es evasión; es un encuentro sereno con la realidad."</em><br> - Thich Nhat Hanh</span><br>
                    <h3>Visualización Positiva 🏖️</h3>    
                    <p>Imaginar un lugar tranquilo y sereno puede ayudarte a alejarte del estrés diario.</p>
                    <div class="lista-comp">
                        <p>Pasos:</p>
                        <ol>
                            <li>Cierra los ojos y piensa en un lugar donde te sientas completamente en paz.</li>
                            <li>Imagina cada detalle: sonidos, olores, sensaciones.</li>
                            <li>Permítete estar allí por unos minutos, disfrutando de esa tranquilidad.</li>
                        </ol>
                    </div>
                    <span><em>"La mente lo es todo. Lo que piensas, lo conviertes en realidad."</em><br>- Buda</span>
                    <p>Consejo Interactivo: ¿Dificultad para visualizar?<br><a target="_blank" href="https://www.youtube.com/watch?v=TR2X1DCccVI&pp=ygUYcGFpc2FqZXMgdHJhbnF1aWxpemFudGVz">Mira este video de paisajes tranquilos para inspirarte.</a></p>    
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