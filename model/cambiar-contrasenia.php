 <?php
session_start(); // Asegúrate de haber iniciado la sesión

$usuario = $_SESSION['nombre'];

include 'db.php';

if (isset($_POST['submitPass'])) {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Verificar si el usuario actual coincide con el usuario en sesión
    if ($_SESSION['nombre'] === $usuario) { // Supongo que $usuario contiene el nombre del usuario en sesión
        // El usuario actual coincide con el usuario en sesión, procede con el cambio de contraseña

        // Obtener la contraseña actual desde la base de datos (campo 'contrasenia')
        $query = "SELECT contrasenia FROM usuarios WHERE nombre = '$usuario'";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['contrasenia'];

            // Verificar que la contraseña actual ingresada coincida con la almacenada
            if ($currentPassword === $storedPassword) {
                // La contraseña actual es correcta, procede a actualizar la contraseña

                // Actualizar la contraseña en la base de datos (sin hashear)
                $query = "UPDATE usuarios SET contrasenia = '$newPassword' WHERE nombre = '$usuario'";
                
                if ($conexion->query($query) === TRUE) {
                    $pass_error_message = "La contraseña ha sido cambiada exitosamente.";
                } else {
                    $pass_error_message  = "Error al cambiar la contraseña: " . $conexion->error;
                }
            } else {
                $pass_error_message  = "La contraseña actual es incorrecta. Inténtalo de nuevo.";
            }
        } else {
            $pass_error_message  = "No se encontró un usuario con este nombre.";
        }
    } else {
        // El usuario actual no coincide con el usuario en sesión, muestra un mensaje de error
        $pass_error_message  = "No tienes permiso para cambiar la contraseña de otro usuario.";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    // Redireccionar al usuario de regreso a la página de configuración
    header("Location: ../view/settings-passwd.php?pass_error_message=" . urlencode($pass_error_message));
    exit();
} else {
    // Manejo de caso en el que se accede a la página sin haber enviado el formulario
    header("Location: ../view/settings-passwd.php");
    exit();
}
?>
