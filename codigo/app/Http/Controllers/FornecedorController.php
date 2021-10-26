<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use COM;

class FornecedorController extends Controller
{
    /*
    public function show(){
        $fornecedores = Fornecedor::all();
        echo $fornecedores; 
    }
    */
    public function index(){
        $fornecedores = Fornecedor::all();

        return view('fornecedores.index', ['fornecedores'=>$fornecedores]); 
    }

    public function create(){
        return view('fornecedores.create'); 
    }

    public function store(Request $request){
        $fornecedor= new Fornecedor();
        $fornecedor->nome= $request->nome;
        $fornecedor->endereco= $request->endereco;
        $fornecedor->email= $request->email;
        $fornecedor->save();
        return redirect('/fornecedores/index');
    }
    
    public function show($id){
        if($id){
            $fornecedor = Fornecedor::where('id',$id)->get();

        }else{
            $fornecedor = Fornecedor::all();
        }
        return view('fornecedores.show', ['fornecedores'=>$fornecedor]);
    }
    
    
    public function edit($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedores.edit', ['fornecedor'=>$fornecedor]);
    }

    public function update(Request $request){
        Fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('fornecedores/index')->with('msg', 'Fornecedor atualizado');
    }
    
    public function destroy($id){
        Fornecedor::findorFail($id)->delete();
        return redirect('fornecedores/index')->with('msg', 'Fornecedor excluído com sucesso');
    }

    public function showContato(){

        $fornecedores = Fornecedor::all();
        foreach ($fornecedores as $fornecedor){
            echo "<p> Fornecedor: $fornecedor->nome </p>"; 
            echo "<p> Fornecedor: $fornecedor->endereco </p>";

            $contatos = $fornecedor->contato()->get();

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


