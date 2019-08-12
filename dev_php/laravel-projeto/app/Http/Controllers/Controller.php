<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function homepage(){

        $variavel = "Homepage do sistema Larvel";

        $p1 = 5;
        $p2 = 10;

        return view('welcome', [
            'title' =>  $variavel,
            'soma'  =>  ($p1+$p2),
            'p1'    =>  $p1,
            'p2'    =>  $p2
        ]);
    }

    public function cadastrar(){
        echo 'Tela de cadastro';
    }


    //VIEW: metodos para login de usuário
    public function fazerLogin(){
        return view('user.login');        
    }
}
