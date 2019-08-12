var Pessoa = function(){
    this.cpf;
    this.nome;
    this.endereco;
    
    this.informacoes = function(){
        alert("CPF: " + this.cpf +"\nNome: " +this.nome + "\nEndereço: "+this.endereco);
    }

    this.informacoes2 = function(cpf, nome, end){
        alert("CPF: " + cpf +"\nNome: " +nome + "\nEndereço: "+end);
    }

}