@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h4>Cadastro Itens Venda</h4>
<div id="form">
    <form action="{{route('itensvenda.store')}}" method="POST">
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
                <label for="">id_venda</label>
                <input type="text" class="form-control" placeholder="id_venda" name="id_venda" id="id_venda">
            </div>
            <div class="col">
                <label for="">id_produto</label>
                <input type="text" class="form-control" placeholder="id_produto" name="id_produto" id="id_produto">
            </div>
            <div class="col">
                <label for="">Preço da compra</label>
                <input type="text" class="form-control" placeholder="Preço" name="preco" id="preco">
            </div>
            <div class="col">
                <label for="">Quantidade</label>
                <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
            </div>
        </div>
        <p><input type="submit" value="cadastrar">
    </form>
</div>
@endsection('conteudo')