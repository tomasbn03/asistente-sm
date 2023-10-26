<?php
session_start();

if (!isset($_SESSION['correo'])) { 
    header("Location: login-register.php");
    exit();
}

$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$telefono = $_SESSION['telefono'];


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
                <div class="cambiar-passwd">
                    <a href="settings-passwd.php" class="button">Cambiar la contraseña</a>
                </div>


            <br><br>
            <input type="file" name="foto_perfil" accept="image/*">
            <br><br>

            <!-- Filtros para cambiar nombre que aparece en el sistema -->
            
                
            <div class="contenedor-1">
                <div class="sub-contenedor-1">
                    <!-- Cambiar nombre -->
                    <form action="update-settings.php" method="POST">
                        <!-- Cambiar nombre -->
                        <h3>Cambiar nombre: </h3>
                        <div class="input-name">
                            <table>
                                <tr>
                                    <td><label for="currentUsername">Nombre de usuario actual:</label></td>
                                    <td><label for="newUsername">Nuevo nombre de usuario:</label></td>
                                </tr>
                                <tr>
                                    <td><input type="text" id="currentUsername" value="<?php echo $_SESSION['nombre']; ?>" name="currentUsername" required></td>
                                    <td><input type="text" id="newUsername" name="newUsername" required></td>
                                </tr>
                            </table>
                        </div>

                        <!-- Cambiar correo -->
                        <h3>Cambiar Correo electrónico</h3>
                        <div class="input-name">
                            <table>
                                <tr>
                                    <td><label for="currentEmail">Correo electrónico actual:</label></td>
                                    <td><label for="newEmail">Nuevo correo electrónico:</label></td>
                                </tr>
                                <tr>
                                    <td><input type="email" id="currentEmail" value="<?php echo $_SESSION['correo']; ?>" name="currentEmail" required></td>
                                    <td><input type="email" id="newEmail" name="newEmail" required></td>
                                </tr>
                            </table>
                        </div>

                        <!-- Cambiar número de teléfono -->
                        <h3>Cambiar número telefónico</h3>
                        <div class="input-name">
                            <table>
                                <tr>
                                    <td><label for="currentPhone">Número de teléfono actual:</label></td>
                                    <td><label for="newPhone">Nuevo número de teléfono:</label></td>
                                </tr>
                                <tr>
                                    <td><input type="text" id="currentPhone" value="<?php echo $_SESSION['telefono']; ?>" name="currentPhone" required></td>
                                    <td><input type="text" id="newPhone" name="newPhone" required></td>
                                </tr>
                            </table>
                        </div>

                        <input type="submit" name="submitDatos" value="Guardar"><br><br>

                        <!-- Mensajes de error -->
                        <div class="message">
                            <?php
                                if(isset($_GET["message"])){
                                    echo '<p>'.$_GET['message'].'</p>';
                                }
                            ?>
                        </div>

                    </form>
                </div>
            </div>
                
            

<br><br>

            
        
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
