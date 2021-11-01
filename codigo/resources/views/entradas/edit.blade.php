<h1>Pagina de edição de entrada</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="{{route('entrada.update', [$entrada->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Data entrada</label>
        <input type="text" name="data" id="data" value="{{$entrada->data}}">
        <p><label for="">Valor total da entrada</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>