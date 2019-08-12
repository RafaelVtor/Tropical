
class Cliente {
    constructor(_campos) {

        if (_campos != undefined) {
            if (_campos.nome != undefined) {
                this.nome = _campos.nome;    
            }else{
                this.nome = "";
            }
            if (_campos.telefone != undefined) {
                this.telefone = _campos.telefone;    
            }else{
                this.telefone = "";
            }
            if (_campos.cpf != undefined) {
                this.cpf = _campos.cpf;    
            }else{
                this.cpf = "";
            }
            
        }



        this.Mostrar = function () {
            document.write('nome: ' + this.nome);
            document.write('<br>telefone: ' + this.telefone);
            document.write('<br>cpf:  ' + this.cpf);
        };

        this.GravarEmMemoria = function () {
            Cliente.clientes.push(this);
        }
    }
}

Cliente.clientes = [];


Cliente.todos = function () {

    html = '<h1>Estou execultando o metodo de classe</h1> <br>';
    for (let i = 0; i < Cliente.clientes.length; i++) {

        cliente = Cliente.clientes[i];

        html += 'nome: ' + cliente.nome;
        html += '<br>telefone: ' + cliente.telefone;
        html += '<br>cpf:  ' + cliente.cpf;
        html += '<hr>';
    }

    document.getElementById("resultado").innerHTML = html;
}
