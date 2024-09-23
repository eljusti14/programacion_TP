// ocultar contraseña
function mostrar() {
    let passwordInput = document.querySelector('#password');
    passwordInput.setAttribute('type', 'text');
}


//mostrar contraseñaa
function ocultar() {
    let passwordInput = document.querySelector('#password');
    passwordInput.setAttribute('type', 'password');
}