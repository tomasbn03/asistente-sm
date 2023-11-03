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

    <!-- Seccion principal de la pagina home -->
    
        <div class="cont-text">
            <h1>Bienvenido <?php echo $_SESSION['nombre']; ?></h1> <br>
            <p><b>Tu bienestar mental es prioridad.</b> En esta sección, puedes personalizar tu experiencia en nuestro sitio, aquí puedes gestionar 
                tu perfil.</p> <br><br>



                <div class="container"> 
                    <div class="centered-div">
                        <img class="img-prfl" src="../assets/img/perfil.png">
                        <p>Cuenta</p>
                    </div>
                </div><br>

            <br><br>
            <input type="file" name="foto_perfil" accept="image/*">
            <br><br><br>

            <!-- Filtros para cambiar nombre que aparece en el sistema -->
            
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
    
    <footer>
        <p>&copy;<span id="year"></span>  MentalMatters Virtual. Todos los derechos reservados.</p>
    </footer>
    
    <script src="../assets/js/showYear.js"></script>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>