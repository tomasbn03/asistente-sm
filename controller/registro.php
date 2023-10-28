<?php
    include '../model/db.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $pass = $_POST['contrasenia'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Validate name
    $verify_name = mysqli_query($conexion, "SELECT * FROM usuarios WHERE LOWER(nombre) = LOWER('$nombre')");
    if(mysqli_num_rows($verify_name) > 0 ){
        $error_message = "El nombre con el que intentas registrarte ya está en uso, intenta con otro";
        mysqli_close($conexion);
        include '../view/login-register.php';
        exit();
    }

    // Validate username
    $verify_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER('$usuario')");
    if(mysqli_num_rows($verify_user) > 0 ){
        $error_message = "El nombre de usuario con el que intentas registrarte ya está en uso, intenta con otro";
        mysqli_close($conexion);
        include '../view/login-register.php';
        exit();
    }

    // Validate email
    $verify_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE LOWER(correo) = LOWER('$correo')");
    if(mysqli_num_rows($verify_email) > 0 ){
        $error_message = "El correo con el que intentas registrarte ya está en uso, intenta con otro";
        mysqli_close($conexion);
        include '../view/login-register.php';
        exit();
    }


    // Validate password
    $verify_pass = mysqli_query($conexion, "SELECT * FROM usuarios WHERE contrasenia = '$pass'");
    if(mysqli_num_rows($verify_pass) > 0){
        $error_message = "La contraseña con la que intentas registrarte ya está en uso, intenta con otra";
        mysqli_close($conexion);
        include '../view/login-register.php';
        exit();  
    }
    if(!preg_match("/^[0-9]{7,10}$/", $telefono)) {
        $error_message = "Número de teléfono no válido.";
        mysqli_close($conexion);
        include '../view/login-register.php';
        exit();
    }

    if(!preg_match("/^[6-7][0-9]{7}$/", $telefono)) {
    $error_message = "Número de teléfono no válido.";
    mysqli_close($conexion);
    include '../view/login-register.php';
    exit();
    }

    $query = "INSERT INTO usuarios(nombre, usuario, correo, contrasenia, telefono, fecha_nacimiento)
    VALUES('$nombre','$usuario','$correo','$pass', '$telefono', '$fechaNacimiento')";


    $exe = mysqli_query($conexion, $query);

    if($exe) {
        mysqli_close($conexion);
        echo '<script>window.location = "../view/login-register.php";</script>';
    } else {
        $error_message = "Error, usuario no registrado";
        mysqli_close($conexion);
        include '../view/login-register.php';
    }
?>
