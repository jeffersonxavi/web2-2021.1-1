<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;

class ItensVendaController extends Controller
{
    public function index(){
        $itensvendas = Itensvenda::all();

        return view('itensvendas.index', ['itensvendas'=>$itensvendas]); 
    }

    public function create(){
        return view('itensvendas.create'); 
    }

    public function store(Request $request){
        $request->validate([
            'preco' => 'required',
            'quantidade' => 'required',
        ]);
        $itensvenda= new Itensvenda();
        $itensvenda->preco= $request->preco;
        $itensvenda->quantidade= $request->quantidade;
        $itensvenda->id_venda= $request->id_venda;
        $itensvenda->id_produto= $request->id_produto;
        $itensvenda->save();
        return redirect('/itensvendas/index');
    }
}
