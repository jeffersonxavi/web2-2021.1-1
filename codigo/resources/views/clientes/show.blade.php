<h1>Página de consulta de Cliente</h1>
@foreach ($clientes as $cliente)
<ul>
    <li>Nome do cliente: {{$cliente->nome}}</li>
    <li>Endereco do cliente: {{$cliente->endereco}}</li>
    <li>Debito do cliente: {{$cliente->debito}}</li>
</ul>
@endforeach
