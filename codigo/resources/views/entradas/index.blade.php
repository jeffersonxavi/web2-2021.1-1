<h1>Listar entradas</h1>
@foreach ($entradas as $entrada)
<ul>
    <li>Nome do entrada: {{$entrada->data}};</li>
    <li>Endereço do entrada: {{$entrada->valortotal}};</li>
    <a href="edit/{{$entrada->id}}">Editar</a>
    <form action="../entradas/{{$entrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach