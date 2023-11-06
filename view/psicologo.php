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
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
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
                            <i class='bx bx-group icon'></i>
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
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

            </div>
        </div>
    </nav>


    <div class="cont-text">
        <h1>Holaaa</h1>
            <p>Bienvenido a la página de contacto psicologico, este es un texto de prueba temporal.</p>
        
        
    </div>

    <?php
    $sql = 'SELECT id_psicol, nombre, apellido, correo, telefono, cita FROM psicologos';
    $stmt = mysqli_query($conexion, $sql);

    echo '<div class="cards-wrapper">';

    while ($row = $stmt->fetch_assoc()) {
        $id = htmlspecialchars($row['id_psicol']);
        $nombreCompleto = htmlspecialchars($row['nombre'] . " " . $row['apellido']);
        $correo = htmlspecialchars($row['correo']);
        $telefono = htmlspecialchars($row['telefono']);

        $fotoRandom = '../assets/imgs-psicol/' . rand(1, 10) . '.jpg';
        $fondoRandom = '../assets/imgs-psicol/' . rand(11, 13) . '.jpg';

        echo <<<EOT
            <div class="card" data-id="$id">
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
    }

    echo '</div>';

    echo <<<EOT
            <div id="myModal" class="modal">
                <!-- Contenido del modal -->
                <div class="modal-content">
                    <span class="close" id="close">&times;</span>
                    <div id="modal-body"></div>
                </div>
            </div>
            EOT;
    ?>

    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('.card').click(function() {
                const psicologoId = $(this).data('id');
                console.log(psicologoId);

                $.ajax({
                    url: '../controller/get-psicol-details.php',
                    type: 'GET',
                    data: {
                        id: psicologoId
                    },
                    success: function(response) {
                        const data = JSON.parse(response);
                        $('#modal-body').html(
                            '<h4><b>' + data.nombreCompleto + '</b></h4>' +
                            '<p><a href="mailto:' + data.correo + '">' + data.correo + '</a></p>' +
                            '<p>' + data.telefono + '</p>' +
                            '<div>' + data.cita + '</div>'
                        )
                        $('#myModal').show();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

            $('#close').click(function() {
                $('#myModal').hide();
            })
        })
    </script>
</body>

</html>