@extends('template.app')

@section('content')

    <div class="col-md-12">
        <h3>Novo Contato</h3>
    </div>

    <div class="col-md-6 well">
    <form class="col-md-12" action="{{ url('pessoas/store') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-12">Nome:</label>
                <input class="form-control" type="text" name="nome" class="form-control" placeholder="nome">
                
            </div>
            <div class="row">
                <div class="form-group col-3">
                    <label class="control-label">DDD:</label>
                    <input class="form-control" type="text" name="ddd" class="form-control" placeholder="Ex.:71">
                    
                </div>
                <div class="form-group col-9">
                    <label class="control-label">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" class="form-control" placeholder="Ex:9999999">
                    
                </div>
            </div>
            
            <button class="btn btn-primary" style="float:right">salvar</button>  
        </form>
    </div>
    
@endsection