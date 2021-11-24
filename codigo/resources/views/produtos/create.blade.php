@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h4>Cadastro de Produto</h4>
<div id="form">
    <form action="{{route('produto.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Descrição</label>
                <input type="text" class="form-control @error('descricao') is-invalid @enderror" placeholder="Descrição" name="descricao" id="descricao">
                @error('descricao')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">Quantidade</label>
                <input type="text" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade" name="quantidade" id="quantidade">
                @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Valor</label>
                <input type="text" class="form-control @error('valor') is-invalid @enderror" placeholder="Valor" name="valor" id="valor">
                @error('valor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')