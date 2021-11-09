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
        $itensvenda= new Itensvenda();
        $itensvenda->valortotal= $request->preco;
        $itensvenda->data= $request->quantidade;
        $itensvenda->id_itensvenda= $request->id_itensvenda;
        $itensvenda->id_produto= $request->id_produto;
        $itensvenda->save();
        return redirect('/itensvendas/index');
    }
}
