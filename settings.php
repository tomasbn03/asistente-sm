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
    <link rel="stylesheet" href="css/forms-settings.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/error-message.css">
   
    
</head>
<title>Sistema de Salud Mental</title>
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

    <!-- Seccion principal de la pagina home -->
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
            <input type="file" name="foto_perfil" accept="image/*">
            <br><br>
            <!-- Formularios de configuración -->

            <!-- Filtros para cambiar nombre que aparece en el sistema -->
            <form action="cambiar-nombre.php" method="POST">
                
                <div class="contenedor-1">
                    <div class="sub-contenedor-1">
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
                    <!-- Menesaje de error para cambiar correo -->
                    <?php
                        if(isset($_GET["error_message"])){
                            ?>
                            <p class="name-message">                           
                                    <?php
                                        echo $_GET['error_message'];
                                    ?>

                            </p>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                
            </form>
            <!-- Fin de filtros para cambiar nombre -->

<br><br>
            
            <!-- Filtro para cambiar la contraseña -->
            <form action="cambiar-contrasenia.php" method="POST">
                    <div class="contenedor-2">
                        <div class="sub-contenedor-2">
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

<br><br><br>


            <!-- Filtro para cambiar el correo electronico -->
            <form action="cambiar-correo.php" method="POST">
                    <div class="contenedor-3">
                        <div class="sub-contenedor-3">
                        <h3>Cambiar Correo electrónico</h3>
                <div class="input-name">
                    <table>
                        <tr>
                            <td>
                                <label for="currentEmail">Correo electrónico actual:</label>
                            </td>
                            <td>
                                <label for="newEmail">Nuevo correo electrónico:</label>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <input type="email" id="currentEmail" name="currentEmail" required>
                            </td>
                            <td>
                                <input type="email" id="newEmail" name="newEmail" required>
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="submit" name="submitEmail" value="Guardar"><br><br>
                <!-- Menesaje de error para cambiar correo -->
                <?php
                    if(isset($_GET["email_message"])){
                        ?>
                        <p class="email-message">                           
                                <?php
                                    echo $_GET['email_message'];
                                ?>

                        </p>
                    <?php
                    }
                ?>
                        </div>
                    </div>
            </form>

<br><br>

            <!-- Fin de filtro para cambiar el numero de telefono -->
            <form action="cambiar-telefono.php" method="POST">
                <div class="contenedor-4">
                    <div class="sub-contenedor-4">
                    <h3>Cambiar número telefónico</h3>
                    <div class="input-name">
                        <table>
                            <tr>
                                <td>
                                    <label for="currentPhone">Número de teléfono actual:</label>
                                </td>
                                <td>
                                    <label for="newPhone">Nuevo número de teléfono:</label>
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="currentPhone" name="currentPhone" required>
                                </td>
                                <td>
                                    <input type="text" id="newPhone" name="newPhone" required>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <input type="submit" name="submitPhone" value="Guardar"><br><br>
                    <?php
                    if(isset($_GET["phone_error_message"])){
                        ?>
                        <p class="phone-message">                           
                                <?php
                                    echo $_GET['phone_error_message'];
                                ?>

                        </p>
                    <?php
                    }
                ?>
                    </div>
                </div>
            </form>
        </div>
<br>
<br>
<br>
<br>
<br>
    </section>
    <footer>
        <p>&copy;<span id="year"></span>  MentalMatters Virtual. Todos los derechos reservados.</p>
    </footer>
    
    <script src="./js/showYear.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
