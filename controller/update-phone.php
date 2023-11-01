<?php
session_start();

$usuarioTelefono = $_SESSION['telefono']; // Asegúrate de tener el número de teléfono guardado en la sesión

include '../model/db.php'; // Asegúrate de tener este archivo y que la conexión esté bien configurada

$mensaje_phone = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitPhone'])) {
    $currentPhone = trim($_POST['currentPhone']); 
    $newPhone = trim($_POST['newPhone']); 

    // Verificar si el número de teléfono actual coincide con el número en sesión
    if ($usuarioTelefono === $currentPhone) {
        $query = "SELECT telefono FROM usuarios WHERE telefono = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $currentPhone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPhone = $row['telefono'];

            if ($currentPhone === $storedPhone) {
                $sql = "UPDATE usuarios SET telefono = ? WHERE telefono = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ss", $newPhone, $currentPhone);

                if ($stmt->execute()) {
                    $_SESSION['telefono'] = $newPhone;
                    $mensaje_phone = "Número de teléfono actualizado con éxito!";
                } else {
                    $mensaje_phone = "Error al actualizar el número de teléfono: " . $conexion->error;
                }
            } else {
                $mensaje_phone = "El número de teléfono actual proporcionado no coincide con el número en sesión. Inténtalo de nuevo.";
            }
        } else {
            $mensaje_phone = "No se encontró un usuario con este número de teléfono.";
        }
    } else {
        $mensaje_phone = "No tienes permiso para cambiar el número de teléfono de otro usuario.";
    }

    $stmt->close();
    $conexion->close();

    header("Location: ../view/settings.php?mensaje_phone=" . urlencode($mensaje_phone));
    exit();
} else {
    header("Location: ../view/settings.php");
    exit();
}
?>
