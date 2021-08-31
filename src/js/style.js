function validarNome() {
    var elemento = document.getElementById('nome');
    elemento.value = elemento.value.replace(/[^a-zA-Z]+/, '');
}

function validarSobrenome() {
    var elemento = document.getElementById('sobrenome');
    elemento.value = elemento.value.replace(/[^a-zA-Z]+/, '');
}
