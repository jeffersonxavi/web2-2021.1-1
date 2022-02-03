<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;
use App\Http\Requests\StoreItensEntradaRequest;

class ItensEntradaController extends Controller
{
    //
    public function show(){
        $itensentradas = ItensEntrada::all();
        echo $itensentradas;
    }

    public function index(){
        $itensentradas = ItensEntrada::all();
        return view('itensentradas.index', ['itensentradas'=>$itensentradas]);
    }
    public function create(){
        return view('itensentradas.create'); 
    }

    public function store(StoreItensEntradaRequest $request)
    {
        $itensentrada = new ItensEntrada();
        $itensentrada->identrada = $request->identrada;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->idproduto = $request->idproduto;
        $itensentrada->precocompra= $request->precocompra;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->ipi = $request->ipi;
        $itensentrada->frete = $request->frete;
        $itensentrada->icms = $request->icms;
        
        $itensentrada->save();

        return redirect('itensentradas.index');
    }

    
    public function edit($id){
        $itensentrada = ItensEntrada::findorFail($id);
        return view('itensentradas.edit', ['itensentrada'=>$itensentrada]);
    }

    public function update(StoreItensEntradaRequest $request){
        ItensEntrada::find($request->id)->update($request->except('_method'));
        return redirect('itensentradas.index')->with('msg', 'itensentrada atualizada');
    }
    
    public function destroy($id){
        ItensEntrada::findorFail($id)->delete();
        return redirect('itensentradas.index')->with('msg', 'itensentrada excluída com sucesso');
    }

}
