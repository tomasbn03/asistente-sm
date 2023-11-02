<?php

use function PHPSTORM_META\map;

session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
include '../model/db.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/botones-ca.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/psicologo.css">
</head>
<title>Sistema de Salud Mental</title>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/perfil.png" alt="">
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
                            <span class="text nav-text">Configuraciones</span>
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

    
    <div class="cont-text">
        <h1>Holaaa</h1>
            <p>Bienvenido a la página de contacto psicologico, este es un texto de prueba temporal.</p>
        
        <div class="botones-ca">
            <div class="contacto-u">
                <a href="">
                    <span>Contacto Urgente</span>
                </a>
            </div>
            <div class="programar-s">
                <a href="">
                    <span>Programar Sesión</span>
                </a>
            </div>
        </div>
    </div>

    <?php
        $sql = 'SELECT id_psicol, nombre, apellido, correo, telefono FROM psicologos';
        $stmt = mysqli_query($conexion, $sql);

        echo '<div class="cards-wrapper">';

        while ($row = $stmt->fetch_assoc()) {
            $id = htmlspecialchars($row['id_psicol']);
            $nombreCompleto = htmlspecialchars($row['nombre'] . " " . $row['apellido']);
            $correo = htmlspecialchars($row['correo']);
            $telefono = htmlspecialchars($row['telefono']);

            $fotoRandom = '../assets/imgs-psicol/' . rand(1, 10) . '.jpg';
            $fondoRandom = '../assets/imgs-psicol/' . rand(11, 13) . '.jpg';

            $info = <<<EOT
            <div class="card" data-id="$id" onclick="openModal(this)">
                <div class="card-header">
                    <img src="$fondoRandom" alt="Paisaje" class="background-image">
                    <div class="profile-pic-container">
                        <img src="$fotoRandom" alt="Foto random para $nombreCompleto" class="profile-image">
                    </div>
                </div>
                <div class="card-content">
                    <h4><b>$nombreCompleto</b></h4>
                    <p><a href="mailto:$correo">$correo</a></p>
                    <p>$telefono</p>
                </div>
            </div>
            EOT;

            $modal = <<<EOT
            <div id="myModal" class="modal">
                <!-- Contenido del modal -->
                <div class="modal-content">
                    <span class="close" id="close">&times;</span>
                    <div class="modal-body">
                    $info
                    </div>
                </div>
            </div>
            EOT;

            echo $modal;
            echo $info;
        }

        echo '</div>';
    ?>
    
    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        function openModal(card) {
            const modal = document.getElementById("myModal");
            const span = document.getElementById("close");

            modal.style.display = "block";

            span.addEventListener("click", closeModal);
            span.onclick = function() {
                closeModal();
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    closeModal();
                }
            }
        }

        function closeModal() {
            const modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>