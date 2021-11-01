@extends('layouts.main')
@section('titulo','Cadastro de entradas')
@section('conteudo')
<div id="form">
    <form action="{{route('entrada.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Data entrada</label>
                <input type="date" class="form-control" placeholder="Data" name="data" id="data">
            </div>
            <div class="col">
                <label for="">Valor Total</label>
                <input type="text" class="form-control" placeholder="Valor Total" name="valortotal" id="valortotal">
            </div>
        </div>
        <p><input type="submit" value="cadastrar">
    </form>
</div>
@endsection('conteudo')