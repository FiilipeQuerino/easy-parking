function abrirModal() {
    return document.getElementById('modal').classList.add('is-active')
}
function mudarStatus() {
    var botaoLiberar = document.getElementById('buttonLiberar');
    if (botaoLiberar.className == "button is-small is-primary") {
        botaoLiberar.innerHTML = "Ocupada"
        botaoLiberar.className = "button is-small is-danger"
    } else {
        botaoLiberar.innerHTML = "Liberada"
        botaoLiberar.className = "button is-small is-primary"
    }
}

var fechar = document.getElementById('fechar-modal').addEventListener('mouseup', () => {
    var elemento2 = document.getElementById('modal').classList.remove('is-active')
})

var fecharmodal = document.getElementById('fechar-modal-cancelar').addEventListener('mouseup', () => {
    var elemento2 = document.getElementById('modal').classList.remove('is-active')
})