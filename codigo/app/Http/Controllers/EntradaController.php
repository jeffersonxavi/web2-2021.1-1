<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntradaRequest;
use Illuminate\Http\Request;
use App\Models\Entrada;
use COM;

class EntradaController extends Controller
{
    public function index(){
        $entradas = Entrada::all();
        return view('entradas.index', ['entradas'=>$entradas]); 
    }

    public function create(){
        return view('entradas.create'); 
    }

    public function store(StoreEntradaRequest $request){
        $request->validate([
            'valortotal' => 'required',
            'data' => 'required',
        ]);

        $entrada= new Entrada();
        $entrada->valortotal= $request->valortotal;
        $entrada->data= $request->data;
        $entrada->id_fornecedor= $request->id_fornecedor;
        $entrada->save();
        return redirect('/entradas/index');
    }

    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entradas.edit', ['entrada'=>$entrada]);
    }

    public function update(StoreEntradaRequest $request){
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entradas/index')->with('msg', 'Entrada atualizada');
    }
    
    public function destroy($id){
        Entrada::findorFail($id)->delete();
        return redirect('entradas/index')->with('msg', 'Entrada excluído com sucesso');
    }
}
