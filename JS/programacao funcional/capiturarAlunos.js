function capiturarAlunos() {
    alunos = []


    for (let i = 0; i < 3; i++) {
        confirmar = confirm('você deseja cadastrar mais um aluno?');

        if (confirmar) {


            nome = prompt('Digite o nome do aluno');
            notas = []
            for (let x = 0; x < 2; x++) {
                nota = prompt("digite a nota de numero" + x + 'do aluno ' + nome);
                nota = parseInt(nota);
                notas.push(nota);
            }
        }

        aluno = {}
        aluno.nome = nome
        aluno.notas = notas
        alunos.push(aluno);
    }
    return alunos;
}