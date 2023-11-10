<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <?php
                // Verifica la sesion para mostrar la imagen según el usuario 
                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                    require_once '../model/db.php'; 

                    $userId = $_SESSION['user_id'];
                    $stmt = $conexion->prepare("SELECT foto_perfil FROM usuarios WHERE id = ?");
                    $stmt->bind_param("i", $userId);
                    $stmt->execute();
                    $stmt->store_result();

                    if ($stmt->num_rows > 0) {
                        $stmt->bind_result($fotoPerfil);
                        $stmt->fetch();

                        $imagePath = !empty($fotoPerfil) ? '../uploads/' . $fotoPerfil : 'ruta/a/imagen/por/defecto.jpg';
                        echo '<img src="' . htmlspecialchars($imagePath) . '" alt="Foto de perfil">';
                    } else {
                        echo '<div class="img-default">
                                        
                              </div>';
                    }
                    $stmt->close();
                }
                ?>
                </span>

                <div class="text logo-text">
                    <span class="name"></span>
                    <span class="profession"><?php echo $_SESSION['nombre']; ?></span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-leaf icon'></i>
                            <span class="text nav-text">Recursos Bienestar</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="psicologo.php">
                            <i class='bx bx-group icon' ></i>
                            <span class="text nav-text">Psicologo</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="settings.php">
                            <i class='bx bxs-cog icon'></i>
                            <span class="text nav-text">Configuraciones</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../controller/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>          
            </div>
        </div>
    </nav>