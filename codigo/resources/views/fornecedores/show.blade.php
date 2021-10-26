<h1>Página de consulta de Fornecedores</h1>
@foreach ($fornecedor as $fornecedores)
<ul>
    <li>Nome do forncedor: {{$fornecedor->nome}}</li>
    <li>Endereco do forncedor: {{$fornecedor->endereco}}</li>
    <li>Email do forncedor: {{$fornecedor->email}}</li>
</ul>
@endforeach