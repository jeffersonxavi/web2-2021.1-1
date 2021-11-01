<h1>Listar itensvendas</h1>
@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Nome do itensvenda: {{$itensvenda->preco}};</li>
    <li>Endereço do itensvenda: {{$itensvenda->quantidade}};</li>
    <a href="{{route('itensvenda.edit', [$itensvenda->id])}}">Editar</a>
    <form action="{{route('itensvenda.destroy', [$itensvenda->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach