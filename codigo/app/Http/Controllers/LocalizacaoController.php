<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localizacao;
use App\Http\Requests\StoreLocalizacaoRequest;

class LocalizacaoController extends Controller
{
    //
    public function show(){
        $localizacaos = Localizacao::all();
        echo $localizacaos;
    }

    public function index(){
        $localizacaos = Localizacao::all();
        return view('localizacaos.index', ['localizacaos'=>$localizacaos]);
    }
    public function create(){
        return view('localizacaos.create'); 
    }

    public function store(StoreLocalizacaoRequest $request)
    {
        $localizacao = new Localizacao();
        $localizacao->departamento = $request->departamento;
        $localizacao->save();

        return redirect('localizacaos.index');
    }

    
    public function edit($id){
        $localizacao = Localizacao::findorFail($id);
        return view('localizacaos.edit', ['localizacao'=>$localizacao]);
    }

    public function update(StoreLocalizacaoRequest $request){
        Localizacao::find($request->id)->update($request->except('_method'));
        return redirect('localizacaos.index')->with('msg', 'localizacao atualizada');
    }
    
    public function destroy($id){
        Localizacao::findorFail($id)->delete();
        return redirect('localizacaos.index')->with('msg', 'localizacao excluída com sucesso');
    }

}

