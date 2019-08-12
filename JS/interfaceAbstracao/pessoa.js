class Pessoa{
    constructor (_campos){
        if(_campos != undefined){
            this.nome = _campos.nome;
            this.telefone = _campos.telefone;
            this.cpf = _campos.cpf;            
        }else{
            this.nome = ""; 
            this.telefone = "";
            this.cpf = "";
        }
    }
    Mostrar = function () {
        document.write('nome: ' + this.nome);
        document.write('<br>telefone: ' + this.telefone);
        document.write('<br>cpf:  ' + this.cpf);
    };

    
}
GravarEmMemoria = function () {
    Cliente.clientes.push(this);
} 
Pessoa.Base = [];

Pessoa.prototype = Abstracao.prototype;

Pessoa.todos = function () {

    html = '<h1>Estou execultando o metodo de classe</h1> <br>';
    for (let i = 0; i < Pessoa.BaseDeDados.length; i++) {

        pessoa = Pessoa.BaseDeDados[i];

        html += 'nome: ' + pessoa.nome;
        html += '<br>telefone: ' + pessoa.telefone;
        html += '<br>cpf:  ' + pessoa.cpf;
        html += '<hr>';
    }

    document.getElementById("resultado").innerHTML = html;
}