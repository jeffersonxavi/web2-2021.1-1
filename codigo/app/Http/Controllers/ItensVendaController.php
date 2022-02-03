<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;
use App\Http\Requests\StoreItensVendaRequest;

class ItensVendaController extends Controller
{
    //
    public function show(){
        $itensvendas = ItensVenda::all();
        echo $itensvendas;
    }

    public function index(){
        $itensvendas = ItensVenda::all();
        return view('itensvendas.index', ['itensvendas'=>$itensvendas]);
    }
    public function create(){
        return view('itensvendas.create'); 
    }

    public function store(StoreItensVendaRequest $request)
    {
        $itensvenda = new ItensVenda();
        $itensvenda->idvenda = $request->idvenda;
        $itensvenda->quantidade= $request->quantidade;
        $itensvenda->idproduto = $request->idproduto;
        $itensvenda->valorvenda = $request->valorvenda;
        $itensvenda->desconto = $request->desconto;
        $itensvenda->lucro = $request->lucro;
        
        $itensvenda->save();

        return redirect('itensvendas.index');
    }

    
    public function edit($id){
        $itensvenda = ItensVenda::findorFail($id);
        return view('itensvendas.edit', ['itensvenda'=>$itensvenda]);
    }

    public function update(StoreItensVendaRequest $request){
        ItensVenda::find($request->id)->update($request->except('_method'));
        return redirect('itensvendas.index')->with('msg', 'itensvenda atualizada');
    }
    
    public function destroy($id){
        ItensVenda::findorFail($id)->delete();
        return redirect('itensvendas.index')->with('msg', 'itensvenda excluída com sucesso');
    }

}
