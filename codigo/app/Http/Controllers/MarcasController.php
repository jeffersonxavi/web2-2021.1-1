<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;

class MarcaController extends Controller
{
    //
    public function show(){
        $marcas = Marca::all();
        echo $marcas;
    }

    public function index(){
        $marcas = Marca::all();
        return view('marcas.index', ['marcas'=>$marcas]);
    }
    public function create(){
        return view('marcas.create'); 
    }

    public function store(StoreMarcaRequest $request)
    {
        $marca = new Marca();
        $marca->marca = $request->marca;
        $marca->save();

        return redirect('marcas.index');
    }

    
    public function edit($id){
        $marca = Marca::findorFail($id);
        return view('marcas.edit', ['marca'=>$marca]);
    }

    public function update(StoreMarcaRequest $request){
        Marca::find($request->id)->update($request->except('_method'));
        return redirect('marcas.index')->with('msg', 'marca atualizada');
    }
    
    public function destroy($id){
        Marca::findorFail($id)->delete();
        return redirect('marcas.index')->with('msg', 'marca excluída com sucesso');
    }

}

