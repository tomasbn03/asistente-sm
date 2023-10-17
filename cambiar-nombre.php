<?php
session_start(); // Asegúrate de que has iniciado la sesión

include 'db.php';

if (isset($_POST['submitName'])) {
    $currentUsername = $_POST['currentUsername'];
    $newUsername = $_POST['newUsername'];

    // Verifica si el usuario actual coincide con el usuario que inició sesión
    if ($_SESSION['nombre'] === $currentUsername) {
        // El usuario actual coincide con el usuario en sesión, procede con el cambio de nombre
        $query = "SELECT * FROM usuarios WHERE nombre = '$newUsername'";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            // El nuevo nombre de usuario ya existe, muestra un mensaje de error
            $error_message = "El nuevo nombre de usuario ya está en uso. Por favor, elige otro.";
        } else {
            // Actualizar el nombre de usuario en la base de datos
            $query = "UPDATE usuarios SET nombre = '$newUsername' WHERE nombre = '$currentUsername'";
    
            if ($conexion->query($query) === TRUE) {
                // Nombre de usuario actualizado exitosamente
                $error_message = "El nombre de usuario ha sido cambiado exitosamente.";
    
                // Actualizar el nombre de usuario en la variable de sesión
                $_SESSION['nombre'] = $newUsername;
            } else {
                $error_message = "Error al cambiar el nombre de usuario: " . $conexion->error;
            }
        }
    } else {
        // El usuario actual no coincide con el usuario en sesión, muestra un mensaje de error
        $error_message = "No tienes permiso para cambiar el nombre de otro usuario.";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    // Redireccionar al usuario de regreso a la página de configuración
    header("Location: settings.php?error_message=" . urlencode($error_message));
    exit();
} else {
    // Manejo de caso en el que se accede a la página sin haber enviado el formulario
    header("Location: settings.php");
    exit();
}
?>
