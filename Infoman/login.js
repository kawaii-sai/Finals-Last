 
 
const loginContainer = document.querySelector('.login-container');
const registerContainer = document.querySelector('.register-container');
const toggleLinks = document.querySelectorAll('.toggle');

toggleLinks.forEach(link => {
    link.addEventListener('click', () => {
        loginContainer.classList.toggle('active');
        registerContainer.classList.toggle('active');
    });
}); 
            