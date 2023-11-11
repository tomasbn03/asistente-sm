<?php
session_start();
include '../model/db.php';

if (isset($_POST['submitPass'])) {
    $currentPassword = $_POST['currentPassword']; // La contraseña actual ingresada por el usuario.
    $newPassword = $_POST['newPassword']; // La nueva contraseña ingresada por el usuario.
    $confirmPassword = $_POST['confirmPassword']; // Confirmación de la nueva contraseña.
    $usuarioId = $_SESSION['user_id']; // El ID del usuario obtenido de la sesión.

    // Verificar si la nueva contraseña y la confirmación son iguales.
    if ($newPassword !== $confirmPassword) {
        header("Location: ../view/settings-passwd.php?pass_error_message=" . urlencode("Las nuevas contraseñas no coinciden."));
        exit();
    }

    // Obtener la contraseña actual desde la base de datos.
    $stmt = mysqli_prepare($conexion, "SELECT contrasenia FROM usuarios WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $usuarioId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verificar que la contraseña actual ingresada coincida con la almacenada.
        if (password_verify($currentPassword, $row['contrasenia'])) {
            // La contraseña actual es correcta, procede a actualizar la contraseña.
            $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
            
            $updateStmt = mysqli_prepare($conexion, "UPDATE usuarios SET contrasenia = ? WHERE id = ?");
            mysqli_stmt_bind_param($updateStmt, "si", $newPasswordHash, $usuarioId);
            $exe = mysqli_stmt_execute($updateStmt);

            if ($exe) {
                header("Location: ../view/settings-passwd.php?pass_success_message=" . urlencode("La contraseña ha sido cambiada exitosamente."));
            } else {
                header("Location: ../view/settings-passwd.php?pass_error_message=" . urlencode("Error al cambiar la contraseña."));
            }
            mysqli_stmt_close($updateStmt);
        } else {
            header("Location: ../view/settings-passwd.php?pass_error_message=" . urlencode("La contraseña actual es incorrecta."));
        }
    } else {
        header("Location: ../view/settings-passwd.php?pass_error_message=" . urlencode("No se pudo verificar la información del usuario."));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else {
    header("Location: ../view/settings-passwd.php");
    exit();
}
?>
