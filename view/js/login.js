
const alertLogin = document.getElementById('alert')

function emptyFields() {
    alertLogin.classList.remove('d-none')
    alertLogin.innerHTML = 'Faltan campos por rellenar.'
}

function accessDenied() {
    alertLogin.classList.remove('d-none')
    alertLogin.innerHTML = 'El correo o contraseña son incorrectos.'
}