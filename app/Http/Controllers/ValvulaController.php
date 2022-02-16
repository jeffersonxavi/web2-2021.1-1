<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valvula;
use App\Http\Requests\StoreValvulaRequest;

class ValvulaController extends Controller
{
    //
    public function show(){
        $valvulas = Valvula::all();
        echo $valvulas;
    }

    public function index(){
        $valvulas = Valvula::all();
        return view('valvulas.index', ['valvulas'=>$valvulas]);
    }
    public function create(){
        return view('valvulas.create'); 
    }

    public function store(StoreValvulaRequest $request)
    {
        $valvula = new Valvula();
        $valvula->quantidade = $request->quantidade;
        $valvula->save();

        return redirect('valvulas.index');
    }

    
    public function edit($id){
        $valvula = Valvula::findorFail($id);
        return view('valvulas.edit', ['valvula'=>$valvula]);
    }

    public function update(StoreValvulaRequest $request){
        Valvula::find($request->id)->update($request->except('_method'));
        return redirect('valvulas.index')->with('msg', 'valvula atualizada');
    }
    
    public function destroy($id){
        Valvula::findorFail($id)->delete();
        return redirect('valvulas.index')->with('msg', 'valvula excluída com sucesso');
    }

}

