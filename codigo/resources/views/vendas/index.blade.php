<h1>Listar venda</h1>
@foreach ($vendas as $venda)
<ul>
    <li>Nome do venda: {{$venda->data}};</li>
    <li>Endereço do venda: {{$venda->valortotal}};</li>
    <a href="edit/{{$venda->id}}">Editar</a>
    <form action="../vendas/{{$venda->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach