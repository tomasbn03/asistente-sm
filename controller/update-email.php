<?php
session_start();

// Asegúrate de que se incluya la lógica de conexión a la base de datos aquí
include '../model/db.php';

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitEmail'])) {
    $currentEmail = trim($_POST['correo']);
    $newEmail = trim($_POST['nuevoCorreo']);
    $usuarioId = $_SESSION['user_id'];

    // Verificar si el correo actual coincide con el correo en sesión
    if ($currentEmail === $_SESSION['correo']) {
        // Preparar la consulta para verificar si el correo existe
        $query = "SELECT correo FROM usuarios WHERE correo = ? AND id = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("si", $currentEmail, $usuarioId);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si se encontró el correo en la base de datos
        if ($result->num_rows > 0) {
            // Preparar la consulta para actualizar el correo
            $sql = "UPDATE usuarios SET correo = ? WHERE id = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("si", $newEmail, $usuarioId);

            // Ejecutar la actualización y verificar si fue exitosa
            if ($stmt->execute()) {
                $_SESSION['correo'] = $newEmail;
                header("Location: ../view/settings.php?mensaje_email=" . urlencode("Correo actualizado con éxito!") . "&tipo=success");
                exit();
            } else {
                header("Location: ../view/settings.php?mensaje_email=" . urlencode("Error al actualizar el correo: " . $conexion->error) . "&tipo=error");
                exit();
            }
        } else {
            header("Location: ../view/settings.php?mensaje_email=" . urlencode("El correo actual no coincide con nuestros registros.") . "&tipo=error");
            exit();
        }
    } else {
        header("Location: ../view/settings.php?mensaje_email=" . urlencode("El correo actual proporcionado no coincide con tu correo actual.") . "&tipo=error");
        exit();
    }

    $stmt->close();
    $conexion->close();
} else {
    // Si el formulario no se envía, simplemente redirige al usuario a la página de configuración
    header("Location: ../view/settings.php");
    exit();
}
?>
