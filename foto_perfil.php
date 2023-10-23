<?php
        // Asumiendo que estás usando POST como método de envío
    if(isset($_FILES['foto_perfil'])){
        $archivo = $_FILES['foto_perfil']['tmp_name'];
        $nombreArchivo = $_FILES['foto_perfil']['name'];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

        // Validar que el archivo sea una imagen
        if(!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])){
            $error_message = "Formato de archivo no válido. Aceptado: jpg, jpeg, png, gif.";
            include 'login-register.php';
            exit();
        }

        // Puedes añadir otras validaciones, como tamaño máximo del archivo

        // Ruta donde se guardará la imagen. Puedes personalizarla.
        $rutaDestino = "imagenes_perfil/" . uniqid() . "." . $extension;

        // Mover el archivo del lugar temporal al destino
        move_uploaded_file($archivo, $rutaDestino);

        // Aquí, $rutaDestino contendrá la ruta donde se ha guardado la imagen. Puedes almacenar esta ruta en tu base de datos para luego mostrar la imagen del perfil del usuario.
    }

?>