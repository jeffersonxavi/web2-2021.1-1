<h1>Listar produtos</h1>
@foreach ($produtos as $produto)
<ul>
    <li>descricao do produto: {{$produto->descricao}};</li>
    <li>quantidade: {{$produto->quantidade}};</li>
    <li>valor do produto: {{$produto->valor}};</li>
    <a href="edit/{{$produto->id}}">Editar</a>
    <form action="../produtos/{{$produto->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach