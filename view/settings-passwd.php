<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}
$usuario = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="../assets/css/forms-settings.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/error-message.css">
    <title>Cambiar contraseña</title>
</head>
<body>
<!-- Menu -->
<?php
    require("components/menu.php");
?>
<br>
        <div class="cont-text">
            <h2>En este apartado puedes actualizar tu contraseña <?php echo $_SESSION['nombre']; ?></h2><br>
            
            <!-- Filtro para cambiar la contraseña -->
            <form action="../controller/cambiar-contrasenia.php" method="POST">
                    <div class="contenedor-2">
                        <div class="sub-contenedor-2">
                        <h3>Cambiar contraseña:</h3><br> <br>
                        <div class="form-group-f">
                                <div class="currentPass">
                                    <label for="currentPassword">Contraseña actual:</label> <br> <br>
                                    <input type="password" id="currentPassword" name="currentPassword" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="newPassword">Nueva contraseña:</label>  
                                        </td>
                                        <td>
                                            <label for="confirmPassword">Confirmar nueva contraseña:</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="password" id="newPassword" name="newPassword" required>
                                        </td>
                                        <td>
                                            <input type="password" id="confirmPassword" name="confirmPassword" required>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <input type="submit" name="submitPass" value="Guardar"><br> <br> <br>
                            <?php if (isset($_GET["pass_error_message"])): ?>
                                <p class="pass_error_message">
                                    <?php echo htmlspecialchars($_GET['pass_error_message'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
            </form> 
            <!-- Fin de filtro para cambiar la contraseña -->
        </div><br>

<?php
    require("components/footer.php");
?>

        <script src="../assets/js/menu.js"></script>
        <script src="../assets/js/showYear.js"></script>
        <script src="../assets/js/script.js"></script>
</body>
</html>