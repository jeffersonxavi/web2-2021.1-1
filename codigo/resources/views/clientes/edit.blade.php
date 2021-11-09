@extends('layouts.main')
@section('titulo','Editar Cliente')
@section('conteudo')
<h4>Editar Cliente</h4>
<div id="form">
    <form action="{{route('cliente.update', [$cliente->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome">Nome do cliente</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="{{$cliente->nome}}">

                <label for="endereco">Endereço do cliente</label>
                <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" value="{{$cliente->endereco}}">

                <label for="debito">Endereço do cliente</label>
                <input type="text" class="form-control" placeholder="Debito" name="debito" id="debito" value="{{$cliente->debito}}">
            </div>
        </div>
        <p><input type="submit" value="salvar">
    </form>
</div>
@endsection('conteudo')