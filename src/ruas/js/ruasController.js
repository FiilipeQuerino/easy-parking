function abrirModal(params) {
    var modal = document.getElementById('modal');

    if (params == "edicao") {
        modal.classList.add('is-active');
        return document.getElementById('titulo-modal').innerText = 'Editando cadastro';
    }

    return modal.classList.add('is-active');
}

function fecharModal() {
    var modal = document.getElementById('modal');
    return modal.classList.remove('is-active');
}