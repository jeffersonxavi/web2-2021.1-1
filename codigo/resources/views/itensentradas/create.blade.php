@extends('layouts.main')
@section('titulo','cadastro de itensentrada')
@section('conteudo')
<h4>Cadastro Itens Entrada</h4>
<form action="{{route('itensentrada.store')}}" method="POST">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <div class="row">
        <div class="col">
            <label for="">id_entrada</label>
            <input type="text" class="form-control" placeholder="id_entrada" name="id_entrada" id="id_entrada">
        </div>
        <div class="col">
            <label for="">id_produto</label>
            <input type="text" class="form-control" placeholder="id_produto" name="id_produto" id="id_produto">
        </div>
        <div class="col">
            <label for="">Preço da compra</label>
            <input type="text" class="form-control" placeholder="Preço" name="precocompra" id="precocompra">
        </div>
        <div class="col">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
        </div>
    </div>
    <p><input type="submit" value="cadastrar">
</form>
@endsection('conteudo')