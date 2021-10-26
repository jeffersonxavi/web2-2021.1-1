<h1>Listar Fornecedores</h1>
@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nome}};</li>
    <li>Endereço do fornecedor: {{$fornecedor->endereco}};</li>
    <li>E-mail do fornecedor: {{$fornecedor->email}};</li>
    <a href="edit/{{$fornecedor->id}}">Editar</a>
    <form action="../fornecedores/{{$fornecedor->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach