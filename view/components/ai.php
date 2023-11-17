<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

if (!isset($_SESSION['chatHistory'])) {
	$_SESSION['chatHistory'] = ['mensajesBot' => [], 'mensajesUser' => []];
}

function getBotResponse($message)
{
	try {
		$client = new Client();
		$response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
			'headers' => [
				'Authorization' => 'Bearer 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',
				'Content-Type' => 'application/json',
			],
			'json' => [
				'model' => 'gpt-3.5-turbo',
				'messages' => [
					['role' => 'system', 'content' => 'You are an AI trained to offer support and provide a safe space for people to discuss their feelings and mental health. You should listen, offer support, and encourage users to seek professional help if needed. You are not a substitute for professional therapy.'],
					['role' => 'user', 'content' => $message]
				],
				// Otros parámetros según sea necesario
			],
		]);

		$resultado = json_decode($response->getBody(), true);
		$textoRespuesta = $resultado['choices'][0]['message']['content']; // Asumiendo que esta es la estructura de la respuesta
		return $textoRespuesta;
	} catch (GuzzleException $e) {
		$textoRespuesta = "Error al obtener respuesta: " . $e->getMessage();
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$userMessage = $_POST['message']; // Asume que tu formulario envía un campo 'message'
	$_SESSION['chatHistory']['mensajesUser'][] = $userMessage;
	$botResponse = getBotResponse($userMessage);
	$_SESSION['chatHistory']['mensajesBot'][] = $botResponse;
}

function mostrarMensajes() {
	foreach ($_SESSION['chatHistory']['mensajesUser'] as $index => $mensaje) {
			echo '<div class="user-message">' . htmlspecialchars($mensaje) . '</div>';
			if (isset($_SESSION['chatHistory']['mensajesBot'][$index])) {
					echo '<div class="bot-message">' . htmlspecialchars($_SESSION['chatHistory']['mensajesBot'][$index]) . '</div>';
			}
	}
}
?>

<div id="floating-chat-icon">
	<img src="../assets/img/chatbot.png" width="90px" alt="Chat Icon" />
</div>

<div id="chat-container">
	<div id="chat-messages" style="height: 300px; overflow-y: auto;">
		<!-- Mensajes del chat irán aquí -->
		<?php mostrarMensajes() ?>
	</div>
	<div class="sub-chat-cont">
		<hr>
		<div class="filtro">
			<form id="basura-gpt" method="post">
				<input type="text" id="chat-input" name="message" placeholder="Escribe tu mensaje aquí..." style="width: 100%;">
				<button type="submit" id="send-button">Enviar</button>
			</form>
		</div>
	</div>
</div>