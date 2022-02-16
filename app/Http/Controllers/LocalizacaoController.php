<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localizacao;
use App\Http\Requests\StoreLocalizacaoRequest;

class LocalizacaoController extends Controller
{
    //
    public function show(){
        $localizacoes = Localizacao::all();
        echo $localizacoes;
    }

    public function index(){
        $localizacoes = Localizacao::all();
        return view('localizacoes.index', ['localizacoes'=>$localizacoes]);
    }
    public function create(){
        return view('localizacoes.create'); 
    }

    public function store(StoreLocalizacaoRequest $request)
    {
        $localizacao = new Localizacao();
        $localizacao->departamento = $request->departamento;
        $localizacao->save();

        return redirect('localizacoes/index');
    }

    
    public function edit($id){
        $localizacao = Localizacao::findorFail($id);
        return view('localizacoes.edit', ['localizacao'=>$localizacao]);
    }

    public function update(StoreLocalizacaoRequest $request){
        Localizacao::find($request->id)->update($request->except('_method'));
        return redirect('localizacoes/index')->with('msg', 'localizacao atualizada');
    }
    
    public function destroy($id){
        Localizacao::findorFail($id)->delete();
        return redirect('localizacoes/index')->with('msg', 'localizacao excluída com sucesso');
    }

}

