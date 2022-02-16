<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Http\Requests\StoreMotorRequest;

class MotorController extends Controller
{
    //
    public function show(){
        $motors = Motor::all();
        echo $motors;
    }

    public function index(){
        $motors = Motor::all();
        return view('motors.index', ['motors'=>$motors]);
    }
    public function create(){
        return view('motors.create'); 
    }

    public function store(StoreMotorRequest $request)
    {
        $motor = new Motor();
        $motor->potencia = $request->potencia;
        $motor->save();

        return redirect('motors.index');
    }

    
    public function edit($id){
        $motor = Motor::findorFail($id);
        return view('motors.edit', ['motor'=>$motor]);
    }

    public function update(StoreMotorRequest $request){
        Motor::find($request->id)->update($request->except('_method'));
        return redirect('motors.index')->with('msg', 'motor atualizada');
    }
    
    public function destroy($id){
        Motor::findorFail($id)->delete();
        return redirect('motors.index')->with('msg', 'motor excluída com sucesso');
    }

}

