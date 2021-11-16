<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItensEntrada;

class ItensEntradaController extends Controller
{
    public function index(){
        $itensentradas = Itensentrada::all();

        return view('itensentradas.index', ['itensentradas'=>$itensentradas]); 
    }

    public function create(){
        return view('itensentradas.create'); 
    }

    public function store(Request $request){
        $request->validate([
            'precocompra' => 'required',
            'quantidade' => 'required',
        ]);
        $itensentrada= new Itensentrada();
        $itensentrada->precocompra= $request->precocompra;
        $itensentrada->quantidade= $request->quantidade;
        $itensentrada->id_entrada= $request->id_entrada;
        $itensentrada->id_produto= $request->id_produto;
        $itensentrada->save();
        return redirect('/itensentradas/index');
    }
}
