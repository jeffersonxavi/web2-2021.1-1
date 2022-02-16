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
            <input type="text" class="form-control @error('id_entrada') is-invalid @enderror" placeholder="id_entrada" name="id_entrada" id="id_entrada">
            @error('id_entrada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="col">
            <label for="">id_produto</label>
            <input type="text" class="form-control @error('id_produto') is-invalid @enderror" placeholder="id_produto" name="id_produto" id="id_produto">
            @error('id_produto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="col">
            <label for="">Preço da compra</label>
            <input type="text" class="form-control @error('precocompra') is-invalid @enderror" placeholder="Preço" name="precocompra" id="precocompra">
            @error('precocompra')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="col">
            <label for="">Quantidade</label>
            <input type="text" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade" name="quantidade" id="quantidade">
            @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
    </div>
    <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
</form>
@endsection('conteudo')