document.addEventListener('DOMContentLoaded', function () {
	let chatIcon = document.getElementById('floating-chat-icon');
	let chatContainer = document.getElementById('chat-container');

	chatIcon.addEventListener('click', function () {
		if (chatContainer.style.display === 'none') {
			chatContainer.style.display = 'block';
		} else {
			chatContainer.style.display = 'none';
		}
	});
});

const form = document.getElementById('basura-gpt');
const messagesContainer = document.getElementById('chat-messages');

const openai = new OpenAi({
  apiKey: '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',
  dangerouslyAllowBrowser: true
})
