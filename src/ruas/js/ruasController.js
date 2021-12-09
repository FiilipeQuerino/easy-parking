function abrirModalCadastro() {
    var modal = document.getElementById('modal-cadastro');

    return modal.classList.add('is-active');
}

function abrirModalEdicao() {
    var modal = document.getElementById('modal-edicao');

    return modal.classList.add('is-active');
}

function fecharModalCadastro() {
    var modal = document.getElementById('modal-cadastro');
    return modal.classList.remove('is-active');
}

function fecharModalEdicao() {
    var modal = document.getElementById('modal-edicao');
    return modal.classList.remove('is-active');
}