<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = Contato::all();

        return view('contato.index', ['contato'=>$contatos]); 
    }

    public function create($id){
        return view('contato.create',['fornecedor_id'=>$id]); 
    }

    public function store(Request $request){
        $contato= new Contato();
        $contato->nome= $request->telefone;
        $contato->instagram= $request->instagram;
        $contato->telegram= $request->telegram;
        $contato->fornecedor_id= $request->fornecedor_id;
        $contato->save();
        return redirect('/contato/index');
    }
}
