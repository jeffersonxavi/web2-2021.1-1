<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contatos = Contato::all();

        return view('contatos.index', ['contatos'=>$contatos]); 
    }

    public function create(){
        return view('contatos.create'); 
    }

    public function store(Request $request){
        $contato= new Contato();
        $contato->telefone= $request->telefone;
        $contato->instagram= $request->instagram;
        $contato->telegram= $request->telegram;
        $contato->id_fornecedor= $request->id_fornecedor;
        $contato->id_cliente= $request->id_cliente;
        $contato->save();
        return redirect('/contatos/index');
    }
    public function show($id){
        if($id){
            $contato = Contato::where('id',$id)->get();

        }else{
            $contato = Contato::all();
        }
        return view('contatos.show', ['contatos'=>$contato]);
    }
    
    
    public function edit($id){
        $contato = Contato::findorFail($id);
        return view('contatos.edit', ['contato'=>$contato]);
    }

    public function update(Request $request){
        Contato::find($request->id)->update($request->except('_method'));
        return redirect('contatos/index')->with('msg', 'contato atualizado');
    }
    
    public function destroy($id){
        Contato::findorFail($id)->delete();
        return redirect('contatos/index')->with('msg', 'contato excluído com sucesso');
    }

    public function showContato(){

        $contatos = Contato::all();
        foreach ($contatos as $contato){
            echo "<p> contato: $contato->nome </p>"; 
            echo "<p> contato: $contato->endereco </p>";

            $contatos = $contato->contato()->get();

            if(count($contatos)>0){
                echo "<li> Contato</li>";
                foreach($contatos as $contato){
                    echo "<p>[$contato->id, $contatos->instagram]</p>";
                }
            }
            echo"<br>";
        }
    }
}
