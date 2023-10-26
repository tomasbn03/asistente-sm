<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$pass = $_SESSION['contrasenia'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="css/forms-settings.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/error-message.css">
    <title>Cambiar contraseña</title>
</head>
<body>
<!-- Barra de menú principal -->
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/perfil.png" alt="">
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
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
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>
                
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">
            <h1>En este apartado puedes actualizar tu contraseña</h1>
            
            <!-- Filtro para cambiar la contraseña -->
            <form action="cambiar-contrasenia.php" method="POST">
                    <div class="contenedor-2">
                        <div class="sub-contenedor-2">
                        <h3>Cambiar contraseña:</h3><br> <br>
                        <div class="form-group-f">
                         <label for="currentPassword">Contraseña actual:</label> <br> <br>
                         <input type="password" id="currentPassword" value="<?php echo $pass ?>" name="currentPassword" required>
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
                                    <p class="pass-message">                           
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
    </section>

</body>
</html>