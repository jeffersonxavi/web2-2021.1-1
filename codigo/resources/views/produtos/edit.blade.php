<h1>Pagina de edição de produto</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/{{$produto->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="{{$produto->valortotal}}">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$produto->valortotal}}">
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor" value="{{$produto->valortotal}}">
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>