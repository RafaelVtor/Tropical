var Singleton = {
    instancia : null,

    iniciar:function(){
        function Sgln(){
            this.name = "";
            this.MostrarNaTela = function(){
                alert("Usando Singleton");
            }
        }
        if (Singleton.instancia == null) {
            Singleton.instancia = new Sgln;
        }
    }
}