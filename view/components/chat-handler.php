<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

session_start();

if (!isset($_SESSION['chatHistory'])) {
	$_SESSION['chatHistory'] = ['mensajesBot' => [], 'mensajesUser' => []];
}

function getBotResponse ($message) {
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
	$botResponse = getBotResponse($userMessage);

	$_SESSION['chatHistory']['mensajesUser'][] = $userMessage;
	$_SESSION['chatHistory']['mensajesBot'][] = $botResponse;

  echo json_encode(['botResponse' => $botResponse]);
  exit;
}