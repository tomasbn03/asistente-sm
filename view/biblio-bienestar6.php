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
    <link rel="stylesheet" href="../assets/css/biblio6.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php require("components/menu.php")?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div><br>

    <div class="container-bl">
        <div class="container-scnd">
            <h1>Claves para un Equilibrio Vida-Trabajo Saludable ⚖️</h1>
            <section class="intro">
                <p>Mantener un equilibrio saludable entre la vida laboral y personal es crucial para la salud mental y 
                física, así como para el bienestar general. Aquí te comparto algunas claves para lograr y mantener este equilibrio:</p>
            </section><br>
            
            <hr>
                <div class="margen-box">
                    <section>
                        <ol>
                            <li><h3>Reconocer la Importancia del Equilibrio</h3>
                                <ul class="lista-box">
                                    <li><b>Conciencia:</b> Comprende que tener tiempo para tu vida personal 
                                    y tus intereses es tan importante como tu carrera.</li>
                                </ul>
                            </li><br>

                            <li>
                                <h3>Establecer Límites Claros</h3>
                                <ul class="lista-box">
                                    <li><b>Horarios de Trabajo:</b> Define horarios de trabajo específicos y cúmplelos. Evita llevar trabajo a casa o hacer horas extras constantemente.</li>
                                    <li><b>Comunicación:</b> Haz saber a tus colegas y superiores tus límites en cuanto a la disponibilidad fuera del horario laboral.</li>
                                </ul>
                            </li><br>

                            <li><h3>Priorizar el Tiempo</h3>
                                <ul class="lista-box">
                                    <li><b>Tareas Esenciales:</b> Diferencia entre las tareas urgentes/importantes y las que pueden esperar.</li>
                                    <li><b>Delegación:</b>  Aprende a delegar responsabilidades cuando sea posible.</li>
                                </ul>
                            </li><br>

                            <li><h3>Tiempo de Calidad Fuera del Trabajo</h3>
                                <ul class="lista-box"> 
                                    <li><b>Actividades de Ocio:</b> Involúcrate en pasatiempos y actividades que te relajen y te llenen de energía.</li>
                                    <li><b>Familia y Amigos:</b> Dedica tiempo de calidad con tus seres queridos sin interrupciones del trabajo.</li>
                                </ul>
                            </li><br>

                            <li><h3>Cuidado Personal</h3>
                                <ul class="lista-box">
                                    <li><b>Ejercicio:</b> Incorpora una rutina de ejercicios regular para mantener la salud física y mental.</li>
                                    <li><b>Alimentación:</b> Opta por una dieta equilibrada que fomente la energía y el bienestar.</li>
                                    <li><b>escanso:</b> Asegúrate de dormir las horas necesarias para recuperarte completamente del día.</li>
                                </ul>
                            </li><br>

                            <li><h3>Tecnología y Conexión</h3>
                                <ul class="lista-box">
                                    <li><b>Desconexión Digital:</b> Tómate descansos de la tecnología, especialmente de los correos electrónicos y mensajes de trabajo.</li>
                                    <li><b>Herramientas Productivas:</b> Utiliza herramientas y aplicaciones que aumenten tu productividad para acortar las horas de trabajo ineficientes.</li>
                                </ul>
                            </li><br>
                            
                            <li><h3>Flexibilidad y Adaptación</h3>
                                <ul class="lista-box">
                                    <li><b>Trabajo Flexible: </b>  Si es posible, busca arreglos de trabajo que te permitan flexibilidad en horas y lugar de trabajo.</li>
                                    <li><b>Adaptación:</b> Sé adaptable a las circunstancias cambiantes y ajusta tus horarios según sea necesario.</li>
                                </ul>
                            </li><br>

                            <li><h3>Desarrollo Personal y Profesional</h3>
                                <ul class="lista-box">
                                    <li><b>Aprendizaje Continuo:</b> Dedica tiempo a tu desarrollo personal y profesional que no esté directamente relacionado con tu trabajo actual.</li>
                                    <li><pbMetas Personales:</b> Establece metas personales fuera del trabajo y avanza hacia ellas regularmente.</li>
                                </ul>
                            </li><br>

                            <li><h3>Manejo del Estrés</h3>
                                <ul class="lista-box"
                                    <li><b>Técnicas de Relajación:</b> Practica técnicas de relajación como la meditación, el yoga o la respiración profunda.</li>
                                    <li><b>Apoyo:</b> No temas buscar apoyo cuando el estrés sea abrumador, ya sea profesional o de amigos y familiares.</li>
                                </ul>
                            </li><br>

                            <li><h3>Evaluación Regular</h3>
                                <ul class="lista-box">
                                    <li><b>Revisión de Rutinas:</b> Revisa periódicamente cómo te sientes con tu equilibrio actual entre vida y trabajo y ajusta según sea necesario.</li>
                                    <li><b>Feedback:</b> Solicita retroalimentación de amigos y familiares sobre cómo ven ellos tu equilibrio.</li>
                                </ul>
                            </li><br>

                            <li><h3>Establecer Metas Claras y Realistas</h3>
                                <ul class="lista-box">
                                    <li><b>Metas Laborales:</b> Define claramente tus objetivos laborales y qué necesitas para alcanzarlos sin sacrificar tu vida personal.</li>
                                    <li><b>Expectativas Realistas:</b> Sé realista sobre lo que puedes lograr en un día de trabajo para no sobrecargarte constantemente.</li>
                                </ul>
                            </li><br>

                            <li><h3>Celebrar los Logros</h3>
                                <ul class="lista-box">
                                    <li><b>Reconocimiento:</b> Tómate el tiempo para celebrar tus logros, tanto en la vida personal como en la profesional.</li>
                                </ul>
                            </li><br>
                        </ol>
                    </section>  
                </div>
            <hr>
        </div>

        <section class="intro">
            <p>Implementar estas claves no solo mejora el bienestar general, sino que también puede conducir a un aumento de la productividad y 
            satisfacción en el trabajo y en casa. La clave está en encontrar la combinación adecuada de trabajo y ocio que funcione para ti, lo 
            que puede variar enormemente de una persona a otra.</p>
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