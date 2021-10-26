<h1>Pagina de edição de venda</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/{{$venda->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">valortotal</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
        <p><label for="">data</label>
        <input type="text" name="data" id="data" value="{{$venda->data}}">
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>