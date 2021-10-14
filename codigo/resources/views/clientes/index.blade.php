<h1>Pagina de Clientes</h1>
@foreach ($clientes as $cliente)
    <p>Nome do cliente: {{$cliente->nome}};
    Endereço do cliente: {{$cliente->endereco}};
    Débito do cliente: {{$cliente->debito}};
@endforeach