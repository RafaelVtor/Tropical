@extends('tamplate')

@section('content')

<div class="col-md-12">
    <h3>Editar Contato</h3>
</div>

<div class="col-md-6 well">
<form class="col-md-12" action="{{ url('pessoas/update') }}" method="POST">
    {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-md-12">Nome:</label>
            <input class="form-control" type="text" name="nome" class="form-control" placeholder="nome">
            
        </div>
                
        <button class="btn btn-primary" style="float:right">salvar</button>  
    </form>
</div>

@endsection