// Funcionamiento para el formulario de inicio de sesion y registro
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

// Check if the registration form was previously active
const isSignUpActive = container.classList.contains("right-panel-active");

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

// Keep registration form active after page reload
if (isSignUpActive) {
    container.classList.add("right-panel-active");
}


