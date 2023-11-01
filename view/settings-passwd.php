<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$pass = $_SESSION['contrasenia'];
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
<!-- Barra de menú principal -->
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
            <h2>En este apartado puedes actualizar tu contraseña <?php echo $_SESSION['nombre']; ?></h2><br>
            
            <!-- Filtro para cambiar la contraseña -->
            <form action="../controller/cambiar-contrasenia.php" method="POST">
                    <div class="contenedor-2">
                        <div class="sub-contenedor-2">
                        <h3>Cambiar contraseña:</h3><br> <br>
                        <div class="form-group-f">
                                <div class="currentPass">
                                    <label for="currentPassword">Contraseña actual:</label> <br> <br>
                                    <input type="password" id="currentPassword" value="<?php echo $_SESSION['contrasenia']; ?>" name="currentPassword" required>
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
                            <?php
                                if(isset($_GET["pass_error_message"])){
                                    ?>
                                    <p class="pass_error_message">                           
                                            <?php
                                                echo $_GET['pass_error_message'];
                                            ?>

                                    </p>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            </form> 
            <!-- Fin de filtro para cambiar la contraseña -->
        </div>
        <footer>
            <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
        </footer>
        <script src="../assets/js/menu.js"></script>
        <script src="../assets/js/showYear.js"></script>
        <script src="../assets/js/script.js"></script>
</body>
</html>