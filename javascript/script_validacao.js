// Confirmar senha
var senha = document.getElementById("cad_senha")
var senhaConf = document.getElementById("cad_senhaConf")

function validatePassword() {
    if (senha.value != senhaConf.value) {
        senhaConf.setCustomValidity("Senhas Diferentes!")

    } else {
        senhaConf.setCustomValidity('')
    }
}

senha.onchange = validatePassword
senhaConf.onkeyup = validatePassword