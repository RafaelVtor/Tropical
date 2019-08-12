

class Cliente { function() {
        this.codigoDoCliente = ""
        this.GravarEmMemoria = function(){
            Cliente.Base.push(this);
        }    
}

}
Cliente.prototype = new Pessoa;
Cliente.Base = [];