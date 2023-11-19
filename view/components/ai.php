<?php

function mostrarMensajes() {
	// Verifica si chatHistory está definida y no está vacía
	if (isset($_SESSION['chatHistory']) && !empty($_SESSION['chatHistory'])) {
			foreach ($_SESSION['chatHistory']['mensajesUser'] as $index => $mensaje) {
					echo '<div class="user-message">' . htmlspecialchars($mensaje) . '</div>';
					if (isset($_SESSION['chatHistory']['mensajesBot'][$index])) {
							echo '<div class="bot-message">' . htmlspecialchars($_SESSION['chatHistory']['mensajesBot'][$index]) . '</div>';
					}
			}
	}
}

?>

<div id="floating-chat-icon">
	<img src="../assets/img/chatbot.png" width="90px" alt="Chat Icon" />
</div>

<div id="chat-container">
	<div id="chat-messages" style="height: 300px; overflow-y: auto;">
	<?php mostrarMensajes(); ?>
		<!-- Mensajes del chat irán aquí -->
	</div>
	<div class="sub-chat-cont">
		<hr>
		<div class="filtro">
			<form id="basura-gpt">
				<input type="text" id="chat-input" name="message" placeholder="Escribe tu mensaje aquí..." style="width: 100%;">
				<button type="submit" id="send-button">Enviar</button>
			</form>
		</div>
	</div>
</div>


<!-- Esto para que al momento de enviar el mensaje a la AI no se actualice la página  -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('basura-gpt');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const message = document.getElementById('chat-input').value;
        sendMessage(message);
				const messagesContainer = document.getElementById('chat-messages');
        messagesContainer.innerHTML += '<div class="user-message">' + message + '</div>';
        document.getElementById('chat-input').value = '';
				const typingIndicator = addTypingIndicator()
    });
});

function sendMessage(message) {
    fetch('components/chat-handler.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'message=' + encodeURIComponent(message)
    })
    .then(response => response.json())
    .then(data => {
        const messagesContainer = document.getElementById('chat-messages');
        messagesContainer.innerHTML += '<div class="bot-message">' + data.botResponse + '</div>';
				messagesContainer.removeChild(document.querySelector('.typing-indicator'))
    })
    .catch(error => console.error('Error:', error));
}

function addTypingIndicator () {
  const typingDiv = document.createElement('div')
  typingDiv.classList.add('typing-indicator')
  for (let i = 0; i < 3; i++) {
    const dot = document.createElement('span')
    dot.textContent = ''
    typingDiv.appendChild(dot)
  }
  messagesContainer.appendChild(typingDiv)

  return typingDiv
}
</script>