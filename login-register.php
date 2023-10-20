<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Iniciar sesión | Registrarse</title>
</head>
<body>
    <nav>
        <ul class="navbar">
            <li class="navitem"><a href="home.html">Inicio</a></li>
            <li class="navitem"><a href="about.html">Acerca de</a></li>
            <li class="navitem"><a href="services.html">Servicios</a></li>
        </ul>
    </nav>
    
    <div class="container" id="container">
        <!-- Formulario de logeo -->
        <div class="form-container sign-in-container">
            <form method="POST" action="login.php">
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
                <?php
                    if(isset($error_message)){
                        ?>
                        <p class="error">
                            <?php
                                echo $error_message;
                            ?>
                        </p>
                    <?php
                    }
                ?>
                <input type="email" name="correo" placeholder="Correo" />
                <input type="password" name="contrasenia" placeholder="Constraseña" />
                <a href="#">Olvidaste tu contraseña?</a>
                <button type="submit">Ingresar</button>
            </form>
        </div>

        <!-- Formulario de registro -->
        <div class="form-container sign-up-container">
            <form method="POST" action="registro.php">
                <h1>Crear cuenta</h1><br>
                <?php
                    if(isset($error_message)){
                        ?>
                        <p class="error">
                            <?php
                                echo $error_message;
                            ?>
                        </p>
                    <?php
                    }
                ?>
                <span></span>
                <input type="text" name="nombre" placeholder="Nombre / Apellido" required/>
                <input type="text" name="usuario" placeholder="Usuario" />
                <input type="email" name="correo" placeholder="Correo electronico" required/>
                <input type="password" name="contrasenia" placeholder="Contraseña" required/>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
                <br>
                <button type="submit">Registrarse</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="salud-mental-img">
                    <img src="img/salud-mental.png" alt="">
                </div>
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
    <script src="js/script.js"></script>
</body>
</html>
