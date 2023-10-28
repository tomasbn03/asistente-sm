<?php
session_start();

include '../model/db.php';

$usuario = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$telefono = $_SESSION['telefono'];
$message = ""; // Mensaje para mostrar al usuario

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Cambio de nombre
    if (!empty($_POST['newUsername']) && $_POST['currentUsername'] === $usuario) {
        $newUsername = $_POST['newUsername'];
        
        // Verificar si el nuevo nombre de usuario ya existe
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre = ?");
        $stmt->bind_param('s', $newUsername);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $message .= "El nuevo nombre de usuario ya está en uso. Por favor, elige otro.<br>";
        } else {
            $stmt = $conexion->prepare("UPDATE usuarios SET nombre = ? WHERE nombre = ?");
            $stmt->bind_param('ss', $newUsername, $usuario);
            if ($stmt->execute()) {
                $message .= "El nombre de usuario ha sido cambiado exitosamente.<br>";
                $_SESSION['nombre'] = $newUsername;
                $usuario = $newUsername;  // Actualizamos la variable local con el nuevo valor.
            } else {
                $message .= "Error al cambiar el nombre de usuario: " . $conexion->error . "<br>";
            }
        }
    }

    // Cambio de correo
    if (!empty($_POST['newEmail']) && $_POST['currentEmail'] != $_POST['newEmail']) {
        $currentEmail = $_POST['currentEmail'];
        $newEmail = $_POST['newEmail'];

        $stmt = $conexion->prepare("SELECT correo FROM usuarios WHERE nombre = ?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedEmail = $row['correo'];
            if ($currentEmail === $storedEmail) {
                $stmt = $conexion->prepare("UPDATE usuarios SET correo = ? WHERE nombre = ?");
                $stmt->bind_param('ss', $newEmail, $usuario);
                if ($stmt->execute()) {
                    $message .= "El correo ha sido cambiado exitosamente.<br>";
                } else {
                    $message .= "Error al cambiar el correo: " . $conexion->error . "<br>";
                }
            } else {
                $message .= "El correo actual es incorrecto. Inténtalo de nuevo.<br>";
            }
        } else {
            $message .= "No se encontró un usuario con este nombre.<br>";
        }
    }

    // Cambio de teléfono
    if (!empty($_POST['newPhone']) && $_POST['currentPhone'] != $_POST['newPhone']) {
        $currentPhone = $_POST['currentPhone'];
        $newPhone = $_POST['newPhone'];

        $stmt = $conexion->prepare("SELECT telefono FROM usuarios WHERE nombre = ?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPhone = $row['telefono'];
            if ($currentPhone === $storedPhone) {

                $stmt = $conexion->prepare("SELECT telefono FROM usuarios WHERE telefono = ?");
                $stmt->bind_param('s', $newPhone);
                $stmt->execute();
                $result_check = $stmt->get_result();
                
                if ($result_check->num_rows > 0) {
                    $message .= "El número de teléfono ya está registrado.<br>";
                } else {
                    $stmt = $conexion->prepare("UPDATE usuarios SET telefono = ? WHERE nombre = ?");
                    $stmt->bind_param('ss', $newPhone, $usuario);
                    if ($stmt->execute()) {
                        $message .= "El teléfono ha sido cambiado exitosamente.<br>";
                    } else {
                        $message .= "Error al cambiar el teléfono: " . $conexion->error . "<br>";
                    }
                }
            } else {
                $message .= "El número de teléfono actual es incorrecto.<br>";
            }
        } else {
            $message .= "No se encontró un usuario con este nombre.<br>";
        }
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    // Redirigir al usuario con el mensaje
    header("Location: ../view/settings.php?message=" . urlencode($message));
    exit();

} else {
    header("Location: ../view/settings.php");
    exit();
}
?>