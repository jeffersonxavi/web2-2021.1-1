<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required',
        ]);
        $produto = new Produto();
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->valor = $request->valor;
        $produto->save();
        return redirect('/produtos/index');
    }

    public function edit($id)
    {
        $produto = Produto::findorFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        Produto::find($request->id)->update($request->except('_method'));
        return redirect('produtos/index')->with('msg', 'produto atualizada');
    }

    public function destroy($id)
    {
        Produto::findorFail($id)->delete();
        return redirect('produtos/index')->with('msg', 'produto excluído com sucesso');
    }
}
