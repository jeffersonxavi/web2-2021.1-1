<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;

class CategoriaController extends Controller
{
    //
    public function show(){
        $categorias = Categoria::all();
        echo $categorias;
    }

    public function index(){
        $categorias = Categoria::all();
        return view('categorias.index', ['categorias'=>$categorias]);
    }
    public function create(){
        return view('categorias.create'); 
    }

    public function store(StoreCategoriaRequest $request)
    {
        $categoria = new Categoria();
        $categoria->categoria = $request->categoria;
        $categoria->save();

        return redirect('categorias.index');
    }

    
    public function edit($id){
        $categoria = Categoria::findorFail($id);
        return view('categorias.edit', ['categoria'=>$categoria]);
    }

    public function update(StoreCategoriaRequest $request){
        Categoria::find($request->id)->update($request->except('_method'));
        return redirect('categorias.index')->with('msg', 'categoria atualizada');
    }
    
    public function destroy($id){
        Categoria::findorFail($id)->delete();
        return redirect('categorias.index')->with('msg', 'categoria excluída com sucesso');
    }

}

