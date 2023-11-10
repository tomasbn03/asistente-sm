<?php
    session_start();
    include '../model/db.php';

    // Función para limpiar los datos de entrada
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Comprobar si se han enviado datos del formulario
    if(isset($_POST['correo']) && isset($_POST['contrasenia'])) {
        $correo = validate($_POST['correo']);
        $contrasenia = validate($_POST['contrasenia']);

        // Validar los datos de entrada
        if(empty($correo)) {
            header("Location: ../view/login-register.php?error=El correo es requerido");
            exit();
        } else if(empty($contrasenia)) {
            header("Location: ../view/login-register.php?error=La contraseña es requerida");
            exit();
        } else {
            // Preparar y ejecutar la consulta
            $sql = "SELECT * FROM usuarios WHERE correo = ?";
            $stmt = mysqli_prepare($conexion, $sql);
            
            // Vincular parámetros y ejecutar la consulta preparada
            mysqli_stmt_bind_param($stmt, "s", $correo);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // Comprobar si se ha encontrado el usuario
            if($user = mysqli_fetch_assoc($result)) {
                // Verificar la contraseña
                if(password_verify($contrasenia, $user['contrasenia'])) {
                    // Iniciar sesión y redirigir al usuario
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['nombre'] = $user['nombre'];
                    $_SESSION['usuario'] = $user['usuario'];
                    $_SESSION['correo'] = $user['correo'];
                    $_SESSION['telefono'] = $user['telefono'];
                    header("Location: ../view/index.php");
                    exit();
                } else {
                    header("Location: ../view/login-register.php?error=El usuario o la contraseña son incorrectas");
                    exit();
                }
            } else {
                header("Location: ../view/login-register.php?error=El usuario o la contraseña son incorrectas");
                exit();
            }
        }
    } else {
        header("Location: ../view/login-register.php");
        exit();
    }
?>
