<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Http\Requests\StoreCarroRequest;

class CarroController extends Controller
{
    //
    public function show(){
        $carros = Carro::all();
        echo $carros;
    }

    public function index(){
        $carros = Carro::all();
        return view('carros.index', ['carros'=>$carros]);
    }
    public function create(){
        return view('carros.create'); 
    }

    public function store(StoreCarroRequest $request)
    {
        $carro = new Carro();
        $carro->modelo = $request->modelo;
        $carro->save();

        return redirect('carros.index');
    }

    
    public function edit($id){
        $carro = Carro::findorFail($id);
        return view('carros.edit', ['carro'=>$carro]);
    }

    public function update(StoreCarroRequest $request){
        Carro::find($request->id)->update($request->except('_method'));
        return redirect('carros.index')->with('msg', 'carro atualizada');
    }
    
    public function destroy($id){
        Carro::findorFail($id)->delete();
        return redirect('carros.index')->with('msg', 'carro excluída com sucesso');
    }

}

