<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$usuario = $_SESSION['nombre'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="css/form-settings.css">
    <link rel="stylesheet" href="css/form-cambnm.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<title>Sistema de Salud Mental</title>
<body>
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

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="evaluacion-clinica.php">
                            <i class='bx bx-group icon' ></i>
                            <span class="text nav-text">Evaluación Clinica</span>
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

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>
    </nav>


    <section class="home">
        <div class="text">
            <h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1> <br>
            <p><b>Tu bienestar mental es prioridad.</b> En esta sección, puedes personalizar tu experiencia en nuestro sitio, aquí puedes gestionar 
                tu perfil.</p> <br><br>

                <div class="container"> 
                    <div class="centered-div">
                        <img class="img-prfl" src="img/perfil.png">
                        <p>Cuenta</p>
                    </div>
                </div>

            <br><br>
            
            <!-- Formulario de configuración -->
            <form action="cambiar-nombre.php" method="POST">
                <!-- Filtros para cambiar nombre que aparece en el sistema -->
                <h3>Cambiar nombre: </h3>
                <div class="input-name">
                    <table>
                        <tr>
                            <td>
                                <label for="currentUsername">Nombre de usuario actual:</label>
                            </td>
                            <td>
                                <label for="newUsername">Nuevo nombre de usuario:</label>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="currentUsername" name="currentUsername" required>
                            </td>
                            <td>
                                <input type="text" id="newUsername" name="newUsername" required>
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="submit" name="submitName" value="Guardar"><br><br>
            <?php
            if(isset($_GET['error_message'])){
                ?>
                <div class="error-message">
                <p>
                    <?php
                        echo $_GET['error_message'];
                    ?>
                </p>
                </div>
                <?php
            }
            ?> <br> 
            </form>

            <br><br>
            
            <!-- Formulario para cambiar la contraseña -->
            <form action="cambiar-contrasenia.php" method="POST">
            <h3>Cambiar contraseña:</h3><br> <br>
            <div class="form-group-f">
                    <label for="currentPassword">Contraseña actual:</label> <br> <br>
                    <input type="password" id="currentPassword" name="currentPassword" required>
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
                    if (isset($_GET['pass_error_message'])) {
                        ?>
                        <p class="error-message-pass">
                            <?php
                                echo $_GET['pass_error_message'];
                            ?>
                        </p>
                        <?php
                    }
                    ?> 
            </form> 
        </div>
        <br><br><br><br>
                
    </section>

    <footer>
        <p>&copy; <span id="year"></span> Clinica virtual para la salud de tu mente</p>
    </footer>
    <script src="./js/menu.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
