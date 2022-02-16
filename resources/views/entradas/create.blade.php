@extends('layouts.main')
@section('titulo','Cadastro de Entrada')
@section('conteudo')
<h4>Cadastro de Entrada</h4>
<div id="form">
    <form action="{{route('entrada.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="fornecedor_id">FORNECEDOR</label>
                <select id="fornecedor_id" name="fornecedor_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id}}">{{ $fornecedor->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="">Data entrada</label>
                <input type="date" class="form-control @error('datacompra') is-invalid @enderror" placeholder="Data" name="datacompra" id="datacompra">
                @error('datacompra')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Valor Total</label>
                <input type="text" class="form-control @error('valortotal') is-invalid @enderror" placeholder="Valor Total" name="valortotal" id="valortotal">
                @error('valortotal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Status</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" placeholder="Status" name="status" id="status">
                @error('status')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
        </p>
    </form>
</div>
@endsection('conteudo')