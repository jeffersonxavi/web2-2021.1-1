@extends('layouts.main')
@section('titulo','Cadastro de Entrada')
@section('conteudo')
<h4>Cadastro de Entrada</h4>
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
        <p><p><input  class="btn btn-secondary active" type="submit" value="Cadastrar"></p></p>
    </form>
</div>
@endsection('conteudo')