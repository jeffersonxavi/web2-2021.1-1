<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Http\Requests\StoreVendaRequest;

class VendaController extends Controller
{
    //
    public function show(){
        $vendas = Venda::all();
        echo $vendas;
    }

    public function index(){
        $vendas = Venda::all();
        return view('vendas.index', ['vendas'=>$vendas]);
    }
    public function create(){
        return view('vendas.create'); 
    }

    public function store(StoreVendaRequest $request)
    {
        $venda = new Venda();
        $venda->idcliente = $request->idcliente;
        $venda->valortotal= $request->valortotal;
        $venda->datavenda= $request->datavenda;
        $venda->idformapagamento= $request->idformapagamento;
        $venda->status= $request->status;

        
        $venda->save();

        return redirect('vendas.index');
    }

    
    public function edit($id){
        $venda = Venda::findorFail($id);
        return view('vendas.edit', ['venda'=>$venda]);
    }

    public function update(StoreVendaRequest $request){
        Venda::find($request->id)->update($request->except('_method'));
        return redirect('vendas.index')->with('msg', 'venda atualizada');
    }
    
    public function destroy($id){
        Venda::findorFail($id)->delete();
        return redirect('vendas.index')->with('msg', 'venda excluída com sucesso');
    }

}

