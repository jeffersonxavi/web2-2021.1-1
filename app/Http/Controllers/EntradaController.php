<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Models\Fornecedor;
use App\Http\Requests\StoreEntradaRequest;

class EntradaController extends Controller
{
    //
    public function show()
    {
        $entradas = Entrada::all();
        echo $entradas;
    }

    public function index()
    {
        $entradas = Entrada::all();
        return view('entradas.index', ['entradas' => $entradas]);
    }
    public function create()
    {
        return view('entradas.create', [
            'fornecedores' => Fornecedor::all()
        ]);
    }

    public function store(StoreEntradaRequest $request)
    {
        $entrada = new Entrada();
        $entrada->fornecedor_id = $request->fornecedor_id;
        $entrada->valortotalnota = $request->valortotalnota;
        $entrada->datacompra = $request->datacompra;
        $entrada->status = $request->status;

        $entrada->save();

        return redirect('entradas/index');
    }


    public function edit($id)
    {
        $entrada = Entrada::findorFail($id);
        return view('entradas.edit', ['entrada' => $entrada]);
    }

    public function update(StoreEntradaRequest $request)
    {
        Entrada::find($request->id)->update($request->except('_method'));
        return redirect('entradas/index')->with('msg', 'entrada atualizada');
    }

    public function destroy($id)
    {
        Entrada::findorFail($id)->delete();
        return redirect('entradas/index')->with('msg', 'entrada excluída com sucesso');
    }
}
