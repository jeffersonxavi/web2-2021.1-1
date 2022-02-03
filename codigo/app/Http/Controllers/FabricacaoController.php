<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricacao;
use App\Http\Requests\StoreFabricacaoRequest;

class FabricacaoController extends Controller
{
    //
    public function show(){
        $fabricacaos = Fabricacao::all();
        echo $fabricacaos;
    }

    public function index(){
        $fabricacaos = Fabricacao::all();
        return view('fabricacaos.index', ['fabricacaos'=>$fabricacaos]);
    }
    public function create(){
        return view('fabricacaos.create'); 
    }

    public function store(StoreFabricacaoRequest $request)
    {
        $fabricacao = new Fabricacao();
        $fabricacao->ano = $request->ano;
        $fabricacao->save();

        return redirect('fabricacaos.index');
    }

    
    public function edit($id){
        $fabricacao = Fabricacao::findorFail($id);
        return view('fabricacaos.edit', ['fabricacao'=>$fabricacao]);
    }

    public function update(StoreFabricacaoRequest $request){
        Fabricacao::find($request->id)->update($request->except('_method'));
        return redirect('fabricacaos.index')->with('msg', 'fabricacao atualizada');
    }
    
    public function destroy($id){
        Fabricacao::findorFail($id)->delete();
        return redirect('fabricacaos.index')->with('msg', 'fabricacao excluída com sucesso');
    }

}

