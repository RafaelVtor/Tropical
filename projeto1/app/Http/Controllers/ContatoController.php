<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 	public function index(){
 		$data['titulo'] = "Página Contato";
 		return view('contato', $data);
 	}
}
