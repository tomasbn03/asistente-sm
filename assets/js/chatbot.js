document.addEventListener('DOMContentLoaded', function() {
    let chatIcon = document.getElementById('floating-chat-icon');
    let chatContainer = document.getElementById('chat-container');

    chatIcon.addEventListener('click', function() {
        if (chatContainer.style.display === 'none') {
            chatContainer.style.display = 'block';
        } else {
            chatContainer.style.display = 'none';
        }
    });

});
