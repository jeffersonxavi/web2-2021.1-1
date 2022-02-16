@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h2>Cadastro de Produto</h2>
<div id="form">
    <form action="{{route('produto.store')}}" method="POST">
        @csrf
        <div class="row">

            <div class="col">
                <label for="localizacao_id">LOCALIZAÇÃO</label>
                <select id="localizacao_id" name="localizacao_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($localizacoes as $localizacao)
                    <option value="{{ $localizacao->id}}">{{ $localizacao->departamento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="marca_id">MARCA</label>
                <select id="marca_id" name="marca_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca->id}}">{{ $marca->marca}}</option>
                    @endforeach
                </select>
            </div>
            <p>
            <div class="col">
                <label for="categoria_id">CATEGORIA</label>
                <select id="categoria_id" name="categoria_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id}}">{{ $categoria->categoria}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="fabricacao_id">FABRICAÇÃO</label>
                <select id="fabricacao_id" name="fabricacao_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($fabricacoes as $fabricacao)
                    <option value="{{ $fabricacao->id}}">{{ $fabricacao->ano}}</option>
                    @endforeach
                </select>
            </div>
            <p>
            <div class="col">
                <label for="valvula_id">VALVULA</label>
                <select id="valvula_id" name="valvula_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($valvulas as $valvula)
                    <option value="{{ $valvula->id}}">{{ $valvula->quantidade}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="carro_id">CARRO</label>
                <select id="carro_id" name="carro_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($carros as $carro)
                    <option value="{{ $carro->id}}">{{ $carro->modelo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="motor_id">MOTOR</label>
                <select id="motor_id" name="motor_id" required class="form-select">
                    <option value="" disabled selected>SELECIONE</option>
                    @foreach ($motors as $motor)
                    <option value="{{ $motor->id}}">{{ $motor->potencia}}</option>
                    @endforeach
                </select>
            </div>
            <p>
            <p>
            <div class="col">
                <label for="">REFERÊNCIA</label>
                <input type="text" class="form-control @error('referencia') is-invalid @enderror" placeholder="Referencia" name="referencia" id="referencia">
                @error('referencia')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">QUANTIDADE</label>
                <input type="text" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade" name="quantidade" id="quantidade">
                @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">VALOR</label>
                <input type="text" class="form-control @error('valor') is-invalid @enderror" placeholder="Valor" name="valor" id="valor">
                @error('valor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">UNIDADE</label>
                <input type="text" class="form-control @error('unidade') is-invalid @enderror" placeholder="Unidade" name="unidade" id="unidade">
                @error('unidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">DESCONTO</label>
                <input type="text" class="form-control @error('desconto') is-invalid @enderror" placeholder="Desconto" name="desconto" id="desconto">
                @error('desconto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">LUCRO</label>
                <input type="text" class="form-control @error('lucro') is-invalid @enderror" name="lucro" id="lucro">
                @error('lucro')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">FRETE</label>
                <input type="text" class="form-control @error('frete') is-invalid @enderror" name="frete" id="frete">
                @error('frete')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">IPI</label>
                <input type="text" class="form-control @error('ipi') is-invalid @enderror" name="ipi" id="ipi">
                @error('ipi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">ICMS</label>
                <input type="text" class="form-control @error('icms') is-invalid @enderror" name="icms" id="icms">
                @error('icms')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">VALO0R VENDA</label>
                <input type="text" class="form-control @error('valorvenda') is-invalid @enderror" name="valorvenda" id="valorvenda">
                @error('valorvenda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="col">
                <label for="">VALOR COMPRA</label>
                <input type="text" class="form-control @error('valordecompra') is-invalid @enderror" name="valordecompra" id="valordecompra">
                @error('valordecompra')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">VALOR FABRICA</label>
                <input type="text" class="form-control @error('valornafabrica') is-invalid @enderror" name="valornafabrica" id="valornafabrica">
                @error('valornafabrica')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')