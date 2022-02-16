<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    //public function show(){
    //    $clientes = Cliente::all();
    //    echo $clientes;
    //}

    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->all());
        
        return redirect('/clientes/index');
    }

    public function edit($id)
    {
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(StoreClienteRequest $request)
    {
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/index')->with('msg', 'cliente atualizado');
    }

    public function destroy($id)
    {
        Cliente::findorFail($id)->delete();
        return redirect('clientes/index')->with('msg', 'cliente excluído com sucesso');
    }
}
