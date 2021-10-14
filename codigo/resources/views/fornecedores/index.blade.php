<h1>Listar Fornecedores</h1>
@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nome}};</li>
    <li>Endereço do fornecedor: {{$fornecedor->endereco}};</li>
    <li>E-mail do fornecedor: {{$fornecedor->email}};</li>
</ul>
@endforeach