<?php
session_start();

$usuario = $_SESSION['nombre'];

include 'db.php';

if (isset($_POST['submitPhone'])) {
    $currentPhone = $_POST['currentPhone'];
    $newPhone = $_POST['newPhone'];

    if ($_SESSION['nombre'] === $usuario) {
        $query = "SELECT telefono FROM usuarios WHERE nombre = '$usuario'";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPhone = $row['telefono'];

            if ($currentPhone === $storedPhone) {
                // Verificación de existencia del nuevo teléfono
                $query_check = "SELECT telefono FROM usuarios WHERE telefono = '$newPhone'";
                $result_check = $conexion->query($query_check);

                if ($result_check->num_rows > 0) {
                    $phone_error_message = "El número de teléfono ya está registrado.";
                } else {
                    $query = "UPDATE usuarios SET telefono = '$newPhone' WHERE nombre = '$usuario'";
                    if ($conexion->query($query) === TRUE) {
                        $phone_error_message = "El teléfono ha sido cambiado exitosamente.";
                    } else {
                        $phone_error_message = "Error al cambiar el teléfono: " . $conexion->error;
                    }
                }
            } else {
                $phone_error_message = "El número de teléfono actual es incorrecto.";
            }
        } else {
            $phone_error_message = "No se encontró un usuario con este nombre.";
        }
    } else {
        $phone_error_message = "No tienes permiso para cambiar el teléfono de otro usuario.";
    }

    $conexion->close();
    header("Location: settings.php?phone_error_message=" . urlencode($phone_error_message));
    exit();
} else {
    header("Location: settings.php");
    exit();
}
?>
