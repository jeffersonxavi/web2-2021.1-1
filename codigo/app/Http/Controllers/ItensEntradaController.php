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
        $itensentrada= new Itensentrada();
        $itensentrada->precocompra= $request->precocompra;
        $itensentrada->data= $request->quantidade;
        $itensentrada->id_itensentrada= $request->id_itensentrada;
        $itensentrada->id_produto= $request->id_produto;
        $itensentrada->save();
        return redirect('/itensentradas/index');
    }
}
