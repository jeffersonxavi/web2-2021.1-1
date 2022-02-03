<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormaPagamento;
use App\Http\Requests\StoreFormaPagamentoRequest;

class FormaPagamentoController extends Controller
{
    //
    public function show(){
        $formaPagamentos = FormaPagamento::all();
        echo $formaPagamentos;
    }

    public function index(){
        $formaPagamentos = FormaPagamento::all();
        return view('formaPagamentos.index', ['formaPagamentos'=>$formaPagamentos]);
    }
    public function create(){
        return view('formaPagamentos.create'); 
    }

    public function store(StoreFormaPagamentoRequest $request)
    {
        $formaPagamento = new FormaPagamento();
        $formaPagamento->condicao = $request->condicao;
        $formaPagamento->forma = $request->forma;
        $formaPagamento->save();

        return redirect('formaPagamentos.index');
    }

    
    public function edit($id){
        $formaPagamento = FormaPagamento::findorFail($id);
        return view('formaPagamentos.edit', ['formaPagamento'=>$formaPagamento]);
    }

    public function update(StoreFormaPagamentoRequest $request){
        FormaPagamento::find($request->id)->update($request->except('_method'));
        return redirect('formaPagamentos.index')->with('msg', 'formaPagamento atualizada');
    }
    
    public function destroy($id){
        FormaPagamento::findorFail($id)->delete();
        return redirect('formaPagamentos.index')->with('msg', 'formaPagamento excluída com sucesso');
    }

}

