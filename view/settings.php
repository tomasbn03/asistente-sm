<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}
 
$usuario = $_SESSION['nombre'];
$email = $_SESSION['correo'];
$phone = $_SESSION['telefono'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="../assets/css/forms-settings.css">
    <link rel="stylesheet" href="../assets/css/forms-display.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/error-message.css">
</head>
<title>Sistema de Salud Mental</title>
<body>
<!-- Menu -->
<?php
    require("components/menu.php")
?>

    <!-- Seccion principal de la pagina home -->
    
        <div class="cont-text">
            <h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1> <br>
            <p><b>Tu bienestar mental es prioridad.</b> En esta sección, puedes personalizar tu experiencia en nuestro sitio, aquí puedes gestionar 
                tu perfil.</p> <br><br>

                <?php
                // Verifica la sesion para mostrar la imagen según el usuario 
                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                    require_once '../model/db.php'; 

                    $userId = $_SESSION['user_id'];
                    $stmt = $conexion->prepare("SELECT foto_perfil FROM usuarios WHERE id = ?");
                    $stmt->bind_param("i", $userId);
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($fotoPerfil);
                        $stmt->fetch();

                        $imagePath = !empty($fotoPerfil) ? '../uploads/' . $fotoPerfil : 'ruta/a/imagen/por/defecto.jpg';
                        echo '<img src="' . htmlspecialchars($imagePath) . '" alt="Foto de perfil" class="profile-picture"> <br>';
                    } else {
                        echo '<img src="ruta/a/imagen/por/defecto.jpg" alt="Foto de perfil" >';
                    }
                    $stmt->close();
                }
                ?>

                <!-- Formulario para subir, cambiar y  eliminar la foto de perfil -->
                <form action="../controller/foto-perfil.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" required> 
                    <button type="submit" name="submit">Subir/Actualizar Foto</button>
                </form><br>
                <form action="../controller/foto-perfil.php" method="post">
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" class=btn-delete name="delete">Eliminar Foto</button>
                </form>
     

            <!-- Filtros para cambiar nombre que aparece en el sistema -->
<br><br><br>          
            <!-- Formulario para cambiar nombre -->
            <div class="container-display">
                <div class="sub-name">
                        <h3>Cambiar nombre para mostrar:</h3>
                        <form method="POST" action="../controller/update-name.php">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre actual:</th>
                                        <th>Nuevo nombre: </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" id="currentName" name="currentName" value="<?php echo $_SESSION['nombre']; ?>" ></td>
                                        <td><input type="text" id="newName" name="newName"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="submitName">Guardar cambios</button>
                        </form>
                </div>
                <div class="mensaje">
                    <!-- Mensaje -->
                    <?php if(isset($_GET["mensaje_name"])){ ?> <p class="mensaje_name"> <?php echo $_GET['mensaje_name']; ?> </p> <?php } ?>
                </div>
            </div>
<br><br><br>
            <!-- Formulario para cambiar correo -->
            <div class="container-display">
                <div class="sub-email">
                    <table>
                        <h3>Cambiar correo:</h3>
                        <form method="POST" action="../controller/update-email.php">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Correo actual:</th>
                                        <th>Nuevo correo: </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="email" name="correo" value="<?php echo $_SESSION['correo']; ?>"></td>
                                        <td><input type="email" name="nuevoCorreo"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="submitEmail">Guardar cambios</button>
                        </form>
                    </table>
                </div>
                <div class="mensaje">
                    <!-- Mensaje -->
                    <?php if(isset($_GET["mensaje_email"])){ ?> <p class="mensaje_email"> <?php echo $_GET['mensaje_email']; ?> </p> <?php } ?>
                </div>
            </div>
<br><br><br>
            <!-- Formulario para cambiar telefono -->
            <div class="container-display">
                <div class="sub-phone">
                    <table>
                        <h3>Cambiar número telefónico:</h3>
                        <form method="POST" action="../controller/update-phone.php">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Número actual:</th>
                                        <th>Nuevo número: </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="currentPhone" value="<?php echo $_SESSION['telefono']; ?>"></td>
                                        <td><input type="text" name="newPhone"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="submitPhone">Guardar cambios</button>
                        </form>
                    </table>
                </div>
                <div class="mensaje">
                    <!-- Mensaje -->
                    <?php if(isset($_GET["mensaje_phone"])){ ?> <p class="mensaje_phone"> <?php echo $_GET['mensaje_phone']; ?> </p> <?php } ?>
                </div>
            </div>

<br><br><br>
            <p style="font-size: 14pt;">Tambien puedes cambiar tu contraseña</p><br>
            <div class="cmbcnt">
                <a href="settings-passwd.php" class="button">Cambiar la contraseña</a>
            </div>
        </div>  

<br>
<br>
<br>
<br>
<br> 
<?php
    require("components/footer.php");
?>
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>