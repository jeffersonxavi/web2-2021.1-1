@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h4>Cadastro Itens Venda</h4>
<div id="form">
    <form action="{{route('itensvenda.store')}}" method="POST">
        @csrf
        <label for="preco">preco</label>
        <input type="text" name="preco" id="preco">
        <p><label for="quantidade">quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <p><input type="submit" value="cadastrar">    
    </form>
</div>
@endsection('conteudo')