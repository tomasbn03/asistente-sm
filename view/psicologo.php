 <?php

use function PHPSTORM_META\map;

session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: login-register.php");
    exit();
}

$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];

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
    <title>Sistema de Salud Mental</title>
</head>
<body>
<!-- Menu -->
<?php
    require("components/menu.php");
?>
    <div class="backgraund-portada">
        <img src="../assets/img/portada.png" id="portada">
    </div><br>



    
    <div class=box-main> 
    <div class="cont-text">
        <h1>Hola <?php echo $_SESSION['nombre'] ?></h1>
        <p>Bienvenido a la página para contactar a tu profesional especializado en la salud mental.</p>
    </div><br><br>
    <?php
    $sql = 'SELECT id_psicol, nombre, apellido, correo, telefono, cita FROM psicologos';
    $stmt = mysqli_query($conexion, $sql);

    echo '<div class="cards-wrapper">';

    while ($row = $stmt->fetch_assoc()) {
        $id = htmlspecialchars($row['id_psicol']);
        $nombreCompleto = htmlspecialchars($row['nombre'] . " " . $row['apellido']);
        $correo = htmlspecialchars($row['correo']);
        $telefono = htmlspecialchars($row['telefono']);

        $fotoRandom = '../assets/imgs-psicol/' . $id . '.png';
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
                    <p><a href="mailto:$correo" style="color:#1F1F1F;">$correo</a></p>
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
    </div> <br><br>
    
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
                            '<div class="foto-psicologo"><img src="../assets/imgs-psicol/' + psicologoId + '.png" alt="Foto de perfil"></div><br>' +
                            '<h3>Hola! Me llamo ' + data.nombreCompleto + '</h3><br>' +
                            '<hr class="custom-hr"><br>' +
                            '<h4>Puedes contactarme al correo: <a href="mailto:' + data.correo + '">' + data.correo + '</a></h4>' +
                            '<hr class="custom-hr"><br>' +
                            '<h4>Puedes contactarme al teléfono:<br>'+ '+503 ' + data.telefono + '</h4>' +
                            '<hr class="custom-hr"><br>' +
                            '<div>"' + data.cita + '"</div>'
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
    <?php
        require("components/footer.php");
    ?>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/showYear.js"></script>
</body>

</html>