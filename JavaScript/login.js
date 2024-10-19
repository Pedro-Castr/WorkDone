const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const signupForm = document.querySelector("form.signup");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
const loginRadio = document.getElementById('login');
const signupRadio = document.getElementById('signup');

// Função para trocar para o formulário de registro
function showSignupForm() {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
    signupRadio.checked = true; // Define o radio do registro como selecionado
    sessionStorage.setItem('showSignup', 'true'); // Armazena o estado no sessionStorage
}

// Função para trocar para o formulário de login
function showLoginForm() {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
    loginRadio.checked = true; // Define o radio do login como selecionado
    sessionStorage.removeItem('showSignup'); // Remove o estado armazenado
}

signupBtn.onclick = showSignupForm;
loginBtn.onclick = showLoginForm;
signupLink.onclick = (e) => {
    e.preventDefault();
    showSignupForm();
};

// Checa o sessionStorage para decidir qual formulário exibir ao carregar a página
window.onload = () => {
    if (sessionStorage.getItem('showSignup') === 'true') {
        showSignupForm();
    } else {
        showLoginForm();
    }
};
