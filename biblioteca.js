function editar(linha) {
    var i = linha.parentNode.parentNode.rowIndex;
    var objeto = document.getElementById('tbl').rows[i];

    document.getElementById('crm').value = objeto.cells[0].innerHTML;
    document.getElementById('cpf').value = objeto.cells[1].innerHTML;
    document.getElementById('nome').value = objeto.cells[2].innerHTML;
    document.getElementById('rua').value = objeto.cells[3].innerHTML;
    document.getElementById('bairro').value = objeto.cells[4].innerHTML;
    document.getElementById('cidade').value = objeto.cells[5].innerHTML;
    document.getElementById('cep').value = objeto.cells[6].innerHTML;
    document.getElementById('Cadastrar').value = 'Alterar';
}

function excluir(linha) {
    var i = linha.parentNode.parentNode.rowIndex;
    var objeto = document.getElementById('tbl').rows[i];

    document.getElementById('crm').value = objeto.cells[0].innerHTML;
    document.getElementById('Cadastrar').value = 'Excluir';
    document.getElementById('Cadastrar').click();
}