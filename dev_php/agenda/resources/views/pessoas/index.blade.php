@extends('template.app')

@section('content')

<style>
  .btn-action{
    padding: 5px;
    float: right;
  }
</style>

<div class="row">
  @foreach ($pessoas as $pessoa)
  <div class="col-3">
      <div class=" card">
          <div class="card-heading text-white bg-dark">
            {{ $pessoa->nome }}
          <a href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary btn-action">
            <i class="glyphicon glyphicon-pencil">Editar</i>
          </a>
          </div>
            <div class="card-body">
              @foreach ($pessoa->telefones as $telefone)
              <p><strong>Telefone:</strong>({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>      
              @endforeach
            
              
            </div>
          </div>
  </div>
      
  @endforeach
</div>

@endsection

