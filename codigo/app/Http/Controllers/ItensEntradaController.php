<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;

class ItensEntradaController extends Controller
{
    public function index(){
        $itensentradas = Itensentrada::all();

        return view('itensentrada.index', ['itensentrada'=>$itensentradas]); 
    }

    public function create($id){
        return view('itensentrada.create',['entrada_id'=>$id]); 
    }

    public function store(Request $request){
        $itensentrada= new Itensentrada();
        $itensentrada->precocompra= $request->precocompra;
        $itensentrada->data= $request->quantidade;
        $itensentrada->id_itensentrada= $request->id_itensentrada;
        $itensentrada->id_produto= $request->id_produto;
        $itensentrada->save();
        return redirect('/itensentrada/index');
    }
}
