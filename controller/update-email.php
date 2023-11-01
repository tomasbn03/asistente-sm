<?php
session_start();

$usuarioCorreo = $_SESSION['correo'];

$mensaje_email = "";

include '../model/db.php'; // Asegúrate de tener este archivo y que la conexión esté bien configurada

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitEmail'])) {
    $currentEmail = trim($_POST['correo']);
    $newEmail = trim($_POST['nuevoCorreo']);

    // Verificar si el correo actual coincide con el correo en sesión
    if ($usuarioCorreo === $currentEmail) {
        $query = "SELECT correo FROM usuarios WHERE correo = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $currentEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedEmail = $row['correo'];

            if ($currentEmail === $storedEmail) {
                $sql = "UPDATE usuarios SET correo = ? WHERE correo = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ss", $newEmail, $currentEmail);

                if ($stmt->execute()) {
                    $_SESSION['correo'] = $newEmail;
                    $mensaje_email = "Correo actualizado con éxito!";
                } else {
                    $mensaje_email = "Error al actualizar el correo: " . $conexion->error;
                }
            } else {
                $mensaje_email = "El correo actual proporcionado no coincide con el correo en sesión. Inténtalo de nuevo.";
            }
        } else {
            $mensaje_email = "No se encontró un usuario con este correo.";
        }
    } else {
        $mensaje_email = "No tienes permiso para cambiar el correo de otro usuario.";
    }

    $stmt->close();
    $conexion->close();

    // Redireccionar al usuario de regreso a la página de configuración
    header("Location: ../view/settings.php?mensaje_email=" . urlencode($mensaje_email));
    exit();
} else {
    header("Location: ../view/settings.php");
    exit();
}
?>
