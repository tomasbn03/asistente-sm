<?php
    
    session_start();
    include '../model/db.php';

    if(isset($_POST['correo']) && isset($_POST['contrasenia'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $correo = validate($_POST['correo']);
        $contrasenia = validate($_POST['contrasenia']);
        
        if(empty($correo)){
            header("location: ../view/login-register.php?error=El correo es requerido");
            exit();
        }elseif(empty($contrasenia)){
            header("location: ../view/login-register.php?error=La contraseña es requerida");
            exit();
        }else{
            // $contrasenia = md5($contrasenia);

            $sql = "SELECT *FROM usuarios WHERE correo='$correo' AND contrasenia='$contrasenia'";
            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['correo'] === $correo && $row['contrasenia'] === $contrasenia){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['nombre'] = $row['nombre'];
                        $_SESSION['usuario'] = $row['usuario'];
                        $_SESSION['correo'] = $row['correo'];
                        $_SESSION['contrasenia'] = $row['contrasenia'];
                        $_SESSION['telefono'] = $row['telefono'];
                        header("location: ../view/index.php");
                        exit();        
                }else{
                    header("location: ../view/login-register.php?error=El usuario o la contraseña son incorrectas");
                    exit();
                }
            }else{
                header("location: ../view/login-register.php?error=El usuario o la contraseña son incorrectas");
                exit();
            }
        }
    }else{
        header("location: ../view/login-register.php?error=El usuario o la contraseña son incorrectas");
        exit();
    }

?>