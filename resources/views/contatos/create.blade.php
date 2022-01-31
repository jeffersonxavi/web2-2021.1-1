@extends('layouts.main')
@section('titulo','Cadastro de contato')
@section('conteudo')
<h4>Cadastro de Contato</h4>
<div id="form">
    <form action="{{route('contato.store')}}" method="POST">
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
        <label for="">Telefone</label>
        <input type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" id="telefone">
        @error('telefone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><label for="">Instagram</label>
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram">
            @error('instagram')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><label for="">Telegram</label>
            <input type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" id="telegram">
            @error('telegram')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection