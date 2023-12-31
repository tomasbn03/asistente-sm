<?php
    session_start(); // Iniciar la sesión al principio del archivo
    $error_message = '';
    if (isset($_SESSION['error_message'])) {
        $error_message = $_SESSION['error_message'];
        unset($_SESSION['error_message']); // Es importante limpiar la variable de sesión después de usarla
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Iniciar sesión | Registrarse</title>
</head>
<body>
<a href="home.php" class="boton-regresar"><p>Regresar</p></a>
    <div class="container" id="container">
        <!-- Formulario de logeo -->
        <div class="form-container sign-in-container">
            <form method="POST" action="../controller/login.php">
                <h1>Iniciar sesión</h1><br>
                <!-- Error para Login -->
                <?php
                    if(isset($_GET["error"])){
                        ?>
                        <p class="error"> 
                            <?php
                                echo $_GET['error'];
                            ?>
                        </p>
                    <?php
                    }
                ?>
                <hr>
                <!-- Error de registro para saber si se registró o no -->
                <?php if ($error_message != ''): ?>
                    <p class="error"><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
                <input type="email" name="correo" placeholder="Correo" />
                <input type="password" name="contrasenia" placeholder="Constraseña" /><br>
                
                <button type="submit">Ingresar</button>
            </form>
        </div>
        <!-- Formulario de registro -->
        <div class="form-container sign-up-container">
            <form method="POST" action="../controller/registro.php">
                <h1>Crear cuenta</h1><br>        
                <input type="text" name="nombre" placeholder="Nombre / Apellido" required/>
                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="email" name="correo" placeholder="Correo electronico" required/>
                <input type="password" name="contrasenia" placeholder="Contraseña" required/>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de nacimiento" required>
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/login-register.js"></script>
</body>
</html>
