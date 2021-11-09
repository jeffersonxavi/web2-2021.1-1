<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index(){
        $vendas = Venda::all();

        return view('vendas.index', ['vendas'=>$vendas]); 
    }

    public function create(){
        return view('vendas.create'); 
    }

    public function store(Request $request){
        $venda= new Venda();
        $venda->valortotal= $request->valortotal;
        $venda->data= $request->data;
        $venda->id_venda= $request->id_venda;
        $venda->id_produto= $request->id_produto;
        $venda->save();
        return redirect('/vendas/index');
    }

    public function edit($id){
        $venda = Venda::findorFail($id);
        return view('vendas.edit', ['venda'=>$venda]);
    }

    public function update(Request $request){
        Venda::find($request->id)->update($request->except('_method'));
        return redirect('vendas/index')->with('msg', 'venda atualizada');
    }
    
    public function destroy($id){
        Venda::findorFail($id)->delete();
        return redirect('vendas/index')->with('msg', 'venda excluído com sucesso');
    }
}
