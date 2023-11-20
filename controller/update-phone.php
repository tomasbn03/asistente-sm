<?php
session_start();

include '../model/db.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submitPhone'])) {
    $currentPhone = trim($_POST['currentPhone']); 
    $newPhone = trim($_POST['newPhone']); 
    $usuarioId = $_SESSION['user_id']; 

    // Verificar si el número de teléfono actual coincide con el número en sesión
    if ($currentPhone === $_SESSION['telefono']) {
        $query = "SELECT telefono FROM usuarios WHERE telefono = ? AND id = ?";
        if ($stmt = $conexion->prepare($query)) {
            $stmt->bind_param("si", $currentPhone, $usuarioId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $sql = "UPDATE usuarios SET telefono = ? WHERE id = ?";
                if ($stmt = $conexion->prepare($sql)) {
                    $stmt->bind_param("si", $newPhone, $usuarioId);

                    if ($stmt->execute()) {
                        $_SESSION['telefono'] = $newPhone;
                        header("Location: ../view/settings.php?mensaje_phone=" . urlencode("Número de teléfono actualizado con éxito!") . "&tipo=success");
                        exit();
                    } else {
                        header("Location: ../view/settings.php?mensaje_phone=" . urlencode("Error al actualizar el número de teléfono: " . $conexion->error) . "&tipo=error");
                        exit();
                    }
                }
            } else {
                header("Location: ../view/settings.php?mensaje_phone=" . urlencode("No se encontró un usuario con este número de teléfono.") . "&tipo=error");
                exit();
            }
        }
    } else {
        header("Location: ../view/settings.php?mensaje_phone=" . urlencode("El número de teléfono actual proporcionado no coincide con tu número actual.") . "&tipo=error");
        exit();
    }

    if (isset($stmt)) { 
        $stmt->close();
    }
    $conexion->close();
} else {
    header("Location: ../view/settings.php");
    exit();
}
?>
