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
    <link rel="stylesheet" href="../assets/css/biblio5.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php
        require("components/menu.php")
    ?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div><br>

    <div class="container-bl">
        <h1>Construyendo una Autoestima Sólida: <br> Tu Guía para la Confianza Auténtica 🙁</h1>
        <div class="container-scnd">
            <section class="intro">
                <p>La autoestima es un término utilizado en psicología para describir la valoración, 
                percepción o evaluación general que una persona tiene de sí misma. Implica un juicio 
                subjetivo que cada quien hace de su propio valor. Esto incluye creencias sobre sí mismo 
                (por ejemplo, "soy competente", "soy digno") y emociones asociadas como el triunfo, 
                la desesperación, el orgullo y la vergüenza.</p><br>
                <p>La autoestima se puede considerar como una característica persistente de la personalidad 
                que puede variar en menor grado según las circunstancias, aunque también puede fluctuar 
                en respuesta a cambios en la vida, logros, fracasos y percepciones de cómo uno es visto
                por los demás.</p>
            </section><br>
        <hr>
            <div class="margen-box">
                <section>
                <h2>Sección 1 - Las dimensiones de la autoestima</h2><br>
                    <p>
                        <ul class="lista-box">
                            <li><b>Autoestima Global o General:</b> Se refiere al valor que las personas 
                            se atribuyen a sí mismas de manera general. Esta dimensión es bastante estable 
                            y abarca una sensación de satisfacción con uno mismo.</li><br>

                            <li><b>Autoestima Específica:</b> Se relaciona con cómo nos valoramos en áreas 
                            específicas de nuestra vida. Por ejemplo, uno puede tener alta autoestima en 
                            su capacidad profesional pero baja autoestima en su vida social o en su imagen 
                            corporal.</li><br>

                            <li><b>Autoestima Basal y Situacional:</b> La autoestima basal se refiere al 
                            nivel de autoestima que una persona tiene de manera cotidiana, mientras que 
                            la autoestima situacional puede variar considerablemente según el contexto o 
                            la situación específica en la que se encuentra la persona.</li><br>

                            <li><b>Autoestima Positiva y Negativa:</b> Algunos teóricos también diferencian 
                            la autoestima en términos de valencia positiva o negativa, refiriéndose a si 
                            las personas generalmente sienten que son "buenas" y valiosas o si tienden a 
                            sentirse "malas" o no valiosas.</li><br>

                            <li><b>Autoestima Real e Ideal:</b> Se refiere a la discrepancia entre cómo 
                            nos vemos (autoestima real) y cómo nos gustaría ser (autoestima ideal). Una 
                            gran brecha entre estas dos percepciones puede afectar la autoestima de una 
                            persona.</li><br>

                            <li><b>Autoestima Condicional e Incondicional:</b> La autoestima condicional 
                            depende del cumplimiento de ciertas condiciones o expectativas (por ejemplo, 
                            me valoro si tengo éxito o si los demás me aprueban), mientras que la autoestima 
                            incondicional es una aceptación de uno mismo independientemente de logros o
                            fallos.</li><br>
                        </ul>
                    </p>
                </section>
            </div>
        <hr>
                <section class="intro">
                        <p>Es importante señalar que una autoestima equilibrada es esencial para la salud psicológica. 
                        Tanto una autoestima demasiado baja como un nivel excesivamente alto (que podría cruzar hacia 
                        el narcisismo) pueden ser perjudiciales para el bienestar de un individuo. Una autoestima 
                        saludable permite a las personas enfrentar los altibajos de la vida con resiliencia, y cultivar 
                        relaciones saludables con los demás y consigo mismos.</p>
                </section>

        <hr>
            <div class="margen-box">
                <section>
                    <h2>Seccion 2 - Evaluando y Entendiendo Tu Autoestima</h2><br>
                    <p>Evaluando y entendiendo tu autoestima es un proceso que implica la reflexión personal y, en muchos 
                    casos, la participación de actividades o instrumentos de autoevaluación. Aquí hay una guía paso a paso 
                    que podrías seguir para evaluar y comprender tu autoestima:</p><br>
                    <p>
                        <h3>Paso 1: Reflexión Personal</h3>
                        <ul class="lista-box">
                            <li><b>Analiza tus pensamientos:</b> ¿Qué tipo de diálogo interno tienes contigo mismo? 
                            ¿Es principalmente positivo o negativo?</li>
                            <li><b>Observa tus comportamientos:</b> ¿Evitas desafíos por miedo a fallar? ¿O tiendes 
                            a enfrentar las situaciones desafiantes con confianza?</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 2: Identificación de Creencias y Actitudes</h3>
                        <ul class="lista-box">
                            <li><b>Identifica tus creencias</b> Anota las creencias que tienes sobre ti mismo, tanto 
                            positivas como negativas.</li>
                            <li><b>Valora tus fortalezas y debilidades:</b> Sé honesto contigo mismo acerca de lo que 
                            consideras que son tus capacidades y áreas de mejora.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 3: Autoevaluación Estructurada</h3>
                        <ul class="lista-box">
                            <li><b>Cuestionarios y escalas:</b> Utiliza herramientas estandarizadas como la Escala 
                            de Autoestima de Rosenberg o el Inventario de Autoestima de Coopersmith para obtener una medida más objetiva.</li>
                            <li><b>Solicita feedback:</b> Pregunta a personas cercanas cómo te ven. A veces, los demás pueden ofrecer 
                            una perspectiva que no has considerado.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 4: Evaluación de Experiencias Pasadas</h3>
                        <ul class="lista-box">
                            <li><b>Examina tu pasado:</b> Piensa en tus experiencias pasadas y cómo han impactado tu autoestima. 
                            ¿Hay patrones o eventos significativos que la hayan moldeado?</li>
                            <li><b>Reconoce logros y fracasos:</b> Comprende cómo has manejado tus éxitos y fracasos. 
                            ¿Tus logros han mejorado tu autoestima? ¿Cómo reaccionas ante los fracasos?</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 5: Reconocimiento de Influencias Externas</h3>
                        <ul class="lista-box">
                            <li><b>Influencias sociales y culturales:</b> Considera cómo los mensajes de los medios, la cultura 
                            y tu entorno social han afectado tu autoestima.</li>
                            <li><b>Relaciones significativas:</b> Reflexiona sobre cómo las relaciones con familiares, amigos 
                            y compañeros han influenciado tu percepción de ti mismo.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 6: Entendimiento del Impacto en la Vida Diaria</h3>
                        <ul class="lista-box">
                            <li><b>Analiza tus relaciones:</b> ¿Cómo afecta tu autoestima a tus relaciones interpersonales?</li>
                            <li><b>Considera tu desempeño: </b> ¿De qué manera influye tu autoestima en tu trabajo o estudios?</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 7: Plan de Acción para Mejorar</h3>
                        <ul class="lista-box">
                            <li><b>Establece objetivos realistas:</b> Define metas que sean alcanzables y que puedan ayudarte a mejorar tu autoestima.</li>
                            <li><b>Desarrolla habilidades:</b> Participa en actividades que fomenten la confianza y la autoeficacia.</li>
                            <li><b>Practica la autocompasión:</b> Sé amable contigo mismo y reconoce que todos tienen defectos y cometen errores.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h3>Paso 8: Busca Soporte Profesional si es Necesario</h3>
                        <ul class="lista-box">
                            <li>Si encuentras que los problemas de autoestima están afectando seriamente tu vida, considera buscar la ayuda de un
                            terapeuta o consejero profesional.</li>
                        </ul>
                    </p>
                </section>
            </div>
        <hr>
                <section class="intro">
                    <p>Entender tu autoestima es un proceso continuo y dinámico. Requiere tiempo y, a menudo, un esfuerzo consciente para cambiar 
                    patrones de pensamiento arraigados y actitudes hacia uno mismo. La autoaceptación y el amor propio son metas valiosas en este 
                    viaje, y el primer paso es a menudo reconocer y aceptar dónde te encuentras actualmente en términos de tu autoestima.</p>
                </section>
    
        <hr>
            <div class="margen-box">
                <div class="title"><h2>Seccion 3 - Estrategias y Ejercicios para Reforzar la Autoestima</h2></div>
                <section>
                    <p>Mejorar la autoestima es un proceso personal y activo que implica tanto la reflexión como la acción. 
                    Aquí te detallo algunas estrategias y ejercicios que pueden ayudar a reforzar la autoestima:</p><br>
                
                    <h2>Estrategias para Reforzar la Autoestima</h2><br>    
                    <p>
                        <h4>Habla Positivamente Contigo Mismo</h4>
                        <ul class="lista-box">
                            <li><b>Diálogo Interno Positivo: </b> Transforma el diálogo interno negativo en afirmaciones positivas. 
                            Por ejemplo, en lugar de decir "No puedo hacer esto", intenta con "Voy a hacer lo mejor que pueda".</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Establece Metas Realistas</h4>
                        <ul class="lista-box">
                            <li><b>Pequeños Objetivos:</b> Comienza con metas pequeñas y alcanzables que puedas lograr. El éxito en estas metas 
                            puede construir confianza y mejorar tu autoestima.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Practica la Autocompasión</h4>
                        <ul class="lista-box">
                            <li><b>Ejercicios de Autocompasión: </b> Trata de ser tan amable y comprensivo contigo mismo como lo serías con un buen amigo.</li>

                        </ul>
                    </p><br>

                    <p>
                        <h4>Enfrenta tus Miedos</h4>
                        <ul class="lista-box">
                            <li><b>Acción a Pesar del Miedo:</b> Toma pequeños pasos para enfrentarte a las cosas que te asustan. La superación de miedos puede
                             ser un poderoso potenciador de la autoestima.</li>
                        
                        </ul>
                    </p><br>

                    <p>
                        <h4>Identifica y Desafía Creencias Limitantes</h4>
                        <ul class="lista-box">
                            <li><b>Reestructuración Cognitiva:</b> Cuestiona las creencias negativas sobre ti mismo y reemplázalas por interpretaciones más balanceadas.</li>
                          
                        </ul>
                    </p><br><br>

                    <h2>Ejercicios para Reforzar la Autoestima</h2><br>
                    <p>
                        <h4>Ejercicio de Afirmaciones</h4>
                        <ul class="lista-box">
                            <li>Escribe una lista de afirmaciones positivas que reflejen tus valores, habilidades y cualidades. 
                            Léelas en voz alta todos los días.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>El Frasco de Logros</h4>
                        <ul class="lista-box">
                            <li>Cada vez que logres algo o te sientas orgulloso de ti mismo por algo, escribe una nota y colócala 
                            en un frasco. Cuando te sientas desanimado, lee tus logros.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Diario de Gratitud</h4>
                        <ul class="lista-box">
                            <li>Escribe tres cosas por las que estás agradecido cada día. La gratitud puede cambiar tu 
                            enfoque de lo que te falta a lo que tienes.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>La Lista de Fortaleza</h4>
                        <ul class="lista-box">
                            <li>Haz una lista de tus fortalezas y habilidades. Si te resulta difícil, pide a amigos y familiares que contribuyan.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Visualización Positiva</h4>
                        <ul class="lista-box">
                            <li>Dedica tiempo cada día para visualizarte a ti mismo teniendo éxito en tus esfuerzos. Esto puede ayudar a 
                            reforzar la creencia en tus habilidades.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Ejercicio del Espejo</h4>
                        <ul class="lista-box">
                            <li>Párate frente a un espejo y habla de tus cualidades positivas. Esto puede ser incómodo al principio, pero 
                            con el tiempo puede mejorar significativamente tu percepción de ti mismo.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Desafíos de Habilidades</h4>
                        <ul class="lista-box">
                            <li>Participa regularmente en actividades que sabes que eres bueno. Mejorar o demostrar tus habilidades puede aumentar tu autoestima.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Rodearse de Positividad</h4>
                        <ul class="lista-box">
                            <li>Pasa tiempo con personas que te hagan sentir bien contigo mismo y evita aquellas que tienden a desencadenar tus inseguridades.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Meditación y Mindfulness</h4>
                        <ul class="lista-box">
                            <li>Practica la meditación y la atención plena para reducir el estrés y mejorar la relación contigo mismo.</li>
                        </ul>
                    </p><br>

                    <p>
                        <h4>Terapia y Coaching</h4>
                        <ul class="lista-box">
                            <li>Considera trabajar con un terapeuta o coach que puede proporcionar apoyo y dirección mientras trabajas en tu autoestima.</li>
                        </ul>
                    </p><br>
                </section>
            </div>
        <hr>

                <section class="intro">
                    <p>Recuerda, la autoestima se construye poco a poco con cada acción que realizas en tu favor. Los ejercicios y estrategias 
                    deben ser personalizados para adaptarse a tus necesidades y circunstancias individuales. Es importante ser paciente contigo 
                    mismo y reconocer que el cambio es un proceso que toma tiempo.</p>
                </section><br>
    </div>



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