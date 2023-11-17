<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: ../view/login-register.php");
    ?>
    <script>
        messagesContainer.innerHTML = ''
        localStorage.removeItem('chatHistory')
        chatHistory = {
            mensajesBot: [],
            mensajesUser: []
        }
    </script>
    <?php
    exit();
?>

