
class Fornecedor {
   

    constructor (){
        this.CNPJ = "";
    }

    entregarProdutos = function () {
        alert("Entrengado o produto!");
    }
    newLocal = this.GravarEmMemoria = function () {
        Fornecedor.Base.push(this);
    };
}

Fornecedor.Base = [];
Fornecedor.prototype = new Pessoa();