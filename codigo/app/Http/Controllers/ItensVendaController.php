<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensVenda;

class ItensVendaController extends Controller
{
    public function index(){
        $itensvendas = Itensvenda::all();

        return view('itensvenda.index', ['itensvenda'=>$itensvendas]); 
    }

    public function create($id){
        return view('itensvenda.create',['venda_id'=>$id]); 
    }

    public function store(Request $request){
        $itensvenda= new Itensvenda();
        $itensvenda->valortotal= $request->preco;
        $itensvenda->data= $request->quantidade;
        $itensvenda->id_itensvenda= $request->id_itensvenda;
        $itensvenda->id_produto= $request->id_produto;
        $itensvenda->save();
        return redirect('/itensvenda/index');
    }
}
