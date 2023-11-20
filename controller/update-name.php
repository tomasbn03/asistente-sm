<?php
session_start();

include '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $currentName = trim($_POST['currentName']);
    $newName = trim($_POST['newName']);

    // Verificar si el nombre actual coincide con el nombre en sesión
    if ($_SESSION['nombre'] === $currentName) {
        $query = "SELECT nombre FROM usuarios WHERE nombre = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $currentName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $sql = "UPDATE usuarios SET nombre = ? WHERE correo = ? AND nombre = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sss", $newName, $_SESSION['correo'], $currentName);

            if ($stmt->execute()) {
                $_SESSION['nombre'] = $newName;
                header("Location: ../view/settings.php?mensaje_name=" . urlencode("Nombre actualizado con éxito!") . "&tipo=success");
            } else {   
                header("Location: ../view/settings.php?mensaje_name=" . urlencode("Error al actualizar el nombre.") . "&tipo=error");
            }
        } else {
            header("Location: ../view/settings.php?mensaje_name=" . urlencode("No se encontró un usuario con este nombre.") . "&tipo=error");
        }
    } else {
        header("Location: ../view/settings.php?mensaje_name=" . urlencode("El nombre actual no coincide con nuestros registros.") . "&tipo=error");
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: ../view/settings.php");
    exit();
}
?>
