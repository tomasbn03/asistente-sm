
<?php
session_start();

$usuario = $_SESSION['nombre'];

include '../model/db.php';

$mensaje_name = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $currentName = trim($_POST['currentName']);
    $newName = trim($_POST['newName']);

    if ($_SESSION['nombre'] === $usuario) {
        $query = "SELECT nombre FROM usuarios WHERE nombre = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedName = $row['nombre'];

            if ($currentName === $storedName) {
                $sql = "UPDATE usuarios SET nombre = ? WHERE correo = ? AND nombre = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("sss", $newName, $_SESSION['correo'], $currentName);

                if ($stmt->execute()) {
                    $_SESSION['nombre'] = $newName;
                    $mensaje_name = "Nombre actualizado con éxito!";
                } else {
                    $mensaje_name = "Error al actualizar el nombre: " . $conexion->error;
                }
            } else {
                $mensaje_name = "El nombre actual proporcionado no coincide con el nombre en sesión. Inténtalo de nuevo.";
            }
        } else {
            $mensaje_name = "No se encontró un usuario con este nombre.";
        }
    } else {
        $mensaje_name = "No tienes permiso para cambiar el nombre de otro usuario.";
    }

    $stmt->close();
    $conexion->close();

    header("Location: ../view/settings.php?mensaje_name=" . urlencode($mensaje_name));
    exit();
} else {
    header("Location: ../view/settings.php");
    exit();
}
?>

