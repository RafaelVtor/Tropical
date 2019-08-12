<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefone;

use App\Http\Requests;

class TelefonesCrontroller extends Controller
{
    public function store(Telefone $telefone){
        try{
            $telefone->save();
        } catch (\Exception $e){
            return "ERRO: ". $e->getMessage();
        }
    }
}
