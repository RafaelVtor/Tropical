var Abstracao = function(){
    if(this.constructor === Abstracao){
        throw new Error("Não pode instanciar esta classe pois ela é abstrata!");
    }
}

Abstracao.prototype.Original = function(){
    console.log("Função Original");
}

Abstracao.prototype.nome="";
Abstracao.prototype.telefone="";
Abstracao.prototype.cpf="";
Abstracao.prototype.GravarEmMemoria = function(){
    throw new Error("Obrigação a implementação de GravarEmMemoria, para as classes filhas!");
    //Abstracao.Base.push(this);
}