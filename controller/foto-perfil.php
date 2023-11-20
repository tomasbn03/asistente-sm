<?php
session_start();
require_once '../model/db.php'; // Cambia la ruta si es necesario

$userId = $_SESSION['user_id'];

// Procesar la carga de archivos
if (isset($_POST['submit']) && isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $imageName = $image['name'];
    $imageTmpName = $image['tmp_name'];
    $imageSize = $image['size'];
    $imageError = $image['error'];
    $imageType = $image['type'];

    $fileExt = explode('.', $imageName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($imageError === 0) {
            if ($imageSize < 1000000) { 
                $imageNameNew = "profile" . $userId . "." . $fileActualExt;
                $fileDestination = '../uploads/' . $imageNameNew;
                if (move_uploaded_file($imageTmpName, $fileDestination)) {
                    $stmt = $conexion->prepare("UPDATE usuarios SET foto_perfil = ? WHERE id = ?");
                    $stmt->bind_param("si", $imageNameNew, $userId);
                    $stmt->execute();
                    if ($stmt->affected_rows > 0) {
                        $_SESSION['message'] = "La imagen se ha subido correctamente.";
                    } else {
                        $_SESSION['message'] = "Error al actualizar la base de datos.";
                    }
                    $stmt->close();
                } else {
                    $_SESSION['message'] = "Error al mover el archivo.";
                }
            } else {
                $_SESSION['message'] = "El archivo es demasiado grande.";
            }
        } else {
            $_SESSION['message'] = "Error al subir el archivo.";
        }
    } else {
        $_SESSION['message'] = "Tipo de archivo no permitido.";
    }
} elseif (isset($_POST['delete'])) {
    $stmt = $conexion->prepare("SELECT foto_perfil FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fotoPerfil);
        $stmt->fetch();
        $file = '../uploads/' . $fotoPerfil;
        if (file_exists($file)) {
            unlink($file);
        }
        $stmt->close();

        $stmt = $conexion->prepare("UPDATE usuarios SET foto_perfil = NULL WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $_SESSION['message'] = "La imagen ha sido eliminada.";
        } else {
            $_SESSION['message'] = "Error al eliminar la imagen.";
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "No se encontró la imagen.";
    }
}

header("Location: ../view/settings.php");
exit();
?>
