<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class SiteController extends Controller
{
    public function index(){
         $client = Client::get();

        return view('index',['clients'=> $client]);
    }

    public function cadastrar(){
        return view('Cadastrar');
    }

    public function store(Request $request){
       $novoCadastro = new Client;
       $novoCadastro->nome  = $request->nome;
       $novoCadastro->telefone = $request->telefone;
       $novoCadastro->comentario = $request->comentario;

       $novoCadastro->save();

       return redirect('/index');
    }
}
