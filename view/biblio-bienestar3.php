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
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/biblio3.css">
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
        <h1>Estrategias de Comunicación para Mejorar Relaciones</h1><br>
            <section class="info-section">
            <p>Las habilidades de comunicación son esenciales en todas las áreas de la vida, 
            pero especialmente en las relaciones personales y profesionales. Una comunicación
            efectiva puede resolver conflictos, construir confianza y mejorar la colaboración. 
            Este recurso está diseñado para ayudarte a desarrollar habilidades comunicativas 
            que fortalezcan tus conexiones con los demás.</p>
            </section>
         

       
            <section class="info-section"> 
                <h3>¿Por qué es importante la comunicación interpersonal?</h3>
                <p>La comunicación está presente en todos los ámbitos de nuestra vida, también 
                en el laboral, donde es fundamental mantener relaciones positivas y satisfactorias 
                con el resto de las personas. </p><br>
                <p>Una deficiente o ineficaz comunicación entre los miembros de la empresa puede 
                causar diversos problemas. Dichos problemas afectan con frecuencia a la salud de 
                los trabajadores, ya que disminuyen su rendimiento, la productividad y, como 
                consecuencia, repercuten en el buen funcionamiento de la empresa.
                Además, una buena comunicación interpersonal permite la transparencia 
                empresarial, algo que cada vez impacta más a nivel externo.</p><br>

            </section><br>


            <section class="info-section">
                <h3>¿Qué es la comunicación interpersonal? Ejemplos</h3>
                <p>La comunicación interpersonal es el proceso de intercambio de información 
                entre dos o más personas, ya sea mediante mensajes verbales o no verbales. 
                A diferencia de otras formas de comunicación, en la comunicación interpersonal 
                destaca un menor número de participantes, la proximidad y el feedback casi 
                inmediato. En este intercambio no solo se comparte información de la manera 
                teórica que todos entendemos, sino que también se perciben emociones y 
                sentimientos en el mero acto social y recíproco de compartir.</p><br>

                <p>Conocer las claves que ayudan a construir buenas relaciones interpersonales 
                es uno de los secretos del éxito profesional y personal, puesto que dichas relaciones 
                afectan a múltiples aspectos de la vida cotidiana.</p>
            </section><br>

            <section class="info-section">
                <h3>¿Cuáles son las técnicas de la comunicación interpersonal?</h3>
                <div class="lista-comp">
                    <div class="lista-pequ">
                        <ul>
                            <li><b>Escucha activa:</b><br> Más allá de oír las palabras, la escucha activa 
                            implica involucrarse completamente en lo que la otra persona está diciendo. 
                            Esto significa no solo entender las palabras, sino también los matices y 
                            emociones subyacentes. La escucha activa también se manifiesta a través de 
                            la retroalimentación verbal y no verbal, como asentir con la cabeza, mantener 
                            contacto visual y hacer preguntas pertinentes que demuestren que realmente 
                            estás escuchando y procesando la información.</li><br>

                            <li><b>Empatía:</b><br> La empatía va más allá de la simpatía, es ponerse en los 
                            zapatos de otra persona para entender su situación y sentimientos. Practicar 
                            la empatía puede implicar reflexionar sobre cómo te sentirías en su situación 
                            o recordar un momento en que te sentiste de manera similar. Esto ayuda a 
                            responder de manera más comprensiva y menos crítica.</li><br>

                            <li><b>Asertividad:</b><br> La asertividad es el equilibrio entre la agresión y la pasividad. 
                            Es la habilidad para expresar tus pensamientos, sentimientos y necesidades de 
                            manera abierta y honesta, mientras también respetas los derechos de los demás. 
                            La asertividad se basa en el respeto mutuo y promueve la comunicación justa y 
                            equitativa.</li><br>

                            <li><b>Claridad y concisión:</b><br> La habilidad de ser claro y conciso implica hablar 
                            de manera que sea fácilmente comprensible, evitando jergas, tecnicismos innecesarios 
                            y detalles superfluos que pueden confundir el mensaje principal. Se trata de hacer 
                            que tu mensaje sea tan simple como sea posible, sin perder el significado deseado.</li><br>

                            <li><b>Retroalimentación constructiva:</b><br> Proporcionar retroalimentación constructiva 
                            significa ofrecer críticas de manera que sea útil y fácil de aceptar. Implica comentar 
                            sobre aspectos positivos y áreas de mejora, utilizando un lenguaje que motive y 
                            apoye, en lugar de desalentar y desmotivar.</li><br>

                            <li><b>Lenguaje corporal:</b><br> El lenguaje corporal abarca todos los mensajes no verbales que 
                            transmitimos, desde nuestra postura y contacto visual hasta nuestras expresiones faciales 
                            y gestos. Un buen lenguaje corporal puede mejorar la comunicación al reforzar lo que se 
                            dice verbalmente y transmitir seguridad y apertura.</li><br>

                            <li><b>Manejo de conflictos:</b><br> Las habilidades para manejar conflictos incluyen la capacidad 
                            de reconocer y abordar diferencias de opinión o enfrentamientos de manera constructiva. 
                            Esto implica la disposición para escuchar todas las partes, la capacidad de identificar 
                            la causa raíz del conflicto y la creatividad para encontrar soluciones que beneficien a todos.</li><br>

                            <li><b>Adaptabilidad:</b><br> Ser adaptable en la comunicación significa ser capaz de cambiar tu 
                            enfoque o estilo según la persona con la que estás hablando o la situación en la que te encuentres. 
                            Esto podría incluir ajustar tu tono, lenguaje o incluso el medio de comunicación (como preferir 
                            reuniones en persona a correos electrónicos con ciertos individuos).</li><br>

                            <li><b>Paciencia:</b><br> La paciencia es vital en la comunicación interpersonal. A veces, puede tomar 
                            tiempo para que las personas articulen sus pensamientos o para que una conversación llegue 
                            a una conclusión satisfactoria. Ser paciente</li><br>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="info-section">
            <h3>Aquí un video explicativo para mejorar la comunicación, disfurtalo:</h3> <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zGn8ehvMkYI?si=Oa_Y6HMN2XW5qW5K" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
            </section>
       </div>
    </div><br><br><br>
    
    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>