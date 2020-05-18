// Confirmar senha
var senha = document.getElementById("login_senha")
var senhaConf = document.getElementById("login_senhaConf")

function validatePassword() {
    if (senha.value != senhaConf.value) {
        senhaConf.setCustomValidity("Senhas Diferentes!")

    } else {
        senhaConf.setCustomValidity('')
    }
}

senha.onchange = validatePassword
senhaConf.onkeyup = validatePassword

function mostraCateg() {
    document
        .querySelector("#categorias")
        .classList
        .toggle("hide")
}

// BANNER 
let time = 5000,
    currentImageIndex = 0,
    images = document.querySelectorAll("#banner img")

function nextImage() {
    images[currentImageIndex].classList.remove("selected")

    currentImageIndex++

    if (currentImageIndex >= 3) {
        currentImageIndex = 0
    }
    images[currentImageIndex].classList.add("selected")
}

function start() {
    setInterval(function() {
        nextImage()
    }, time)
}

window.addEventListener("load", start)