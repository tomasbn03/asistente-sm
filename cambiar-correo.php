<?php
session_start();

$usuario = $_SESSION['nombre'];

include 'db.php';

if (isset($_POST['submitEmail'])) {
    $currentEmail = $_POST['currentEmail'];
    $newEmail = $_POST['newEmail'];

    if ($_SESSION['nombre'] === $usuario) {

        $query = "SELECT correo FROM usuarios WHERE nombre = '$usuario'";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedEmail = $row['correo'];

            if ($currentEmail === $storedEmail) {
                $query = "UPDATE usuarios SET correo = '$newEmail' WHERE nombre = '$usuario'";

                if ($conexion->query($query) === TRUE) {
                    $email_message = "El correo ha sido cambiado exitosamente.";
                } else {
                    $email_message = "Error al cambiar el correo: " . $conexion->error;
                }
            } else {
                $email_message = "El correo actual es incorrecto. Inténtalo de nuevo.";
            }
        } else {
            $email_message = "No se encontró un usuario con este nombre.";
        }
    } else {
        $email_message = "No tienes permiso para cambiar el correo de otro usuario.";
    }

    $conexion->close();
    header("Location: settings.php?email_message=" . urlencode($email_message));
    exit();
} else {
    header("Location: settings.php");
    exit();
}
?>
