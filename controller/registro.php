<?php
    session_start();
    include '../model/db.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $pass = password_hash($_POST['contrasenia'], PASSWORD_DEFAULT); // Asegúrate de que la contraseña sea hasheada antes de la inserción
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Verifica si el nombre ya está registrado
    $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE LOWER(nombre) = LOWER(?)");
    mysqli_stmt_bind_param($stmt, "s", $nombre);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "El nombre ya está en uso, intenta con otro.";
        header('Location: ../view/login-register.php');
        exit();
    }
    mysqli_stmt_close($stmt);

    // Verifica si el nombre de usuario ya está registrado
    $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE LOWER(usuario) = LOWER(?)");
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "El nombre de usuario ya está en uso, intenta con otro.";
        header('Location: ../view/login-register.php');
        exit();
    }
    mysqli_stmt_close($stmt);

    // Verifica si el correo ya está registrado
    $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE LOWER(correo) = LOWER(?)");
    mysqli_stmt_bind_param($stmt, "s", $correo);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "El correo ya está en uso, intenta con otro.";
        header('Location: ../view/login-register.php');
        exit();
    }
    mysqli_stmt_close($stmt);

    // Verifica la validez del teléfono
    if (!preg_match("/^[0-9]{7,10}$/", $telefono)) {
        $_SESSION['error_message'] = "Número de teléfono no válido.";
        header('Location: ../view/login-register.php');
        exit();
    }

    // Verifica la validez de la fecha de nacimiento
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $fechaNacimiento)) {
        $_SESSION['error_message'] = "Formato de fecha de nacimiento no válido.";
        header('Location: ../view/login-register.php');
        exit();
    }

    $fechaParts = explode('-', $fechaNacimiento);
    if (!checkdate((int)$fechaParts[1], (int)$fechaParts[2], (int)$fechaParts[0])) {
        $_SESSION['error_message'] = "Fecha de nacimiento no válida.";
        header('Location: ../view/login-register.php');
        exit();
    }

    $fechaNacimientoObj = new DateTime($fechaNacimiento);
    $fechaActual = new DateTime();
    $edad = $fechaActual->diff($fechaNacimientoObj)->y;
    if ($edad < 18) {
        $_SESSION['error_message'] = "Debes tener al menos 18 años para registrarte.";
        header('Location: ../view/login-register.php');
        exit();
    }

    // Inserta el nuevo usuario en la base de datos
    $stmt = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, usuario, correo, contrasenia, telefono, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssss", $nombre, $usuario, $correo, $pass, $telefono, $fechaNacimiento);
    $exe = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($exe) {
        header('Location: ../view/login-register.php?success=1');
        exit();
    } else {
        $_SESSION['error_message'] = "Error, usuario no registrado.";
        header('Location: ../view/login-register.php');
        exit();
    }

    mysqli_close($conexion);
?>
