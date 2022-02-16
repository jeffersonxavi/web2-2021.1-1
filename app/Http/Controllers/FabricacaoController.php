<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricacao;
use App\Http\Requests\StoreFabricacaoRequest;

class FabricacaoController extends Controller
{
    //
    public function show(){
        $fabricacoes = Fabricacao::all();
        echo $fabricacoes;
    }

    public function index(){
        $fabricacoes = Fabricacao::all();
        return view('fabricacoes.index', ['fabricacoes'=>$fabricacoes]);
    }
    public function create(){
        return view('fabricacoes.create'); 
    }

    public function store(StoreFabricacaoRequest $request)
    {
        $fabricacao = new Fabricacao();
        $fabricacao->ano = $request->ano;
        $fabricacao->save();

        return redirect('fabricacoes/index');
    }

    
    public function edit($id){
        $fabricacao = Fabricacao::findorFail($id);
        return view('fabricacoes.edit', ['fabricacao'=>$fabricacao]);
    }

    public function update(StoreFabricacaoRequest $request){
        Fabricacao::find($request->id)->update($request->except('_method'));
        return redirect('fabricacoes/index')->with('msg', 'fabricacao atualizada');
    }
    
    public function destroy($id){
        Fabricacao::findorFail($id)->delete();
        return redirect('fabricacoes/index')->with('msg', 'fabricacao excluída com sucesso');
    }

}

