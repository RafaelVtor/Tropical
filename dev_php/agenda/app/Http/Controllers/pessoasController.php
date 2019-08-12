<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Telefone;

use App\Http\Requests;

class pessoasController extends Controller
{   
    private $telefones_controller;
    private $pessoa;

    public function __construct(TelefonesCrontroller $telefone_controller)    
    {
        $this->telefones_controller = $telefone_controller;
        $this->pessoa = new Pessoa();
    }
    public function index(){
        $list_pessoas = Pessoa::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
    }

    public function novoView(){
        return view('pessoas.create');
    }

    public function store(Request $request){
       $pessoa = Pessoa::create($request->all());
        
        if ($request->ddd && $request->telefone) {
            $telefone = new Telefone();
            $telefone->ddd = $request->ddd;
            $telefone->telefone = $request->telefone;
            $telefone->pessoa_id = $pessoa->id;
            $this->telefones_controller->store($telefone);            
        }
        return Redirect('/pessoas')->with('message', 'Pessoa criada com sucesso!');
        
    }

    public function editarView($id){
        return view('/pessoas.edit', [
            'pessoa' => $this->getPessoa($id)
        ]);
        
    }

    protected function getPessoa($id){

        var_dump($this->pessoa->find($id)->nome);

    }

    


}
